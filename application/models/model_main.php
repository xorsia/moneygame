<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 09.06.2020
 * Time: 13:51
 */

class Model_main extends Model {

    public function checkUser($login,$password){

        $sql = "SELECT * FROM users WHERE `login` = '$login' AND `pass` = '$password' ";
        //832d54be3c11faeb51af08e9e96f90aa

        $result = mysqli_query($this->db,$sql);
        $result = mysqli_fetch_assoc($result);

        if(!empty($result)){
            return true;
        } else {
            return false;
        }
    }
}