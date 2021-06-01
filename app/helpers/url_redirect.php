<?php
    /*
    * Helper url redirect
    */
    function redirect( $page ){
        console_log($page);
        header('Location: ' .SERVER_ROOT . '/' . $page);

    }