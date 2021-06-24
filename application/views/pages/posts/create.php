<h1><?= $title ?></h1>
<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <input type="text" name="body" class="form-control" id="exampleInputPassword1" placeholder="Body">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>