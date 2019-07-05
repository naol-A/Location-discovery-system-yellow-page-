<div id="newcategory">
	<table>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<tr>
			<th>Add new category</th>
		</tr>
		<tr>
			<td><hr /></td>
		</tr>
		<tr>
			<td><input type="text" name="categoryname" /></td>
		</tr>
		<tr>
			<td><input type="submit" name="add" value="Add category" /></td>
			<td><input type="reset" name="cancel" value="cancel" /></td>
		</tr>
		</from>
	<table>
</div>
<?php
	include_once'../classes/category.php';
	$cat=new Category();
	if(count($_POST)>0&&(array_key_exists("categoryname",$_POST)){
		$cat->setcategoryname($_POST["categoryname"]);
		$cat->addCategory();
	}
?>