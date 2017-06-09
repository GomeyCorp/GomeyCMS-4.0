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

// Call Engine 'AL13N'
require_once "al13n.php";

// If logged redirect
if (isset($_SESSION['GMY_user]']))
{
header('Location: dash.php');
}
?>

<!doctype html>
<!--
  GomeyCMS - Advanced Website and Content Management System for heil.world

  Copyright (c) 2017, Arran 'Pillow'.
  https://heil.world & http://gomey.tk

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  GNU General Public License for more details.
-->
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>GomeyCMS powered by Al13n</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
    <script src="//storage.googleapis.com/code.getmdl.io/1.0.1/material.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title"><img src="../images/logo.png"></span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a href="/index.php" class="mdl-layout__tab" >Home</a>
            <a href="/index.php#login" class="mdl-layout__tab" >Login</a>
            <a href="#register" class="mdl-layout__tab" >Register</a>
             <div class="mdl-layout-spacer"></div>
            <a class="mdl-navigation__link" href="/cms/">Powered by GomeyCMS</a>
          </nav>
        </div>
      </div>
      </header>


      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">

          </section>
        </div>

        <div class="mdl-layout__tab-panel" id="login">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h4>Heil.world Register</h4>
              Fill in the below boxes then continue to create a Heil.world Account!</i>

              <b>


              <p>
                <?php
                if (isset($_POST['email']))
                {

                  $errors = false;

                  if (strlen($_POST['email']) < 1 )
                	{
                    $errors = True;
                    echo '<br><span class="mdl-chip mdl-chip--contact">
                    <span class="mdl-chip__contact mdl-color--red mdl-color-red--white">!</span>
                    <span class="mdl-chip__text">Please enter a valid email</span>
                </span>';
                	}

                  if (strlen($_POST['name']) < 1)
                	{
                    $errors = True;
                    echo '<br><span class="mdl-chip mdl-chip--contact">
                    <span class="mdl-chip__contact mdl-color--red mdl-color-red--white">!</span>
                    <span class="mdl-chip__text">Please enter a Display name</span>
                </span>';
                	}

                	if (strlen($_POST['password']) < 1)
                	{
                    $errors = True;
                    echo '<br><span class="mdl-chip mdl-chip--contact">
                    <span class="mdl-chip__contact mdl-color--red mdl-color-red--white">!</span>
                    <span class="mdl-chip__text">Please enter a secure password</span>
                </span>';
                	}

                  if ($_POST['password'] !== $_POST['conpassword'])
                	{
                		echo '<br><span class="mdl-chip mdl-chip--contact">
                    <span class="mdl-chip__contact mdl-color--red mdl-color-red--white">!</span>
                    <span class="mdl-chip__text">Passwords do not match</span>
                </span>';
                    $errors = True;
                	}

                	if ($errors == FALSE)
                	{
                    $email = htmlspecialchars($_POST['email']);
                    $name = htmlspecialchars($_POST['name']);
                    $mobile = htmlspecialchars($_POST['mobile']);
                    $password = md5($_POST['password']);

                    $select_user = "select * from users where email='$email'";
                    $result = mysqli_query($db, $select_user) or die(mysqli_error($db));

                    if(mysqli_num_rows($result) < 1){

                      $date = date('Y-m-d H:i:s');
                      $reg_query = "INSERT INTO users (email, name, mobile, password, verified, rank, regdate) VALUES ('$email', '$name', '$mobile', '$password', '0', '1', '$date')";
                      $reg_usr = mysqli_query($db, $reg_query) or die(mysqli_error($db));
                      echo '<br><span class="mdl-chip mdl-chip--contact">
                      <span class="mdl-chip__contact mdl-color--green mdl-color-green--white">!</span>
                      <span class="mdl-chip__text">Welcome, ' . $name . '. Your accout has been created you can login <a href="/index.php">Here</a></span>
                  </span>';

                  echo '<h1>' . $email . '</h1>';
                } else {
                     echo '<span class="mdl-chip mdl-chip--contact">
                      <span class="mdl-chip__contact mdl-color--red mdl-color-red--white">!</span>
                      <span class="mdl-chip__text">A user with that email already exists!</span>
                  </span>';
                }
                 }
                }
                 ?>
                <form method="POST">
                  <div class="mdl-textfield mdl-js-textfield">
                    <input name="email" class="mdl-textfield__input" type="text" id="email" >
                    <label class="mdl-textfield__label" for="email">Email Adress (Will be verifed)</label>
                  </div></br>
                  <div class="mdl-textfield mdl-js-textfield">
                    <input name="mobile" class="mdl-textfield__input" type="text" id="mobile" >
                    <label class="mdl-textfield__label" for="mobile">Mobile Number (For 2FA & Giveaways)</label>
                  </div></br>
                  <div class="mdl-textfield mdl-js-textfield">
                    <input name="name" class="mdl-textfield__input" type="text" id="name" >
                    <label class="mdl-textfield__label" for="name">Display name (I.e 'The Alien')</label>
                  </div></br>
                  <div class="mdl-textfield mdl-js-textfield">
                    <input name="password" class="mdl-textfield__input" type="password" id="password">
                    <label class="mdl-textfield__label" for="password">Password</label>
                  </div>
                  &nbsp;&nbsp;
                  <div class="mdl-textfield mdl-js-textfield">
                    <input name="conpassword" class="mdl-textfield__input" type="password" id="conpassword">
                    <label class="mdl-textfield__label" for="conpassword">Confirm Password</label>
                  </div>
                  &nbsp;&nbsp;</br>
                  <div class="g-recaptcha" data-sitekey="6LeQ2SQUAAAAAAFrPGlJ9Fj-bHW6A4fqEmzhaDdz"></div></br>
                  <button>Register Account</button>
                </form>
              </p>
              <ul class="toc">
                <a href="#forgot">Terms & Conditions</a>

              </ul>
            </div>
          </section>
        </div>


        <footer class="mdl-footer">
          <div class="mdl-footer--bottom-section">
            <div class="mdl-logo">
              Powered by GomeyCMS
            </div>
          </div>
        </footer>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
