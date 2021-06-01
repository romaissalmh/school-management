<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');

class contactView
{

    public function __construct()
    {
    }

    public function add($data)
    { ?>
        <div>
        <div class="mx-4 m-4">
                <a href="<?php echo SERVER_ROOT . '/admin/home' ?>">
                    <svg class="h-10 w-10  text-primary-300 group-hover:text-primary-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2.5V6h7v8h-7v3.5L2.5 10 10 2.5z" />
                    </svg>
                </a>
            </div>
            <div class="font-Montserrat max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
           
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6 grid grid-cols-2">
                            <div class="">
                                <h3 class="text-lg leading-6 font-medium text-gray-900">
                                    Contact infos
                                </h3>
                                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                    You can edit on place...
                                </p>
                            </div>
                            <div class="flex justify-self-end">
                                <button type="submit" class="inline-flex justify-center text-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-300 hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-200">
                                    Edit infos
                                </button>
                            </div>
                        </div>
                        <div class="border-t border-gray-200">
                            <dl>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <input type="email" value="<?php if (!empty($data["infos"]->email)) echo $data["infos"]->email;
                                                                    if (empty($data["infos"]->email)) echo ''; ?>" name="email" id="email" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Phonenumber
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <input type="tel" value="<?php if (!empty($data["infos"]->phonenumber)) echo $data["infos"]->phonenumber;
                                                                    if (empty($data["infos"]->phonenumber)) echo ''; ?>" name="phone" id="phone" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                                    </dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Fax
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <input type="tel" value="<?php if (!empty($data["infos"]->fax)) echo $data["infos"]->fax;
                                                                    if (empty($data["infos"]->fax)) echo ''; ?>" name="fax" id="fax" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                                    </dd>
                                </div>
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Address
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                        <input type="text" value="<?php if (!empty($data["infos"]->adress)) echo $data["infos"]->adress;
                                                                    if (empty($data["infos"]->adress)) echo ''; ?>" name="adress" id="adress" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                                    </dd>
                                </div>


                            </dl>
                        </div>
                    </div>
                </form>
            </div>



        </div>



    <?php
    }

    public function index($data)
    {
        $tpl = new Template(ROOT . 'views/shared/');
        print $tpl->render('barre');
        print $tpl->render('menu');

    ?>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg my-8 mx-8">
            <div class="px-4 py-5 sm:px-6 ">

                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Contact infos
                </h3>
                <p class="font-medium leading-6 text-gray-500">
                    We're happy to help you with any questions you may have. Feel free to schedule a tour, call us or fill out the contact form and we will get right back in touch with you.
                </p>


            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?php if (!empty($data->email)) echo $data->email;
                            if (empty($data->email)) echo ''; ?>
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Phonenumber
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?php if (!empty($data->phonenumber)) echo $data->phonenumber;
                            if (empty($data->phonenumber)) echo ''; ?>
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Fax
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?php if (!empty($data->fax)) echo $data->fax;
                            if (empty($data->fax)) echo ''; ?>
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?php if (!empty($data->adress)) echo $data->adress;
                            if (empty($data->adress)) echo ''; ?>
                        </dd>
                    </div>


                </dl>
            </div>
        </div>
        <?php print $tpl->render('basDePage'); ?>

<?php
        require_once(ROOT . 'views/shared/footer.php');
    }
}


?>