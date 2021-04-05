<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="<?php echo URLROOT ?>/static/dist/Styles/css/styles.css">
</head>
  <body>
  <form action = "<?php echo URLROOT; ?>/index" method ='POST' onSubmit="alert('Thank you!');">
    <div class="wrapper">
        <div class="title">
          Registration Form
        </div>
        <div class="form">
           <div class="inputfield">
              <label>First Name</label>
              <input type="text" name="FirstName"  required class="input" autocomplete="off">
           </div>
            <div class="inputfield">
              <label>Last Name</label>
              <input type="text" name="LastName" required class="input" autocomplete="off">
           </div>
           <div class="inputfield">
              <label>Country</label>
              <input type="text" name="County"class="input" required autocomplete="off">
           </div>
          <div class="inputfield">
              <label>Age</label>
              <input type="number" name = "Age" required class="input" autocomplete="off">
           </div>
            <div class="inputfield" >
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
              <input type="email" name = "EmailAddress" required class="input" autocomplete="off">
           </div>
          <div class="inputfield">
              <label>Phone Number</label>
              <input type="number" name = "PhoneNumber" required class="input" autocomplete="off">
           </div>
          <div class="inputfield">
              <label>Address</label>
              <textarea class="textarea" name = "Address" required autocomplete="off"></textarea>
           </div>
          <div class="inputfield">
              <label>Postal Code</label>
              <input type="number" name = "PostalCode" required class="input" autocomplete="off">
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
  </form>  
  </body>
</html>
