<?php $latest_items = $controller->sidebar(); ?>
<div class="featured">
<h1>New Additions</h1>
<?php foreach($latest_items as $item): ?>
    <div class="panel panel-success">
        <div class="panel-heading text-center">
            <h3><?php echo $item->item_name; ?></h3>
        </div>
        <div class="panel-body">
            <img class="img-responsive" src="<?php echo base_url(); ?>library-assets/thumbs/<?php echo $item->item_thumbnail; ?>" />
        </div>
        <div class="panel-footer">
            <a class="btn btn-block btn-success change-category" href="#" data-category_id="<?php echo $item->item_category; ?>">View</a>
        </div>
    </div>
<?php endforeach; ?>
</div>



