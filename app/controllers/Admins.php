<?php
class Admins extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->adminModel = $this->model('Admin');
        $this->adminView = $this->view('adminView');
        $this->articleController = $this->controller('articles');
        $this->paragraphController = $this->controller('paragraphs');
        $this->edtController = $this->controller('edts');
    }
    public function menu()
    {
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin') {
            redirect('admin/login');
        }

        $this->adminView->menu();
    }

    public function index()
    {
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin') {
            redirect('admin/login');
        }
        $admins = $this->adminModel->getAdmins();
        $data = [
            'admin' => $admins
        ];
        $this->adminView->index($data);
    }

    public function login()
    {
        console_log("jme");

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
            ];

            // Validate email
            if (empty($data['email'])) {

                $data['email_err'] = 'Please inform your email';
            } else if (!$this->adminModel->getAdminByEmail($data['email'])) {
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
                $userAuthenticated = $this->adminModel->login($data['email'], $data['password']);
                if ($userAuthenticated) {
                    // Create session
                    $this->createadminsession($userAuthenticated);
                } else {
                    $data = [
                        'email' => trim($_POST['email']),
                        'password' => '',
                        'email_err' => 'Email or Password are incorrect',
                        'password_err' => 'Email or Password are incorrect',
                    ];
                    $this->adminView->login($data);
                }
            } else {
                // Load view with errors
                $this->adminView->login($data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];
            // Load view
            $this->adminView->login($data);
        }
    }
    public function createadminsession($user)
    {
        $_SESSION['user']['email'] = $user->email;
        $_SESSION['user']['privilege'] = 'admin';
        $_SESSION['user']['name'] = $user->family_name;
        // $this->menu(); redirectionnnn  

        
        redirect('admin/home');
    }

    public function logout()
    {

        unset($_SESSION['user']['email']);
        unset($_SESSION['user']['privilege']);
        unset($_SESSION['user']['name']);
        session_destroy();
        redirect('admin/login');
    }

    public function articles()
    {
        $this->articleController->add();
    }

    public function school()
    {
        $this->paragraphController->add();
    }

    public function edt()
    {
        $this->edtController->addEdt();
    }
}
