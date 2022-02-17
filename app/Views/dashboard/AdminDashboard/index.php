<?= $this->extend('dashboard/AdminDashboard/admin_layout') ?>

<?= $this->section('content') ?>

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard</h3>
                            <div class="nk-block-des text-soft">
                                <p>Welcome to Admin Dashboard.</p>
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
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-3 col-sm-12">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                        </div>
                                        <div class="data">
                                            <marquee direction="up" width="250" height="100" scrollamount="3">
                                            <?php foreach ($news as $announcement) : ?>
                                            <div class="danger"><span class="change up text-danger"><?= $announcement['keyword'] ?></span></div>
                                            <?php endforeach; ?>
                                            </marquee>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Today Customers</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">847</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
                                                </div>
                                            </div>
                                            <div class="info"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs. last week</span></div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Today Visitors</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">23,485</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                                </div>
                                            </div>
                                            <div class="info"><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs. last week</span></div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card card-full overflow-hidden">
                                <div class="nk-ecwg nk-ecwg7 h-100">
                                    <div class="card-inner flex-grow-1">
                                        <div class="card-title-group mb-4">
                                            <div class="card-title">
                                                <h6 class="title">Order Statistics</h6>
                                            </div>
                                        </div>
                                        <div class="nk-ecwg7-ck">
                                            <canvas class="ecommerce-doughnut-s1" id="orderStatistics"></canvas>
                                        </div>
                                        <ul class="nk-ecwg7-legends">
                                            <li>
                                                <div class="title">
                                                    <span class="dot dot-lg sq" data-bg="#0fac81"></span>
                                                    <span>Completed</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <span class="dot dot-lg sq" data-bg="#e85347"></span>
                                                    <span>Canclled</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">
                                                    <span class="dot dot-lg sq" data-bg="#816bff"></span>
                                                    <span>Processing</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- .card-inner -->
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-md-6">
                            <div class="card h-100">
                                <div class="card-inner">
                                    <div class="card-title-group mb-2">
                                        <div class="card-title">
                                            <h6 class="title">Store Statistics</h6>
                                        </div>
                                    </div>
                                    <ul class="nk-store-statistics">
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Orders</div>
                                                <div class="count">1,795</div>
                                            </div>
                                            <em class="icon bg-primary-dim ni ni-bag"></em>
                                        </li>
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Customers</div>
                                                <div class="count">2,327</div>
                                            </div>
                                            <em class="icon bg-info-dim ni ni-users"></em>
                                        </li>
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Products</div>
                                                <div class="count">674</div>
                                            </div>
                                            <em class="icon bg-pink-dim ni ni-box"></em>
                                        </li>
                                        <li class="item">
                                            <div class="info">
                                                <div class="title">Categories</div>
                                                <div class="count">68</div>
                                            </div>
                                            <em class="icon bg-purple-dim ni ni-server"></em>
                                        </li>
                                    </ul>
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div>
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>