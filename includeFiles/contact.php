<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;


    }

    .header {
      width: 100%;
      /* box-shadow: 0 0 5px #B3B6B7 ; */

      background-color: white;
      box-shadow: 0 0 3px gray;
      position: fixed;
      /* color:white; */

    }

    .navbar {
      width: 80%;
      margin: auto;

      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      padding: 10px;

    }

    .navbar ul li {
      list-style-type: none;
      display: inline-block;
      margin: 0 20px;
      position: relative;

    }

    .navbar ul li a {
      text-decoration: none;
      color: #6C3483;
      font-size: 18px;
      font-weight: bold;

    }

    .navbar ul li::after {
      content: '';
      height: 3px;
      width: 0;
      background: #1F618D;
      position: absolute;
      left: 0;
      bottom: -5px;
      transition: 0.1s;
    }

    .navbar ul li:hover::after {
      width: 100%;
    }

    .logo {
      width: 150px;
      height: 70px;

    }

    .logo a {
      text-decoration: none;
      color: white;
    }
    .logo a.active{
      font-weight: bold;
    }

    .logo a img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
    }
    /* body{
      width:100%;
      min-height:100vh;
    } */
    form{
      width:500px;
      position:absolute;
      top:50%;
      left:50%;
      transform: translate(-50%, -50%);
      background-color:rgba(128,128,128,0.1);
      padding:20px;
      border-radius:5px;

      

    }
  </style>
</head>

<body>
<div class="header">
    <div class="navbar">
      <div class="logo">
        <a href="#">
          <img src="../images/logo3.png" alt="">
        </a>
      </div>
      <ul>
        <li><a href="../php/home.php" class="active">Home</a></li>
        <li><a href="../php/VisitPlace.php">Place To Visit</a></li>
        <li><a href="../php/VisitTour.php">Package Tour</a></li>
        <li><a href="../php/VisitHotel.php">Hotel</a></li>
        <li><a href="../php/VisitTranspotation.php">Transportation</a></li>

      </ul>

    </div>


  </div>
  <form >
    <h2>Contact US</h2>
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="name" class="form-control">

    </div>
    <div class="mb-3">
      <label class="form-label">Email address</label>
      <input type="email" class="form-control">

    </div>
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control">
    </div>
    <div class="mb-3">
      <label  class="form-label">Message</label>
      <textarea class="form-control"  rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</body>

</html>