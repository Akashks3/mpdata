<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link href="regsiter.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
    function validateForm() {
        var username = document.getElementById('username').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        if (username == '' || email == '' || password == '') {
            alert('Please fill in all fields.');
            return false;
        }

        // Add more validation rules as needed

        return true;
    }
</script>

</head>
<body>
<?php
    require('db.php');
    function sanitizeInput($input) {
        return mysqli_real_escape_string($con, stripslashes($input));
    }

    // Function to validate email
    function validateEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    // Function to validate password (you can add more complex rules as needed)
    function validatePassword($password) {
        return strlen($password) >= 6; // Password must be at least 6 characters long
    }

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $stname= stripslashes($_REQUEST['stname']);
        $stname= mysqli_real_escape_string($con, $stname);
        $stdob= stripslashes($_REQUEST['stdob']);
        $stdob= mysqli_real_escape_string($con, $stdob);
        $firstgender= stripslashes($_REQUEST['firstgender']);
        $firstgender= mysqli_real_escape_string($con, $firstgender);
        $firstgroup= stripslashes($_REQUEST['firstgroup']);
       $firstgroup= mysqli_real_escape_string($con, $firstgroup);
        $father=stripslashes($_REQUEST['father']);
       $father= mysqli_real_escape_string($con, $father);
       $secondname=stripslashes($_REQUEST['secondname']);
       $secondname= mysqli_real_escape_string($con, $secondname);
       $seconddob=stripslashes($_REQUEST['seconddob']);
       $seconddob= mysqli_real_escape_string($con, $seconddob);
        $secondgender=stripslashes($_REQUEST['secondgender']);
       $secondgender= mysqli_real_escape_string($con, $secondgender);
       $secondgroup =stripslashes($_REQUEST['secondgroup']);
       $secondgroup= mysqli_real_escape_string($con, $secondgroup);
       $mothere=stripslashes($_REQUEST['mothere']);
        $mothere= mysqli_real_escape_string($con, $mothere);
        $ddress=stripslashes($_REQUEST['a_ddress']);
        $ddress= mysqli_real_escape_string($con, $ddress);
        $istrict=stripslashes($_REQUEST['d_istrict']);
       $istrict= mysqli_real_escape_string($con, $istrict);
       $tate=stripslashes($_REQUEST['ate']);
       $tate= mysqli_real_escape_string($con, $tate);
        $hone=stripslashes($_REQUEST['p_hone']);
       $hone= mysqli_real_escape_string($con, $hone);
       $pincod=stripslashes($_REQUEST['p_incode']);
       $pincod= mysqli_real_escape_string($con, $pincod);
       if (!validateEmail($email)) {
        echo "<div class='form'>
              <h3>Invalid email address.</h3><br/>
              <p class='link'>Click here to <a href='register_process.php'>registration</a> again.</p>
              </div>";
        exit();
    }

    // Validate password
    if (!validatePassword($password)) {
        echo "<div class='form'>
              <h3>Password must be at least 6 characters long.</h3><br/>
              <p class='link'>Click here to <a href='register_process.php'>registration</a> again.</p>
              </div>";
        exit();
    }

    // Add more validation as needed for other fields


        $query    = "INSERT into `reg` (username,email, password, create_datetime,stname,stdob,firstgender,firstgroup,father,secondname,seconddob,secondgender,secondgroup,mothere,a_ddress,d_istrict,ate,p_hone,p_incode)
         VALUES ('$username', '$email','" . md5($password) . "','$create_datetime','$stname','$stdob', '$firstgender', '$firstgroup', '$father', '$secondname', '$seconddob', '$secondgender', '$secondgroup', '$mothere', '$ddress', '$istrict','$tate','$hone', '$pincod')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register_process.php'>register</a>again</p>
                  </div>";
        }
    } else {

?>
<form class="form" action="" method="post" onsubmit="return validateForm()">
        <div class="container">
        <h1 class="login-title"><center>Registration now</center></h1>

        <div class="input-container">
 <label for="uname"class="input-label"Username>username</label>
 <br>
        <input type="text" class="input-field" name="username" placeholder="Username" required />
        </div>
        <div class="input-container">
    <label for="email"class="input-label"email>email</label>
    <br>
             <input type="text" class="input-field" name="email" placeholder="Email Adress">
    </div>
   <div class="input-container">

  <label for="password"class="input-label"email>password</label>
  <br>
        <input type="password" class="input-field" name="password" placeholder="Password">
</div>
    <div class="input-container">
    <label for="Name" class="input-label">first child's name</label>
    <br>
    <input type="text" name="stname" class="input-field"placeholder="first child's Name " required>
    </div>
    <div class="input-container">

        <label for="dob"class="input-label" child Date of Birth:> first child date of birth</label>
        <br>
        <input type="date"name="stdob" placeholder="second child" class="input-field" id="birthdate" required>
    </div>
    <br>
    <div class="input_container">
								<label class="input-label">
									Gender 
								</label>
                                <br>
									<input type="radio" name="firstgender" value="female" >
									<label for="rg-female">
										Female
									</label>
									<input type="radio" name="firstgender" value="male">
									<label for="rg-male">
										Male
									</label>
							</div>
						<br>
        <div class="input-container">
    <label for="Name"class="input-label">first blood group</label>
    <br>
    <select name="firstgroup" class="input-field"required>
            <option value="0">
            select 
            </option>
                      <option value="1">A RhD positive (A+)</option>
                      <option value="2">A RhD negative (A-)</option>
                      <option value="3">B RhD positive (B+)</option>
                      <option value="4">B RhD negative (B-)</option>
                      <option value="5">O RhD positive (O+)</option>
                      <option value="6">O RhD negative (O-)</option>
                      <option value="7">AB RhD positive (AB+)</option>
                      <option value="8">AB RhD negative (AB-)</option>
        </select></div>
<div class="input-container">
    <label for="Name"class="input-label">fathername</label>
    <br>
    <input type="text" placeholder="fathername" name="father"class="input-field" required>
</div>
    <div class="input-container">
        <label for="Name" class="input-label">second child's name</label>
        <br>
    <input type="text" name="secondname" class="input-field"  placeholder="second child's Name"required>
    </div>
    <div class="input-container">

        <label for="dob"class="input-label" second child Date of Birth:>second child date of birth</label>
        <br><input type="date"  name="seconddob" placeholder="second child" class="input-field"required>
    </div>
    <div class="input_container">
								<label class="input-label">
									Gender 
								</label>
                                <br>
									<input type="radio" name="secondgender" value="female" >
									<label for="rg-female">
										Female
									</label>
									<input type="radio" name="secondgender" value="male">
									<label for="rg-male">
										Male
									</label>
							</div>
<br>
    <div class="input-container">
    <label for="Name"class="input-label">second bloodgroup</label>
    <br>
    <select name="secondgroup"class="input-field"required>
            <option value="0">
            select 
            </option>
                      <option value="1">A RhD positive (A+)</option>
                      <option value="2">A RhD negative (A-)</option>
                      <option value="3">B RhD positive (B+)</option>
                      <option value="4">B RhD negative (B-)</option>
                      <option value="5">O RhD positive (O+)</option>
                      <option value="6">O RhD negative (O-)</option>
                      <option value="7">AB RhD positive (AB+)</option>
                      <option value="8">AB RhD negative (AB-)</option>
        </select>
</div>
<div class="input-container">
    <label for="Name"class="input-label">mothername</label>
    <br>
    <input type="text" placeholder="mothername" name="mothere"class="input-field"required>
</div>
   <div class="input-container">
    <label for="Name"class="input-label">address</label>
    <br>
    <input type="address" placeholder="address" name="a_ddress"class="input-field"required>
</div>
<div class="input-container">
    <label for="name"class="input-label"Username>district</label>
    <br>
       <input type="text" placeholder="district" name="d_istrict" class="input-field"required>
   </div>
    <div class="input-container">
    <label for="Name" class="input-label">state</label>
    <br>
    <select name="ate" class="input-field"required>
            <option value="0">
            select 
            </option>
                      <option value="1">Andhra Pradesh</option>
                      <option value="7"> Arunachal Pradesh</option>
                      <option value="2"> Assam(Dispur)</option>
                      <option value="3">Bihar(Patna)</option>
                      <option value="4">Chhattisgarh(Raipur)</option>
                      <option value="5">Goa(Panaji)</option>
                      <option value="6">Gujarat(Gandhinagar)</option>
                      <option value="7"> Haryana(Chandigarh)</option>
                      <option value="8">Himachal Pradesh(Shimla)</option>
                      <option value="9">Jharkhand(Ranchi)</option>
                      <option value="10">Karnataka(Bangalore)</option>
                      <option value="11">Kerala(Thiruvananthapuram)</option>
                      <option value="12">Madhya Pradesh(Bhopal)</option>
                      <option value="13">Maharashtra(Mumbai)</option>
                      <option value="14">Manipur(Imphal)</option>
                      <option value="15">Meghalaya(Shillong)</option>
                      <option value="16">Mizoram(Aizawl)</option>
                      <option value="17">Nagaland(Kohima)</option>
                      <option value="18">Odisha(Bhubaneshwar)</option>
                      <option value="19">Punjab(Chandigarh)</option>
                       <option value="20">Rajasthan(Jaipur)</option>
                     <option value="21">Sikkim(Gangtok)</option>
                      <option value="22">Tamil Nadu(Chennai)</option>
                        <option value="23">Telangana(Hyderabad)</option>
                        <option value="24">Tripura(Agartala)</option>
                  <option value="25">Uttarakhand(Dehradun)</option>
                  <option value="26">Uttar Pradesh(Lucknow)</option>
                   <option value="27">West Bengal(Kolkata)</option>
                     </select>
    </div>
<div class="input-container">
        <label for="Name"class="input-label">phone.no</label>
        <br>
        <input type="tel" name="p_hone" placeholder="Phone No."class="input-field"required>
    </div>
<div class="input-container">
    <label for="name"class="input-label">pincode</label>
    <br>
       <input type="text" placeholder="Enter pincode" name="p_incode" class="input-field"required>
   </div>
    <input type="submit" name="submit" value="Register" class="input-fild">
        <h5 class="link">Already have an account? 
            <br><br><a href="login.php" class="input-fild">login here</a></h5>
        </div></div>
</form>
<?php
    }
?>
</body>
</html>
