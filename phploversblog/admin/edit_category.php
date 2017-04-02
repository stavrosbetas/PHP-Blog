<?php include 'includes/header.php'?>

	<form>
  <div class="form-group" method="post" action="edit_category.php">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Title">
  </div>

  <div>
	<input type="submit" class="btn btn-default" name="submit" value="Submit" />
	<a href="index.php" class="btn btn-default">Cancel</a>
	<input type="submit" class="btn btn-danger" name="delete" value="Delete" />
  </div>
  <br/>
</form>


<?php include 'includes/footer.php'?>
