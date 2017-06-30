<?php
class Controller_Tickets extends Controller{
    function action_addToCart(){

        //unset($_SESSION['cart']);
        $arr = explode('-',$_POST['id']);

        if(isset($_SESSION['cart'])) {

            if (!in_array($arr, $_SESSION['cart'])) {
                $_SESSION['cart'][] = $arr;
            }
        } else  $_SESSION['cart'][] = $arr;

        if(!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $val) {
                echo $val[0] . '--' . $val[1] . '<br />';
            }
        }
    }
}