<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');

class teacherView
{

    public function __construct()
    {
        $this->tpl = new Template(ROOT . 'views/shared/');
    }

    public function userDetails($data)
    { ?>

        <div class="font-Montserrat max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="mb-4">
                <a href="<?php echo SERVER_ROOT . '/admin/teachers' ?>">
                    <svg class="h-10 w-10  text-primary-300 group-hover:text-primary-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2.5V6h7v8h-7v3.5L2.5 10 10 2.5z" />
                    </svg>
                </a>
            </div>
            <div class="mt-5 md:mt-0 ">
                <form action="<?php echo SERVER_ROOT . '/admin/teachers/details/' . $data["teacher"]->id ?>" method="POST">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Teachers management
                            </h3>
                        </div>
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid lg:grid-cols-3 gap-6 md:grid-cols-1 xl:grid-cols-3">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">
                                        Name
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input disabled="disabled" value=" <?php echo $data["teacher"]->family_name . ' ' . $data["teacher"]->first_name ?>" type="text" name="name" id="name" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="">
                                    </div>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">
                                        Email
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input value=" <?php echo $data["teacher"]->email ?>" disabled="disabled" type="email" name="email" id="email" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="">
                                    </div>
                                </div>

                                <div>
                                    <label for="heureRec" class="block text-sm font-medium text-gray-700">
                                        Reception hour
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input value="<?php echo $data["teacher"]->heure_reception ?>" type="time" name="heureRec" id="heureRec" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-300 hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-200">
                                Edit details
                            </button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- Display the teacher's classes-->
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Hours
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Weekday
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Subject
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Class
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php

                            foreach ($data["classes"] as $day) :
                                echo '
    <tr>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center">
                <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    ' . $day["starting_hour"] . '-'  . $day["finishing_hour"] . '
                    </div>
                </div>
            </div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900"> ' . $day["weekday"] . '</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900"> ' . $day["subject"] . '</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900"> Class: ' . $day["grade"] . ' Group: ' . $day["groupNum"] . ' Level: ' . $day["level"] . '</div>
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
    public function index($data)
    { ?>
        <!-- Table displaying teacher -->
        <div class="mx-16 mt-4">
            <a href="<?php echo SERVER_ROOT . '/admin/home' ?>">
                <svg class="h-10 w-10  text-primary-300 group-hover:text-primary-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2.5V6h7v8h-7v3.5L2.5 10 10 2.5z" />
                </svg>
            </a>
        </div>
        <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date of birth
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Address
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Phone number 1
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Phone number 2
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Details</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php

                            foreach ($data as $user) :
                                echo '
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                ' . $user["family_name"] . '  ' . $user["first_name"] . '
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    ' . $user["email"] . '
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">' . $user["dateOfBirth"] . '</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">' . $user["address"] . '</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    ' . $user["phonenumber1"] . '
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                    ' . $user["phonenumber2"] . '
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-secondary-100 text-primary-300">
                                        ' . $user["role"] . '
                                        </span>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <form action="' . SERVER_ROOT . '/admin/teachers/details/' . $user["id"] . '" method="get">

                                        <button href="#" class="border-none text-primary-300 hover:text-primary-200 hover:underline">Details</button>
                                        </form>
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


?>