<?php
	include_once'classes/connection.php';
	include_once'classes/company.php';
	$conn=new Connection();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>::lms::</title>
		<style type="text/css">
			body{
				background:linear-gradient(to top,white,#99ccff);
				font-family:Arial, Helvetica, sans-serif;
			}
			.intro{
				display:block;
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
				height:300px;
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
				border-width:0 2px 0 2px;
			}
			.companies{
				background-color:#00ffcc;
				border-style:solid none none none;
				border-top-width:4px;
				border-color:gray;
				border-radius:10px;
				padding:0 5px 5px 5px;
				margin:5px;
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
			.intro{
				display:none;
			}
			#prevbtn{
				background-color:#00ff99;
				padding:5px;
				border-radius:30px;
				box-shadow:0 0px 15px black;
				border-style:solid;
				border-width:1px;
				float:left;
				margin:10px 0 0 35%;
			}
			#nextbtn{
				background-color:#00ff99;
				padding:5px;
				border-radius:30px;
				box-shadow:0 0px 15px black;
				border-style:solid;
				border-width:1px;
				float:right;
				margin:10px 35% 0 0;
			}
			#ttl{
				position:relative;
				bottom:30px;
				color:#80ffbf;
			}
		</style>
	</head>
	<body>
		<?php include'pages/intro.php'; ?>
		<div class="header">
			<img src="images/logo.png" class="logo" />
			<span id="ttl">Location management system</span>
			<div class="links">
				<span id="aboutlink">about us</span>
			</div>
		</div>
		<div class="content">
			<?php
				//include'pages/add_org_user.php';
			?>
			<span id="cat">Categories</span>
			<span id="more">More</span>
			<span id="searchbox">
				<form id="searchbox" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="get">
					<input id="searchinpt" type="text" name="search" />
					<input id="searchbtn" type="submit" value="search"/>
				</form>
			</span>
			<div id="catdrop" class="catdrop">
				<?php
					$sql="SELECT cname FROM category";
					$result=$conn->executeQuery($sql);
					if($result->num_rows>0){
						for($row=0;$row<1;$row++){
							for($col=0;$col<10;$col++){
								while($data=$result->fetch_assoc()){
									echo "<span id='clist' onclick='selectCategory(\"".$data["cname"]."\")'>".$data["cname"]."</span>";
								}
							}
							echo"<br /><hr/>";
						}
					}
					else{
						echo "-- no category --";
					}
				?>
			</div>
			<div id="moredrop" class="moredrop">
				<span id="add_org_gen">- Add organization</span><br/><hr/>
				<span id="report_bug">- report error</span><br/><hr/>
			</div>
			<div class="companylist">
				<?php
					$companylist=new Company();
					$query;
					$result;
					//category condition
					if(count($_GET)>0&&(array_key_exists("category",$_GET))){
						$query="SELECT * FROM company WHERE cname = '".$_GET["category"]."';";
						$result=$companylist->select($query);
						echo "<style>#intro_modal{display:none;}</style>";
					}
					//search condition
					elseif(count($_GET)>0&&(array_key_exists("search",$_GET))){
						$query="SELECT * FROM company WHERE name like '%".$_GET["search"]."%';";
						$result=$companylist->select($query);
						echo "<style>#intro_modal{display:none;}</style>";
					}
					//page condition
					elseif(count($_GET)>0&&(array_key_exists("page",$_GET))){
						$query="SELECT * FROM company WHERE CID BETWEEN ".((($_GET["page"]-1)*4)+1)." AND ".((($_GET["page"]-1)*4)+4).";";
						$result=$companylist->select($query);
						echo "<style>#intro_modal{display:none;}</style>";
					}
					//main display condition
					else{
						$query="SELECT * FROM company LIMIT 4";
						$result=$companylist->select($query);
					}
					//if search not found
					if($result->num_rows==0){
						echo "<center>can not be found</center>";
					}
					//display the result
					else{
						while($row=$result->fetch_assoc()){
							echo"<div class='companies'><h3>".$row["name"]."</h3><hr />".
							"<h5>".$row["phoneNumber"]." -- ".$row["cname"]." -- ".$row["email"]."  -- ".$row["HouseNumber"]."</h5></div>";
						}
					}
				?>
				<div id="pagenation">
					<?php
						//
						if(count($_GET)>0&&(array_key_exists("page",$_GET))&&$_GET["page"]!="1"){
							echo "<span id='prevbtn' onclick='pagenation(".($_GET["page"]-1).")'>prev</span>";
							echo "<span id='nextbtn' onclick='pagenation(".($_GET["page"]+1).")'>next</span>";
						}
						else{
							echo "<span id='prevbtn'>prev</span>";
							echo "<span id='nextbtn' onclick='pagenation(2)'>next</span>";
						}
					?>
				</div>
			</div>
		</div>
		<?php 
			include 'pages/footer.php';
			include 'pages/about_us.php';
			include 'pages/add_org_user.php';
			include 'pages/comment_modal.php';
			include 'pages/error_report.php';?>
		<script type="text/javascript">
			var cat=document.getElementById("cat");
			var more=document.getElementById("more");
			var morepan=document.getElementById("moredrop");
			var catpan=document.getElementById("catdrop");
			var catclicked=false;
			var moreclicked=false;
			var searchbtn=document.getElementById("searchbtn");
			var searchbox=document.getElementById("searchinpt");

			function pagenation(pagenum){
				window.location="index.php?page="+pagenum;
			}
			function searchQr(){
				str=searchbox.value;
				window.location="index.php?search="+str;
			}
			function selectCategory(categ){
				window.location="index.php?category="+categ;
			}
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