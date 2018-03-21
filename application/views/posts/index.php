<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $title ?></h2>
            <p>Welcome to the Ci Blog</p>
            <br><br>
            <?php foreach($posts as $post) : ?>
            <h3><?php echo $post['title'] ?></h3>
            <small class="post-date"><?php echo $post['created_at'] ?></small><br>
            <?php echo $post['body'] ?><br>
            <a href="<?php echo site_url('posts/'.$post['slug']) ?>" class="btn btn-success btn-sm">Read More</a>
            <br><br>
            <?php endforeach ?>
        </div>
    </div>
</div>