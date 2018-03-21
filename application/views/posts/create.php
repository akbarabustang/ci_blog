
    <div class="row">
        <div class="col-md-6">
            <h3><?php echo $title ?></h3>
            <?php echo validation_errors() ?>
            <?php echo form_open_multipart('posts/create') ?>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Add Title">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea name="body" id="editor" class="form-control" cols="30" rows="10" placeholder="Add Body">
                    </textarea>
                    <script>
                        CKEDITOR.replace('editor');
                    </script>
                </div>

                <div class="form-group">
                    <label>Categories</label>
                    <select name="category_id" class="form-control">
                        <?php foreach ($categories as $cat) :?>
                        <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Upload Image</label><br>
                    <input type="file" name="postimage" size="20">
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>

