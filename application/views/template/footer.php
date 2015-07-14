<div class="container">
  <div class="signoff-container row">
    <div class="col-xs-9 col-sm-5">
      <img class="img-responsive" src="assets/img/logo2.png" />
    </div>
    <div class="signoff col-xs-3">
      <p>2833 West Chestnut Street</p>
      <p>Washington, PA 15301</p>
      <p>800.245.4964</p>
    </div>
    <div class="col-xs-4">
    </div>
  </div>
</div>
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul>
          <li><a href="tel:8002454964">800.245.4964</a></li><li> | </li>
          <li><a href="mailto:sales@westpenn-wpw.com">sales@westpenn-wpw.com</a></li>
        </ul>
      </div>
    </div>
  </div>
  <img class="green-corner" src="assets/img/green-corner.png" />
</div>


<div class="modal fade" id="notification">
    <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
            </div>
    </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<?php if(isset($order)): ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/catalog.js"></script>
<?php endif; ?>
<?php if(!isset($editor)): ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/survey.js"></script>
<?php endif; ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<?php if($this->session->userdata("username")): ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/app.js"></script>
<?php endif; ?>
<?php if($this->session->userdata("token")): ?>
<script>
var token = <?php echo json_encode($this->session->userdata("token")); ?>;
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/admin.min.js"></script>
<?php if(isset($editor)): ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/editor.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dropzone.js"></script>
<?php endif; ?>
<?php endif; ?>
</body>
</html>
