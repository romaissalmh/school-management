<?php

class Teachers extends Controller {
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->teacherModel = $this->model('Teacher');
  

        $this->teacherView = $this->view('teacherView');
    }

    public function index(){
       $data =  $this->teacherModel ->getTeachers();
       $this->teacherView->index($data);
    }
    
    public function details($id){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // Get existing article from model
            if(!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin' ){
               redirect('admin/login');
           }
      
           $data = [
               'teacher' => $this->teacherModel->getTeacherById($id),
               'classes' => $this->teacherModel->getEdtTeacherById($id),
               

            ];
            
           $this->teacherView->userDetails($data);
        }
    }
    public function update($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get existing article from model
            if(!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin' ){
               redirect('admin/login');
           }
           $_hr= filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           $this->teacherModel->updateTeacherById($id,$_hr["heureRec"]);
           redirect('admin/teachers/details/'.$id);

           
           //success
        }

    }
}


