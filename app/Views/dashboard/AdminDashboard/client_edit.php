<?= $this->extend('dashboard/AdminDashboard/admin_layout') ?>

<?= $this->section('content') ?>
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Edit Client Details<strong class="text-primary small"></strong></h3>
                            <div class="nk-block-des text-soft">
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="<?= route_to('admin_index') ?>" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="#" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-aside-wrap">
                            <div class="card-content">
                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><em class="icon ni ni-user-circle"></em><span>Personal</span></a>
                                    </li>
                                </ul><!-- .nav-tabs -->
                                <div class="card-inner">

                                    <form class="<?= route_to('add_client') ?>" method="post" enctype="multipart/form-data">
                                        <?php foreach ($clientEditData as $edit) : ?>
                                            <div class="nk-block">
                                                <div class="nk-block-head">
                                                    <h5 class="title">Personal Information</h5>
                                                    <p>Basic info, like your name and address, that you edit.</p>
                                                </div><!-- .nk-block-head -->

                                                <div class="row px-5">
                                                    <input type="text" class="form-control form-control-lg d-none" name="client_id" value="<?= $edit['id'] ?>">
                                                    <div class="col-md-4">
                                                        <div class="profile-ud wider">
                                                            <select class="form-control form-control-lg" name="title">
                                                                <option value="select"><?= $edit['title'] ? $edit['title'] : 'Select' ?></option>
                                                                <option value="mr">Mr</option>
                                                                <option value="mrs">Mrs</option>
                                                                <option value="miss">Miss</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="full_name" placeholder="Full Name" value="<?= $edit['full_name'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="user_name" placeholder="User Name" value="<?= $edit['user_name'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-ud wider">
                                                            <input type="password" class="form-control form-control-lg" name="password" placeholder="Password" value="<?= $edit['password'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="email" placeholder="Email" value="<?= $edit['email'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="address" placeholder="Address" value="<?= $edit['address'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="pin" placeholder="Pin" value="<?= $edit['pin'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="state" placeholder="State" value="<?= $edit['state'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="mobile" placeholder="Mobile" value="<?= $edit['mobile'] ?>">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control date-picker form-control-lg" name="date_of_birth" placeholder="Date Of Birth" value="<?= $edit['date_of_birth'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mt-2">
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input form-control-lg" name="client_image">
                                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-ud wider">
                                                            <select class="form-control form-control-lg" name="country">
                                                                <option value="select"><?= $edit['country'] ? $edit['country'] : '' ?></option>
                                                                <option value="india">India</option>
                                                                <option value="pakistan">Pakistan</option>
                                                                <option value="bangladesh">Bangladesh</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="nk-block">
                                                <div class="nk-block-head nk-block-head-line">
                                                    <h6 class="title overline-title text-base">Agency Information</h6>
                                                </div>
                                                <div class="row px-5">
                                                    <div class="col-md-8">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="agency_name" placeholder="Agency Name" value="<?= $edit['agency_name'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="agency_phone" placeholder="Agency Phone" value="<?= $edit['agency_phone'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="pan_card" placeholder="Pan Card No" value="<?= $edit['pan_card'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="agency_address" placeholder="Agency Address" value="<?= $edit['agency_address'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="agency_pin" placeholder="Pin" value="<?= $edit['agency_pin'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="agency_state" placeholder="State" value="<?= $edit['agency_state'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="profile-ud wider">
                                                            <input type="text" class="form-control form-control-lg" name="nationality" placeholder="Nationality" value="<?= $edit['nationality'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="profile-ud wider">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="profile-ud text-center">
                                                        <button type="submit" class="btn btn-info">Save</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="profile-ud wider">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-divider divider md"></div>
                                        <?php endforeach ?>
                                    </form>
                                </div><!-- .card-inner -->
                            </div><!-- .card-content -->
                            <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl" data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card user-card-s2">
                                            <div class="user-avatar lg bg-primary">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <div class="badge badge-outline-light badge-pill ucap">Investor</div>
                                                <h5>Abu Bin Ishtiyak</h5>
                                                <span class="sub-text">info@softnio.com</span>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner card-inner-sm">
                                        <ul class="btn-toolbar justify-center gx-1">
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-download-cloud"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="overline-title-alt mb-2">In Account</div>
                                        <div class="profile-balance">
                                            <div class="profile-balance-group gx-4">
                                                <div class="profile-balance-sub">
                                                    <div class="profile-balance-amount">
                                                        <div class="number">2,500.00 <small class="currency currency-usd">USD</small></div>
                                                    </div>
                                                    <div class="profile-balance-subtitle">Invested Amount</div>
                                                </div>
                                                <div class="profile-balance-sub">
                                                    <span class="profile-balance-plus text-soft"><em class="icon ni ni-plus"></em></span>
                                                    <div class="profile-balance-amount">
                                                        <div class="number">1,643.76</div>
                                                    </div>
                                                    <div class="profile-balance-subtitle">Profit Earned</div>
                                                </div>
                                            </div>
                                            <div class="profile-balance-ck">
                                                <canvas id="profileBalance" class="profile-balance-chart"></canvas>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">23</span>
                                                    <span class="sub-text">Total Order</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">20</span>
                                                    <span class="sub-text">Complete</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">3</span>
                                                    <span class="sub-text">Progress</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <h6 class="overline-title-alt mb-2">Additional</h6>
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <span class="sub-text">User ID:</span>
                                                <span>UD003054</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Last Login:</span>
                                                <span>15 Feb, 2019 01:02 PM</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">KYC Status:</span>
                                                <span class="lead-text text-success">Approved</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Register At:</span>
                                                <span>Nov 24, 2019</span>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <h6 class="overline-title-alt mb-3">Groups</h6>
                                        <ul class="g-1">
                                            <li class="btn-group">
                                                <a class="btn btn-xs btn-light btn-dim" href="#">investor</a>
                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                            </li>
                                            <li class="btn-group">
                                                <a class="btn btn-xs btn-light btn-dim" href="#">support</a>
                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                            </li>
                                            <li class="btn-group">
                                                <a class="btn btn-xs btn-light btn-dim" href="#">another tag</a>
                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                            </li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
    <?php if (session()->getFlashdata("client_success")) { ?>
        swal({
            title: "Created",
            text: "Your Client Created",
            icon: "success",
        });
    <?php } ?>
</script>
<?= $this->endSection() ?>