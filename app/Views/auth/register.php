<?=$this->extend('templates/auth');?>

<?=$this->section('content');?>
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h1>Register</h1>
                            <?php if (!empty(session()->getFlashdata('error'))): ?>
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
									<?=session()->getFlashdata('error');?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
                            <?php endif;?>
                        </div>
                        <div class="login-form">
                            <form action="<?=base_url('/prosesRegister');?>" method="post" enctype="multipart/form-data">
                                <?=csrf_field();?>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="text" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input class="form-control" type="file" name="image" placeholder="Image">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="<?=base_url('/');?>">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?=$this->endSection();?>
