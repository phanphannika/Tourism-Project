<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .footer {
            width: 100%;
            background-color: black;
            color: white;
            padding-top: 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            column-gap: 10px;
            row-gap: 10px;
            width: 80%;
            margin: auto
        }

        .footer-info h5 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            margin-bottom: 1rem;

        }
        a{
            text-decoration: none;
            color:rgb(169, 167, 167);
        }

        .footer-info-detail a {
            text-decoration: none;
            font-size: 14px;
            color: rgb(169, 167, 167);
            margin-bottom: 0.7rem;

        }

        .footer-info-detail {
            display: flex;
            flex-direction: column;
        }

        .social-icon a {
            text-decoration: none;
            color: gray;
        }

        .copy-right {
            width: 80%;
            margin: auto;
            font-size: 14px;
            padding-top: 1rem;
            padding-bottom: 1rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- footer -->
    <div class="footer">

        <div class="footer-content">
            <div class="footer-info">
                <h5>Services</h5>
                <div class="footer-info-detail">
                    <a href="#">Email Marketing</a>
                    <a href="#">Campaigns</a>
                    <a href="#">Branding</a>
                    <a href="#">offline</a>
                </div>

            </div>
            <div class="footer-info">
                <h5><a href="../includeFiles/about.php">About</a></h5>

                <div class="footer-info-detail">
                    <a href="#">Our story</a>
                    <a href="#">Benifits</a>
                    <a href="#">Team</a>
                    <a href="#">Careers</a>
                </div>

            </div>
            <div class="footer-info">
                <h5>Help</h5>
                <div class="footer-info-detail">
                    <a href="#">FAQs</a>
                    <a href="../includeFiles/contact.php">Contact us</a>
                </div>

            </div>
            <div class="footer-info">
                <h5>Social</h5>
                <div class="social-icon">
                    <a href="https://instagram.com/p__nanika?igshid=YzAwZjE1ZTI0Zg=="><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://t.me/phanphannika"><i class="fa-brands fa-telegram"></i></a>
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://youtube.com/@phannika4849?si=3nMxtEK4t28w2TR7"><i
                            class="fa-brands fa-youtube"></i></a>
                </div>

            </div>

        </div>
        <div class="copy-right">
            <p>Copy right@2023, NUM IT 30-45 by Phan Nika</p>

        </div>
    </div>

</body>

</html>