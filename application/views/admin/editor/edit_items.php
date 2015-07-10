<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3><span class="glyphicon glyphicon-file"></span> Items 
                <div class="col-lg-6 pull-right">
                    <div class="col-lg-6 col-lg-push-2">
                        <select class="form-control view-by-category">
                            <option value="">All Categories</option>
                            <?php foreach($categories as $category): ?>
                                <option value="<?php echo $category->category_id ?>"><?php echo $category->category_name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <a class="btn btn-sm btn-primary pull-right launch-modal" href="#" data-route="manage_content/add_item">
                            <span class="glyphicon glyphicon-file"></span><sup><span class="glyphicon glyphicon-plus-sign"></span></sup> Add Item
                        </a>
                    </div>
                </div>
                <span class="clearfix"></span>
            </h3>
        </div>
        <div class="panel-body">
            <?php if(!$items): ?>
                <h3><span class="glyphicon glyphicon-warning-sign"></span> There don't seem to be any items</h3>
            <?php else: ?>
            <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>Item ID</th>
                                    <th>Item Name</th>
                                    <th>Last Updated</th>
                                    <th>Description</th>
                                    <th>Item Category</th>
                                    <th>Item File Path</th>
                                    <th>Item Thumbnail</th>
                                </tr>
                                <?php foreach($items as $item): ?>
                                <tr>
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $item->item_id; ?></td>
                                        <td style="vertical-align: middle;" class="text-center"><strong><?php echo $item->item_name; ?></strong></td>
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $item->last_update; ?></td>
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $item->item_description; ?></td>
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $item->item_category; ?></td>
                                        <td style="vertical-align: middle;" class="text-center"><?php echo $item->item_location; ?>/<?php echo $item->item_filename; ?></td>
                                        <td style="vertical-align: middle;" class="text-center center-block">
                                            <img src="http://www.westpennwiremarketing.com/library-assets/thumbs/<?php echo $item->item_thumbnail; ?>" class="img-responsive pull-left" height="80" width="20" />
                                            <a class="btn btn-warning launch-modal pull-right" href="#" data-route="manage_content/update_thumbnail" data-resource="<?php echo $item->item_id; ?>">Change</a>
                                            <span class="clearfix"></span>
                                        </td>
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