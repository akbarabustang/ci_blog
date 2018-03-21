<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3><?php echo $title ?></h3>
            <?php echo validation_errors() ?>
            <?php echo form_open('posts/update') ?>
            <input type="hidden" name="id" value="<?php echo $post['id'] ?>" >
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $post['title'] ?>">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea name="body" id="editor" class="form-control" cols="30" rows="10" >
                        <?php echo $post['body'] ?>
                    </textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>
</div>