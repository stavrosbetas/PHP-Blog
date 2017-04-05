<?php include 'includes/header.php'; ?>
<?php

// Create DB object
$db = new Database;

// Create Query
$query= "SELECT * FROM categories";

// Run Query
$categories = $db->select($query);

?>
	<form action="add_post.php" method="post">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
  </div>
  <div class="form-group">
    <label>Post Category</label>
		<select name="category" class="form-control">
			<?php while($row = $categories->fetch_assoc()) : ?>
				<?php if($row['id'] == $post['category']){
						$selected = 'selected';
					}else{
						$selected = '';
					}
					?>

	<option <?php echo $selected; ?>><?php echo $row['name']; ?></option>
<?php endwhile;?>
	</select>
  </div>
  <div class="form-group">
    <label>Post Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
  </div>
  <div class="form-group">
    <label>Post tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter Post tags">
  </div>
  <div>
	<input type="submit" class="btn btn-default" name="submit" value="Submit" />
	<a href="index.php" class="btn btn-default">Cancel</a>
  </div>
  <br/>
</form>


<?php include 'includes/footer.php'?>
