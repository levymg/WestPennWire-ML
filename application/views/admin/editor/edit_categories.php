<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-folder-close"></span> Categories 
                        <a class="btn btn-sm btn-primary pull-right launch-modal" href="#" data-route="manage_content/add_category">
                            <span class="glyphicon glyphicon-folder-close"></span><sup><span class="glyphicon glyphicon-plus-sign"></span></sup> Add Category
                        </a>
                        <span class="clearfix"></span>
                    </h3>
                </div>
                <form id="editor" method="POST" action="">
                <div class="panel-body">
                    <?php if($categories == NULL): ?>
                    <h3><span class="glyphicon glyphicon-warning-sign"></span> There don't seem to be any categories</h3>
                    <?php else: ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>Category ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Order Limit</th>
                                    <th>Edit</th>
                                    <th>Select <label for="all" class="pull-right"><input type="checkbox" id="selecctall" /></label></th>
                                </tr>
                                <?php foreach($categories as $category): ?>
                                <tr>
                                        <td><?php echo $category->category_id; ?></td>
                                        <td><?php echo $category->category_name; ?></td>
                                        <td><?php echo $category->category_desc; ?></td>
                                        <td><?php echo $category->category_limit; ?></td>
                                        <td><a class="btn btn-warning launch-modal" href="#" data-type="category" data-resource="<?php echo $category->category_id; ?>" data-route="manage_content/edit">Edit</a></td>
                                        <td><label for="<?php echo $category->category_id; ?>" class="pull-right"><input type="checkbox" name="category_id[]" data-type="category" class="checkbox1" value="<?php echo $category->category_id; ?>" /></label></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="panel-footer">
                    <div class="pull-right">
                        <div class="btn-group">
                            <a class="btn btn-danger delete-record" href="#" data-type="category">Delete Selected</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>