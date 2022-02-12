

<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select, textarea {
    width: 99%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    font-family: cursive;
}
    input[type=password], select, textarea {
    width: 99%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    font-family: cursive;
}
     input[type=email], select, textarea {
    width: 99%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    font-family: cursive;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    padding: 20px;
}
    body, html 
 { 
  background: url(219274567-green-backgrounds.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
    h1{
       font-family: "Times New Roman", Times, serif;
        font-size: 300%;
        text-align: center;
    }
</style>
</head>
<body>

    <font color="white"><h1>Registration Form</h1></font>

<div class="container">
  <form method="POST" action="wasteserver.php">
      
   <font color="white"><h3><label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Username">

   
      
    <label for="address">Address</label>
    <textarea id="address" name="address" placeholder="Address" style="height:150px" ></textarea>
      
      <label for="city">City</label>
      <input type="text" name="city" id="city" placeholder="City">
      
    <label for="state">State</label>
    <select id="state" name="state">
        <option value="select">SELECT</option>
      <option value="andhra pradesh">Andhra Pradesh</option>
      <option value="arunachal pradesh">Arunachal Pradesh</option>
      <option value="assam">Assam</option>
        <option value="bihar">Bihar</option>
        <option value="chattisgarh">Chattisgarh</option>
        <option value="goa">Goa</option>
        <option value="gujarat">Gujarat</option>
        <option value="haryana">Haryana</option>
        <option value="himachal pradesh">Himachal Pradesh</option>
        <option value="jammu and kashmir">Jammu and Kashmir</option>
        <option value="jharkhand">Jharkhand</option>
        <option value="karnataka">Karnataka</option>
        <option value="kerala">Kerala</option>
        <option value="madhya pradesh">Madhya Pradesh</option>
        <option value="maharashtra">Maharashtra</option>
        <option value="manipur">Manipur</option>
        <option value="meghalaya">Meghalaya</option>
        <option value="mizoram">Mizoram</option>
        <option value="nagaland">Nagaland</option>
        <option value="odisha">Odisha</option>
        <option value="punjab">Punjab</option>
        <option value="rajasthan">Rajasthan</option>
        <option value="sikkim">Sikkim</option>
        <option value="tamil nadu">Tamil Nadu</option>
        <option value="telangana">Telangana</option>
        <option value="tripura">Tripura</option>
        <option value="uttarakhand">Uttarakhand</option>        
        <option value="uttar pradesh">Uttar Pradesh</option>
        <option value="west bengal">West Bengal</option>
    </select>

      <label for="pin code">Pin Code</label>
      <input type="text" name="pincode" id="pincode" placeholder="PIN of the area" >
      
       
      <label for="userid">UserID</label>
      <input type="text" name="userid" id="userid" placeholder="UserID" >
       
             <label for="aadharno">Aadhar No.</label>
      <input type="text" name="aadharno" id="aadharno" placeholder="Aadhar No." >
      
      
             <label for="mobileno">Mobile No.</label>
      <input type="text" name="mobileno" id="mobileno" placeholder="Mobile" >
       
        <label for="gender">Gender</label>
      <input type="radio" name="gender" value="male" size="10">Male
          <input type="radio" name="gender" value="female" size="10">Female
       </h3> 
      
       
             <label for="vehicle no.">Vehicle No.</label>
      <input type="text" name="vehicleno" id="vehicleno" placeholder="Vehicle No." >
       
    </font>

      <br><input type="submit" value="submit" name="submit" >
      
  </form>
</div>

</body>
</html>
