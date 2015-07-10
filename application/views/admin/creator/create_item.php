<form id="create_file" class="form" method="POST" action="" data-route="<?php echo base_url(); ?>api/items/item">
    <div class="row">
            <div class="col-lg-12">
                        <div class="form-errors hide">
                            <div class="col-lg-12">
                                <div class="row">
                                    <span class="errors warning"></span>
                                </div>
                                <hr />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category" class="col-sm-6">File Category</label>
                            <div class="input-group col-sm-6">
                                <select name="category_id" class="form-control">
                                    <option value="">Select a category</option>
                                    <?php foreach($categories as $category): ?>
                                        <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_name" class="col-sm-6">File Name</label>
                            <div class="input-group col-sm-6">
                                <input type="text" name="item_name" class="form-control" placeholder="File Name (e.g. 2015 Product Catalog)" />
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="category_desc" class="col-sm-6">File Description</label>
                                <div class="input-group col-sm-6">
                                    <textarea name="item_desc" class="form-control" placeholder="A brief description of the file"></textarea>
                                </div>
                        </div>
                    <input type="hidden" name="token" value="<?php echo $this->session->userdata("token"); ?>" />
            </div>
    </div>
</form>