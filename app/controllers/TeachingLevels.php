<?php

class TeachingLevels extends Controller
{
    public function __construct()
    {
        $this->teachingLevelView = $this->view('teachingLevel');
        $this->teacherModel = $this->model('Teacher');
        $this->mealModel = $this->model('Meal');
        $this->articleModel = $this->model('Article');
    }
    public function displayFirstPage($id)
    {
        switch ($id) {
            case 1:
                $filter = 'Primary';
                break;
            case 2:
                $filter = 'Middle';
                break;
            case 3:
                $filter = 'Secondary';
                break;
        }
        $data = [
            'articles' => $this->articleModel->getArticlesWithFilter($filter),
            'id' => $id,
        ];
        $this->teachingLevelView->displayFirstPage($data);
    }

    public function displayEdts($id)
    {

        console_log($id);
        $this->teachingLevelView->displayEdt($id);
    }

    public function displayTeachers($id)
    {
        $data = $this->teacherModel->getTeachersByLevel($id);

        $this->teachingLevelView->displayTeachers($data);
    }

    public function displayRestauration()
    {

        $data = $this->mealModel->getMealById(2);
        $this->teachingLevelView->displayRestauration($data);
    }
}
