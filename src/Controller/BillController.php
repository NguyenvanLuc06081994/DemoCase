<?php


namespace App\Controller;

use App\Model\Bill;
use App\Model\BillManager;
use App\Model\CustomerManager;
use App\Model\DetailManager;
use App\Model\ProductManager;

class BillController
{
    protected $billController;
    protected $detailController;

    public function __construct()
    {
        $this->billController = new BillManager();
        $this->detailController = new DetailManager();
    }

    public function getAllBill()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $detailObj = new DetailManager();
            $customerObj = new CustomerManager();
            $customers = $customerObj->getAllCustomer();
            $details = $detailObj->getAllDetail();
            $bills = $this->billController->getAllBill();
            include('src/View/bill/list.php');
        }
    }

//    public function addBill()
//    {
//        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $customerObj = new CustomerManager();
//            $customers = $customerObj->getAllCustomer();
//            $detailObj = new DetailManager();
//            $details = $detailObj->getAllDetail();
//            $productObj = new ProductManager();
//            $products = $productObj->getAllProduct();
//            include('src/View/bill/add.php');
//        } else {
//            $date = $_POST['date'];
//            $status = $_POST['status'];
//            $productPrice = $_POST['product_price'];
//            $quantity = $_POST['quantity_product'];
//            $totalPrice = $quantity * $productPrice;
//            $customer_id = $_POST['customer_id'];
//            $bill = new Bill($date, $status, $totalPrice, $customer_id);
//            $this->billController->addBill($bill);
//            header('location:index.php');
//        }
//    }
//
//    public function deleteBill()
//    {
//        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $idbill = $_REQUEST['idbill'];
//            $iddetail = $_REQUEST['iddetail'];
//            $this->detailController->deleteDetail($iddetail);
//            $this->billController->deleteBill($idbill);
//            header("location:index.php");
//        }
//    }

//    public function updateBill()
//    {
//        if ($_SERVER['REQUEST_METHOD']=='GET'){
//            $id =$_REQUEST['id'];
//            $bill = $this->billController->getBillId($id);
//            include ('src/View/bill/update.php');
//        }else{
//            $id = $_REQUEST['id'];
//            $date = $_REQUEST['date'];
//            $status = $_REQUEST['status'];
//            $totalPrice = $_REQUEST['totalPrice'];
//            $customer_id = $_REQUEST['customer_id'];
//            $bill = new Bill($date, $status, $totalPrice, $customer_id);
//            $bill->setId($id);
//            $this->billController->updateBill($bill);
//            header('location:index.php');
//        }
//    }
//
    public function getBillDetail()
    {
        $idBill = $_REQUEST['id'];
        $billDetails = $this->billController->findDetailId($idBill);
        include ('src/View/bill/listDetail.php');
    }


}