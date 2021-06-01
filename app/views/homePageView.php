<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');

class homePageView
{

    public function __construct()
    {

        $this->tpl = new Template(ROOT . 'views/shared/');
    }

    public function display($data)
    { ?>
        <div class=" font-Montserrat  m-2">
            <?php print $this->tpl->render('barre'); 
            ?>
            <div class="contain h-80 w-full ">
            <div class="slider"> 
                    <img src="<?php echo SERVER_ROOT; ?>/img/image.PNG" alt="logo de l'école" class="h-80 w-full " />
                    <img src="<?php echo SERVER_ROOT; ?>/img/image2.jpg" alt="logo de l'école" class="h-80 w-full " />
                    <img src="<?php echo SERVER_ROOT; ?>/img/image3.jpg" alt="logo de l'école" class="h-80 w-full " />
                    <img src="<?php echo SERVER_ROOT; ?>/img/image4.jpg" alt="logo de l'école" class="h-80 w-full " />
                </div>
            </div>
            <?php print $this->tpl->render('menu'); ?>



            <!--
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold text-gray-900">
                        Dashboard
                    </h1>
                </div>
            </header>-->
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
                    
                    <div class="my-8">
                        <a href="<?php echo SERVER_ROOT ?>/home/articles" type="submit" class="btn w-full border border-transparent focus:ring-primary-300 bg-primary-300 hover:bg-primary-200">
                            Previous articles
                        </a>
                    </div>
            </main>
            <?php print $this->tpl->render('basDePage'); ?>


        </div>
        <script src="<?php SERVER_ROOT ?>script.js" type="text/javascript"> </script>


<?php
    }
}
