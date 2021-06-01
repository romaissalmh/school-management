<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');

class edtView
{

    public function __construct()
    {
        $this->tpl = new Template(ROOT . 'views/shared/');
    }




    public function addEdt($data)
    {

        console_log($data); ?>
        <div class="font-Montserrat  md:max-w-8xl  mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-col">
            <div class="">
                <a href="<?php echo SERVER_ROOT . '/admin/home' ?>">
                    <svg class="h-10 w-10  text-primary-300 group-hover:text-primary-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2.5V6h7v8h-7v3.5L2.5 10 10 2.5z" />
                    </svg>
                </a>
            </div>
            <div>
                <h2 class="mt-6 text-xl my-2 font-bold text-gray-900">
                    Add new Timetable :
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="<?php echo SERVER_ROOT; ?>/admin/edt" method="POST">

                <div class="mt-1 relative my-4 ">
                    <select id="class" name="class" class="h-10 shadow overflow-hidden focus:ring-primary-200 focus:border-primary-200  py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                        <?php
                        foreach ($data['classes'] as $classe) :
                            echo '<option value="' . $classe['id'] . '" > Class ' . $classe['grade'] . ' Group  ' . $classe['groupNum'] .  ' Level ' . $classe['name'] . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>

                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <?php print $this->tpl->render('headTable');   ?>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <!-- for each weekday -->
                                        <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="mt-1 relative my-4">
                                                <select id="weekday" name="weekday" class=" shadow overflow-hidden focus:ring-primary-200 focus:border-primary-200  py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                    <option value="Sunday">Sunday</option>
                                                    <option value="Monday">Monday</option>
                                                    <option value="Tuesday">Tuesday</option>
                                                    <option value="Wednesday">Wednesday</option>
                                                    <option value="Thursday">Thursday</option>
                                                </select>
                                            </div>
                                        </th>
                                        <?php  // gonna do this for each day of the week
                                        print $this->tpl->render('bodyTable', array(
                                            'data' => $data,
                                            'lesson' => '1',
                                        ));
                                        ?>
                                        <?php  // gonna do this for each day of the week
                                        print $this->tpl->render('bodyTable', array(
                                            'data' => $data,
                                            'lesson' => '2',

                                        ));
                                        ?>
                                        <?php  // gonna do this for each day of the week
                                        print $this->tpl->render('bodyTable', array(
                                            'data' => $data,
                                            'lesson' => '3',

                                        ));
                                        ?>
                                        <?php  // gonna do this for each day of the week
                                        print $this->tpl->render('bodyTable', array(
                                            'data' => $data,
                                            'lesson' => '4',

                                        ));
                                        ?>
                                        <?php  // gonna do this for each day of the week
                                        print $this->tpl->render('bodyTable', array(
                                            'data' => $data,
                                            'lesson' => '5',

                                        ));
                                        ?>
                                        <?php  // gonna do this for each day of the week
                                        print $this->tpl->render('bodyTable', array(
                                            'data' => $data,
                                            'lesson' => '6',
                                        ));
                                        ?>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="btn my-4 w-1/4 border border-transparent focus:ring-primary-300 bg-primary-300 hover:bg-primary-200">
                        Add weekday planning
                    </button>
                </div>
            </form>
        </div>

    <?php

    }


    public function displayEdt($data)
    {
    ?>

        <div class="font-Montserrat md:max-w-8xl mx-auto py-6 px-4 sm:px-6  lg:px-8 flex flex-col">
            <div>
                <h2 class="mt-6 text-xl my-2 font-bold text-gray-900">
                    Timetable :
                </h2>
            </div>

            <div class="mt-1 relative my-4 ">
                <form action="" method="POST" class="grid justify-items-center">
                    <select id="class" name="class" class="h-10 shadow overflow-hidden focus:ring-primary-200 focus:border-primary-200 py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                        <?php
                        foreach ($data['classes'] as $classe) :
                            console_log($classe);
                            echo '<option value="' . $classe['id'] . '"> Class ' . $classe['grade'] . ' Group ' . $classe['groupNum'] .  ' Level ' . $classe['name'] . '</option>';
                        endforeach;
                        ?>
                    </select>
                    <div class="">
                        <button type="submit" class="btn my-4  border border-transparent focus:ring-primary-300 bg-primary-300 hover:bg-primary-200">
                            Display timetable
                        </button>
                    </div>
                </form>
            </div>

            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">

                            <?php print $this->tpl->render('headTable');   ?>
                            <tbody class="bg-white divide-y divide-gray-200">

                                <tr>
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
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
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
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
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
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
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
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
                                    <th scope="col" class="bg-gray-50 px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
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
        </div>
<?php
    }
}
