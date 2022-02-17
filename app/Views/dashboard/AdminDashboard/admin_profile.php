<?= $this->extend('dashboard/AdminDashboard/admin_layout') ?>

<?= $this->section('content') ?>

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="card card-bordered">
                        <?php foreach ($adminProfile as $profile) : ?>
                            <div class="card-aside-wrap">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Personal Information</h4>
                                                <div class="nk-block-des">
                                                    <p>Basic info, like your name and address, that you use on Fttonline.</p>
                                                </div>
                                            </div>
                                            <div class="nk-block-head-content align-self-start d-lg-none">
                                                <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="nk-data data-list">
                                            <div class="data-head">
                                                <h6 class="overline-title">Basics</h6>
                                            </div>
                                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Full Name</span>
                                                    <span class="data-value"><?= $profile['first_name'] . ' ' . $profile['last_name'] ?></span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div>
                                            <div class="data-item">
                                                <div class="data-col">
                                                    <span class="data-label">Email</span>
                                                    <span class="data-value"><?= $profile['email'] ?></span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Phone Number</span>
                                                    <span class="data-value text-soft"><?= $profile['phone_number'] ?></span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                <div class="data-col">
                                                    <span class="data-label">Date of Birth</span>
                                                    <span class="data-value"><?= $profile['date_of_birth'] ?></span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                            <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                                <div class="data-col">
                                                    <span class="data-label">Address</span>
                                                    <span class="data-value"><?= $profile['address'] ?></span>
                                                </div>
                                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                            </div><!-- data-item -->
                                        </div><!-- data-list -->
                                        <div class="nk-data data-list">
                                            <div class="data-head">
                                                <h6 class="overline-title"></h6>
                                            </div>
                                        </div><!-- data-list -->
                                    </div><!-- .nk-block -->
                                </div>
                                <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                    <div class="card-inner-group" data-simplebar>
                                        <div class="card-inner">
                                            <div class="user-card">
                                                <div class="user-avatar bg-primary">
                                                    <span><?= strtoupper(substr($profile['first_name'], 0, 2)) ?></span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text"><?= $profile['first_name'] . ' ' . $profile['last_name'] ?></span>
                                                    <span class="sub-text"><?= $profile['email'] ?></span>
                                                </div>
                                                <div class="user-action">
                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-trigger mr-n2" data-toggle="dropdown" href="#"><em class="icon ni ni-more-v"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="#"><em class="icon ni ni-camera-fill"></em><span>Change Photo</span></a></li>
                                                                <li><a href="#"><em class="icon ni ni-edit-fill"></em><span>Update Profile</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .user-card -->
                                        </div><!-- .card-inner -->
                                        <div class="card-inner">
                                            <div class="user-account-info py-0">
                                                <h6 class="overline-title-alt">Type of admin</h6>
                                                <div class="user-balance"><?= $profile['type'] ?><small class="currency currency-btc"></small></div>
                                                <div class="user-balance-sub">Time : <span><?= date('H:i:s') ?><span class="currency currency-btc"></span></span></div>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- card-aside -->
                            </div>
                        <?php endforeach; ?>
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-lg">
                <h5 class="title">Update Profile</h5>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="tab-content">
                    <?php foreach($adminProfile as $update) : ?>
                    <form action="<?= route_to('update_profile') ?>" method="post">
                    <div class="tab-pane active" id="personal">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">First Name</label>
                                    <input type="text" class="form-control form-control-lg d-none" id="admin_id" name="admin_id" value="<?= $update['id'] ?>" >
                                    <input type="text" class="form-control form-control-lg" id="first-name" name="first_name" value="<?= $update['first_name'] ?>" placeholder="Enter Full name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Last Name</label>
                                    <input type="text" class="form-control form-control-lg" id="last-name" name="last_name" value="<?= $update['last_name'] ?>" placeholder="Enter Full name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control form-control-lg" id="phone-no" name="phone_number" value="<?= $update['phone_number'] ?>" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Email</label>
                                    <input type="text" class="form-control form-control-lg" id="email" name="email"  value="<?= $update['email'] ?>" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="birth-day">Date of Birth</label>
                                    <input type="text" class="form-control form-control-lg date-picker" id="birth-day" name="date_of_birth" value="<?= $update['date_of_birth'] ?>" placeholder="Enter your name">
                                </div>
                            </div>
                        </div>
                    </div><!-- .tab-pane -->
                    <div class="tab-pane" id="address">
                        <div class="row gy-4">
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address</label>
                                    <input type="text" class="form-control form-control-lg" id="address-l1" name="address" value="<?= $update['address'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">State</label>
                                    <input type="text" class="form-control form-control-lg" id="state" name="state" value="<?= $update['state'] ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-county">Country</label>
                                    <select class="form-select" id="address-county" data-ui="lg">
                                        <option value="<?= $update['country'] ? $update['country'] : '' ?>"><?= $update['country'] ? $update['country'] : '' ?></option>
                                        <option value="canada">Canada</option>
                                        <option value="united state">United State</option>
                                        <option value="united kingdon">United Kindom</option>
                                        <option value="australia">Australia</option>
                                        <option value="india">India</option>
                                        <option value="bangladesh">Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submt" class="btn btn-lg btn-primary">Update Address</button>
                                    </li>
                                    <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </form>
                    <?php endforeach ?>
                </div><!-- .tab-content -->
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
    <?php if (session()->getFlashdata("updated")) { ?>
        swal({
            title: "Profile Updated",
            text: "Your Profile Updated Now",
            icon: "success",
        });
    <?php } ?>
</script>
<?= $this->endSection() ?>