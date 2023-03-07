<?php
include('insert.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
  <div style="text-align:center">
    <b><u><h2>Contact Us</h2></u></b>
  
  </div>
  <div class="row">
    <div class="column">
      <img src="cc.jpg" style="width:100%">
    </div>
    <div class="column">
      <p style="color:red"><?php if(!empty($msg)){echo $msg; }?></p>

      <form action="" method="POST">
        <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" id="first_name" name="first_name" placeholder="">
        <label for="lname">Last Name</label>
        <input type="text" id="last_name" name="last_name" placeholder="">
        <label for="country"> Email Address</label>
        <input type="text" id="email" name="email_address" placeholder="">
        <label for="subject">Subject</label>
        <input type="text" id="sub" name="sub" placeholder="">
        <label for="subject">Your Message</label>
        <textarea id="Your Message" name="your_message" placeholder="" style="height:170px"></textarea>
        <!-- <input type="submit" value="Submit"> -->
        <button type="submit" name="create">Submit</button>
        </div> 
       </form>
    </div>

</div>

</body>
</html>
                           