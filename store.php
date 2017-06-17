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

// If user isn't logged in redirect
if (!isset($_SESSION['GMY_user']))
{
header('Location: index.php');
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
    <title>Heil.world Dashboard</title>

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
          <span class="mdl-layout-title"><a href="/" class="logo">Heil.world</a></span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a href="#overview" class="mdl-layout__tab" >Home (<?php echo $_SESSION['GMY_name']?>)</a>
            <a href="/forums/" class="mdl-layout__tab" >Gomey</a>
            <a href="/boards/" class="mdl-layout__tab" >/boards/</a>
            <a href="/gaff.php" class="mdl-layout__tab" >GaffHub</a>
            <a href="/cancermerchant.php" class="mdl-layout__tab" >Cancer Merchant</a>
            <a href="/corporate.php" class="mdl-layout__tab" >Corporate</a>
            <a href="/store.php" class="mdl-layout__tab" >Store</a>
            <a href="/logout.php" class="mdl-layout__tab" >Logout</a>
             <div class="mdl-layout-spacer"></div>
            <a class="mdl-navigation__link" href="#">Powered by GomeyCMS</a>
          </nav>
        </div>
      </div>
      </header>


      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h4><img src="/images/store.png"></h4>

            </br></br><br>
          </section>
        </div>

        <div class="mdl-layout__tab-panel" id="login">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h4>Heil.world Store</h4>
              <b>Fuck Alien rights Tee</b><br>
              SHIRTS ARE MADE TO ORDER -- PLEASE ALLOW UP TO 7 DAYS FOR PRINTING, EXPECT 3 ADDITIONAL DAYS FOR SHIPPING.<br><br>
              <center><img src="/images/alienteef.jfif">&nbsp;<img src="/images/alienteeb.jfif"><br><br>
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="serveraj@live.co.uk">
                <input type="hidden" name="lc" value="BM">
                <input type="hidden" name="item_name" value="AlienTee">
                <input type="hidden" name="item_number" value="al13n">
                <input type="hidden" name="button_subtype" value="services">
                <input type="hidden" name="no_note" value="0">
                <input type="hidden" name="currency_code" value="GBP">
                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                <table>
                  <tr><td><input type="hidden" name="on0" value=""F**K ALIEN RIGHTS"">"F**K ALIEN RIGHTS"</td></tr><tr><td><select name="os0">
	                     <option value="With slogan">With slogan £10.00 GBP</option>
	                      <option value="Without slogan">Without slogan £7.00 GBP</option>
                      </select> </td></tr>
                      <tr><td><input type="hidden" name="on1" value="Size">Size</td></tr><tr><td><select name="os1">
	                       <option value="Small">Small </option>
	                        <option value="Medium">Medium </option>
	                         <option value="Large">Large </option>
                         </select> </td></tr>
                       </table>
                       <input type="hidden" name="currency_code" value="GBP">
                       <input type="hidden" name="option_select0" value="With slogan">
                       <input type="hidden" name="option_amount0" value="10.00">
                       <input type="hidden" name="option_select1" value="Without slogan">
                       <input type="hidden" name="option_amount1" value="7.00">
                       <input type="hidden" name="option_index" value="0">
                       <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                       <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                     </form>
</center>

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
