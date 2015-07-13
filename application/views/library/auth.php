
<div class="login container">
  <div class="row">
    <div class="col-xs-12 col-sm-8">
      <h1>Marketing Materials at Your Fingertips</h1>
      <p>The West Penn Wire Marketing Library gives you 24/7 access to the most current materials that can help you convert leads into sales, including catalogs, brochures, technical data sheets, ads, direct-mail pieces, surveys, product news releases, product photos, PowerPoint presentations, CDs and tradeshow materials.</p>

      <h1>It’s Always Selling Season</h1>
      <p>To request copies of marketing materials, enter your Email address below.</p>
    </div>
    <div class="col-xs-12">
      <div class="login-box">
        <?php if ($this->session->flashdata('error')): ?>
          <div class="alert alert-danger">
              <?php echo $this->session->flashdata("error"); ?>
          </div>
        <?php endif; ?>
        <h2>Log in using your email:</h2>
        <form action="<?php echo base_url(); ?>auth/dologin" method="POST">

          <div class="form-style">
            <label>Email</label>

            <input type="text" name="username" autofocus>
          </div>
          <div style="clear:both;"></div>
          <br />


          <input class="btn btn-default" type="submit" value="Login">
        </form>
      </div>

      <div class="spacer"></div>
    </div>
  </div>
</div>
