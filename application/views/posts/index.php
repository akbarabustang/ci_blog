
    <div class="row">
        <div class="col-md-8">
            <h2><?php echo $title ?></h2>
            <p>Welcome to the Ci Blog</p>
            <br><br>
            <?php foreach($posts as $post) : ?>
            <hr>
            <h3><?php echo $post['title'] ?></h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/assets/images/blog/'.$post['post_image'] ?> " width="225">
                </div>
                <div class="col-md-8">
                     <small class="post-date"><?php echo $post['created_at'] ?> in <strong><?php echo $post['name'] ?></strong></small><br>
                    <?php echo word_limiter($post['body'], 60) ?><br>
                    <a href="<?php echo site_url('posts/'.$post['slug']) ?>" class="btn btn-success btn-sm">Read More</a> 
                </div>
            </div>
            <br>
            <?php endforeach ?>
        </div>
    </div>
