<?= $this->extend('dashboard/AdminDashboard/admin_layout') ?>

<?= $this->section('content') ?>

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Add news and announcement</h3>
                            <div class="nk-block-des text-soft">
                                <p>Welcome to news and announcement section.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <div class="drodown">
                                                <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">
                                                        <li><a href="#"><span>Last 30 Days</span></a></li>
                                                        <li><a href="#"><span>Last 6 Months</span></a></li>
                                                        <li><a href="#"><span>Last 1 Years</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-md-3"></div>
                        <div class="col-lg-6">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="card-head">
                                        <h5 class="card-title">Add News And Announcement</h5>
                                    </div>
                                    <form action="<?= route_to('add_news') ?>" method="post">
                                        <div class="form-group">
                                            <label class="form-label" for="cf-full-name">News Keyword</label>
                                            <input type="text" class="form-control" name="keyword" id="cf-full-name" placeholder="News Keyword">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="cf-email-address">News Title</label>
                                            <textarea type="text" class="form-control" name="title" id="cf-email-address"></textarea>
                                            <!-- <textarea id="mytextarea" name="title">Title</textarea> -->

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('javascript') ?>
<script>
    <?php if (session()->getFlashdata("success")) { ?>
        swal({
            title: "Saved",
            text: "News and announcement saved",
            icon: "success",
        });
    <?php } ?>
</script>
<?= $this->endSection() ?>