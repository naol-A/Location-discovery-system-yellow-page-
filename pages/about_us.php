<style>
	.aboutus_modal{
		display:none;display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; 
		height: 100%; 
		overflow: auto; 
		background-color: rgb(0,0,0); 
		background-color: rgba(0,0,0,0.4);
	}
	#about_us_content{
		position: relative;
		background-color: #00ff99;
		margin: auto;
		padding: 0;
		border: 1px solid #888;
		width: 40%;
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	}
	.close_about_us{
		color: black;
		float: right;
		font-size: 28px;
		font-weight: bold;
	}
	.close_about_us:hover,
	.close_about_us:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
	}
</style>
<div id="aboutus_modal" class="aboutus_modal">
<div id="about_us_content" class="about_us_content">
	<span class="close_about_us">X</span>
	<table>
		<tr>
			<th>About our website</th>
		</tr>
		<tr>
			<td><hr /></td>
		</tr>
		<tr>
			<td>Location management system for navigating around ethiopia</td>
		</tr>
		<tr>
			<td>and to locate any organization, cafe or it can be cinema</td>
		</tr>
		<tr>
			<td>you will find it all here<tr>
		</tr>
		<tr>
			<th>developed by:</th>
		</tr>
		<tr>
			<td>NAOL AREGA</td>
		</tr>
		<tr>
			<td>TSION GIZACHEW</td>
		</tr>
		<tr>
			<td>ZERUBABEL ESHETU</td>
		</tr>
		<tr>
			<td>NAHOM HAYLEZGHI</td>
		</tr>
		<tr>
			<td>YABIRUFANA G/MICHAEL</td>
		</tr>
		
		<tr>
			<td>TEBIBU SOLOMON</td>
		</tr>
	</table>
</div>
</div>
<script>
	var aboutus_modal = document.getElementById('aboutus_modal');
	var aboutlink_btn = document.getElementById("aboutlink");
	var close_about_btn = document.getElementsByClassName("close_about_us")[0];

	aboutlink_btn.onclick = function() {
		aboutus_modal.style.display = "block";
	}

	close_about_btn.onclick = function() {
		aboutus_modal.style.display = "none";
	}
</script>