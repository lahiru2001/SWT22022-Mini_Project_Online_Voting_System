<!DOCTYPE html>
<html>
<head>
	<!-- *******  Link To CSS Style Sheet  ******* -->
	<link rel="stylesheet" type="text/css" href="assets/css/style2.css">

	<!-- *******  Font Awesome Icons Link  ******* -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<!-- *******  Link To Goggle Fonts  *******  -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,800;1,900&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Contact Section</title>

	<style>
			 /* Navigation bar styles */
			 .navbarcontact{
				    margin:none;
					overflow: hidden;
					padding: 20px;
					display: flex; /* Use flex layout */
					justify-content: center; /* Align items horizontally to center */
				}
				
				.na {
					color: rgb(255, 255, 255);
					text-align: center;
					padding: 14px 20px;
					text-decoration: none;
					font-size: 22px;
					transition: background-color 0.3s;
				}
				
				.na:hover {
					/* background-color: #128a3b; Darker green on hover */
					border:2px solid #ffffff;
					border-radius: 8px;
				}

				.container7{
					width: 100%;
					min-height: 85vh;
					display: flex;
					justify-content: center;
					align-items: center;
					padding: 30px 8%;
				}
	</style>
</head>
<body>


	<div class="navbarcontact">
        <a class="na" href="main2.php"><b>Home</b></a>
        <a class="na" href="#"><b>About</b></a>
        <a class="na" href="#"><b>Services</b></a>
        <a class="na" href="ContactUs.php"><b>Contact</b></a>
    </div>  

	<div class="container7">
		<main class="row">
			
			<!--  *******   Left Section (Column) Starts   *******  -->

			<section class="col left1">
				
				<!--  *******   Title Starts   *******  -->

				<div class="contactTitle">
					<h2>Get In Touch</h2>
					<p>We're here to assist you with any questions or concerns you may have about our online voting system. </p>
				</div>

				<!--  *******   Title Ends   *******  -->

				<!--  *******   Contact Info Starts   *******  -->

				<div class="contactInfo">
					
					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="details">
							<span>Phone</span>
							<span>+94 110 111 0004</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="details">
							<span>Email</span>
							<span>support@onlinevotingsystem.com </span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="details">
							<span>Location</span>
							<span>Online virtual presence </span>
						</div>
					</div>

				</div>

				<!--  *******   Contact Info Ends   *******  -->

				<!--  *******   Social Media Starts   *******  -->

				<div class="socialMedia">
					<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
				</div>

				<!--  *******   Social Media Ends   *******  -->

			</section>

			<!--  *******   Left Section (Column) Ends   *******  -->

			<!--  *******   Right Section (Column) Starts   *******  -->

			<section class="col right1">
				
				<!--  *******   Form Starts   *******  -->

				<form class="messageForm">
					
					<div class="inputGroup halfWidth">
						<input type="text" name="" required="required">
						<label>Your Name</label>
					</div>

					<div class="inputGroup halfWidth">
						<input type="email" name="" required="required">
						<label>Email</label>
					</div>

					<div class="inputGroup fullWidth">
						<input type="text" name="" required="required">
						<label>Subject</label>
					</div>

					<div class="inputGroup fullWidth">
						<textarea required="required"></textarea>
						<label>Say Something</label>
					</div>

					<div class="inputGroup fullWidth">
						<button>Send Message</button>
					</div>

				</form>

				<!--  *******   Form Ends   *******  -->
			</section>

			<!--  *******   Right Section (Column) Ends   *******  -->

		</main>
	</div>
</body>
</html>