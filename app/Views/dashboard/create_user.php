<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Create New User</h4>
                    <div class="nk-block-des">
                        <p>You can make style out your setting related form as per below example.</p>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="card-head text-center">
                        <!-- <h5 class="card-title">Website Setting</h5> -->
                    </div>
                    <form action="<?= route_to('create_user') ?>" method="post" class="gy-3" enctype="multipart/form-data">
                        <div class="row g-3 align-center">

                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">First Name :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">Last Name :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">Email :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">Password :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">Type :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select class="form-select text-light" name="type" required> 
                                          <option></option>
                                          <option value="manager">Manager</option>
                                          <option value="vendor">Vendor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">Image :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-control-wrap">
                                    <div class="custom-file">
                                        <input type="file" name="user_img" class="custom-file-input" id="customFile" required>
                                        <label class="custom-file-label text-light" for="customFile">Choose Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">Date Of Birth :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="date_of_birth" class="form-control date-picker" placeholder="Date Of Birth" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">Phone No. :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="number" maxlength="10" minlength="10" class="form-control" name="phone_number" placeholder="Phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">Address :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control"  name="address" placeholder="Address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                        <div class="row g-3">
                            <div class="col-lg-7 offset-lg-5">
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- card -->
        </div><!-- .nk-block -->
    </div>
    <div class="col-md-2"></div>
</div>

<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
    <?php if (session()->getFlashdata("success")) { ?>
        swal({
            title: "Saved",
            text: "New Data Saved",
            icon: "success",
        });
    <?php } ?>
</script>
<?= $this->endSection() ?>