<?php
class Controller_Tickets extends Controller{

    function __construct()
    {
        $this->view = new View;
    }

    function action_addToCart(){

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

        echo Controller_Tickets::drawCart();
    }

    static function drawCart(){
        $ret = '';
        if(!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $val) {
                $ret.= 'Сектор: '.$val[0] . ' Ряд: ' . $val[1] .' Место: '.$val[2].'<br />';
            }
            $ret .= '<br /><a href="/tickets/verify"><div><button type="button" class="btn btn-primary">Оформить заказ</button></div>';
            return $ret;
        }
    }

    function action_verify(){

        $this->view->generate('cart.php', 'layout2.php');

    }
}
