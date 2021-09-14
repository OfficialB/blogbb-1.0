<?php include ("includes.php"); ?>
<title><?php echo $sitename; ?></title>
<div class="container">
<?php

if ($_GET['e'] == 1) {
    echo ('<div class="alert alert-danger" role="alert">Couldn\'t post blog. Please make sure the fields are between the minimum and maximum lengths.</div>');
} else {
    if ($_GET['e'] == 2) {
        echo ('<div class="alert alert-danger" role="alert">Couldn\'t post blog. Please make to fill out all fields.</div>');
    }
}
?>
 <form action="form.php" method="post">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
    <small class="form-text text-muted">Your email will be public to those who view your blog. | MIN: 7 - MAX: 60</small>
  </div>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Enter blog title.">
    <small class="form-text text-muted">MIN: 3 - MAX: 30</small>
  </div>
  <div class="form-group">
    <label>Body</label><br>
    <textarea id="body" name="body" rows="8" cols="75" placeholder="Enter blog content."></textarea><br>
    <small class="form-text text-muted">MIN: 10 - MAX: 60000</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
<br>
<br>
<br>
<br>
<br>