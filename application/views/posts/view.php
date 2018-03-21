<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3><?php echo $post['title'] ?></h3>
            <small class="post-date"><?php echo $post['created_at'] ?></small><br>
            <div class="post-body">
                <?php echo $post['body'] ?>
            </div>
        </div>
    </div>
</div>

<hr>

<?php echo form_open('/posts/delete/'.$post['id']) ?>
<input type="submit" value="Delete" class="btn btn-danger">
</form>