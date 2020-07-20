<?php


namespace App\Controller;


use App\Model\Category;
use App\Model\CategoryManager;

class CategoryController
{
    protected $categoryController;

    public function __construct()
    {
        $this->categoryController = new CategoryManager();
    }

    public function getAllCategories()
    {
        $categories = $this->categoryController->getAllCategories();
        include('src/View/category/list.php');
    }

    public function addCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include('src/View/category/add.php');
        } else {
            $name = $_POST['name'];
            $country = $_POST['country'];
            $category = new Category($name, $country);
            $this->categoryController->addCategory($category);
            header("location:index.php");
        }
    }
}