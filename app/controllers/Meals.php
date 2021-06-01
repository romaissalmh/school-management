<?php

class Meals extends Controller
{

   public function __construct()
   {
      $this->mealModel = $this->model('Meal');
      $this->mealView = $this->view('mealView');
   }

   public function addMeal()
   {
      if (!isLoggedIn() && $_SESSION['user']['privilege'] != 'admin') {
         redirect('admin/login');
      }

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         // Sanitize meal Array
         $_meal = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         //uploading the image

         $data = [
            'sunday' => trim($_meal['meal1']),
            'monday' => trim($_meal['meal2']),
            'tuesday' => trim($_meal['meal3']),
            'wednesday' => trim($_meal['meal4']),
            'thursday' => trim($_meal['meal5']),
         ];


         // Validated
         if ($this->mealModel->addMeal($data)) {
            // flash('meal_message', 'meal Added');
            redirect('admin/meals');
         } else {  
            die('Something went wrong');
         }
      } else {
         $data = [
            'sunday' => '',
            'monday' => '',
            'tuesday' => '',
            'wednesday' => '',
            'thursday' => '',
         ];
         $this->mealView->addMeal($data);
      }
   }
   public function index()
   {
       $meals = $this->mealModel->getMealById(2);
       return $meals ;
   }
}
