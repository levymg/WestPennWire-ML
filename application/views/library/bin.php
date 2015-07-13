<?php $this->load->view("library/template/nav"); ?>
    <div class="library container">
            <div class="row">
                <div class="col-xs-7">
                    <div class="dynamic-view">
                        <h1><i class='fa fa-cart-plus'></i> <?php echo $this->session->userdata("first_name"); ?>'s Bin</h1>
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
