<?php
class About extends Controller {
    public function __construct()
    {
        $this->aboutView = $this->view('aboutView');
        $this->paraModel = $this->model('Paragraph');

    }

    public function displayAbout(){
        $data = $this->paraModel->getParagraphs();
        $this->aboutView->diplayAbout($data);
    }
}