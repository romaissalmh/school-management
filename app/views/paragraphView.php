<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');

class paragraphView
{

    public function __construct()
    {
    }

    public function add($data)
    { ?>
        <div>
            <div class="font-Montserrat max-w-5xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div>
                    <h2 class="mx-6 text-xl my-2 font-bold text-gray-900">
                        Fill in the form to add a new paragraph:
                    </h2>
                </div>
                <div class="mt-5 md:mt-0 ">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label for="title" class="block text-sm font-medium text-gray-700">
                                            Title
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input required type="text" name="title" id="title" class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="School of science ...">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label  for="description" class="block text-sm font-medium text-gray-700">
                                        Description
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="description" name="description" required rows="3" class="shadow-sm focus:ring-primary-300 focus:border-primary-300 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="The school is ..."></textarea>
                                    </div>
                                    
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        Cover image
                                    </label>
                                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-secondary-200" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-primary-300 hover:text-primary-200 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary-300">
                                                    <span>Upload a file</span>
                                                    <input id="image" name="image" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, GIF up to 10MB
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-300 hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-200">
                                    Add paragraph
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            <!-- table des paragraphes -->

            <div class=" font-Montserrat  md:max-w-8xl  mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-col">
                <div>
                    <h2 class="mx-6 text-xl my-2 font-bold text-gray-900">
                       School presentation : "list of Paragraphs"
                    </h2>
                </div>
                <div class="py-2  inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3  text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                                        Image
                                    </th>

                                    <th scope="col" class="relative px-6 py-3 w-1/5">
                                        <span class="sr-only">Delete</span>
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php
                                foreach ($data['paragraphs'] as $p) :
                                    echo
                                    '<tr>
                                    <td scope="col" class=" px-6 py-3 w-1/5 text-left text-xs font-medium text-gray-900  tracking-wider">
                                        <div class="mt-1 relative my-4">' . $p['title'] . '
                                                
                                        </div>
                                    </td>
                                    <td scope="col" class=" px-6 py-3 w-1/5 text-left text-xs font-medium text-gray-900 tracking-wider">
                                        <div class="mt-1 relative my-4">' . $p['paragraph'] . '
                                                
                                        </div>
                                    </td>
                               
                                    <td scope="col" class=" px-6 py-3 w-1/5 text-left text-xs font-medium text-gray-900  tracking-wider">
                                        <div class="mt-1 relative my-4">
                                        <img class="w-full h-32 sm:h-48 object-cover" src="' . $p['image_url'] . '" alt="">

                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap w-1/5 text-right text-sm font-medium">
                                    <form action="'. SERVER_ROOT . '/admin/school/' . $p["id"]. '" method="post">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-300 hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-200">
                                    Delete paragraph
                                </button>
                                
                            
                                    
                                    </form>
                                    </td>
                                    </tr>';

                                endforeach;
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>



    <?php
    }

    public function index($data)
    {
        //calling the cadre template change this
        $tpl = new Template(ROOT . 'views/shared/'); ?>
        <div class="mt-8 grid lg:grid-cols-3 gap-10">
            <?php
            foreach ($data['paragraphs'] as $p) :
                print $tpl->render('cadre', array(
                    'image_url' => $p['image_url'],
                    'title' => $p['title'],
                    'description' => $p['description'],
                    'button' => 'Load More',
                ));
            endforeach;
            ?>
            <div>

        <?php
        require_once(ROOT . 'views/shared/footer.php');
    }
}


        ?>