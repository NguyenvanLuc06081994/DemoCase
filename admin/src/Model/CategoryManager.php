<?php


namespace App\Model;


class CategoryManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCategories()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $key => $item) {
            $category = new Category($item['name'], $item['country']);
            $category->setId($item['id']);
            array_push($arr, $category);
        }
        return $arr;
    }

    public function addCategory($category)
    {
        $sql = "INSERT INTO `categories`( `name`, `country`) VALUES (:name, :country)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':name', $category->getName());
        $stmt->bindParam(':country', $category->getCountry());
        $stmt->execute();
    }
}