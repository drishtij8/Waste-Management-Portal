<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Driver Registration</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1 class="brand"><span>Waste Management Portal</span></h1>
    <div class="wrapper animated bounceInLeft">
      <div class="company-info">
        <h3>Driver registration</h3>
        <ul>
          
          <li><i class="fa fa-envelope"></i> Enter the information of driver</li>
        </ul>
      </div>
      <div class="contact">
        <h3>Enter the Fields</h3>
        <form method="post" action="driver.php">
          <p>
            <label>Name</label>
            <input type="text" name="name">
          </p>
          <p>
            <label>Address</label>
            <input type="text" name="addr">
          </p>
          <p>
            <label>Aadhar Card Number</label>
            <input type="text" name="adrcrd">
          </p>
          <p>
            <label>Phone Number</label>
            <input type="text" name="phone">
          </p>
          <p class="full">
            <label>Assigned vehicle number</label>
            <textarea name="message" rows="1"></textarea>
          </p>
          <p class="full">
            <button href="driver.php">Submit </button>
          </p>
        </form>
      </div>
    </div>
  </div>

<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
<script src="index.js"></script>
</body>
</html>