
<?php foreach($posts as $post) : ?>
    <h3><?php echo $post['title']; ?></h3>
    <p><?php echo $post['body']; ?></p>
    <a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']) ?>">Read More</a>
<?php endforeach; ?>