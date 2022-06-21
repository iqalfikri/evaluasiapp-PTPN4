<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <?php if ($user['role'] == 'administrator') {?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total User</h4>
                        </div>
                        <div class="card-body">
                            <?= $user_all?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pimpinan</h4>
                        </div>
                        <div class="card-body">
                            <?= $user_pimpinan?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Pelatihan</h4>
                        </div>
                        <div class="card-body">
                            <?= $pelatihan_all?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-clipboard"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pelatihan Belum Dinilai</h4>
                        </div>
                        <div class="card-body">
                            <?= $pelatihan_pending?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php if ($user['role'] == 'atasan') {?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Staff</h4>
                        </div>
                        <div class="card-body">
                            <?= $staff_all?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-info">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pelatihan Dinilai</h4>
                        </div>
                        <div class="card-body">
                            <!-- <?= $user_pimpinan?> -->
                            3
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Pelatihan Belum Dinilai</h4>
                        </div>
                        <div class="card-body">
                            <!-- <?= $pelatihan_all?> -->
                            8
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Posts</h4>
                        <div class="card-header-action">
                            <a href="#" class="btn btn-primary">View All</a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Introduction Laravel 5
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="font-weight-600"><img
                                                    src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png"
                                                    alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                Cahya</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Laravel 5 Tutorial - Installation
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="font-weight-600"><img
                                                    src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png"
                                                    alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                Cahya</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Laravel 5 Tutorial - MVC
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="font-weight-600"><img
                                                    src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png"
                                                    alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                Cahya</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Laravel 5 Tutorial - Migration
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="font-weight-600"><img
                                                    src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png"
                                                    alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                Cahya</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Laravel 5 Tutorial - Deploy
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="font-weight-600"><img
                                                    src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png"
                                                    alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                Cahya</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Laravel 5 Tutorial - Closing
                                            <div class="table-links">
                                                in <a href="#">Web Development</a>
                                                <div class="bullet"></div>
                                                <a href="#">View</a>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="font-weight-600"><img
                                                    src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png"
                                                    alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi
                                                Cahya</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                            <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                                data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                                data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-12 col-12 col-sm-12">
                <form method="post" class="needs-validation" novalidate="">
                    <div class="card">
                        <div class="card-header">
                            <h4>Quick Draft</h4>
                        </div>
                        <div class="card-body pb-0">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required>
                                <div class="invalid-feedback">
                                    Please fill in the title
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="summernote-simple"></textarea>
                            </div>
                        </div>
                        <div class="card-footer pt-0">
                            <button class="btn btn-primary">Save Draft</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('_partials/footer'); ?>
