<?php if (!empty(session()->getFlashdata('error'))): ?>
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
									<?=session()->getFlashdata('error');?>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
                            <?php endif;?>
<h1>Ini halaman admin</h1>
<p><a href="<?=base_url('/logout');?>">Logout</a></p>
