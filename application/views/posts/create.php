<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3><?php echo $title ?></h3>
            <?php echo validation_errors() ?>
            <?php echo form_open('posts/create') ?>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Add Title">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea name="body" class="form-control" cols="30" rows="10" placeholder="Add Body">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>
</div>