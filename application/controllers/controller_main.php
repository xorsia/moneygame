<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 09.06.2020
 * Time: 11:03
 */

class Controller_main extends Controller {

//    public function __construct(){
//        $this->model = new Model_main();
//        $this->view = new View();
//    }

    function action_index(){
        $this->view->generate('main_view.php','template_view.php');
    }

    function action_login(){
        if(Session::get('loggedIn') != true) {
            $username = $_POST['login'];
            $password = md5($_POST['password']);

            $this->model = new Model_main();
            $result =  $this->model->checkUser($username,$password);

            if($result){
                session::init();
                session::set('loggedIn', true);
                var_dump($_SESSION);
            }
        }
        $this->view->generate('login_view.php','template_view.php');
    }
}