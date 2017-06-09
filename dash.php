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
          <span class="mdl-layout-title"><img src="../images/logo.png"></span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a href="#overview" class="mdl-layout__tab" >Home (<?php echo $_SESSION['GMY_name']?>)</a>
            <a href="/forums/" class="mdl-layout__tab" >Gomey</a>
            <a href="/boards/" class="mdl-layout__tab" >/boards/</a>
            <a href="/gaff.php" class="mdl-layout__tab" >GaffHub</a>
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
              <h4>Heil.world - The greatest thing since the holocaust!</h4>

            </br></br><br>
          </section>
        </div>

        <div class="mdl-layout__tab-panel" id="login">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h4>Heil.world Dashboard   <div class="material-icons mdl-badge mdl-badge--overlap" data-badge="0">account_box</div>          </h4>
              Welcome to the Heil.world dashboard. This is still in BETA, dont expect much.

              <b>


              <p>


              </p>
              <ul class="toc">
                <a href="/forums/">Gomey</a>
                <a href="/boards/">/boards/</a>
                <a href="/gaff.php">GaffHUB</a>
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
