<?php

class Contacts extends Controller
{

   public function __construct()
   {
      $this->contactModel = $this->model('Contact');
      $this->contactView = $this->view('contactView');
   }

   public function add()
   {
      if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin') {
         redirect('admin/login');
      }

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         // Sanitize Contact Array
         $_contact = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    

         $data = [
             //email, phonenumber, fax, adress
            'email' => trim($_contact['email']),
            'phonenumber' => trim($_contact['phone']),
            'fax' => trim($_contact['fax']),
            'adress' => trim($_contact['adress']),
            'infos' => !empty($this->contactModel->getContactById(18)) ? $this->contactModel->getContactById(18) : '',

         ];


         // Validated
         $rows = $this->contactModel->getContacts();
         console_log(sizeof($rows));
         if(!empty($row)) $taille= 1 ; else $taille = 0 ;
         if ( $taille == 0 ){
            if ($this->contactModel->addContact($data)) {
                // flash('Contact_message', 'Contact Added');
                redirect('admin/contacts');
              
             } else {
                die('Something went wrong');
             }
         }
         else 
            die('Sorry, contact info already exists !!');

        
      } else {
         $data = [
            'email' =>'',
            'phonenumber' => '',
            'fax' => '',
            'adress' => '',
            'infos' => !empty($this->contactModel->getContactById(18)) ? $this->contactModel->getContactById(18) : '',
         ];
         console_log($data);
         $this->contactView->add($data);
      }
   }
   public function index()
   {
      
        $data = $this->contactModel->getContactById(18);
        $this->contactView->index($data);
   }
}
