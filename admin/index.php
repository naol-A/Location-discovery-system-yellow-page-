<?php
session_start();
?>
<!DOCTYPE=html>
<html>
	<head>
		<title>::Admin page::</title>
		<style type="text/css">
			body{
				background:linear-gradient(to top,white,#99ccff);
			}
			.logo{
				border:solid;
				position:relative;
				top:2px;
				border-size:2px;
				border-radius:100%;
				width:80px;
				height:80px;
				margin:auto 0 auto 5%;
			}
			.userImg{
				border:solid;
				border-size:2px;
				border-radius:100%;
				position:relative;
				top:8px;
				width:70px;
				height:70px;
				margin:auto 5% auto 0;
				box-shadow:0 5px 10px gray;
			}
			.header{
				background:linear-gradient(to right,#008066,#00ffcc);
				height:90px;
				border-radius:90px;
				box-shadow:0 5px 10px gray;
			}
			.links{
				float:right;
				height:50px;
				margin-top:30px;
				margin-right:5%;
				font-family:"Comic Sans MS", cursive, sans-serif;
			}
			#homelink{
				border:solid;
				border-radius:45px;
				padding:0 10px 0 10px;
				background-color:#008066;
				color:#00ffcc;
				box-shadow:0 5px 10px gray;
			}
			#homelink:hover{
				border:solid;
				border-radius:45px;
				padding:0 10px 0 10px;
				background-color:#008066;
				color:white;
				box-shadow:0 0 10px white;
			}
			#morelink{
				border:solid;
				border-radius:45px;
				padding:0 10px 0 10px;
				background-color:#008066;
				color:#00ffcc;
				box-shadow:0 5px 10px gray;
			}
			#morelink:hover{
				border:solid;
				border-radius:45px;
				padding:0 10px 0 10px;
				background-color:#008066;
				color:white;
				box-shadow:0 0 10px white;
			}
			#loginlink{
				border:solid;
				border-radius:45px;
				padding:0 10px 0 10px;
				background-color:#008066;
				color:#00ffcc;
				box-shadow:0 5px 10px gray;
			}
			#loginlink:hover{
				border:solid;
				border-radius:45px;
				padding:0 10px 0 10px;
				background-color:#008066;
				color:white;
				box-shadow:0 0 10px white;
			}
			.loginmodal{							
				display: none;
				position: fixed;
				z-index: 1;
				padding-top: 100px;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
			}
			.close {
				color: #aaaaaa;
				float: right;
				font-size: 28px;
				font-weight: bold;
			}

			.close:hover,
			.close:focus {
				color: #000;
				text-decoration: none;
				cursor: pointer;
			}
			.loginbtn{
				background-color:#00ffcc;
				border:solid;
				border-width:4px;
				border-color:#008066;
				border-radius:30px;
				margin:20px 0 10px 28%;
				width:40%;
				height:30px;
			}
			.loginform{
				padding:50px 100px 50px 100px;
				margin:40px 400px 0 400px;
				border-style:solid;
				border-width:2px;
				border-radius:30px;
				background:linear-gradient(to bottom,#66ffff,#009999);
				box-shadow:0 15px 20px gray; 	
			}
			input > .loginform{
				border-radius:30px;
				width:200px;
				height:30px;
			}
			#warn{
				color:#ffffff;
				background-color:#006666;
				padding:5px;
				margin:auto;
				border-radius:10px;
				width:60%;
			}
			.dashboard{
				display:none;
			}
			.options{
				width:200px;
				height:auto;
				border:solid;
				margin:100px 0 0 50px;
				border-color:gray;
				border-width:2px;
				border-radius:10px;
				background-color:#00ffcc;
				padding:20px;
				box-shadow:0 5px 10px gray;
			}
			.messages{
				display:block;
				width:70%;
				position:absolute;
				top:20%;
				left:25%;
				border-style:none;
				border-radius:5px;
				background-color:#00cca3;
				padding:10px;
			}
			.settings{
				display:none;
				width:70%;
				position:absolute;
				top:20%;
				left:25%;
				border-style:none;
				border-radius:5px;
				background-color:#00cca3;
				padding:10px;
			}
			.add_org{
				display:none;
				width:70%;
				position:absolute;
				top:20%;
				left:25%;
				border-style:none;
				border-radius:5px;
				background-color:#00cca3;
				padding:10px;
			}
			.list_org{
				display:none;
				width:70%;
				position:absolute;
				top:20%;
				left:25%;
				border-style:none;
				border-radius:5px;
				background-color:#00cca3;
				padding:10px;
			}
			h5 .add_org{
				margin:10px 0 5px 10px;
			}
		</style>
	</head>
	<body>
		<div class="header">
			<img src="../images/logo.png" class="logo" />
			<div class="links">
				<span id="homelink" > Home </span> |
				<span id="morelink"> More </span> |
				<span id="loginlink" > Log in </span>
			</div>
			<img class="userImg" style="float:right;" class="userImg" src="../images/user.jpg" alt=""/>
		</div>
		<div class="content">
			<?php
				include('loginmodal.php');
				include('dashboard.php');
			?>
		</div>
		<script type="text/javascript">
		var modal=document.getElementById('loginmodal');
		var btn=document.getElementById('loginlink');
		var home=document.getElementById('homelink');
		var span=document.getElementsByClassName("close")[0];

		btn.onclick=function(){
			modal.style.display="block";
		}
		
		home.onclick=function(){
		}

		span.onclick=function() {
			modal.style.display="none";
		}
		</script>
	</body>
</html>