<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Edit User</h4>
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
                        <input type="hidden" class="form-control" name="user_id" value="<?= $editableData['id'] ? $editableData['id'] : ''?>">

                            <div class="col-lg-2"></div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-label float-right">First Name :</label>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?= $editableData['first_name'] ? $editableData['first_name'] : '' ?>">
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
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?= $editableData['last_name'] ? $editableData['last_name'] : ''?>">
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
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $editableData['email'] ? $editableData['email'] : ''?>">
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
                                        <input type="password" class="form-control" name="password" placeholder="Password" >
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
                                        <select class="form-select text-light" name="type">
                                          <option value="admin">Admin</option>
                                          <option value="vender">Vender</option>
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
                                        <input type="file" name="user_img" class="custom-file-input" id="customFile" value="<?= $editableData['user_img'] ? $editableData['user_img'] : ''?>">
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
                                        <input type="text" name="date_of_birth" class="form-control date-picker" placeholder="Date Of Birth" value="<?= $editableData['date_of_birth'] ? $editableData['date_of_birth'] : ''?>">
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
                                        <input type="text" class="form-control" name="phone_number" placeholder="Phone" value="<?= $editableData['phone_number'] ? $editableData['phone_number'] : ''?>">
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
                                        <input type="text" class="form-control" name="address" placeholder="Address" value="<?= $editableData['address'] ? $editableData['address'] : ''?>">
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
            text: "New Client Saved",
            icon: "success",
        });
    <?php } ?>
</script>
<?= $this->endSection() ?>