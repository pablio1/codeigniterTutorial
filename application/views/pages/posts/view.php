<h2><?= $title ?></h2>

<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<?php echo form_open('/posts/delete/'.$post['post_id']); ?>
    <a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-primary pull-left">Edit</a>
    
    <button type="submit" value="Delete" class="btn btn-danger pull-right">Delete</button>
</form>

