<div class="container" style="margin-top:10%;border:1px solid #ccc;border-radius:12px;padding:25px 0 25px 0;">
        <div class="col-lg-6 col-lg-push-3 text-center">
            <a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> West Penn Wire Marketing</a>
        <form class="form-signin" action="<?php echo base_url(); ?>admin/dologin" method="POST">
          <span class="alert-primary" id="errors"><h2>Please sign in.</h2></span>
          <input type="email" name="username" class="form-control" placeholder="Email address" autofocus>
          <input type="password" name="password" class="form-control" placeholder="Password" >
          <br />
          <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
        </form>
          </div>

</div> <!-- /container -->