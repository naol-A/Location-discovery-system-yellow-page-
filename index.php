<!DOCTYPE=html>
<html>
	<head>
		<title>::lms::</title>
		<style type="text/css">
			body{
				background:linear-gradient(to top,white,#99ccff);
				font-family:Arial, Helvetica, sans-serif;
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
				margin-right:10%;
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
			#aboutlink{
				border:solid;
				border-radius:45px;
				padding:0 10px 0 10px;
				background-color:#008066;
				color:#00ffcc;
				box-shadow:0 5px 10px gray;
			}
			#aboutlink:hover{
				border:solid;
				border-radius:45px;
				padding:0 10px 0 10px;
				background-color:#008066;
				color:white;
				box-shadow:0 0 10px white;
			}
			#cat{
				background-color:#00ffcc;
				border:solid;
				border-width:2px;
				border-color:gray;
				padding:0 20px 0 20px;
				border-radius:45px;
				position:relative;
				top:20px;
				left:10%;
				box-shadow:0 5px 10px gray;
				font-family:Arial, Helvetica, sans-serif;
			}
			#more{
				background-color:#00ffcc;
				border:solid;
				border-width:2px;
				border-color:gray;
				padding:0 20px 0 20px;
				border-radius:45px;
				position:relative;
				top:20px;
				left:10%;
				box-shadow:0 5px 10px gray;
				font-family:Arial, Helvetica, sans-serif;
			}
			#searchbox{
				position:relative;
				top:10px;
				right:10%;
				float:right;
			}
			#searchinpt{
				border-radius:45px;
				border:solid;
				border-width:2px;
				border-color:gray;
				border-size:1px;
				width:240px;
				height:30px;
				box-shadow:0 5px 10px gray;
			}
			#searchbtn{
				border-radius:45px;
				border:solid;
				border-width:2px;
				border-color:gray;
				border-size:2px;
				width:100px;
				height:30px;
				box-shadow:0 5px 10px gray;
				background-color:#00ffcc;
			}
			.catdrop{
				display:none;
				width:90%;
				margin:auto;
				height:auto;
				background-color:#00ffcc;
				position:relative;
				top:40px;
				border:solid;
				border-width:2px;
				border-color:gray;
				border-radius:25px;
				padding:10px;
				box-shadow:0 5px 10px gray;
			}
			.moredrop{
				display:none;
				width:20%;
				margin:auto;
				margin-left:19%;
				height:auto;
				background-color:#00ffcc;
				position:relative;
				top:24px;
				border:solid;
				border-width:2px;
				border-color:gray;
				border-radius:25px;
				padding:10px;
				box-shadow:0 5px 10px gray;
			}
			.footer{
				background:linear-gradient(to left,#008066,#00ffcc);
				width:99%;
				margin:auto;
				margin-top:50px;
				height:180px;
				position:relative;
				top:100%;
				box-shadow:0 -5px 10px gray;
			}
			#copyright{
				position:absolute;
				bottom:10px;
				left:35%;
				text-align:center;
			}
			#clist{
				margin:20px 10px 20px 10px;
				size:40px;
			}
			.companylist{
				width:50%;
				margin:auto;
				margin-top:70px;
			}
			.companies{
				background-color:#00ffcc;
				border-style:solid none none none;
				border-top-width:4px;
				border-color:gray;
				border-radius:10px;
				padding:10px;
				margin:10px;
			}
			#network{
				padding-top:10px;
				width:220px;
				margin:auto;
			}
			#network img{
				width:50px;
				height:50px;
				border-radius:45px;
				box-shadow:0 0px 15px white;
			}
		</style>
	</head>
	<body>
		<div class="header">
			<img src="images/logo.png" class="logo" />
			<div class="links">
				<span id="homelink"> Home </span>|
				<span id="morelink"> More </span>|
				<span id="aboutlink">about us</span>
			</div>
		</div>
		<div class="content">
			<span id="cat">Categories</span>
			<span id="more">More</span>
			<span id="searchbox">
				<form id="searchbox" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="get">
					<input id="searchinpt" type="text" />
					<input id="searchbtn" type="submit" value="search"/>
				</form>
			</span>
			<div id="catdrop" class="catdrop">
				<?php
					$server="localhost";
					$username="root";
					$password="vertrigops";
					$database="lms";
					
					$conn=mysqli_connect($server,$username,$password,$database);
					
					if(!$conn){
						die("connection with database failed: ".mysqli_connect_error());
					}
					
					$sql="SELECT cname FROM category";
					$result=mysqli_query($conn,$sql);
					
					if(mysqli_num_rows($result)>0){
						for($row=0;$row<5;$row++){
							for($col=0;$col<10;$col++){
								while($data=mysqli_fetch_assoc($result)){
									echo "<span id='clist'>".$data["cname"]."</span>";
								}
							}
							echo"<br /><hr/>";
						}
					}
					else{
						echo "-- no category --";
					}
					mysqli_close($conn);
				?>
			</div>
			<div id="moredrop" class="moredrop">
				<span>- Add organization</span><br/><hr/>
				<span>- report error</span><br/><hr/>
			</div>
			<div class="companylist">
				<?php
					$conn=mysqli_connect("localhost","root","vertrigops","lms");
					if(!$conn){
						die("error: ".mysqli_connect_error());
					}
					else{
						$sql="SELECT * FROM company";
						$query=mysqli_query($conn,$sql);
						if(mysqli_num_rows($query)>0){
							while($row=mysqli_fetch_assoc($query)){
								echo"<div class='companies'><h3>".$row["name"]."</h3><hr />".
								"<h5>".$row["phoneNumber"]."--".$row["cname"]."</h5></div>";
							}
						}
					}
					mysqli_close($conn);
				?>
				<div id="pagenation">
					<?php
						$conn=mysqli_connect("localhost","root","vertrigops","lms");
						if(!$conn){
							die("ERROR: ".mysqli_connect_error());
						}
						$result=mysqli_query($conn,"SELECT name FROM company");
						$rows=mysqli_num_rows($result);
						if($rows<=6){
							echo"<h5>page 1</h5>";
						}
						else{
							for($i=1;$i<($rows/6)+1;$i++){
								echo"<h5>page ".$i."</h5>";
							}
						}
						mysqli_close($conn);
					?>
				</div>
			</div>
		</div>
		<?php include('pages/footer.php');?>
		<script type="text/javascript">
			var cat=document.getElementById("cat");
			var more=document.getElementById("more");
			var morepan=document.getElementById("moredrop");
			var catpan=document.getElementById("catdrop");
			var catclicked=false;
			var moreclicked=false;
			
			cat.onclick=function(){
				if(catclicked==false && moreclicked==false){
					catclicked=true;
					catpan.style.display="block";
					cat.style.borderRadius="5px";
				}
				else if(catclicked==false && moreclicked==true){
					catclicked=true;
					moreclicked=false;
					morepan.style.display="none";
					more.style.borderRadius="25px";
					catpan.style.display="block";
					cat.style.borderRadius="5px";
				}
				else{
					catclicked=false;
					catdrop.style.display="none";
					cat.style.borderRadius="25px";
				}
			}
			more.onclick=function(){
				if(moreclicked==false && catclicked==false){
					moreclicked=true;
					morepan.style.display="block";
					more.style.borderRadius="5px";
				}
				else if(moreclicked==false && catclicked==true){
					moreclicked=true;
					catclicked=false;
					catpan.style.display="none";
					cat.style.borderRadius="25px";
					morepan.style.display="block";
					more.style.borderRadius="5px";
				}
				else{
					moreclicked=false;
					moredrop.style.display="none";
					more.style.borderRadius="45px";
				}
			}
		</script>
	</body>
</html>