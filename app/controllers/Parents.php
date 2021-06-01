<?php 

class Parents extends Controller {
    public function __construct()
    {
        $this->articleModel = $this->model('Article');
        $this->parentModel = $this->model('Tutor');
        $this->observationModel = $this->model('Observation');
        $this->parentView = $this->view('parentView');
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
                'articles' => $this->articleModel->getArticlesWithFilter('Parent'),
            ];

            // Validate email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please inform your email';
            } else if (!$this->parentModel->getParentByEmail($data['email'])) {
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
                $userAuthenticated = $this->parentModel->login($data['email'], $data['password']);
                if ($userAuthenticated) {
                    // Create session
                    $this->createParentsession($userAuthenticated);
                } else {
                    $data = [
                        'email' => trim($_POST['email']),
                        'password' => '',
                        'email_err' => 'Email or Password are incorrect',
                        'password_err' => 'Email or Password are incorrect',
                        'articles' => $this->articleModel->getArticlesWithFilter('Parent'),
                       
                    ];
                    $this->parentView->displayFirstPage($data);
                }
            } else {
                // Load view with errors
                $this->parentView->displayFirstPage($data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
                'articles' => $this->articleModel->getArticlesWithFilter('Parent'),
              
            ];
            // Load view
            $this->parentView->displayFirstPage($data);
        }
    }

    public function createParentsession($user)
    {
        
        $_SESSION['user']['email'] = $user->email;
        $_SESSION['user']['privilege'] = 'parent';
        $_SESSION['user']['name'] = $user->family_name;

        
        redirect("parent/home/$user->id");
    }

    public function logout()
    {
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'parent') {
            redirect('parent');
        }

        unset($_SESSION['user']['email']);
        unset($_SESSION['user']['privilege']);
        unset($_SESSION['user']['name']);
        session_destroy();
        redirect('parent');
    }
    public function displayHome($id){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // Get existing article from model
   
            if(!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin' ){
               redirect('parent');
           }
   
         $this->parentView->displayhome($id);

         } else {
            redirect('parent');
         }
    }

    public function profile($id){
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'student') {
            redirect('student');
        }

       $data =  $this->parentModel->getParentById($id);
       console_log($data);
       $this->parentView->profile($data);

    }

    public function children($id){
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'student') {
            redirect('student');
        }

       $data =  $this->parentModel->getChildren($id);
       console_log($data);
       $this->parentView->childrenList($data);

    }

    public function teacherObservations($id){
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'student') {
            redirect('student');
        }

       $data =  $this->observationModel->getObservations($id);
       console_log($data);
       $this->parentView->teacherObservation($data);

    }

}
