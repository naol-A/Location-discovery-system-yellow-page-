<div class="dashboard">
	<div class="options">
		<span id="msg">- messages *</span><hr />
		<span style="display:none" id="messages_drop">
			<h5 id="comments">-comments</h5>
			<h5 id="adverts">-adverts</h5><hr />
		</span>
		<span id="set">- settings</span><hr />
		<span id="act">- actions *</span><hr />
		<span style="display:none" id="action_drop">
			<h5 id="add">-add new organization</h5>
			<h5 id="org">-organizations</h5><hr />
		</span>
		<span id="lg" onclick="logout()">- Log out</span>
	</div>
	<div id="messages" class="messages">
		<?php include'dashboard_pages/comments.php';?>
		<?php include'dashboard_pages/ads.php';?>
	</div>
	<div id="settings" class="settings">
		<span id="stitle">Settings</span><hr />
		<?php include'dashboard_pages/settings.php';?>
	</div>
	<div id="actions" class="actions">
		<?php include'dashboard_pages/add_org.php';?>
		<?php include'dashboard_pages/list_org.php';?>
	</div>
</div>
<?php include'dashboard_pages/layout_handler.php';
	if(count($_SESSION)>0&&(array_key_exists("username",$_SESSION))&&(array_key_exists("logout",$_GET)))
	{
		session_unset();
		session_destroy();
	}
?>
<script type="text/javascript">
	var messages_drop=document.getElementById('messages_drop');
	var setting_board=document.getElementById('settings');
	var actions=[document.getElementById('add_org'),
				document.getElementById('list_org')];
	var messages=[document.getElementById('comment_b'),
				document.getElementById('ad_b')];
	var act_drop=document.getElementById('action_drop');
	var action_drop_clicked=false;
	var message_drop_clicked=false;
	
	function logout(){
		window.location="index.php?logout=1";
	}
	document.getElementById('msg').onclick=function(){
		act_drop.style.display="none";
		action_drop_clicked=false;
		switch(message_drop_clicked){
			case false:{
				message_drop_clicked=true;
				messages_drop.style.display="block";
				break;
			}
			case true:{
				message_drop_clicked=false;
				messages_drop.style.display="none";
				break;
			}
		}
	}
	document.getElementById("comments").onclick=function(){
		actions[0].style.display="none";
		actions[1].style.display="none";
		messages[0].style.display="block";
		messages[1].style.display="none";
		setting_board.style.display="none";
	}
	document.getElementById("adverts").onclick=function(){
		actions[0].style.display="none";
		actions[1].style.display="none";
		messages[0].style.display="none";
		messages[1].style.display="block";
		setting_board.style.display="none";
		window.location="index.php?layout=advert";
	}
	document.getElementById('set').onclick=function(){
		setting_board.style.display="block";
		actions[0].style.display="none";
		actions[1].style.display="none";
		messages[0].style.display="none";
		messages[1].style.display="none";
		window.location="index.php?layout=setting";
	}
	document.getElementById('act').onclick=function(){
		messages_drop.style.display="none";
		message_drop_clicked=false;
		switch(action_drop_clicked){
			case false:{
				action_drop_clicked=true;
				act_drop.style.display="block";
				break;
			}
			case true:{
				action_drop_clicked=false;
				act_drop.style.display="none";
				break;
			}
		}
	}
	document.getElementById('add').onclick=function(){
		actions[0].style.display="block";
		actions[1].style.display="none";
		messages[0].style.display="none";
		messages[1].style.display="none";
		setting_board.style.display="none";
		window.location="index.php?layout=add_company";
	}
	document.getElementById('org').onclick=function(){
		actions[0].style.display="none";
		actions[1].style.display="block";
		messages[0].style.display="none";
		messages[1].style.display="none";
		setting_board.style.display="none";
		window.location="index.php?layout=list_company";
	}
</script>