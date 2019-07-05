<div id="ad_b" class="ad_b">
	<span>Messages > adverts</span><hr />
	<table border="1" width="90%">
		<tr>
			<th>Ad name</th>
			<th>Date entered</th>
			<th>End date</th>
			<th>Days left</th>
			<th>email</th>
			<th>phone</th>
		</tr>
		<?php
		$sql="SELECT * FROM advertcompany";
		$result=$conn->executeQuery($sql);
		if($result->num_rows>0){
			while($rows=$result->fetch_assoc()){
				echo"<tr><td>".$rows["name"]."</td><td>".$rows["startdate"]."</td><td>"
					.$rows["enddate"]."</td><td>n/a</td><td>".$rows["email"]."</td><td>".$rows["phonenumber"]."</td></tr>";
			}
		}
		else{
			echo"<tr><td colspan='6'>no advert available</td></tr>";
		}
		?>
	</table>
</div>