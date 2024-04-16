<?php

    function emailChecker($email){
        if(isset($_GET[$email])) {
            $emailInput = $_GET[$email];
            if(strpos($emailInput, '@') !== false && strpos($emailInput, '.') !== false){
                echo "Log in Successful";
            } else{
                echo "Error, Insert a valid Email";
            }
        }

    }


?>