<?php
    if (isset($_POST['submit'])) {
        require_once('functions.php');
        $name=$_POST['name'];
        if (isset($_POST['description'])) {
            $description=$_POST['description'];
        }
        $price=$_POST['price'];
        $errors=[];
        if ( ! isset($name)) {
            $errors['name']='name is required';
        } elseif ( ! is_string($name)) {
            $errors['name']='name must be string';
        }elseif (strlen($name)>255 ||strlen($name)<5 ) {
            $errors['name']='name must be 5 chars at least and 255 maximum';
        }
        if ($description!=null) {//isset dosn't work 
            echo "is set";
            if (! is_string($description)) {
                $errors['description']='description must be string';
            }
        }
        if ( ! isset($price)) {
            $errors['price']='price is required';
        } elseif ( ! is_numeric($price)) {
            $errors['price']='name must be number';
        }elseif ($price<0) {
            $errors['price']='price must be 0 or more';
        }        
        if( sizeof($errors)>0) {
            foreach ($errors as $key => $value) {
                echo "you have error on $key and it's : $value <br>";
            }
        }else {
            echo "the product name is : $name <br>";
            if ($description!=null) {
                echo "the product description is : $description <br>";
            }
            echo "the product price is : $price <br>";
            echo "the product price after discount is :". getPriceWithDiscount($price)." <br>";
        }
    }
?>