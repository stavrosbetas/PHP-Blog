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
	<form>
  <div class="form-group" method="post" action="edit_category.php">
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
