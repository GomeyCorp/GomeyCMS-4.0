<?php
/*=======================================================================
| GomeyCMS - Advanced Website and Content Management System for heil.world
| #######################################################################
| Copyright (c) 2017, Arran 'Pillow'.
| https://heil.world & http://gomey.tk
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
| GNU General Public License for more details.
\======================================================================*/

class GomeyUsers
{
    function GetIP()
    {
      define('USER_IP', $_SERVER['REMOTE_ADDR']);
    }
    function UserLogin($db, $email, $password)
    {

        global $db;
        global $email;
        global $pass;



        $password_check = mysqli_query($db, "SELECT email, password FROM users WHERE email='$email' AND password='$password'");
        $number_of_rows =  $password_check->num_rows;

        if($number_of_rows > 0) {
          //$_SESSION['GMY_USER'] = $username;
          //Header("Location: me.php");
          }
        else {
           $error = '<font color="red">Incorrect username or password!</font>';
        }
    }

}
