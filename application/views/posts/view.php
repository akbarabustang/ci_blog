
    <div class="row">
        <div class="col-md-8">
            <h3><?php echo $post['title'] ?></h3>
            <small class="post-date"><?php echo $post['created_at'] ?> in <strong><?php echo $post['name'] ?></strong></small><br>
            <div class="img-responsive">
                <img  src="<?php echo base_url().'/assets/images/blog/'.$post['post_image'] ?>" width="756" height="434">
            </div>
            <div class="post-body">
                <?php echo $post['body'] ?>
            </div>
            <hr>
            <?php echo anchor('/posts/edit/'.$post['slug'], 'Edit', array('class'=>'btn btn-primary pull-left')) ?>
            <?php echo anchor('/posts/delete/'.$post['id'], 'Delete', array('class'=>'btn btn-danger')) ?>
            
        </div>
    </div>
