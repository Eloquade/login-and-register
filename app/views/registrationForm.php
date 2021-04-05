<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="<?php echo URLROOT ?>/static/dist/Styles/css/styles.css">
</head>
  <body>
    <form action = "<?php echo URLROOT; ?>/user/registrationForm" method ='POST'>
  <div class="wrapper">
      <div class="title">
        Registration Form
      </div>
      <div class="form">
         <div class="inputfield">
            <label>First Name</label>
            <input type="text" name="FirstName" class="input">
         </div>
          <div class="inputfield">
            <label>Last Name</label>
            <input type="text" name="LastName" class="input">
         </div>
         <div class="inputfield">
            <label>Country</label>
            <input type="text" name="County"class="input">
         </div>
        <div class="inputfield">
            <label>Age</label>
            <input type="text" name = "Age" class="input" autocomplete="off">
         </div>
          <div class="inputfield">
            <label>Gender</label>
            <div class="custom_select">
              <select>
                <option name = "Gender" value="">Select</option>
                <option name = "Gender" value="male">Male</option>
                <option name = "Gender" value="female">Female</option>
              </select>
            </div>
         </div>
          <div class="inputfield">
            <label>Email</label>
            <input type="text" name = "EmailAddress" class="input" autocomplete="off">
         </div>
        <div class="inputfield">
            <label>Phone Number</label>
            <input type="text" name = "PhoneNumber" class="input" autocomplete="off">
         </div>
        <div class="inputfield">
            <label>Address</label>
            <textarea class="textarea" name = "Address" autocomplete="off"></textarea>
         </div>
        <div class="inputfield">
            <label>Postal Code</label>
            <input type="text" name = "PostalCode" class="input" autocomplete="off">
         </div>
        <div class="inputfield terms">
            <label class="check">
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
            <p>Agreed to terms and conditions</p>
         </div>
        <div class="inputfield">
          <input type="submit" id="submit" value="Submit" class="btn">

        </div>
      </div>
  </div>
  </body>
</html>
