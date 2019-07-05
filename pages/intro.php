<style>
	.intro_modal{
		display:block	; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 5px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; 
		height: 100%; 
		overflow: auto; 
		background-color: rgb(0,0,0); 
		background-color: rgba(0,0,0,0.4);
	}
	.intro{
		display:block;
		background-color:#00ff99;
	}
	#pin{
		width:100%;
		margin:auto;
		padding-left:42%;
	}
	#map{
		width:100%;
		margin:auto;
		padding-left:28%;
	}
	#title{
		width:100%;
		margin:auto;
		padding-left:30%;
	}
	#discover_div{
		padding-left:42%;
	}
	#discover_div input{
		padding:10px;
	}
</style>
<div id="intro_modal" class="intro_modal">
<div class="intro" id="intro">
	<div id="pin">
		<img src="images/pin.png" />
	</div>
	<div id="map">
		<img src="images/map.png" />
	</div>
	<div id="title">
		<h1>Location management system</h1>
	</div>
	<div id="discover_div">
		<input class="discover" type="button" value="Discover"/>
	</div>
</div>
</div>
<script>
	var intro_modal = document.getElementById('intro_modal');
	var close_about_btn = document.getElementsByClassName("discover")[0];

	close_about_btn.onclick = function() {
		intro_modal.style.display = "none";
	}
</script>