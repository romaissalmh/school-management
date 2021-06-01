<?php 


class Students extends Controller {

    public function __construct()
    {
        //instanciation des Views et Models utilisés
        $this->articleModel = $this->model('Article');
        $this->studentModel = $this->Model('Student');
        $this->studentView = $this->view('studentView');
        $this->edtModel = $this->model('Edt');
        $this->classModel = $this->model('Classe');
        $this->markModel = $this->model('Mark');
        $this->ExtraActivityModel = $this->model('ExtraActivity');

    }
    public function displayhome($id){
        console_log($_SESSION['user']['privilege']);
        if(!isLoggedIn() && $_SESSION['user']['privilege'] != 'student' ){
            redirect('student');
        }

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // Get existing article from model
   
            
   
         $this->studentView->displayhome($id);
         } else {
            redirect('student');
         }

        

    }
    public function displayFirstPage(){
    
       
        //Check for POST            
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST Data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // Process form
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
                'articles' => $this->articleModel->getArticlesOfStudents(),
           

            ];

            // Validate email
            if (empty($data['email'])) {

                $data['email_err'] = 'Please inform your email';
            } else if (!$this->studentModel->getStudentByEmail($data['email'])) {
                // User not found

                $data['email_err'] = 'No user found!';
            }

            // Validate password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please inform your password';
            }

            //Make sure are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // Validated
                // Check and set logged in user
                $userAuthenticated = $this->studentModel->login($data['email'], $data['password']);
                if ($userAuthenticated) {
                    // Create session
                    $this->createStudentsession($userAuthenticated);
                } else {
                    $data = [
                        'email' => trim($_POST['email']),
                        'password' => '',
                        'email_err' => 'Email or Password are incorrect',
                        'password_err' => 'Email or Password are incorrect',
                        'articles' => $this->articleModel->getArticlesOfStudents(),
                       
                    ];
                    $this->studentView->displayFirstPage($data);
                }
            } else {
                // Load view with errors
                $this->studentView->displayFirstPage($data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
                'articles' => $this->articleModel->getArticlesOfStudents(),
              
            ];
            // Load view
            $this->studentView->displayFirstPage($data);
        }
    }

    public function createStudentsession($user)
    {
        console_log("backdoor");
        $_SESSION['user']['email'] = $user->email;
        $_SESSION['user']['privilege'] = 'student';
        $_SESSION['user']['name'] = $user->family_name;

        
        redirect("student/home/$user->id");
    }

    public function logout()
    {
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'student') {
            redirect('student');
        }

        unset($_SESSION['user']['email']);
        unset($_SESSION['user']['privilege']);
        unset($_SESSION['user']['name']);
        session_destroy();
        redirect('student');
    }
    public function profile($id){
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'student') {
            redirect('student');
        }

       $data =  $this->studentModel->getStudentById($id);
       $this->studentView->profile($data);
    }

    public function timeTable($id){
        //get student's class time table
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'student') {
            redirect('student');
        }
        $row =  $this->studentModel->getStudentById($id);
        $data = [
            'class' => $row->class_id,
            'classes' =>  $this->classModel->getClasses(),
            'Dimanche' => $this->edtModel->getEdtInfoByClass($row->class_id, "Sunday"),
            'Lundi' => $this->edtModel->getEdtInfoByClass($row->class_id, "Monday"),
            'Mardi' => $this->edtModel->getEdtInfoByClass($row->class_id, "Tuesday"),
            'Mercredi' => $this->edtModel->getEdtInfoByClass($row->class_id, "Wednesday"),
            'Jeudi' => $this->edtModel->getEdtInfoByClass($row->class_id, "Thursday"),
        ];
        $this->studentView->timeTable($data);



    }
    public function activities($id){ //id of the student
        //display student's extra activities    
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'student') {
            redirect('student');
        }
        $data = $this->ExtraActivityModel->getActivitiesByStudentId($id);// get student's marks !!
        $this->studentView->Activities($data);

    }
    public function marks($id){
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'student') {
            redirect('student');
        }
        $data = $this->markModel->getMarksByStudentId($id);// get student's marks !!
        $this->studentView->Marks($data);
    }
}