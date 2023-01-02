<!-- Internet Connection Status-->
<div class="internet-connection-status" id="internetStatus"></div>
<!-- Back Button-->
<div class="login-back-button"><a href="element-hero-blocks.html"><svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
    </svg></a></div>
<!-- Login Wrapper Area-->
<div class="login-wrapper d-flex align-items-center justify-content-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
        <div class="text-center px-4"><img class="login-intro-img" src="img/bg-img/36.png" alt=""></div>
        <!-- Register Form-->
        <div class="register-form mt-4 px-4">
          <h6 class="mb-3 text-center">Log in to continue to Affan.</h6>
          <form action="<?php echo base_url(); ?>loginPr">
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Username">
            </div>
            <div class="form-group">
              <input class="form-control" type="password" placeholder="Enter Password">
            </div>
            <button class="btn btn-primary w-100" type="submit">Sign In</button>
          </form>
        </div>
        <!-- Login Meta-->
        <div class="login-meta-data text-center"><a class="stretched-link forgot-password d-block mt-3 mb-1" href="<?php echo base_url(); ?>forget-password">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
</div>