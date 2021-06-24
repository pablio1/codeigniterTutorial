<h1><?= $title ?></h1>
<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
  <input type="hidden" name="postid" value="<?php echo $post['post_id']; ?>"/>
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title" value="<?php echo $post['title'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <input type="text" name="body" class="form-control" id="exampleInputPassword1" placeholder="Body" value="<?php echo $post['body'] ?>">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>