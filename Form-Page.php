<?php
//get post and connect to DB
require_once "DataBaseConnection.php";
$sneaky = @$_POST['sneaky'];
$fname = @$_POST['FirstName'];
$lname = @$_POST['LastName'];
$email = @$_POST['Email'];
$bday = @$_POST['Birthday'];
$pass = @$_POST['Password'];
$action = @$_POST['Action'];
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personal Info Form</title>
        <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form method = "post" action ="Form-Page.php" class="form-horizontal">
                        <div class="form-group">
                            <?php
                            if (isset($_POST['Submit']) || $sneaky == 1) {
                                //do the task we need to do using a switch
                                print("<fieldset>");
                                switch ($action) {
                                    case "Insert":
                                        include 'Add.php';
                                        break;
                                    case"Update":
                                        include 'Update.php';
                                        break;
                                    case"Search":
                                        include 'Search.php';
                                        break;
                                    default: print("Something is wrong");
                                }
                                print<<<HTML
           <button style="width:20%" id="submit" name="Submit" class="btn btn-primary"><a href="Form-Page.php" class="btn btn-info" style="margin-top: 1.5em;color: white;"><<<<<-Back</a></button>                    
    <input type='hidden' value=0 name='sneaky'></input></fieldset>
HTML;
                            } else {
                                //show the form
                                print <<<TACO
<fieldset>

<!-- Form Name -->
<legend>Personal Info Form</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="FirstName">First Name</label>  
  <div class="col-md-4">
  <input id="FirstName" name="FirstName" type="text" placeholder="First Name" class="form-control input-md" required="">
  <span class="help-block">Enter your first name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="LastName">Last Name</label>  
  <div class="col-md-4">
  <input id="LastName" name="LastName" type="text" placeholder="Last Name" class="form-control input-md" required="">
  <span class="help-block">Enter your last name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-4">
  <input id="Email" name="Email" type="text" placeholder="Email Address" class="form-control input-md" required="">
  <span class="help-block">Enter your email address</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Birthday">Birthday</label>  
  <div class="col-md-4">
  <input id="Birthday" name="Birthday" type="text" placeholder="XX/XX/XXXX" class="form-control input-md" required="">
  <span class="help-block">Enter your birthday</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Password">Password</label>
  <div class="col-md-4">                     
    <input id="Password" name="Password" type="password" placeholder="Password" class="form-control input-md" required="">
  <span class="help-block">Please enter a password</span>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Action">Select One</label>
  <div class="col-md-4">
    <select id="Action" name="Action" class="form-control">
      <option value="Search">Search</option>
      <option value="Insert">Add</option>
      <option value="Update">Update</option>
    </select>
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <!-- <label class="col-md-4 control-label" for="Submit">Submit</label>-->
  <div class="col-md-4">
  <button id="submit" name="Submit" class="btn btn-primary" type="submit">Submit</button>
   
  </div>
</div>                                
<input type="hidden" value=1 name="sneaky"></input>
</fieldset>
TACO;
                            }
                            ?>
                        </div>
                    </form>
        </div>
      </div>
      
    </body>
</html>
  <!-- Theme CSS -->
<style type="text/css">

 table { 
  width: 750px; 
  border-collapse: collapse; 
  margin:50px auto;
  }

/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
  }

th { 
  background: forestgreen; 
  color: white; 
  font-weight: bold; 
  }

td, th { 
  padding: 5px; 
  border: 1px solid #ccc; 
  text-align: left; 
  font-size: 18px;
  }

/* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

  table { 
      width: 100%; 
  }

  /* Force table to not be like tables anymore */
  table, thead, tbody, th, td, tr { 
    display: block; 
  }
  
  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr { 
    position: absolute;
    top: -9999px;
    left: -9999px;
  }
  
  tr { border: 1px solid #ccc; }
  
  td { 
    /* Behave  like a "row" */
    border: none;
    border-bottom: 1px solid #eee; 
    position: relative;
    padding-left: 50%; 
  }

  td:before { 
    /* Now like a table header */
    position: absolute;
    /* Top/left values mimic padding */
    top: 6px;
    left: 6px;
    width: 45%; 
    padding-right: 10px; 
    white-space: nowrap;
    /* Label the data */
    content: attr(data-column);

    color: #000;
    font-weight: bold;
  }

}

  *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: max-content;;
  margin: 2px auto;
  padding: 1px 0px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}
span.help-block {
    color: red;
}
input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 8px;
  width: 50%;
  background-color: white;
  color: black;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 10px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: max-content) {

  form {
    max-width: max-content;
  }

}

</style>
