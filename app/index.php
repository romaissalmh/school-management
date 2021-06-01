<?php
require_once('./config/config.php');
require_once(ROOT . '/helpers/controller.php');
require_once(ROOT . '/helpers/session.php');


//function that log our inputs in the console 
function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}



// Include router class
include('Router.php');

$router = new Router($_GET['p']); 
$router->get('/admin/login','Admins#login'); 
$router->post('/admin/login','Admins#login'); 
$router->get('/admin/home','Admins#menu'); 

$router->get('/admin/articles','Articles#add'); 
$router->post('/admin/articles','Articles#add'); 
$router->get('/admin/articles/:id','Articles#delete'); 

$router->get('/admin/school','Paragraphs#add'); 
$router->post('/admin/school/:id','Paragraphs#delete'); 
$router->post('/admin/school','Paragraphs#add'); 

$router->get('/admin/edt','Edts#addEdt'); 
$router->post('/admin/edt','Edts#addEdt'); 

$router->get('/admin/teachers','Teachers#index'); 
$router->get('/admin/teachers/details/:id','Teachers#details'); 
$router->post('/admin/teachers/details/:id','Teachers#update'); 

$router->get('/admin/users','Users#add'); 
$router->post('/admin/users','Users#add'); 
$router->get('/admin/users/:id','Users#delete'); 

$router->get('/admin/meals','Meals#addMeal'); 
$router->post('/admin/meals','Meals#addMeal'); 

$router->get('/admin/contacts','Contacts#add'); 
$router->post('/admin/contacts','Contacts#add'); 

$router->get('/home','HomePage#display'); 

$router->get('/contact','Contacts#index'); 

$router->get('/student','Students#displayFirstPage'); 
$router->get('/student/logout','Students#logout'); 

$router->post('/student','Students#displayFirstPage'); 
$router->get('/student/home/:id','Students#displayhome'); 

$router->get('/home/articles','Articles#index'); 
$router->get('/home/articles/:id','Articles#displayArticle'); 

$router->get('/parent','Parents#displayFirstPage'); 
$router->post('/parent','Parents#displayFirstPage'); 
$router->get('/parent/home/:id','Parents#displayhome'); 
$router->get('/parent/logout','Parents#logout'); 

$router->get('/level/:id','TeachingLevels#displayFirstPage'); 
$router->get('/level/:id/edt','TeachingLevels#displayEdts'); 
$router->post('/level/:id/edt','TeachingLevels#displayEdts'); 
$router->get('/level/:id/teachers','TeachingLevels#displayTeachers'); 
$router->get('/level/:id/catering','TeachingLevels#displayRestauration'); 

$router->get('/about','About#displayAbout'); 

$router->run(); 

