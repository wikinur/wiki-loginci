<?=$this->extend('templates/auth');?>

<?=$this->section('content');?>
    <div class="page-wrapper">
      <div class="page-content--bge5">
        <div class="container">
          <div class="login-wrap">
            <div class="login-content">
              <div class="login-logo">
                <h1>Login</h1>
                <?php if (!empty(session()->getFlashdata('sukses'))): ?>
                  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                      <?=session()->getFlashdata('sukses');?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                <?php endif;?>
              </div>
              <div class="login-form">
                <form action="" method="post">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input
                      class="au-input au-input--full"
                      type="email"
                      name="email"
                      placeholder="Email"
                    />
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input
                      class="au-input au-input--full"
                      type="password"
                      name="password"
                      placeholder="Password"
                    />
                  </div>
                  <div class="login-checkbox">
                    <label>
                      <a href="#">Forgotten Password?</a>
                    </label>
                  </div>
                  <button
                    class="au-btn au-btn--block au-btn--green m-b-20"
                    type="submit"
                  >
                    sign in
                  </button>
                </form>
                <div class="register-link">
                  <p>
                    Don't you have account?
                    <a href="<?=base_url('/register');?>">Sign Up Here</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?=$this->endSection();?>
