<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Visit Cambodia</title>
  <style>
    body {
      /* background-color: black;
      color: white; */
      background: white;
      color: black;
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    /* variables */
    :root {
      --main-color: #bc9667;
      --second-color: #edeae3;
      --text-color1: #1b1b1b;
      --text-color: #fff;
      /* box shadow */
      --box-shadow: 2px 2px 10px 4px rgb(14 55 54 /15%);
    }

    section {
      padding: 50px 100px;
    }

    .home {
      width: 100%;
      min-height: 100vh;
      /* background: url('../images/374941822Siem Reap Teample.jpg'); */
      background: url('../images/13174900622 Days Temples with Sunrise – Small Group.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: center;
      gap: 1.5rem;


    }

    .home .home-text h1 {
      text-transform: uppercase;
      letter-spacing: 0.3rem;
      color:white;
      font-size: 3rem;
      font-weight: 400px;
    }

    .home .home-text p {
      line-height: 1.5rem;
      color: white;
      font-weight: 400px;
      text-align: justify;
      margin-bottom: 2rem;
    }

    .home .home-text .btn {
      text-decoration: none;
      color: white;
      background-color:  #ae7c3f;
      padding: 10px 30px;
      border-radius: 5px;
      font-weight: 400px;
      cursor: pointer;
      transition: 0.3s;

    }

    .home .home-text .btn:hover {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <center>
    <table style="width:100%;">
      <tr>
        <td colspan="2" style="width:100%;">
        <?php include('../includeFiles/header.php'); ?>
         
          <!-- Home -->
          <section class="home" id="home">
            <div class="home-text">
              <h1>Start Your Day <br> With Cambodia</h1>
              <p>Even though it’s a small country, Cambodia’s history is rich and its sites unique. You could easily spend weeks exploring it. But if you only have seven days to spend in the Kingdom of Cambodia, here’s a suggested itinerary to make sure you hit up all the important sights, based loosely on a tour I took to Cambodia with Intrepid Travel.</p>
              <a href="#" class="btn"> Show More</a>
            </div>

          </section>
          
        </td>
      </tr>
      <tr>
        <td>

          <div style="width:80%; margin:auto; margin-top:3rem;">
            <!-- <hr style="width:1340px;"> -->
            <h2 style="
           text-align:center; color:#6C3483 ; letter-spacing:0.3rem; margin-top:2rem;">PLACE TO VISIT</h2>
            <p style="color:black; ; font-size:16px; text-align:center; padding:20px 20px;">
              The vibrant and diverse attractions of Cambodia have captured my attention, and I am eager to explore the
              country</p>
            <?php
            include('../includeFiles/PlaceToVisit.php');
            ?>


          </div>


          <div style="width:90%; margin:auto;  margin-top:3rem; margin-bottom:20px;">
            <hr style="width:1340px;">

            <h2 style="
            margin-top:20px;  text-align:center; color:#6C3483 ; letter-spacing:0.3rem;
            
            ">CAMOBODIA TOUR
            </h2>

            <p style="color:black; font-size:16px; text-align:center; padding:20px 40px;">
              JOURNEY CAMBODIA is proud to show you Cambodia and help you put together a plan which allows you to
              experience the sights of jungle temples, the sounds of water birds at sunset, the taste of a home cooked
              meal, and the smell of fresh tropical fruit. Welcome to Cambodia, the Kingdom of Wonder!
            </p>
            <?php include('../includeFiles/PackageTour.php'); ?>

          </div>


          <div style="width:90%; margin:auto; margin-top:2rem; margin-bottom:20px;">
            <!-- <hr style="width:1340px; "> -->
            <h2 style="
            margin-top:2rem;;  text-align:center; color:#6C3483; letter-spacing:0.3rem; ">HOTEL IN
              CAMBODIA</h2>
            <p style="color:black ; font-size:16px; text-align:center; padding:20px 40px;">
              Indulge in a luxurious retreat where modern comfort meets traditional elegance. Experience the warmth of
              Cambodian hospitality and create unforgettable memories at Cambodia's hotel
            </p>
            <?php
            include('../includeFiles/hotel.php');
            ?>

          </div>
          <div style="width:90%; margin:auto; margin-top:2rem; margin-bottom:20px;">
            <hr style="width:1340px; ">
            <h2 style="
            margin-top:2rem;;  text-align:center; color:#6C3483; letter-spacing:0.3rem; ">TRANSPORT SERVICE IN CAMBODIA
            </h2> <br> <br>
            <?php
            include('../includeFiles/Transpotation.php');

            ?>
          </div>




        </td>
        <!-- <td>
          <div style="width:30%;">
            <?php include('../includeFiles/RightSide.php') ?>

          </div>

        </td>
      </tr> -->
      <tr>
        <td colspan="2" style="width:100%;">
          <?php
          include('../includeFiles/footer.php');
          ?>

        </td>

      </tr>
    </table>
  </center>
</body>

</html>