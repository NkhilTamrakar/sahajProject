<?php
include('connection.php');

?>
<html>
    <head>
        <title>Sign Up Page</title>
    </head>
    <link rel="stylesheet" href="./newuser.css">

    <body>
        <p class="headFont" align="center">Welcome to Red Wings</p>
        
<div class="main">
    <h1>UserForm</h1>
<form action="" method="post">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname" ><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <label for="email">Email id : </label>
    <input type="email" name="email" id="email"><br><br>
    <label for="Mobile number">Mobile Number:</label>
    <input type="number" name="mobile" id="mobile"><br><br>
    <label for="street no.">Street Number:</label>
    <input type="text" name="streetnum" id="address"><br><br>
    <label for="address">city</label>
    <input type="text" name="city" id="address"><br><br>
    <label for="address">State</label>
    <input type="text" name="states" id="address"><br><br>
    <label for="address">pincode</label>
    <input type="text" name="pincode" id="address"><br><br>
    <label for="number">Aadhaar number:</label>
    <input type="number" name="adharnumber" id="aadhaar"><br><br>
    <label for="bloodGroup">Blood Group</label>
    <input type="text" name="bloodgrp"><br><br>
    <label for="age">Age</label>
    <input type="number" name="age"><br><br>
    <!-- <label for="uname">user name:</label>
    <input type="text" id="uname" name="uname"><br><br>
    <label for="password">password:</label>
    <input type="password" id="password" name="password"><br><br> -->
    <input type="submit"  name="sub" value="Save">
  </form>
  <?php
  if(isset($_POST['sub']))
  {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $streetnum=$_POST['streetnum'];
    $city=$_POST['city'];
    $states=$_POST['states'];
    $pincode=$_POST['pincode'];
    $adharnumber=$_POST['adharnumber'];
    $bloodgrp=$_POST['bloodgrp'];
    $age=$_POST['age'];
    $q=$db->prepare("INSERT INTO user(fname,lname,email,mobile,streetnum,city,states,pincode,adharnumber,bloodgrp,age) VALUES 
    (:fname,:lname,:email,:mobile,:streetnum,:city,:states,:pincode,:adharnumber,:bloodgrp,:age)");
    $q->bindValue('fname',$fname);
    $q->bindValue('lname',$lname);
    $q->bindValue('email',$email);
    $q->bindValue('mobile',$mobile);
    $q->bindValue('streetnum',$streetnum);
    $q->bindValue('city',$city);
    $q->bindValue('states',$states);
    $q->bindValue('pincode',$pincode);
    $q->bindValue('adharnumber',$adharnumber);
    $q->bindValue('bloodgrp',$bloodgrp);
    $q->bindValue('age',$age);

    if($q->execute())
    {
      echo "<script>alert('user registration successfull')</script>";
    }
    else
    {
      echo "<script>alert('user registration unsuccessfull')</script>";
    }


  }

  ?>

</div> 

              <p class="message">Already registered? <a href="login.php">Sign In</a></p>
            </form>
          </div>
        </div>
</body>
</html>
