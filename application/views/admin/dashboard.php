<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3><span class="glyphicon glyphicon-server"></span> Marketing Library Content</h3>
                </div>
                <div class="panel-body">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="panel panel-default">
                            <a class="btn btn-block btn-primary" href="<?php echo base_url(); ?>manage_content/categories">
                                <h3><span class="glyphicon glyphicon-folder-close"></span> Categories</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                         <div class="panel panel-default">
                             <a class="btn btn-block btn-primary" href="<?php echo base_url(); ?>manage_content/items">
                                    <h3><span class="glyphicon glyphicon-file"></span> Items</h3>
                             </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                         <div class="panel panel-default">
                             <a class="btn btn-block btn-primary" href="<?php echo base_url(); ?>manage_content/users">
                                <h3><span class="glyphicon glyphicon-user"></span> Users</h3>
                             </a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <hr />
</div>
 <div class="container">
     <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3>Survey Submissions</h3>
            </div>
              
            <div class="panel-body">
                <div class="table-responsive">
                    <?php if($leads): ?>
                    <?php echo $links; ?> <button class="btn btn-primary export pull-right"><span class="glyphicon glyphicon-download"></span> Export to CSV</button>
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Company</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Submitted On</th>
                            <th>View Survey</th>
                            <?php foreach($leads as $lead): ?>
                                    <tr>
                                        <td>
                                            <?php echo $lead->name; ?>
                                        </td>
                                        <td>
                                            <?php echo $lead->title; ?>
                                        </td>
                                        <td>
                                            <?php echo $lead->company; ?>
                                        </td>
                                        <td>
                                            <?php echo $lead->phone; ?>
                                        </td>
                                        <td>
                                            <?php echo $lead->email; ?>
                                        </td>
                                        <td>
                                            <?php echo date('m/d/y h:i:s a', $lead->created_on); ?>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="view" data-resource_id="<?php echo $lead->resource_id; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                                        </td>
                                    </tr>
                            <?php endforeach; ?>
                    </table>
                    <div class="pagination-lg">
                        <?php echo $links; ?>
                    </div>
                    <?php else: ?>
                    <p>No entries have been submitted yet.</p>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>