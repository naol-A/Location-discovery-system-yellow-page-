<div id="loginmodal" class="loginmodal">
	<div class="loginform">
		<span class="close">&times;</span> 
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
				include_once'../classes/admin.php';
				if(count($_POST)!=0&&(array_key_exists("username",$_POST))and(array_key_exists("username",$_SESSION)==false)){
					$stm="SELECT AdminName,passwordd FROM adminn WHERE ";
					$admin=new Admin();
					$admin->setadminname($_POST["username"]);
					$admin->setpassword($_POST["password"]);
					$result=$admin->select($stm);
				
					if($result->num_rows>0){
						$data=$result->fetch_assoc();
						$_SESSION["username"]=$data["AdminName"];
						echo "<style type='text/css'>
								.dashboard{display:block;}
								#adminimg{display:none;}
							  </style>
							  <script>
								document.getElementById('loginlink').innerHTML='Logout';
								</script>";
					}
					else{
						echo "<div id='warn'>incorrect Username or password!</div>";
						echo "<style type='text/css'>.loginmodal{display: block;}</style>";
					}
				}
				elseif(array_key_exists("username",$_SESSION)){
					echo "<style type='text/css'>
							.dashboard{display:block;}
						</style>
						<script>
							document.getElementById('loginlink').style.display='none';
						</script>";
				}
			?>
	</div>
</div>