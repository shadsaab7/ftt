<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>My Profile</span></div>
                        <h2 class="nk-block-title fw-normal">Account Info</h2>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                        </div>
                    </div>
                </div>
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item active current-page">
                        <a class="nav-link" href="#">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Security<span class="d-none s-sm-inline"> Setting</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connect Social</a>
                    </li>
                </ul><!-- .nav-tabs -->
                <div class="nk-block">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Personal Information</h5>
                            <div class="nk-block-des">
                                <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="card card-bordered">
                        <div class="nk-data data-list">
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Full Name</span>
                                    <span class="data-value">Abu Bin Ishtiyak</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Email</span>
                                    <span class="data-value">info@softnio.com</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                            </div>
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Phone Number</span>
                                    <span class="data-value text-soft">Not add yet</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Date of Birth</span>
                                    <span class="data-value">29 Feb, 1986</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                <div class="data-col">
                                    <span class="data-label">Address</span>
                                    <span class="data-value">2337 Kildeer Drive,<br>Kentucky, Canada</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div>
                        </div><!-- .nk-data -->
                    </div><!-- .card -->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

