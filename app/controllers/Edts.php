<?php

class Edts extends Controller
{
    public function __construct()
    {
        $this->edtModel = $this->model('Edt');
        $this->teacherModel = $this->model('Teacher');
        $this->subjectModel = $this->model('Subject');
        $this->classModel = $this->model('Classe');
        $this->edtView = $this->view('edtView');
    }

    public function addEdt()
    {
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin') {
            redirect('admin/login');
        }
        // we must send the list of teacher and subjects in data
        // when the user clicks on validate it
        // we retrieve for each cell the data ==> subject + teacher
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_lesson = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'class' => trim($_lesson['class']),
                'weekday' => trim($_lesson['weekday']),
                'subject1' => trim($_lesson['subject1']),
                'teacher1' => trim($_lesson['teacher1']),
                'subject2' => trim($_lesson['subject2']),
                'teacher2' => trim($_lesson['teacher2']),
                'subject3' => trim($_lesson['subject3']),
                'teacher3' => trim($_lesson['teacher3']),
                'subject4' => trim($_lesson['subject4']),
                'teacher4' => trim($_lesson['teacher4']),
                'subject5' => trim($_lesson['subject5']),
                'teacher5' => trim($_lesson['teacher5']),
                'subject6' => trim($_lesson['subject6']),
                'teacher6' => trim($_lesson['teacher6']),
                'subjects' => $this->subjectModel->getSubjects(),
                'teachers' => $this->teacherModel->getTeachers(),
                'classes' =>  $this->classModel->getClasses(),

            ];
            if ($this->edtModel->addEdt($data)) {
                //ajout avec succés
                $this->edtView->addEdt($data);
            }
        } else {
            $data = [
                'subjects' => $this->subjectModel->getSubjects(),
                'teachers' => $this->teacherModel->getTeachers(),
                'classes' =>  $this->classModel->getClasses(),

            ];
            $this->edtView->addEdt($data);
        }
    }

    public function index()
    {
        //we must retrieve the list of classes and send it as input
        // then initialize data to empty and with each new select we change the class
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_class = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //console_log($_class["class"]);
            $data = [
                'class' => $_class["class"],
                'classes' =>  $this->classModel->getClasses(),
                'Dimanche' => $this->edtModel->getEdtInfoByClass($_class["class"], "Dimanche"),
                'Lundi' => $this->edtModel->getEdtInfoByClass($_class["class"], "Lundi"),
                'Mardi' => $this->edtModel->getEdtInfoByClass($_class["class"], "Mardi"),
                'Mercredi' => $this->edtModel->getEdtInfoByClass($_class["class"], "Mercredi"),
                'Jeudi' => $this->edtModel->getEdtInfoByClass($_class["class"], "Jeudi"),
            ];
            //console_log($data);
            $this->edtView->displayEdt($data);
        } else {
            $data = [
                'class' => '',
                'classes' =>  $this->classModel->getClasses(),
                'Dimanche' => [],
                'Lundi' => [],
                'Mardi' => [],
                'Mercredi' => [],
                'Jeudi' => [],

            ];
            $this->edtView->displayEdt($data);
        }

    }
        public function getEdtByLevel($id)
    {
        //we must retrieve the list of classes and send it as input
        // then initialize data to empty and with each new select we change the class
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_class = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //console_log($_class["class"]);
            $data = [
                'class' => $_class["class"],
                'classes' =>  $this->classModel->getClassesByLevel($id),
                'Dimanche' => $this->edtModel->getEdtInfoByClass($_class["class"], "Sunday"),
                'Lundi' => $this->edtModel->getEdtInfoByClass($_class["class"], "Monday"),
                'Mardi' => $this->edtModel->getEdtInfoByClass($_class["class"], "Tuesday"),
                'Mercredi' => $this->edtModel->getEdtInfoByClass($_class["class"], "Wednesday"),
                'Jeudi' => $this->edtModel->getEdtInfoByClass($_class["class"], "Thursday"),
            ];
            //console_log($data);
            $this->edtView->displayEdt($data);
        } else {
            $data = [
                'class' => '',
                'classes' =>  $this->classModel->getClassesByLevel($id),
                'Dimanche' => [],
                'Lundi' => [],
                'Mardi' => [],
                'Mercredi' => [],
                'Jeudi' => [],

            ];
            $this->edtView->displayEdt($data);
        }
    }
}
