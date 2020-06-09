<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 09.06.2020
 * Time: 10:19
 */

class View {
    /**
     * public $template_view
     * default template
     *
     * $content - view name
     * template file
     * $data - massive from modelController
    */
    function generate($countent_view, $template_view,$data=null){
        /**
            if(is_array($data)) {
                // преобразуем элементы массива в переменные
                extract($data);
            }
        */

        include 'application/views/'.$template_view;
    }
}