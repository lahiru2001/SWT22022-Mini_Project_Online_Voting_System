<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Voting System</title>
 	

<?php include('./header.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");
?>

</head>

<style>

	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	
	body{
		font-family: 'Poppins', sans-serif;
		overflow: hidden;
	}
	
	.wave{
		position: fixed;
		bottom: 0;
		left: 0;
		height: 100%;
		z-index: -1;
	}
	
	.container{
		width: 100vw;
		height: 80vh;
		display: grid;
		grid-template-columns: repeat(2, 1fr);
		grid-gap :6rem;
		padding: 0 2rem;

	}


	 /* Navigation bar styles */
	 .navbar {
				    
                    overflow: hidden;
                    padding: 20px;
                    display: flex; /* Use flex layout */
                    justify-content: center; /* Align items horizontally to center */
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
            border:2px solid #162c9c;
            border-radius: 8px;
            
            
        }

           /* Animation for the text */
           .animated-text {
            font-size: 28px;
            margin-top: 20px;
            color:black;
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
            animation: bounce 1s infinite alternate; /* Apply the bounce animation */
        }

        /* Keyframes for the bounce animation */
        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-10px); /* Move text up by 10px */
            }
        }



	.img{
		display: flex;
		justify-content: flex-end;
		align-items: center;
	}
	

	
	.login-content{
		display: flex;
		justify-content: flex-start;
		align-items: center;
		text-align: center;
		margin-left: 120px;
	}
	
	.img img{
		width: 550px;
		
		
	}
	
	form{
		width: 360px;
	}
	
	.login-content img{
		height: 100px;
		display: fix;
	}
	
	.login-content h2{
		margin: 15px 0;
		color: #371ed5e8;
		text-transform: uppercase;
		font-size: 2.9rem;
	}
	
	.login-content .input-div{
		position: relative;
		display: grid;
		grid-template-columns: 7% 93%;
		margin: 25px 0;
		padding: 5px 0;
		border-bottom: 2px solid #d9d9d9;
	}
	
	.login-content .input-div.one{
		margin-top: 0;
	}
	
	.i{
		color: #d9d9d9;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	
	.i i{
		transition: .3s;
	}
	
	.input-div > div{
		position: relative;
		height: 45px;
	}
	
	.input-div:before, .input-div:after{
		content: '';
		position: absolute;
		bottom: -2px;
		width: 0%;
		height: 2px;
		background-color: #0f0322;
		transition: .4s;
	}
	
	.input-div:before{
		right: 50%;
	}
	
	.input-div:after{
		left: 50%;
	}
	
	.input-div.focus:before, .input-div.focus:after{
		width: 50%;
	}
	
	.input-div.focus > div > h5{
		top: -5px;
		font-size: 15px;
	}
	
	.input-div.focus > .i > i{
		color: #38d39f;
	}
	
	.input-div > div > input{
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		border: none;
		outline: none;
		background: none;
		padding: 0.5rem 0.7rem;
		color: #555;
		font-family: 'poppins', sans-serif;
		font-size: 18px;
		
	}
	
	.input-div.pass{
		margin-bottom: 4px;
	}
	
	a{
		display: block;
		padding-top: 10px;
		text-align: center;
		text-decoration: none;
		color: rgb(0, 34, 187);
		font-size: 16px;
		transition: .3s;
	}
	
	a:hover{
		color: #000002;
	}
	
	.btn{
		display: block;
		width: 100%;
		height: 50px;
		border-radius: 25px;
		outline: none;
		border: none;
		/* background-image: linear-gradient(to right, #6033b3, #644ac2, #3525c5); */
		background-color:#051396;
		background-size: 200%;
		font-size: 1.2rem;
		color: #fff;
		font-family: 'Poppins', sans-serif;
		text-transform: uppercase;
		margin: 1rem 0;
		cursor: pointer;
		transition: .5s;
	}
	.btn:hover{
		background-position: right;
	}
	
	
	@media screen and (max-width: 1050px){
		.container{
			grid-gap: 5rem;
		}
	}
	
	@media screen and (max-width: 1000px){
		form{
			width: 290px;
		}
	
		.login-content h2{
			font-size: 2.4rem;
			margin: 8px 0;
		}
	
		.img img{
			width: 400px;
		}
	}
	
	@media screen and (max-width: 900px){
		.container{
			grid-template-columns: 1fr;
		}
	
		.img{
			display: none;
		}
	
		.wave{
			display: none;
		}
	
		.login-content{
			justify-content: center;
		}
	}
	

</style>

<body>

		<img class="wave" src="images/background1234.png">
	
	<div class="navbar">
		<a href="main2.php"><b>Home</b></a>
        <a href="#section1"><b>About</b></a>
        <a href="#section2"><b>Services</b></a>
        <a href="ContactUs.php"><b>Contact</b></a>
    </div>    

		<div class="container">
		
			<div class="img">
				<img src="images/loginimage.svg">
			</div>

			<div class="login-content">
				<form id="login-form" >
					<img src="images/loginavater.svg">
					<h2 class="title">Welcome</h2>
					<div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
					<input type="text" class="input" id="username" name="username" placeholder="Username">
					</div>
					</div>
					<div class="input-div pass">
					<div class="i"> 
							<i class="fas fa-lock"></i>
					</div>
					<div class="div">
					<input type="password" class="input" id="password" name="password" placeholder="Password">
					</div>
					</div>
					<br>
					<button class="btn">Login</button>
				</form>
        	</div>
		</div>









  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>