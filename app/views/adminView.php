<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');

class adminView
{
    public function __construct()
    {
    }

    public function login($data)
    { ?>
        <div class=" font-Montserrat min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 ">
            <div class="max-w-md w-full space-y-8">
                <div>
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Sign in to your account
                    </h2>
                </div>
                <form class="mt-8 space-y-6" action="<?php echo SERVER_ROOT; ?>/admin/login" method="POST">

                    <input type="hidden" name="remember" value="true">
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="email" type="email" value="<?php echo $data['email']; ?>" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-primary-300 focus:border-primary-300 focus:z-10 sm:text-sm" placeholder="Email address">
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" value="<?php echo $data['password']; ?>" autocomplete="current-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-primary-300 focus:border-primary-300 focus:z-10 sm:text-sm" placeholder="Password">
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
                                <!-- Heroicon name: solid/lock-closed -->
                                <svg class="h-5 w-5 text-secondary-200 group-hover:text-secondary-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <?php
    }

    public function index($data)
    { ?>

        <!-- Table displaying users -->
        <div class=" font-Montserrat flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
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
                                        Adress
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Phone number
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Role
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Jane Cooper
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    jane.cooper@example.com
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">10/11/1999</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Tizi Ouzou</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        0598787898
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Admin
                                        </span>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php
    }

    public function menu(){
//calling the cadre template
        $tpl = new Template(ROOT . 'views/shared/'); ?>
      <div class=" font-Montserrat  min-h-screen flex items-center justify-center bg-gray-50 py-6 px-4 sm:px-6 lg:px-8 ">
        <div class=" grid lg:grid-cols-4 gap-10">
            <?php 
            $data =[
                'cat1'=> array('title' => 'Articles management', 'image_url' => SERVER_ROOT.'/img/gestionDesArticles.jpg','link'=> '/app/admin/articles'   ) ,
                'cat2'=> array('title' => "School presentation management", 'image_url' =>SERVER_ROOT.'/img/gestionPres.jpg' ,'link'=> '/app/admin/school'  ) ,
                'cat3'=> array('title' => 'Timetables management', 'image_url' => SERVER_ROOT.'/img/gestionEDT.jpg' ,'link'=> '/app/admin/edt' ) ,
                'cat4'=> array('title' => 'Teachers Management', 'image_url' => SERVER_ROOT.'/img/gestionDesEns.jpg' ,'link'=> '/app/admin/teachers'  ) ,
                'cat5'=> array('title' => 'Users Management', 'image_url' =>SERVER_ROOT.'/img/gestionDesUsers.PNG'  ,'link'=> '/app/admin/users' ) ,
                'cat6'=> array('title' => 'Catering management', 'image_url' => SERVER_ROOT.'/img/gestionDeRest.jpg'  ,'link'=> '/app/admin/meals'  ) ,
                'cat7'=> array('title' => 'Contact page management', 'image_url' => SERVER_ROOT.'/img/gestionDeContact.PNG' ,'link'=> '/app/admin/contacts'  ) ,
                'cat8'=> array('title' => 'Settings', 'image_url' =>SERVER_ROOT.'/img/params.PNG','link'=> '/app/admin/settings'    ) ,
 //gestionDesEns gestionDesUsers gestionDeRest params gestionDeContact gestionDesArticles  gestionEDT gestionPres
            ];
            foreach ($data as $d) :
                print $tpl->render('cadre', array(
                    'image_url' => $d['image_url'],
                    'title' => $d['title'],
                   'description' => '',
                   'button' => 'Choose',
                    'link' =>  $d['link'],

                ));
            endforeach;
            ?>
            </div>
            </div>  <?php
    }
    
}


require_once(ROOT . 'views/shared/footer.php');
