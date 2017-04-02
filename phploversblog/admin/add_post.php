<?php include 'includes/header.php'?>

	<form>
  <div class="form-group" method="post" action="add_post.php">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group" method="post" action="add_post.php">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
  </div>
  <div class="form-group" method="post" action="add_post.php">
    <label>Post Category</label>
    <select name="category" class="form-control">
	<option>News</option>
	<option>Events</option>
	</select>
  </div>
  <div class="form-group" method="post" action="add_post.php">
    <label>Post Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
  </div>
  <div class="form-group" method="post" action="add_post.php">
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
