<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3><?php echo $post['title'] ?></h3>
            <small class="post-date"><?php echo $post['created_at'] ?></small><br>
            <div class="post-body">
                <?php echo $post['body'] ?>
            </div>
            <hr>
            <?php echo anchor('/posts/edit/'.$post['slug'], 'Edit', array('class'=>'btn btn-primary pull-left')) ?>
            <?php echo anchor('/posts/delete/'.$post['id'], 'Delete', array('class'=>'btn btn-danger')) ?>
            
        </div>
    </div>
</div>