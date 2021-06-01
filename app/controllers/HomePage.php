<?php 


class HomePage extends Controller {

    public function __construct()
    {
        $this->articleModel = $this->model('Article');
        $this->homePageView = $this->view('homePageView');

    }
    public function display(){
        //get the last 8 articles 
        $articles = $this->articleModel->getRecentArticles();
        $data = [
           'articles' => $articles
        ];
        $this->homePageView->display($data);
    }
}