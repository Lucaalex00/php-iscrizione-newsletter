<?php

    function emailChecker($email){
        if(isset($_GET[$email])) {
            $emailInput = $_GET[$email];
            if(strpos($emailInput, '@') !== false && strpos($emailInput, '.') !== false){
                return true; /* Applica TRUE */
            } else{
                return false; /* Applica FALSE */
            }
        }

    }


?>