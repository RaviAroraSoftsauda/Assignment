<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//get the post variables and include the required pages
//include "Update.php";
//include "Search.php";
//include "Add.php";
require_once "DataBaseConnection.php";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Results</title>
        <!-- Custom fonts for this theme -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- Theme CSS -->

        <link href="../../../css/freelancer.min.css" rel="stylesheet" type="text/css">
        <style>
            
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <h3>First Name</h3>
                    <?php
                        echo $row['FirstName'];
                    ?>
                </div>
                <div class="col-3">
                    <h3>Last Name</h3>
                    <?php
                    print($lname["LasrtName"]."</h3>");
                    ?>
                </div>
                <div class="col-6">
                    <h3>Email</h3>
                    <?php
                    print($email['name']."</p>");
                    
                    ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="../../../vendor/jquery/jquery.min.js" type="text/javascript"></script>
        <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!-- Plugin JavaScript -->
        <script src="../../../vendor/jquery-easing/jquery.easing.min.js" type="text/javascript"></script>

        <!-- Contact Form JavaScript -->
        <script src="../../../js/jqBootstrapValidation.min.js" type="text/javascript"></script>
        <script src="../../../js/contact_me.min.js" type="text/javascript"></script>

        <!-- Custom scripts for this template -->
        <script src="../../../js/freelancer.min.js" type="text/javascript"></script>
    </body>
</html>
