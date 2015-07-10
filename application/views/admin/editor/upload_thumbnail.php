<div class="col-lg-12">
    <div class="row">
    <div class="col-lg-6">
        <h2>Current Thumbnail</h2>
        <img src="<?php echo base_url(); ?>library-assets/thumbs/<?php echo $item->item_thumbnail; ?>" />
    </div>
        <div class="col-lg-5 col-lg-push-1">
            <h2>New Thumbnail</h2>
            <form action="<?php echo base_url(); ?>manage_content/change_thumbnail?file_id=<?php echo $file_id; ?>" class="dropzone" id="dropzone" enctype="multipart/form-data">

            </form>
            <input type="hidden" class="item-id" name="file_id" value="<?php echo $item->item_id; ?>" />
        </div>
    </div>
</div>
                                            