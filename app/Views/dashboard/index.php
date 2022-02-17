<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<div class="col-md-12 col-xxl-4">
    <div class="card card-bordered card-full">
        <div class="card-inner">
            <div class="card-title-group mb-1">
                <div class="card-title">
                    <h6 class="title">News & Announcement</h6>
                    <p>Welcome To Dashboard</p>
                </div>
            </div>
            <ul class="nav nav-tabs nav-tabs-card nav-tabs-xs">

            </ul>
            <div class="tab-content mt-0">
                <div class="tab-pane active" id="overview">
                    <div class="invest-ov gy-2">
                        <div class="subtitle">Currently Activity</div>
                        <div class="invest-ov-details">
                            <div class="invest-ov-info">
                                <marquee width="100%" direction="up" height="200px">
                                    <?php foreach ($news as $announcement) : ?>
                                        <div class="amount alert alert-secondary"><?= $announcement['keyword'] ?> <span class="currency currency-usd text-danger"><?= $announcement['title'] ?></span></div>
                                    <?php endforeach; ?>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="alltime">
                    <div class="invest-ov gy-2">
                        <div class="subtitle">Currently Actived Investment</div>
                        <div class="invest-ov-details">
                            <div class="invest-ov-info">
                                <div class="amount">249,395.395 <span class="currency currency-usd">USD</span></div>
                                <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                                <div><span class="amount">556</span><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>1.93%</span></div>
                                <div class="title">Plans</div>
                            </div>
                        </div>
                        <div class="invest-ov-details">
                            <div class="invest-ov-info">
                                <div class="amount">149,395.395 <span class="currency currency-usd">USD</span></div>
                                <div class="title">Paid Profit</div>
                            </div>
                        </div>
                    </div>
                    <div class="invest-ov gy-2">
                        <div class="subtitle">Investment in this Month</div>
                        <div class="invest-ov-details">
                            <div class="invest-ov-info">
                                <div class="amount">249,395.395 <span class="currency currency-usd">USD</span></div>
                                <div class="title">Amount</div>
                            </div>
                            <div class="invest-ov-stats">
                                <div><span class="amount">223</span><span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>1.93%</span></div>
                                <div class="title">Plans</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>