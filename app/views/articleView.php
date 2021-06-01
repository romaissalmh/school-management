<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');

class articleView
{

    public function __construct()
    {
        $this->tpl = new Template(ROOT . 'views/shared/');
    }

    public function add($data)
    { ?>
        <div>
            <div class="font-Montserrat max-w-5xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="">
            <a href="<?php echo SERVER_ROOT . '/admin/home' ?>">
                <svg class="h-10 w-10  text-primary-300 group-hover:text-primary-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"  d="M10 2.5V6h7v8h-7v3.5L2.5 10 10 2.5z" />
                </svg>
            </a></div>
                <div>
                    <h2 class="mx-6 text-xl my-2 font-bold text-gray-900">
                        Fill in the form to add a new article :
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
                                            <input type="text" name="title" id="title" required class="focus:ring-primary-300 focus:border-primary-300 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Parent meeting">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                        About
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="description" name="description" required rows="3" class="shadow-sm focus:ring-primary-300 focus:border-primary-300 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="This article is about ..."></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                        Brief description for your article.
                                    </p>
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
                                                    <input required id="image" name="image" type="file" class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PNG, JPG, GIF up to 10MB
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <fieldset>
                                        <legend class="block text-base font-medium text-gray-900">Concerned users:</legend>
                                        <div class="mt-4 space-y-4 ">
                                            <select required id="type" name="type" class=" w-50 h-10 border-gray-300  shadow overflow-hidden focus:ring-primary-200 focus:border-primary-200  py-0 pl-2 pr-7 border-transparent bg-transparent text-gray-500 sm:text-sm rounded-md">
                                                <option value="All">All</option>
                                                <option value="Primary">Junior</option>
                                                <option value="Middle">Middle</option>
                                                <option value="Secondary">Senior</option>
                                                <option value="Parent">Parent</option>
                                                <option value="Teacher">Teacher</option>
                                            </select>
                                        </div>

                                    </fieldset>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-300 hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-200">
                                    Add article
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
            <!-- table des articles -->

            <div class=" font-Montserrat  md:max-w-8xl  mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-col">
                <div>
                    <h2 class="mx-6 text-xl my-2 font-bold text-gray-900">
                        List of articles:
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
                                        Concerned users
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
                                foreach ($data['articles'] as $article) :
                                    echo
                                    '<tr>
                                    <td scope="col" class=" px-6 py-3 w-1/5 text-left text-xs font-medium text-gray-900  tracking-wider">
                                        <div class="mt-1 relative my-4">' . $article['title'] . '
                                                
                                        </div>
                                    </td>
                                    <td scope="col" class=" px-6 py-3 w-1/5 text-left text-xs font-medium text-gray-900 tracking-wider">
                                        <div class="mt-1 relative my-4">' . $article['description'] . '
                                                
                                        </div>
                                    </td>
                                    <td scope="col" class=" px-6 py-3 w-1/5 text-left text-xs font-medium text-gray-900  tracking-wider">
                                        <div class="mt-1 relative my-4">  ' . $article['type'] . '                                             
                                        </div>
                                    </td>
                                    <td scope="col" class=" px-6 py-3 w-1/5 text-left text-xs font-medium text-gray-900  tracking-wider">
                                        <div class="mt-1 relative my-4">
                                        <img class="w-full h-32 sm:h-48 object-cover" src="' . $article['image_url'] . '" alt="">

                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap w-1/5 text-right text-sm font-medium">
                                    <form action="' . SERVER_ROOT . '/admin/articles/' . $article["id"] . '" method="GET">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-300 hover:bg-primary-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-200">
                                    Delete article
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
    { ?>

        <div class=" font-Montserrat  m-2">
            <?php
            print $this->tpl->render('barre');
            print $this->tpl->render('menu');
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
                                'link' =>  SERVER_ROOT. '/home/articles/'. $article['id'], 

                            ));
                        endforeach;
                        ?>

                    </div>
                    <div>

            </main>
            <?php
            print $this->tpl->render('basDePage'); ?>


        </div>



    <?php
        require_once(ROOT . 'views/shared/footer.php');
    }


    public function displayArticle($data)
    { ?>

        <div class=" font-Montserrat  m-2">
            <?php
            print $this->tpl->render('barre');
            print $this->tpl->render('menu');
            ?>
            <main class="z-0">
                <div class=" w-2/4 mx-auto py-6 sm:px-6 lg:px-8 ">
                    <div class="card hover:shadow-lg ">
                        <img class="w-full" src="<?php echo  $data->image_url ?>" alt="">
                        <div class="m-4">
                            <span class="font-bold"> <?php echo $data->title; ?> </span>
                            <span class="block text-gray-500 text-sm "> <?php echo $data->description; ?> </span>
                        </div>
                     
                    </div>

                    
                    <div>

            </main>
            <?php
            print $this->tpl->render('basDePage'); ?>


        </div>



<?php
        require_once(ROOT . 'views/shared/footer.php');
    }
}


?>