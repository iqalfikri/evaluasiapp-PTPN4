<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-3">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <img src="<?php echo base_url(); ?>assets/img/logo-ptpn4.png" alt="logo" width="100">
                        </div>

                        <div class="card card-success" data-aos="flip-right">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>

                            <div class="card-body">
                                <?= $this->session->flashdata('message');?>
                                <form method="POST" <?= base_url('auth'); ?> class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="username">NIK SAP</label>
                                        <input id="username" type="number" class="form-control" name="username"
                                            tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Masukkan username NIK - SAP
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <div class="invalid-feedback">
                                            Silahkan masukkan password !
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember Me</label>
                                        </div>
                                    </div> -->

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success-ptpn btn-lg btn-block"
                                            tabindex="4">
                                            Masuk
                                        </button>
                                    </div>
                                </form>
                                <div class="text-center mt-4 mb-3">
                                    <div class="text-job text-muted">PSDMACT</div>
                                </div>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; PT Perkebunan Nusantara IV 2022 - SDM
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $this->load->view('_partials/js'); ?>
