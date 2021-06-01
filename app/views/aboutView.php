<?php
require_once(ROOT . 'views/shared/header.php');
require_once(ROOT . 'views/template.php');

class aboutView
{

    public function __construct()
    {
        $this->tpl = new Template(ROOT . 'views/shared/');
    }
    public function diplayAbout($data)
    { ?>
        <div class=" font-Montserrat   m-2">
            <?php print $this->tpl->render('barre');
            print $this->tpl->render('menu');
            ?>
            <main class="  z-0">
                <div class="min-w-screen min-h-screen  flex items-center justify-center py-5">
                    <div class="w-full max-w-6xl mx-auto">
                        <div class="text-center max-w-xl mx-auto">
                            <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600"> Codex<br>High Institute</h1>
                            <h3 class="text-xl mb-5 font-light">One of the best schools in the country.</h3>
                        </div>



                        <?php
                        foreach ($data  as $paragraph) :
                            echo '
                                <div class="my-4">
                            <h1 class="text-xl mb-5 font-medium text-gray-800">' . $paragraph["title"] . '</h1>

                            <h3 class="text-xl mb-5 font-light">' . $paragraph["paragraph"] . '</h3>
                            <img class="w-full " src="' . $paragraph["image_url"] . '" alt="">

                        </div>
                                ';


                        endforeach;
                        ?>

                    </div>

                </div>



            </main>
            <div>


                <?php
                print $this->tpl->render('basDePage'); ?>


            </div>
    <?php
    }
}
