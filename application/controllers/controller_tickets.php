<?php
class Controller_Tickets extends Controller{

    function action_addToCart(){

        $arr = array();
        $newarr = array();

        $arr = explode('-',$_POST['id']);

        if(isset($_SESSION['cart'])) {
            if (!in_array($arr, $_SESSION['cart'])) {
                $_SESSION['cart'][] = $arr;
            } else {
                $newarr = $_SESSION['cart'];
                unset($_SESSION['cart']);

                foreach ($newarr as $key => $val) {
                   if($arr != $val){
                       $_SESSION['cart'][] = $val;
                   }
                }
            }
        } else  $_SESSION['cart'][] = $arr;

        if(!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $val) {
                echo $val[0] . '--' . $val[1] .'--'.$val[2].'<br />';
            }
        }
    }
}