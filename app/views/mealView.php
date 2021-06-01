<?php
require_once(ROOT . 'views/shared/header.php');

class mealView
{
    public function __construct()
    { 

    }

    public function addMeal()
    {
        ?>
        <div>
        <div class="mx-4 mt-4">
                <a href="<?php echo SERVER_ROOT . '/admin/home' ?>">
                    <svg class="h-10 w-10  text-primary-300 group-hover:text-primary-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2.5V6h7v8h-7v3.5L2.5 10 10 2.5z" />
                    </svg>
                </a>
            </div>
            <div class="font-Montserrat max-w-5xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div>
                    <h2 class="mx-6 text-xl my-2 font-bold text-gray-900">
                        Fill in the form to add the weekly meal :
                    </h2>
                </div>

                <div class="mt-5 md:mt-0 ">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-4 gap-6">
                                    
                                   
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="meal1" class="block text-sm font-medium text-gray-700">
                                           Sunday
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input required type="text" name="meal1" id="meal1" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Vegetable soup">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="meal2" class="block text-sm font-medium text-gray-700">
                                            Monday
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input required type="text" name="meal2" id="meal2" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Vegetable soup">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="meal3" class="block text-sm font-medium text-gray-700">
                                            Tuesday
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input required type="text" name="meal3" id="meal3" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Vegetable soup">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="meal4" class="block text-sm font-medium text-gray-700">
                                            Wednesday
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input required type="text" name="meal4" id="meal4" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Vegetable soup">
                                        </div>
                                    </div>
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="meal5" class="block text-sm font-medium text-gray-700">
                                            Thursday
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input required type="text" name="meal5" id="meal5" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Vegetable soup">
                                        </div>
                                    </div>
                                    <div class="col-span-4 sm:col-span-2 my-6  ">
                                    <button type="submit" class=" btn w-full border border-transparent focus:ring-primary-300 bg-primary-300 hover:bg-primary-200">
                                            Add meal
                                        </button>
                                    </div>
                                
                                </div>
                                <div>
                                </div>

                    </form>

                </div>
            </div>
        </div>
<?php
    }

    
}
