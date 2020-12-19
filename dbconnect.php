<?php

        $connect = mysqli_connect('localhost','root','','aquarium_main');

        if($connect == false)
        {
            echo "Database is not connected";   
        }

?>