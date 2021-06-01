<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');
require_once(ROOT . 'controllers/Students.php');

class studentView
{
    public function __construct()
    {
        $this->tpl = new Template(ROOT . 'views/shared/');
    }
    public function displayFirstPage($data)
    {
?>
        <div class=" font-Montserrat  m-2">
            <?php print $this->tpl->render('barre');
            print $this->tpl->render('menu');
            $this->login($data);
            ?>
            <main class="z-0">
                <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

                    <div class="mt-8 grid lg:grid-cols-4 gap-10">
                        <?php
                        foreach ($data['articles'] as $article) :
                            print $this->tpl->render('cadre', array(
                                'image_url' => $article['image_url'],
                                'title' => $article['title'],
                                'description' => $article['description'],
                                'button' => 'Load More',
                            ));
                        endforeach;
                        ?>
                    </div>
                    <div>

            </main>
            <?php
            print $this->tpl->render('basDePage'); ?>


        </div>
        <script src="<?php echo SERVER_ROOT ?>/script.js" type="text/javascript"> </script>


    <?php
    }


    public function login($data)
    { ?>
        <div class=" min-h-screen flex items-center justify-center -my-24 ">
            <div class="px-20 py-8 card">
                <div class="max-w-lg w-full space-y-8  ">
                    <div>
                        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                            Sign in to your account
                        </h2>
                    </div>
                    <form class="mt-8 space-y-6" action="<?php echo SERVER_ROOT; ?>/student" method="POST">

                        <input type="hidden" name="remember" value="true">
                        <div class="rounded-md shadow-sm -space-y-px">
                            <div>
                                <label for="email-address" class="sr-only">Email address</label>
                                <input id="email-address" name="email" type="email" value="<?php !empty($data['email']) ?  $data['email'] : '' ?>" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-primary-300 focus:border-primary-300 focus:z-10 sm:text-sm" placeholder="Email address">
                            </div>
                            <div>
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" name="password" type="password" value="<?php !empty($data['email']) ?  $data['email'] : '' ?>" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-primary-300 focus:border-primary-300 focus:z-10 sm:text-sm" placeholder="Password">
                            </div>

                        </div>
                        <span class="flex items-center tracking-wide text-red-500 mt-1 ml-1">
                            <?php
                            if (!empty($data['email_err'])) {
                                echo $data['email_err'];
                            } ?>

                        </span>
                        <div class="flex justify-end ">


                            <div class="text-sm">
                                <a href="#" class="font-medium text-primary-300 hover:text-primary-100">
                                    Forgot your password?
                                </a>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn w-full border border-transparent focus:ring-primary-300 bg-primary-300 hover:bg-primary-200">
                                <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                    <svg class="h-5 w-5 text-secondary-200 group-hover:text-secondary-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php
    }
    public function displayhome($id)
    {
    ?>
        <!-- component -->
        <script src="http://localhost/app/script.js" type="text/javascript"> </script>

        <div onload="open = false" class=" h-3/4 max-h-full md:flex flex-col md:flex-row md:min-h-screen w-full">
            <div class="bg-primary-300 flex flex-col w-full md:w-64 text-gray-700 dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0" x-data="{ open: false }">
                <div class="flex-shrink-0 px-8 py-4 flex flex-row items-center justify-between">
                    <a href="<?php echo SERVER_ROOT . '/student/logout' ?>" class="rounded-lg focus:outline-none focus:shadow-outline">
                        <span class="text-white font-medium">Logout</span> <svg class="text-white h-8 w-8   " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2.5V6h7v8h-7v3.5L2.5 10 10 2.5z" />
                        </svg>


                    </a>

                </div>
                <nav :class="{'block': open, 'hidden': !open}" class="nav-bar flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
                    <a onclick="profile()" id="profileLink" class="block   px-4 py-2 mt-2 text-sm font-semibold text-white   rounded-lg hover:text-primary-300 focus:text-primary-300 hover:bg-secondary-100 focus:bg-secondary-100 focus:outline-none focus:shadow-outline" href="#">Profile</a>
                    <a onclick="timeTable()" id="timetableLink" class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg hover:text-primary-300 focus:text-primary-300 hover:bg-secondary-100 focus:bg-secondary-100 focus:outline-none focus:shadow-outline" href="#">Timetable</a>
                    <a onclick="marks()" id="markLink" class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg hover:text-primary-300 focus:text-primary-300 hover:bg-secondary-100 focus:bg-secondary-100 focus:outline-none focus:shadow-outline" href="#">Marks</a>
                    <a onclick="activities()" id="activityLink" class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-transparent rounded-lg hover:text-primary-300 focus:text-primary-300 hover:bg-secondary-100 focus:bg-secondary-100 focus:outline-none focus:shadow-outline" href="#">Extra activities</a>

                </nav>
            </div>
            <div id="profile" class=" bg-white shadow  sm:rounded-lg my-8 mx-8 w-full">
                <?php
                $ctrStudent = new Students();
                $ctrStudent->profile($id);
                ?>
            </div>

            <div id="timetable" class="hidden bg-white shadow  sm:rounded-lg mt-8 mx-8 max-w-5xl overflow-hidden">
                <?php
                $ctrStudent = new Students();
                $ctrStudent->timeTable($id);
                ?>
            </div>

            <div id="marks" class="hidden bg-white shadow  sm:rounded-lg my-8 mx-8 w-full ">
                <?php
                $ctrStudent = new Students();
                $ctrStudent->marks($id);
                ?>
            </div>

            <div id="activities" class="hidden bg-white shadow  sm:rounded-lg my-8 mx-8 w-full ">
                <?php
                $ctrStudent = new Students();
                $ctrStudent->activities($id);
                ?>
            </div>

        </div>

    <?php
    }
    public function profile($data)
    {
    ?>
        <div class="px-4 py-5 sm:px-6 ">
            <div class="">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Personal infos
                </h3>

            </div>

        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Name
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <div class="text-sm font-medium text-gray-900">
                            <?php echo $data->family_name . ' ' . $data->first_name ?>
                        </div>

                        <div class="text-sm text-gray-500">
                            <?php echo $data->email ?>
                        </div>

                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Data of birth
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $data->dateOfBirth ?>
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Class
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo
                        'Classe  ' . $data->grade . ' Groupe  ' . $data->groupNum .  ' Niveau  ' . $data->level
                        ?>
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Address
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $data->address;
                        ?>
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Phone number
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <div class="text-sm font-medium text-gray-900">
                            <?php echo $data->phonenumber1 ?>
                        </div>

                        <div class="text-sm text-gray-500">
                            <?php echo $data->phonenumber2 ?>
                        </div>
                        <div class="text-sm text-gray-500">
                            <?php echo $data->phonenumber3 ?>
                        </div>
                    </dd>
                </div>


            </dl>
        </div>

    <?php
    }
    public function timeTable($data)
    {
        //display the student's edt !!!
    ?>
        <div class="px-4 py-5 sm:px-6 ">
            <div class="">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Timetable :
                </h3>

            </div>

        </div>
        <div class="border-t border-gray-200">

            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class=" min-w-full divide-y divide-gray-200">

                            <?php print $this->tpl->render('headTable');   ?>
                            <tbody class="bg-white divide-y divide-gray-200">

                                <tr>
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs  text-gray-500 uppercase tracking-wider">
                                        <div class="mt-1 relative my-4">
                                            Sunday
                                        </div>
                                    </th>
                                    <?php
                                    foreach ($data["Dimanche"] as $day) : ?>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="mt-1 relative my-4">
                                                <?php
                                                echo  $day["name"]
                                                ?>

                                            </div>
                                            <div class="mt-1 relative my-4">
                                                <?php
                                                echo $day["family_name"] . ' ' . $day["first_name"]
                                                ?>


                                            </div>
                                        </td>
                                    <?php endforeach;
                                    ?>
                                </tr>

                                <tr>
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs   text-gray-500 uppercase tracking-wider">
                                        <div class="mt-1 relative my-4">
                                            Monday
                                        </div>
                                    </th>
                                    <?php
                                    foreach ($data["Lundi"] as $day) : ?>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="mt-1 relative my-4">
                                                <?php
                                                echo  $day["name"]
                                                ?>

                                            </div>
                                            <div class="mt-1 relative my-4">
                                                <?php
                                                echo $day["family_name"] . ' ' . $day["first_name"]
                                                ?>

                                            </div>
                                        </td>
                                    <?php endforeach;
                                    ?>
                                </tr>

                                <tr>
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs   text-gray-500 uppercase tracking-wider">
                                        <div class="mt-1 relative my-4">
                                            Tuesday
                                        </div>
                                    </th>
                                    <?php
                                    foreach ($data["Mardi"] as $day) : ?>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="mt-1 relative my-4">
                                                <?php
                                                echo  $day["name"]
                                                ?>
                                            </div>
                                            <div class="mt-1 relative my-4">

                                                <?php
                                                echo $day["family_name"] . ' ' . $day["first_name"]
                                                ?>

                                            </div>
                                        </td>
                                    <?php endforeach;
                                    ?>
                                </tr>
                                <tr>
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs text-gray-500 uppercase tracking-wider">
                                        <div class="mt-1 relative my-4">
                                            Wednesday
                                        </div>
                                    </th>
                                    <?php
                                    foreach ($data["Mercredi"] as $day) : ?>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="mt-1 relative my-4">
                                                <?php
                                                echo  $day["name"]
                                                ?>
                                            </div>
                                            <div class="mt-1 relative my-4">
                                                <?php
                                                echo $day["family_name"] . ' ' . $day["first_name"]
                                                ?>

                                            </div>
                                        </td>
                                    <?php endforeach;
                                    ?>
                                </tr>
                                <tr>
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs  text-gray-500 uppercase tracking-wider">
                                        <div class="mt-1 relative my-4">
                                            Thursday
                                        </div>
                                    </th>
                                    <?php
                                    foreach ($data["Jeudi"] as $day) : ?>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="mt-1 relative my-4">

                                                <?php
                                                echo  $day["name"]
                                                ?>
                                            </div>
                                            <div class="mt-1 relative my-4">
                                                <?php
                                                echo $day["family_name"] . ' ' . $day["first_name"]
                                                ?>

                                            </div>
                                        </td>
                                    <?php endforeach;
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <?php
    }

    public function Marks($data)
    {
    ?>
        <div class="px-4 py-5 sm:px-6 ">
            <div class="">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Marks :
                </h3>

            </div>

        </div>
        <div class="border-t border-gray-200">
            <div class=" sm:-mx-6 lg:-mx-8">
                <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class=" shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class=" w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Subject
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mark
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php
                                console_log($data);
                                foreach ($data as $mark) :
                                    echo '
                                <tr>
                                   
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">' . $mark["name"] . '</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">' . $mark["mark"] . '/20' . '</div>
                                    </td>
                                   
                                  
                                    
                                </tr>';
                                endforeach; ?>



                            </tbody>
                        </table>



                    </div>

                </div>
            </div>
        </div>


    <?php
    }
    public function Activities($data)
    {
    ?>
        <div class="px-4 py-5 sm:px-6 ">
            <div class="">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Extra Activities :
                </h3>

            </div>

        </div>
        <div class="border-t border-gray-200">

            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                        <table class=" w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Activity
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Type
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php
                                console_log($data);
                                foreach ($data as $activity) :
                                    echo '
                                <tr>
                                   
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">' . $activity["activity_desc"] . '</div>
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">' . $activity["type"] . '</div>
                                    </td>
                                   
                                  
                                    
                                </tr>';
                                endforeach; ?>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>



    <?php
    }
}
