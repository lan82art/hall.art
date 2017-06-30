<?php
//require_once 'controller_index.php';
class Controller_User extends Controller
{
    public $userForm = array();
    public $error = array();
    public $name;
    public $email;

    function __construct()
    {
        $this->model = new Model_User();
        $this->view = new View();
    }

    public function validate($type, $value){
        if(!empty($value) && method_exists('Controller_User', 'validate_'.$type)){
            $type = 'validate_'.$type;
            return $this->$type($value);
        }
        return false;
    }

    protected function validate_name($value){
        $len = mb_strlen(trim($value), $this->charset);
        $space_quantity = mb_substr_count(trim($value), ' ', $this->charset);

        if ($space_quantity == 0 && $len > 4 && $len <= 15) {
            return true;
        }
        return false;
    }

    protected function validate_email($value){

        $dog_qty = mb_substr_count(trim($value), '@', $this->charset);
        $dot_qty = mb_substr_count(trim($value), '.', $this->charset);

        if($dog_qty == 1 && $dot_qty > 0){
            return true;
        }
        return false;
    }

    protected function validate_pass($value){

        $lenght = mb_strlen($value);

        if($lenght >= 5 ){
            return true;
        }
    return false;
    }

    function action_index()
    {

    }

    function action_login()
    {
        unset($_SESSION['auth']);
        $arr = $this->model->getAuth($_POST['login'],$_POST['password']);
        $_SESSION['auth'] = $arr['id'];

        if(is_numeric($_SESSION['auth'])){
            $_SESSION['name'] = $arr['name'];

            header('Location:/');
        } else {
            $controller = new Controller_User();
            $controller->action_loginForm('Login and/or password incorrect');
        }
    }
    function action_logout(){
        unset($_SESSION['auth']);
        unset($_SESSION['name']);
        unset($_SESSION['cart']);

        header('Location:/');
    }

    function action_loginForm($data = null)
    {
        $this->view->generate('login.php', 'layout2.php',$data);
    }

    function action_registerForm()
    {
        $this->view->generate('reg_form.php', 'layout2.php');
    }

    function action_apply_register(){

        $this->name = $_POST['name'];
        $this->email = $_POST['email'];

        if(!$this->validate('name',$this->name)) {
            $this->error['name'] = 'Invalid name';
        }
        if ($this->model->getUserEmail($this->email)){
            $this->error['email'] = 'Email exists';
        }
        if (!$this->validate('email',$this->email)){
            $this->error['email'] = 'Email is not valid';
        }
        if (!$this->validate('pass',$_POST['pass'])){
            $this->error['pass'] = 'Invalid password';
        }
        if ($_POST['pass'] != $_POST['pass2']){
            $this->error['pass'] = 'Password mismatch';
        }

        if (empty($this->error)){
            $this->userForm = array('name' => $_POST['name'], 'password' => sha1($_POST['pass']), 'email' => $_POST['email']);
            $this->model->newUser($this->userForm);

            $this->view->generate('register_success.php', 'layout2.php');
        } else {
            $res = array('name' => $this->name, 'email' => $this->email);
            $data = array('err' => $this->error,'form' => $res,'form');
            $this->view->generate('reg_form.php','layout2.php',$data);
        }
    }
}

