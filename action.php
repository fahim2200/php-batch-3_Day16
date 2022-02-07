<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Product;
use App\classes\Pattern;
use App\classes\FileUpload;


if (isset($_GET['pages']))
{
    if ($_GET['pages']=='home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }

    elseif ($_GET['pages'] == 'product')
    {
        $product = new Product();
        $products = $product->getAllProduct();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'details')
    {
        $product = new Product();
        $result = $product->getProductById($_GET['id']);
        include 'pages/details.php';
    }
    elseif ($_GET['pages'] == 'pattern')
    {
        include 'pages/pattern.php';
    }
    elseif ($_GET['pages'] == 'file-upload')
    {
        include 'pages/fileupload.php';
    }
}
elseif ( isset($_POST['pattern-btn']))
{
    $pattern = new Pattern($_POST);
    $pattern->index();


}
elseif ( isset($_POST['img_btn'])) {
    $fileupload = new FileUpload($_POST);
    $fileupload->fileupload();
}


//elseif (isset($_POST['btn']))
//{
//    $passwordGenerator = new PasswordGenerator($_POST);
//   $result = $passwordGenerator->newPassword();
//    include 'pages/password-reset.php';
//
//}
//else{
//    $home = new Home();
//    $home->index();
//}