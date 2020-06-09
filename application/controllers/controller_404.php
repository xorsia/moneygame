<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 09.06.2020
 * Time: 10:59
 */
class Controller_404 extends Controller {
    function action_index()
    {
        $this->view->generate('404_view.php','template_view.php');
    }
}