<?php include 'includes/header.php';?>

<?php

	$id = $_GET['id'];

	// Create DB object
	$db = new Database;

	// Create Query
	$query= "SELECT * FROM posts WHERE id =". $id;

	// Run Query
	$post = $db->select($query)->fetch_assoc();

	// Create Query
	$query= "SELECT * FROM categories";

	// Run Query
	$categories = $db->select($query);



?>

	<form>
  <div class="form-group" method="post" action="edit_post.php">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $post['title']; ?>" />
  </div>
  <div class="form-group" method="post" action="add_post.php">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body"><?php echo $post['body']; ?></textarea>
  </div>
  <div class="form-group" method="post" action="add_post.php">
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
  <div class="form-group" method="post" action="add_post.php">
    <label>Post Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
  </div>
  <div class="form-group" method="post" action="add_post.php">
    <label>Post tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter Post tags" value="<?php echo $post['tags']?>">
  </div>
  <div>
	<input type="submit" class="btn btn-default" name="submit" value="Submit" />
	<a href="index.php" class="btn btn-default">Cancel</a>
	<input type="submit" class="btn btn-danger" name="delete" value="Delete" />

  </div>
  <br/>
</form>


<?php include 'includes/footer.php'?>
