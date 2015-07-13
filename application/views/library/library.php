<div class="library container">
  <div class="row">
    <div class="col-xs-12 col-sm-8">
      <h1><?php echo $category->category_name; ?></h1>

      <div class="row">
          <?php if(!$data): ?>
          <div class="col-xs-12">
              <div class="alert alert-danger">
                <h2>No materials were found under this category.</h2>
              </div>
          </div>
          <?php else: ?>
          <?php foreach($data as $item): ?>
                <div class="download-area col-md-6">
                  <h2><?php echo $item['item_name']; ?></h2>
                  <img class="img-responsive" src="http://www.westpennwiremarketing.com/library-assets/thumbs/<?php echo $item['item_thumbnail']; ?>" />
                  <div class="links">
                    <ul>
                      <li><a href="<?php echo $item['item_location']; ?>/<?php echo $item['item_filename']; ?>" target="_blank">Download a PDF</a></li>
                      <li> | </li>
                      <li><a href="">Email a PDF</a></li>
                    </ul>
                  </div>
                      <?php if($category->request == 1): ?>
                      <div>
                            <form class="add" method="POST">
                              <label>Request Hard Copies (Limit: <?php echo $category->category_limit; ?>)</label><br />
                              <input type="number" name="quantity" required />
                              <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?>" />
                              <input type="submit" value="Add to Bin" />
                            </form>
                          </div>
                        </div>
                    <?php else: ?>
                        </div>
                    <?php endif; ?>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
      </div>
    </div>
  </div>
