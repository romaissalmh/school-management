<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');

class userView
{

    public function __construct()
    {
    }

    public function add($data)
    { ?>
        <div>
          <div class="mx-16 mt-4">
            <a href="<?php echo SERVER_ROOT . '/admin/home' ?>">
                <svg class="h-10 w-10  text-primary-300 group-hover:text-primary-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"  d="M10 2.5V6h7v8h-7v3.5L2.5 10 10 2.5z" />
                </svg>
            </a></div>
            <div class="font-Montserrat max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="mt-5 md:mt-0 ">

                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 sm:px-6">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Users management
                                </h3>
                            </div>
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid lg:grid-cols-5 gap-6 md:grid-cols-1 xl:grid-cols-5">
                                    <div>
                                        <label for="firstname" class="block text-sm font-medium text-gray-700">
                                            First name
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="firstname" id="firstname" required class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Romaissa">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="lastname" class="block text-sm font-medium text-gray-700">
                                            Last name
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="lastname" id="lastname" required class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Kessi">
                                        </div>
                                    </div>


                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700">
                                            Email
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="email" name="email" id="email" required class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="email@gmail.com">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="password" class="block text-sm font-medium text-gray-700">
                                            Password
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="password" name="password" id="password" required class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Password">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="birthdate" class="block text-sm font-medium text-gray-700">
                                            Date of birth
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="date" name="birthdate" id="birthdate" required class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="email@gmail.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid lg:grid-cols-4 gap-6 md:grid-cols-1 xl:grid-cols-5">


                                    <div>
                                        <label for="adress" class="block text-sm font-medium text-gray-700">
                                            Address
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="adress" id="adress" required class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Boulevard 11 Decembre -El Biar-">
                                        </div>
                                    </div>


                                    <div>
                                        <label for="phonenumber1" class="block text-sm font-medium text-gray-700">
                                            Phone number 1
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="tel" name="phonenumber1" id="phonenumber1" required class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="0549872685">
                                        </div>
                                    </div>

                                    <div>
                                        <label for="phonenumber2" class="block text-sm font-medium text-gray-700">
                                            Phone number 2
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="tel" name="phonenumber2" id="phonenumber2" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="0598787458">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="phonenumber3" class="block text-sm font-medium text-gray-700">
                                            Phone number 3
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="tel" name="phonenumber3" id="phonenumber3" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="0598787458">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="role" class="block text-sm font-medium text-gray-700">
                                            Role
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select id="role" name="role" class="block w-full focus:ring-primary-200 focus:border-primary-200 border-gray-300 bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                <option value="admin">Admin</option>
                                                <option value="parent">Parent</option>
                                                <option value="teacher">Teacher</option>
                                                <option value="student">student</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-300 hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-200">
                                    Add user
                                </button>
                            </div>
                        </div>
                    </form>


                </div>




                <!-- Table displaying users -->

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
                                            <span class="sr-only">Delete</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php

                                    foreach ($data['users'] as $user) :
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
                                    <form action="' . SERVER_ROOT . '/admin/users/' . $user["id"] . '" method="GET">

                                        <button href="#" class="text-primary-300 hover:text-primary-200 hover:underline">Delete</button>
                                        </form>
                                        </td>
                                    
                                </tr>';
                                    endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>


<?php
    }

    public function index($data)
    {
    }
}


?>