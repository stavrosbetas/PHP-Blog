<?php include 'includes/header.php'; ?>
<?php
$id = $_GET['id'];

// Create DB object
$db = new Database;

// Create Query
$query= "SELECT * FROM categories WHERE id =". $id;

// Run Query
$category = $db->select($query)->fetch_assoc();

// Create Query
$query= "SELECT * FROM categories";

// Run Query
$categories = $db->select($query);

?>
<?php
	if (isset($_POST['submit'])){
		//Assign Vars
		$name = mysqli_real_escape_string($db->link, $_POST['name']);
		//Simple validation

		if ($name == ''){
			//Set Error
			$error = "Please fill out all the required field";
		}else{
			$query = "UPDATE categories
						SET name = '$name'
							WHERE id = ".$id ;

					$update_row = $db->update($query);
		}
	}

?>
<?php
	if (isset($_POST['delete'])){
		//Delete Query
		$query = "DELETE FROM categories
		WHERE id=".$id;
		$delete_row = $db->delete($query);
	}
?>

	<form method="post" action="edit_category.php?id=<?php echo $id; ?>">
  <div class="form-group" >
    <label>Category Name</label>
				<input name="name" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $category['name']; ?>">
		</div>

  <div>
	<input type="submit" class="btn btn-default" name="submit" value="Submit" />
	<a href="index.php" class="btn btn-default">Cancel</a>
	<input type="submit" class="btn btn-danger" name="delete" value="Delete" />
  </div>
  <br/>
</form>


<?php include 'includes/footer.php'?>
