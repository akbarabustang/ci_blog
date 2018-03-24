
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
                    <script>
                        CKEDITOR.replace('editor');
                    </script>
                </div>

                <div class="form-group">
                    <label>Categories</label>
                    <select name="category_id" class="form-control">
                      <?php foreach($categories as $k):
                        $idcat=$k['id'];
                        $cat=$k['name'];
                      ?>
                      <?php if($idcat==$post['category_id']):?>
                        <option value="<?php echo $idcat;?>" selected><?php echo $cat;?></option>
                      <?php else:?>
                        <option value="<?php echo $idcat;?>"><?php echo $cat;?></option>
                      <?php endif;?>
                      <?php endforeach;?>
                    </select>
                </div>

               
                <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
            </form>
        </div>
    </div>
