<form id="create_category" class="form" method="POST" action="" data-route="<?php echo base_url(); ?>api/categories/category">
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
                            <label for="category_name" class="col-sm-6">Category Name</label>
                            <div class="input-group col-sm-6">
                                <input type="text" name="category_name" class="form-control" placeholder="Category Name (e.g. Catalog)" />
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="category_desc" class="col-sm-6">Category Description</label>
                                <div class="input-group col-sm-6">
                                    <textarea name="category_desc" class="form-control" placeholder="A brief description of the category"></textarea>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="category_order" class="col-sm-6">Hard Copies Available?</label>
                            <div class="input-group col-sm-6">
                                            <label for="radio1">Yes <input type="radio" name="request" value="1" /></label> 
                                            <label for="radio2">No <input type="radio" name="request" value="0" /></label>
                                <span class="clearfix"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_limit" class="col-sm-6">Order Limit</label>
                            <div class="input-group col-sm-6">
                                <input type="number" name="category_limit" class="form-control" placeholder="Number of units allowed to be ordered" />
                            </div>
                        </div>
                    <input type="hidden" name="token" value="<?php echo $this->session->userdata("token"); ?>" />
            </div>
    </div>
</form>