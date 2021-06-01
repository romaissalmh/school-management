<?php
class Users extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->adminModel = $this->model('Admin');
        $this->teacherModel = $this->model('Teacher');
        $this->studentModel = $this->model('Student');
        $this->parentModel = $this->model('Tutor');

        $this->userView = $this->view('userView');
    }

    public function index()
    {

        $users = $this->userModel->getUsers();
        $data = [
            'users' => $users
        ];
        $this->userView->index($data);
    }

    public function add()
    {
        if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin') {
            redirect('admin/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize user Array
            $_user = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'lastname' => trim($_user['lastname']),
                'firstname' => trim($_user['firstname']),
                'email' => trim($_user['email']),
                'password' => trim($_user['password']),
                'adress' => trim($_user['adress']),
                'birthdate' => trim($_user['birthdate']),
                'phonenumber1' => trim($_user['phonenumber1']),
                'phonenumber2' => trim($_user['phonenumber2']),
                'phonenumber3' => trim($_user['phonenumber3']),
                'role' => trim($_user['role']),
            ];


            // Validated
            $user_id = $this->userModel->adduser($data);
            if ($user_id->id > 0) {
                console_log($user_id->id);
                //flash('user_message', 'user Added');
                //insertion in the different tables according to their roles
                if ($data['role'] == 'admin') {
                    $this->adminModel->addAdmin($user_id->id);
                } else {
                    if ($data['role'] == 'student') {
                        $this->studentModel->addStudent($user_id->id);
                    } else {
                        if ($data['role'] == 'teacher') {
                            $this->teacherModel->addTeacher($user_id->id);
                        } else {
                            if ($data['role'] == 'parent') {
                                $this->parentModel->addParent($user_id->id);
                            }
                        }
                    }
                }
            } else {
                die('Something went wrong');
            }
            redirect('admin/users');
        } else {
            $data = [
                'lastname' => '',
                'firstname' => '',
                'email' => '',
                'password' => '',
                'adress' => '',
                'birthdate' => '',
                'phonenumber1' => '',
                'phonenumber2' => '',
                'phonenumber3' => '',
                'role' => '',
                'users' => $this->userModel->getusers(),
            ];
            $this->userView->add($data);
        }
    }


    public function delete($id)
    {
       if ($_SERVER['REQUEST_METHOD'] == 'GET') {
 
          if(!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin' ){
             redirect('admin/login');
         }
          $role = $this->userModel-> getUserById($id)->role;
          console_log($role);
          if ($this->userModel->deleteUser($id)) {
             //flash('article_message', 'Article removed');
             if ($role == 'admin') {
                $this->adminModel->deleteAdminByUserId($id);
            } else {
                if ($role == 'student') {
                    $this->studentModel->deleteStudentByUserId($id);
                } else {
                    if ($role == 'teacher') {
                        $this->teacherModel->deleteTeacherByUserId($id);
                    } else {
                        if ($role == 'parent') {
                            $this->parentModel->deleteParentByUserId($id);
                        }
                    }
                }
            }
             redirect('admin/users'); 
          } else {
             die('Something went wrong');
          }
       } else {
          redirect('admin/users');
       }
    } //end function
}
