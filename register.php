<?php
session_start();
require_once 'include/DB_Functions.php';
$db = new DB_Functions();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="s.css">
<link href="admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="slider.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function goback()
{
  alert("hi");
  history.go(-1);
}
</script>
<title>Register</title>
</head>

<body>

<!-- <div id="header">
Stores and Purchase Management

</div> -->
<div>
<div id="sidebar">
<?php
?>
</div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div>
 <?php
 //echo "Username: ".$_SESSION['login_user'];
 //$uname = $_SESSION['login_user'];
 //echo "testing: ".$uname;
 ?>
</div>
<!-- <form action="register.php" method="post" name="frm">
<table cellpadding="0", cellspacing="0" border="2">
<tr><th>Username: </th><td><input name="uname" type="text" size="40" /></td></tr>
</table>
<input name = "sub" type="submit" value="submit"/><br /> -->


  <div class="container">
    <section class="register">
      <h1>Registration Portal for Stores and Purchases</h1>
     <form action="register.php" method="post" name="frm">
      <div class="form-group">
      <h3>Username</h3>
       <input name="uname" type="text" size="40" class ="form-control"/>
      <div class="reg_section password">
      </div>
     <input name = "sub" type="submit" value="submit"/><br >
      </form>
   



































<!-- <table class="table" border="0" bordercolor = '#ffffff' cellspacing = "4">
      
      <tr>
        <td>Full Name:</td>
        <td><input type="text" name="nametxt" height = "100" /></td>
      </tr>
      <tr>
        <td>Roll No.:</td>
        <td><input type="text" maxlength = "11" name="rolltxt" /></td>
      </tr>
      <tr>
        <td>Branch:</td>
        <td>
          <select name = "branchtxt">
          <option value="CSE">Computer Science & Engineering</option>
          <option value="EE">Electrical Engineering</option>
          <option value="ME">Mechanical Engineering</option>
          <option value="SS">Systems Science</option>
          <option value="Energy">M.tech Energy</option>
          <option value="ICT">M.tech ICT</option>
          <option value="SS">M.tech SS</option>
        </select>
      </td>
      </tr>
      <tr>
        <td>DOB:</td>
        <td><html:text property="dob" size="10" readonly="true"  errorStyleClass="error_style"/>
                    <input type="text" id="datepicker" size="10" name ="dobtxt" />
                    <html:messages property="dob" id="error">
                      <span class="red_text"><bean:write name="error" /></span>
                    </html:messages></td>
      </tr>
      <tr>
        <td>Blood Group:</td>
        <td>
        <select name = "bgrouptxt">
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="">NULL</option>
        </select>
      </td>
      </tr>
      <tr>
      <td>Contact :</td>
        <td>
        <input maxlength = "15" type="text" name="contact" /> 
      </td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input maxlength = "15" type="password" name="pass1" /> (max 15 chars)</td>
      </tr>
      <tr>
        <td>Confirm Password:</td>
        <td><input maxlength = "15" type="password" name="pass2" /></td>
      </tr>
      <tr>
        <td></td>
        <td>
        <input type="submit" class="btn btn-default" value = "Register"/>
      </td>
      </tr>
    </table><br> -->


<?php

  if(isset($_POST['uname'])&&isset($_POST['sub']))
  {
  $uname=$_POST['uname'];
  $_SESSION['serial'] = '2';
  $result=$db->checkUser($uname);
    
      if($result==1)
      {
        $_SESSION['login_user'] = $uname;
        
         header("Location:register2.php");

      }
      elseif ($result == 4) {
        // header("Location:index.php");
      }
      else
      {

        echo "You are not a member of IITJ";
      }
    # code...
  

}
?>

 </section>
  </div>
</body>
</html>