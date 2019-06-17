<div class="dashboard">
	<div class="options">
		<span id="msg">- messages</span><hr />
		<span id="messages_drop" style="display:block">
			<h5 id="comments">-comments</h5>
			<h5 id="adverts">-adverts</h5><hr />
		</span>
		<span id="set">- settings</span><hr />
		<span id="act">- actions</span><hr />
		<span style="display:none" id="action_drop">
			<h5 id="add">-add new organization</h5>
			<h5 id="org">-organizations</h5><hr />
		</span>
		<span id="lg">- Log out</span>
	</div>
	<div id="messages" class="messages">
		<span id="mtitle">messages</span>
		<hr />
	</div>
	<div id="settings" class="settings">
		<span id="stitle">Settings</span>
		<hr />
		<h3>User name</h3>
		<h4>naol arega</h4>
	</div>
	<div id="actions" class="actions">
		<div id="add_org" class="add_org">
			<span>action > add new organization</span><hr />
			<form id="add_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<span>company name:</span><br />
				<input type="text" name="cname" /><br />
				<span>phone nummber:</span><br />
				<input type="tel" name="phonenum" /><br />
				<span>email:</span><br />
				<input type="text" name="email" /><br />
				<span>category:</span><br />
				<input list="category" name="cat" />
				<datalist id="category">
					<?php
						$server="localhost";
						$uname="root";
						$ps="vertrigops";
						$db="lms";
						
						$conn=mysqli_connect($server,$uname,$ps,$db);
						
						if(!$conn){
							die("connection error: ".mysqli_connect_error());
						}
						
						$sql="SELECT cname FROM category";
						$result=mysqli_query($conn,$sql);
						
						if(mysqli_num_rows($result)>0){
							while($data=mysqli_fetch_assoc($result)){
								echo "<option value='".$data['cname']."' />";
							}
						}
						else{
							echo "<option value='none' >";
						}
						mysqli_close($conn);
					?>
				</datalist>
				<span>+new category</span><br />
				<span>home number:</span><br />
				<input type="text" name="hnum" />
				<span>+new address</span><br />
				<input type="submit" value="add new" /><br />
				<?php
					$conn=mysqli_connect("localhost","root","vertrigops","lms");
					
					if(!$conn){
						echo"error: ".mysqli_connect_error();
					}
					
					if(count($_POST)!=0&&array_key_exists("cname",$_POST)){
						$sql="INSERT INTO company(CID,name,phonenumber,email,cname,HouseNumber)".
								"VALUE ('".RAND()."','".$_POST["cname"]."','".$_POST["phonenum"]."','".$_POST["email"]."','"
								.$_POST["cat"]."','".$_POST["hnum"]."')";
								
						if(mysqli_query($conn,$sql)){
							echo("<h5>New company added successfully</h5>");
						}
						else{
							echo"Error: ".$sql.$value."--(".mysqli_error($conn).")";
						}
					}
					
					mysqli_close($conn);
				?>
			</form>
		</div>
		<div id="list_org" class="list_org">
			<span>action > organizations</span><hr />
		</div>
	</div>
</div>
<script type="text/javascript">
	var messages_board=document.getElementById('messages');
	var setting_board=document.getElementById('settings');
	var actions=[document.getElementById('add_org'),
				document.getElementById('list_org')];
	var act_drop=document.getElementById('action_drop');
	var drop_clicked=false;
	
	document.getElementById('msg').onclick=function(){
		actions[0].style.display="none";
		actions[1].style.display="none";
		messages_board.style.display="block";
		setting_board.style.display="none";
	}
	document.getElementById('set').onclick=function(){
		setting_board.style.display="block";
		messages_board.style.display="none";
		actions[0].style.display="none";
		actions[1].style.display="none";
	}
	document.getElementById('act').onclick=function(){
		switch(drop_clicked){
			case false:{
				drop_clicked=true;
				act_drop.style.display="block";
				break;
			}
			case true:{
				drop_clicked=false;
				act_drop.style.display="none";
				break;
			}
		}
	}
	document.getElementById('add').onclick=function(){
		actions[0].style.display="block";
		actions[1].style.display="none";
		messages_board.style.display="none";
		setting_board.style.display="none";
	}
	document.getElementById('org').onclick=function(){
		actions[0].style.display="none";
		actions[1].style.display="block";
		messages_board.style.display="none";
		setting_board.style.display="none";
	}
</script>