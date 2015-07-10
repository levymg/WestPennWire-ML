<?php $this->load->view("library/template/nav"); ?>
    <div class="login container">
            <div class="row">
                <div class="col-xs-7">
                    <div class="dynamic-view">
                            <h1>Welcome to the West Penn Wire Marketing Library.</h1>
                            <?php if($this->session->flashdata("message")): ?>
                                <h1><?php echo $this->session->flashdata("message"); ?></h1>
                            <?php endif; ?>
                            <p>Welcome <?php echo $this->session->userdata("first_name"); ?> <?php echo $this->session->userdata("last_name"); ?>, <br />
                          Click on any of the links above to view our current inventory of marketing materials. While browsing, you may download or email a PDF, print a few if needed, or order as many as required. Order as many different items you may need as they’ll be placed in the shopping cart before you finalize and submit your request.</p>
                    </div>
                </div>
              <div class="col-xs-2 visible-sm-* visible-md-* visible-lg-* hidden-xs"></div>
              <div class="col-xs-12 col-sm-3">
                <?php $this->load->view("library/template/sidebar"); ?>
              </div>
              <div class="col-xs-12">
                <div class="spacer"></div>
              </div>
            </div>
        </div>
    </div>
