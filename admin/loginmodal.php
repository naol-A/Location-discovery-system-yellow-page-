<div id="loginmodal" class="loginmodal">
	<div class="loginform">
		<span class="close">&times</span> 
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div style="width:100%; text-align:center; font-size:25px;">log in</div><br />
				<hr />
				<span>username<br />
				<input style="border-radius:30px;width:100%;height:30px;" type="text" name="username"><br />
				<span>password<br /><span>
				<input style="border-radius:30px;width:100%;height:30px;" type="password" name="password"><br />
				<input class="loginbtn" type="submit" value="Login">
				<hr />
			</form>	
			<?php
				$server="localhost";
				$username="root";
				$password="vertrigops";
				$database="lms";
						
				$conn=mysqli_connect($server,$username,$password,$database);
				if(!$conn){
					die("connection with database failed: ".mysqli_connect_error());
				}
				if(count($_POST)!=0&&(array_key_exists("username",$_POST))/*&&!array_key_exists("username",$_SESSION)*/){
					$stm="SELECT AdminName,passwordd FROM adminn WHERE ";
					$sql=$stm."AdminName='".$_POST["username"]."' AND passwordd=md5('".$_POST["password"]."')";
					$result=mysqli_query($conn,$sql);
				
					if(mysqli_num_rows($result)>0){
						$data=mysqli_fetch_assoc($result);
						$_SESSION["username"]=$data["AdminName"];
						echo "<style type='text/css'>
								.dashboard{display:block;}
								.loginlink{content:'Log out';}
							  </style>";
					}
					else{
						echo "<div id='warn'>incorrect Username or password!</div>";
						echo "<style type='text/css'>.loginmodal{display: block;}</style>";
					}
				}
				else{
					echo"hello";
				}
						
				mysqli_close($conn);
			?>
	</div>
</div>