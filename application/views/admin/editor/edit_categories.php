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
                                    <th>Select <label for="all" class="pull-right"><input type="checkbox" /></label></th>
                                </tr>
                                <?php foreach($categories as $category): ?>
                                <tr>
                                    <td><?php echo $category->cid; ?></td>
                                    <td><?php echo $category->name; ?></td>
                                    <td><?php echo $category->def; ?></td>
                                    <td><label for="<?php echo $category->cid; ?>" class="pull-right"><input type="checkbox" /></label></td>
                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="panel-footer">
                    
                </div>
            </div>
        </div>
    </div>
</div>