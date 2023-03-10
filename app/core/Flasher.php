<?php

class Flasher{
    public static function setFlash($message, $type){
        $_SESSION['flash'] = [
            'message' => $message,
            'type' => $type
        ];
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo '
            <div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert" aria-hidden="true">' . 
                $_SESSION['flash']['message'] . '
                <button class="close" data-dismiss="alert" aria-label="Close">
                    <i aria-hidden="true">x</i>
                </button>
            </div>
            ';
        }
        unset($_SESSION['flash']);
    }
}