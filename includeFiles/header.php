<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viist Cambodia</title>
    <style>
        * {
            box-sizing: border-box;
            padding:0;
            margin:0;
            font-family: Arial, Helvetica, sans-serif;

            
        }

        .header {
            width: 100%;
            /* box-shadow: 0 0 5px #B3B6B7 ; */
            
            background-color: white;
            box-shadow: 0 0 3px gray;
            position:fixed;
            /* color:white; */
            
        }

        .navbar {
            width: 80%;
            margin: auto;
            
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            padding:10px;

        }

        .navbar ul li {
            list-style-type: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;

        }

        .navbar ul li a {
            text-decoration: none;
            color:#6C3483 ;
            font-size:18px;
            font-weight:bold;

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
        .logo{
            width:150px;
            height:70px;
    
        }
        .logo a{
            text-decoration: none;
            color:white;
        }
        .logo a.active{
            font-weight:bold;
        }
        .logo a img{
            width:100%;
            height:100%;
            border-radius: 50%;
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
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="VisitPlace.php">Place To Visit</a></li>
                <li><a href="VisitTour.php">Package Tour</a></li>
                <li><a href="VisitHotel.php">Hotel</a></li>
                <li><a href="VisitTranspotation.php">Transportation</a></li>
               
            </ul>

        </div>
        
        
    </div>

</body>

</html>