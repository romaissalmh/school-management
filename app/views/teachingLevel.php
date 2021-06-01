<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');
require_once(ROOT . 'controllers/Edts.php');

class teachingLevel
{
    public function __construct()
    {
        $this->tpl = new Template(ROOT . 'views/shared/');
    }

    public function displayFirstPage($data)
    {
?>
        <div class=" font-Montserrat m-2">
            <?php print $this->tpl->render('barre');
            print $this->tpl->render('menu');
            ?>
            <main class=" mx-4 z-0">

                <div class="my-6 grid lg:grid-cols-4 gap-10">
                    <?php
                    $menu = [
                        'cat1' => array('title' => 'Timetables', 'image_url' => SERVER_ROOT . '/img/gestionEDT.jpg', 'link' => '/app/level/' . $data["id"] . '/edt'),
                        'cat2' => array('title' => "Teachers details", 'image_url' => SERVER_ROOT . '/img/gestionDesEns.jpg', 'link' => '/app/level/' . $data["id"]  . '/teachers'),
                        'cat3' => array('title' => 'Useful information', 'image_url' => SERVER_ROOT . '/img/gestionPres.jpg', 'link' => '/app/level/' . $data["id"]  . '/practicalinfos'),
                        'cat4' => array('title' => 'Catering - Week meals -', 'image_url' => SERVER_ROOT . '/img/gestionDeRest.jpg', 'link' => '/app/level/' . $data["id"]  . '/catering'),
                    ];
                    foreach ($menu as $d) :
                        print $this->tpl->render('cadre', array(
                            'image_url' => $d['image_url'],
                            'title' => $d['title'],
                            'description' => '',
                            'button' => 'Choose',
                            'link' =>  $d['link'],

                        ));
                    endforeach;
                    ?>

                </div>
                <div class="mt-8 grid lg:grid-cols-4 gap-10">
                        <?php
                        foreach ($data['articles'] as $article) :
                            print $this->tpl->render('cadre', array(
                                'image_url' => $article['image_url'],
                                'title' => $article['title'],
                                'description' => $article['description'],
                                'button' => 'Load More',
                                'link' =>  SERVER_ROOT. '/home/articles/'. $article['id'], 
                            ));
                            
                        endforeach;
                        ?>
                    </div>

            </main>
            <div>


                <?php
                print $this->tpl->render('basDePage'); ?>


            </div>
        <?php

    }


    public function displayEdt($id)
    {
        ?>
            <div class=" font-Montserrat   m-2">
                <?php print $this->tpl->render('barre');
                print $this->tpl->render('menu');
                ?>
                <main class="  z-0">

                    <?php
                    $ctrEdt = new Edts();
                    $ctrEdt->getEdtByLevel($id);

                    ?>
                </main>
                <div>


                    <?php
                    print $this->tpl->render('basDePage'); ?>


                </div>
            <?php

        }


        public function displayRestauration($data)
        {
            ?>
                <div class=" font-Montserrat   m-2">
                    <?php print $this->tpl->render('barre');
                    print $this->tpl->render('menu');
                    ?>
                    <main class="  z-0">

                        <div class="bg-white shadow overflow-hidden sm:rounded-lg my-8 mx-8">
                            <div class="px-4 py-5 sm:px-6 ">

                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Menu of the week
                                </h3>


                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Sunday
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <?php if (!empty($data->sunday)) echo $data->sunday;
                                            if (empty($data->sunday)) echo ''; ?>
                                        </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Monday
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <?php if (!empty($data->monday)) echo $data->monday;
                                            if (empty($data->monday)) echo ''; ?>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Tuesday
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <?php if (!empty($data->tuesday)) echo $data->tuesday;
                                            if (empty($data->tuesday)) echo ''; ?>
                                        </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Wednesday
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <?php if (!empty($data->wednesday)) echo $data->wednesday;
                                            if (empty($data->wednesday)) echo ''; ?>
                                        </dd>
                                    </div>
                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            Thursday
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <?php if (!empty($data->thursday)) echo $data->thursday;
                                            if (empty($data->thursday)) echo ''; ?>
                                        </dd>
                                    </div>


                                </dl>
                            </div>
                        </div>
                    </main>
                    <div>


                        <?php
                        print $this->tpl->render('basDePage'); ?>


                    </div>
                <?php

            }

            public function displayTeachers($data)
            {
                ?>
                    <div class=" font-Montserrat   m-2">
                        <?php print $this->tpl->render('barre');
                        print $this->tpl->render('menu');
                        ?>
                        <main class="  z-0">
                            <div class="px-4 py-5 sm:px-6 sm:mx-6 lg:mx-8">
                                <div class="">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        List of teachers
                                    </h3>

                                </div>

                            </div>
                            <div class="my-2 overflow-x-auto sm:mx-6 lg:mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Family name
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        First name
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Reception Hours
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                <?php

                                                foreach ($data as $user) :
                                                    echo '
                                <tr>
                                   
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">' . $user["family_name"] . '</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">' . $user["first_name"] . '</div>
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-base leading-5 font-semibold rounded-full bg-secondary-100 text-primary-300">
                                        ' . $user["heure_reception"] . '
                                        </span>

                                    </td>
                                    
                                    
                                </tr>';
                                                endforeach; ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </main>
                        <div>


                            <?php
                            print $this->tpl->render('basDePage'); ?>


                        </div>
                <?php

            }
        }


        require_once(ROOT . 'views/shared/footer.php');
