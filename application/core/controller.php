<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 09.06.2020
 * Time: 10:18
 */

class Controller {
    public $model;
    public $view;

    function __construct() {
        $this->view = new View();
    }

    function action_index(){
        //
    }
}