<?php

class Paragraphs extends Controller
{
   public function __construct()
   {
      $this->paragraphModel = $this->model('Paragraph');
      $this->paragraphView = $this->view('paragraphView');
   }

   public function index()
   {
      $paragraphs = $this->paragraphModel->getParagraphs();
      $data = [
         'paragraphs' => $paragraphs
      ];
      $this->paragraphView->index($data);
   }

   public function uploadimage($input) // a function to move an image into another directory
   {
      $target_dir = ROOT . "img/uploads/"; //the folder where we're gonna put put our images
      $target_file = $target_dir . basename($_FILES[$input]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      // Check if image file is a actual image or fake image
      if (isset($_POST["submit"])) {
         $check = getimagesize($_FILES[$input]["tmp_name"]);
         if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
         } else {
            echo "File is not an image.";
            $uploadOk = 0;
         }
      }

      // Check if file already exists
      if (file_exists($target_file)) {
         echo "Sorry, file already exists.";
         $uploadOk = 0;
      }

      // Allow certain file formats
      if (
         $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "PNG"
         && $imageFileType != "gif"
      ) {
         echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
         $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 because of an error.
      if ($uploadOk == 0) {
         echo "Sorry, your file was not uploaded.";
      } else {
         if (move_uploaded_file($_FILES[$input]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES[$input]["name"])) . " has been uploaded.";
         } else {
            echo "Sorry, there was an error uploading your file.";
         }
      }
      return SERVER_ROOT . "/img/uploads/" . $_FILES[$input]["name"];
   } //end function


   public function add()
   {
      if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin') {
         redirect('admin/login');
      }

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         // Sanitize paragraph Array
         $_paragraph = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         //uploading the image
         if (!empty($_FILES["image"]["name"]))
            $link =  $this->uploadimage('image');

         $data = [
            'title' => trim($_paragraph['title']),
            'description' => trim($_paragraph['description']),
            'image_url' => (!empty($_FILES["image"]["name"])) ? $link : '',
         ];


         // Validated
         if ($this->paragraphModel->addParagraph($data)) {
            //flash('paragraph_message', 'paragraph Added');
            redirect('admin/school');
         } else {
            die('Something went wrong');
         }
      } else {
         $data = [
            'title' => '',
            'description' => '',
            'image_url' => '',
            'paragraphs' => $this->paragraphModel->getParagraphs(),
         ];
         $this->paragraphView->add($data);
      }
   }





   public function delete($id)
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         // Get existing paragraph from model

         if(!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin' ){
            redirect('admin/login');
        }

         if ($this->paragraphModel->deleteParagraph($id)) {
            //flash('paragraph_message', 'paragraph removed');
            console_log($id);
            redirect('admin/school'); 
         } else {
            die('Something went wrong');
         }
      } else {
         redirect('admin/school');
      }
   } //end function


}
