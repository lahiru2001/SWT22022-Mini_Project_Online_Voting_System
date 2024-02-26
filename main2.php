<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Home page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        /*navigation bar*/
        * {
            padding: 0;
            margin: 0px;
            box-sizing: border-box;

        }

        elemnt.style {}

        .auto-style1 {
            font-size: 40px;
            height: 600px;
            width: 600px;

        }

        .auto-style2 {
            height: 500px;
            width: 400px;

        }

        h2 {
            font-size: 55px;
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
            color: #162c9c;
        }

        .heading {
            text-align: center;
            padding: 2.5rem 0
        }

        .heading span {
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
            font-size: 30px;
            background: #646464;
            color: #F7F7F7;
            border-radius: .2rem;
            padding: .3rem 1rem;
        }

        .heading span.space {
            background: none;
        }

        /* codes for packages card*/
        .card {
            width: 25%;
            height: 500px;
            border-radius: 5px;
            display: inline-block;
            margin: 30px;
            box-shadow: 2px 2px 10px black;
        }

        .card:hover {
            box-shadow: 2px 2px 10px black;
        }

        .pic img {
            width: 80%;
            border-radius: 2px;
        }

        .title {
            text-align: center;
            padding: 5px;
        }

        .title h1 {
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
            font-size: 28px;
        }

        .description {
            padding: 5px;
            text-align: center;
            font-size: 18px;
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;

        }

        button {
            height: 35px;
            width: 100px;
            margin-top: 30px;
            margin-bottom: 30px;
            background-color: #A30002;
            border: 1px solid black;
            padding: 5px;
            border-radius: 5px;
            cursor: pointer;
            color: #FFFFFF;
        }


        /*code for see more button*/
        .button {
            height: 45px;
            margin: 35px 0;
        }

        .button input {
            margin-left: 700px;
            height: 80%;
            width: 10%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }

        .button input:hover {
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }

        .card-stats {
            grid-area: stats;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
            color: #FFFCFC;
            background: #000000;
        }

        .card-stats .stat {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            padding: 10px;
        }

        .text {
            position: absolute;
            width: 100%;
            height: 260px;
            top: 600px;
        }

        .text h2 {
            text-decoration: none;
            text-transform: uppercase;
            margin-top: 100px;
            color: #FFFFFF;
            text-align: center;
            background-color: #26a9e1;
            font-size: 35px;
            height: 95px;
        }

        body {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0px;
            background: #FFFFFF;
        }

        .para {
            font-family: sans-serif;
            font-size: 25px;
            margin-top: 15px;
            text-align: justify;
        }

        #header {
            background-color: #333;
            color: #fff;
            padding: 25px;
            text-align: center;
        }


        /* CSS */
        .button-85 {
            padding: 0.6em 2em;
            border: none;
            outline: none;
            color: rgb(255, 255, 255);
            background: #111;
            width: 200px;
            height: 50px;
            cursor: pointer;
            position: relative;
            z-index: 0;
            border-radius: 10px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-85:before {
            content: "";
            background: linear-gradient(45deg,
                    #ff0000,
                    #ff7300,
                    #fffb00,
                    #48ff00,
                    #00ffd5,
                    #002bff,
                    #7a00ff,
                    #ff00c8,
                    #ff0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 400%;
            z-index: -1;
            filter: blur(5px);
            -webkit-filter: blur(5px);
            width: calc(100% + 8px);
            height: calc(100% + 12px);
            animation: glowing-button-85 20s linear infinite;
            transition: opacity 0.3s ease-in-out;
            border-radius: 10px;
        }

        @keyframes glowing-button-85 {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        .button-85:after {
            z-index: -1;
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: #222;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        h3 {
            font-size: 30px;
        }

        li {
            font-size: 24px;
            padding: 15px;
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
        }

        .nice {
            margin: 50px;
            height: 600px;
            display: inline-block;
            margin: 30px;
            border-radius: 18px;
            background: white;
            box-shadow: 3px 2px 10px rgba(0, 0, 0, 0.9);

        }

        .head1 {
            margin-top: 90px;
        }


        /* Navigation bar styles */
        .navbar {
            margin-top: -80px;
            margin-left: 90px;
            overflow: hidden;
            padding: 20px;
            display: flex;
            /* Use flex layout */
            justify-content: center;
            /* Align items horizontally to center */

        }

        .navbar a {
            color: black;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 22px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            /* background-color: #128a3b; Darker green on hover */
            border: 2px solid #162c9c;
            border-radius: 8px;


        }

        /* Animation for the text */
        .animated-text {
            font-size: 28px;
            margin-top: 20px;
            color: black;
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
            animation: bounce 1s infinite alternate;
            /* Apply the bounce animation */
        }

        /* Keyframes for the bounce animation */
        @keyframes bounce {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
                /* Move text up by 10px */
            }
        }


        /* Team mebers card */
        .home-container {
            width: 100%;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #24262b;
        }

        .profile-card {
            position: relative;
            width: 220px;
            height: 220px;
            background-color: #fff;
            padding: 30px;
            border-radius: 50%;
            box-shadow: -5px 8px 45px rgba(51, 51, 51, 0.126);
            transition: all .4s;
            margin: 0 20px;
        }

        .profile-card:hover {
            border-radius: 10px;
            height: 260px;
        }

        .profile-card .img {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .profile-card:hover img {
            border-radius: 10px;
            transform: translateY(-70px);
        }

        .img img {
            object-fit: fill;
            width: 100%;
            border-radius: 50%;
            transition: all .4s;
            z-index: 99;
        }

        .caption {
            text-align: center;
            transform: translateY(-90px);
            opacity: 0;
            pointer-events: none;
            transition: all .5s;
        }

        .profile-card:hover .caption {
            opacity: 1;
            pointer-events: all;
        }

        .caption h3 {
            font-size: 21px;
            color: #0c52a1;
            font-weight: 600;
        }

        .caption p {
            font-size: 15px;
            font-weight: 500;
            margin: 2px 0 12px 0;
        }

        .caption .social-links i {
            font-size: 21px;
            margin: 0 3px;
            cursor: pointer;
            color: #333;
            transition: all .4s;
        }

        .caption .social-links i:hover {
            color: #0c52a1;
        }

        .join {
            text-align: justify;
            font-size: 18px;
            padding: 5px;
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
        }


        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        .container {
            max-width: 1170px;
            margin: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        ul {
            list-style: none;
        }

        .footer {
            background-color: #24262b;
            padding: 70px 0;
        }

        .footer-col {
            width: 25%;
            padding: 0 15px;
        }

        .footer-col h4 {
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }

        .footer-col h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }

        .footer-col ul li:not(:last-child) {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            padding-left: 8px;
        }

        .footer-col .social-links a {
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255, 255, 255, 0.2);
            margin: 0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }

        .footer-col .social-links a:hover {
            color: #24262b;
            background-color: #ffffff;
        }

        /*responsive*/
        @media(max-width: 767px) {
            .footer-col {
                width: 50%;
                margin-bottom: 30px;
            }
        }

        @media(max-width: 574px) {
            .footer-col {
                width: 100%;
            }
        }


        /* card aninmate */

        .wrapper {
            width: 100%;
            margin: 30px;
            height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            height: 400px;
            display: flex;
            flex-wrap: nowrap;
            justify-content: start;
        }

        .card1 {
            width: 80px;
            border-radius: .75rem;
            background-size: cover;
            cursor: pointer;
            overflow: hidden;
            border-radius: 2rem;
            margin: 0 10px;
            display: flex;
            align-items: flex-end;
            transition: .6s cubic-bezier(.28, -0.03, 0, .99);
            box-shadow: 0px 10px 30px -5px rgba(0, 0, 0, 0.8);
        }

        .card1>.row {
            color: white;
            display: flex;
            flex-wrap: nowrap;
        }

        .card1>.row>.icon {
            background: #223;
            color: white;
            border-radius: 50%;
            width: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 15px;
        }

        .card1>.row>.description {
            display: flex;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            height: 80px;
            width: 520px;
            opacity: 0;
            transform: translateY(30px);
            transition-delay: .3s;
            transition: all .3s ease;
        }

        .description p {
            color: #b0b0ba;
            padding-top: 5px;
        }

        .description h4 {
            text-transform: uppercase;
            color: white;
            font-size: 26px;
        }

        input {
            display: none;
        }

        input:checked+label {
            width: 600px;
        }

        input:checked+label .description {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        .card1[for="c1"] {
            background-image: url('images/f1.jpg');
        }

        .card1[for="c2"] {
            background-image: url('images/f2.jpg');
        }

        .card1[for="c3"] {
            background-image: url('images/f3.jpg');
        }

        .card1[for="c4"] {
            background-image: url('images/f4.jpg');
        }

        .card1[for="c5"] {
            background-image: url('images/f1.jpg');
        }

        .card1[for="c6"] {
            background-image: url('images/f2.jpg');
        }



        .use {

            text-align: center;
            font-family: 'Poppins', sans-serif;
            font-size: 50px;
            color: #162c9c;

        }

        .footimage {

            margin-top: -300px;
            margin-left: 800px;
        }
    </style>

</head>

<body>


    <div class="nice">
        <table>
            <tr>
                <td class="auto-style2"> <img src="images/show.png" <td style="height: 550px; width: 800px"></td>
                <td class="auto-style1">
                    <div class="navbar">
                        <a href="#"><b>Home</b></a>
                        <a href="#"><b>About</b></a>
                        <a href="#"><b>Services</b></a>
                        <a href="#"><b>Contact</b></a>
                    </div>
                    <div class="head1">
                        <h2>Welcome to Our Online Voting System </h2>
                        <a href="login.php"><button class="button-85">
                                <h3>Login<h3>
                            </button></a>

                        <div class="animated-text"><b>Make your voice heard!</b></div>
                    </div>
            </tr>
        </table>
    </div>

    <h1 class="heading">
        <span>S</span>
        <span>E</span>
        <span>R</span>
        <span>V</span>
        <span>I</span>
        <span>C</span>
        <span>E</span>
        <span>S</span>
    </h1>


    <center>
        <div class="card">
            <div class="pic">
                <img src="Images/service4.svg" height="310px">
            </div>
            <div class="title">
                <h1>Convenient </h1>
            </div>
            <div class="description">
                <p>Vote from anywhere, anytime using any device with internet access.</p>
            </div>
        </div>
        <div class="card">
            <div class="pic">
                <img src="Images/service7.svg" height="310px" width="100px">
            </div>
            <div class="title">
                <h1>Secure</h1>
            </div>
            <div class="description">
                Your vote is encrypted and securely stored to maintain the integrity of the voting process.

            </div>
        </div>
        <div class="card">
            <div class="pic">
                <img src="Images/service1.svg" height="310px">
            </div>
            <div class="title">
                <h1>Transparent</h1>
            </div>
            <div class="description">
                Track your vote and verify its integrity through our transparent voting process.
            </div>
        </div>
    </center>


    <table style="padding:10px">
        <tr>
            <td class="auto-style2"> <img src="images/next.png" </td style="height: 550px; width: 800px"></td>
            <td class="auto-style1">
                <h2>How It Works</h2>
                <ol>
                    <li> <b>login to your account.</b></li>
                    <li><b>View available elections and candidates.</b></li>
                    <li><b>Cast your vote securely.</b></li>
                </ol>

            </td>
        </tr>
    </table>


    <h2 style="text-align:center">Industries using our eVoting Services</h2>




    <div class="move">
        <div class="wrapper">
            <div class="container">
                <input type="radio" name="slide" id="c1" checked>
                <label for="c1" class="card1">
                    <div class="row">
                        <div class="icon">1</div>
                        <div class="description">
                            <h4>Association</h4>
                            <p></p>
                        </div>
                    </div>
                </label>
                <div class="container">
                    <input type="radio" name="slide" id="c2" checked>
                    <label for="c2" class="card1">
                        <div class="row">
                            <div class="icon">2</div>
                            <div class="description">
                                <h4>Association</h4>
                                <p></p>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="c3">
                    <label for="c3" class="card1">
                        <div class="row">
                            <div class="icon">3</div>
                            <div class="description">
                                <h4>Education</h4>

                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="c4">
                    <label for="c4" class="card1">
                        <div class="row">
                            <div class="icon">4</div>
                            <div class="description">
                                <h4>New technologies</h4>
                                <p>Space engineering becomes
                                    more and more advanced</p>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="c5">
                    <label for="c5" class="card1">
                        <div class="row">
                            <div class="icon">5</div>
                            <div class="description">
                                <h4>New technologies</h4>
                                <p>Space engineering becomes
                                    more and more advanced</p>
                            </div>
                        </div>
                    </label>
                    <input type="radio" name="slide" id="c6">
                    <label for="c6" class="card1">
                        <div class="row">
                            <div class="icon">6</div>
                            <div class="description">
                                <h4>New technologies</h4>
                                <p>Space engineering becomes
                                    more and more advanced</p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>



        <h1 class="heading">
            <span>O</span>
            <span>U</span>
            <span>R</span>
            <span>T</span>
            <span>E</span>
            <span>A</span>
            <span>M</span>
        </h1>

        <div class="home-container">
            <div class="profile-card">
                <div class="img">
                    <img src="images/lahiru.png">
                </div>
                <div class="caption">
                    <h3>Lahiru Buddhika</h3>
                    <p>E vote suporter</p>
                    <div class="social-links">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>
            <div class="profile-card">
                <div class="img">
                    <img src="images/thamindu.jpg">
                </div>
                <div class="caption">
                    <h3>Thamindu Kalhara</h3>
                    <p>E vote suporter</p>
                    <div class="social-links">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>
            <div class="profile-card">
                <div class="img">
                    <img src="images/janith.png">
                </div>
                <div class="caption">
                    <h3>Janith Madusanka</h3>
                    <p>E vote suporter</p>
                    <div class="social-links">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="profile-card">
                <div class="img">
                    <img src="images/pic2.webp">
                </div>
                <div class="caption">
                    <h3>Reeshma Muneer</h3>
                    <p>E vote suporter</p>
                    <div class="social-links">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="profile-card">
                <div class="img">
                    <img src="images/pic1.webp">
                </div>
                <div class="caption">
                    <h3>Hana Shamas</h3>
                    <p>E vote suporter</p>
                    <div class="social-links">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                </div>
            </div>

        </div>


        <table style="margin-left:150px">
            <tr>

                <td>
                    <h2>Join the Movement</h2>
                    <p class="join">Ready to make your voice heard? join a community of engaged citizens who are shaping
                        the future through the
                        power of online voting.Together, we can build a stronger, more inclusive democracy for all.
                    </p>
                </td>
                <td class="auto-style2"> <img src="images/next2.png" </td style="height: 550px; width: 800px"></td>
            </tr>
        </table>



        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Why Choose Us?</h4>
                        <ul>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Security</a></li>
                            <li><a href="#">Transparency</a></li>
                            <li><a href="#">Convenience</a></li>
                            <li><a href="#">Engagement</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>How It Works</h4>
                        <ul>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Verify</a></li>
                            <li><a href="#">Cast Your Vote</a></li>
                            <li><a href="#">Receive Confirmation</a></li>
                            <li><a href="#">Stay Informed</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <div class="footimage">
                        <img src="images/fotter.png" width="400px" height="400px">
                    </div>

                </div>
            </div>
        </footer>




</body>

</html>