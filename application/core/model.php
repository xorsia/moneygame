<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 09.06.2020
 * Time: 10:18
 */

class Model {
    protected $db = null;

    public function __construct() {
        $this->db = DB::connectToDb();
    }

    public function get_data(){
        //
    }
}