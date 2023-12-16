<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Viist Cambodia</title>
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
      font-weight:bold;
    }

    .logo a img {
      width: 100%;
      height: 100%;
      border-radius: 50%;
    }
    .about {
      display: grid;
      grid-template-columns: 1fr;
      width: 50%;
      margin: auto;
    }

    img {
      border-radius: 5px;
    }

    p {
      font-size: 18px;
      text-align: justify;
      width: 600px;
      line-height: 1.5rem;
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
  <!-- about --><br><br><br><br><br><br>
  <section class="about" id="about">
    <div class="about-img">
      <img src="../images/374941822Siem Reap Teample.jpg" alt="" width="80%;">
    </div>
    <div class="about-text">
      <h1>About Cambodia</h1>
      <p>Cambodia, officially the Kingdom of Cambodia, is a country in Mainland Southeast Asia, spanning an area of
        181,035 square kilometres, bordered by Thailand to the northwest, Laos to the north, Vietnam to the east, and
        the Gulf of Thailand to the southwest. Even though it’s a small country, Cambodia’s history is rich and its
        sites unique. You could easily spend weeks
        exploring it. But if you only have seven days to spend in the Kingdom of Cambodia, here’s a suggested itinerary
        to make sure you hit up all the important sights, based loosely on a tour I took to Cambodia with Intrepid
        Travel.</p>
      <a href="#" class="btn"> Show More</a>
    </div>

  </section>

</body>

</html>
