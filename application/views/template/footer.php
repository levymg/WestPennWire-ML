<div class="foot">
    <div class="container">
        <div class="pull-left col-lg-6 margintop-5">
            <a href="http://www.westpenn-wpw.com" target="_blank"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="West Penn Wire" class="img-responsive" /></a>
        </div>
        <div class="pull-left col-lg-6 margintop-5">
            <address style="font-weight: 700;">
            2833 West Chestnut Street<br />
            Washington, PA 15301<br />

            Toll Free: 1-800-245-4964<br />
            Fax: 1-724-222-6420 
            </address>
        </div>
    </div>
</div>
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
<?php if(!isset($editor)): ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/survey.js"></script>
<?php endif; ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<?php if($this->session->userdata("token")): ?>
<script>
var token = <?php echo json_encode($this->session->userdata("token")); ?>;
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/admin.min.js"></script>
<?php if(isset($editor)): ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/editor.js"></script>
<?php endif; ?>
<?php endif; ?>
</body>
</html>