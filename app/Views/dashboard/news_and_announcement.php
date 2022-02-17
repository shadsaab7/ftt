<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<div class="container-xl wide-xl">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="components-preview">
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">News And Announcement</h4>
                            <div class="nk-block-des">
                                <p>Here is the table for news and announcement</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="card-head">
                                        <h5 class="card-title">Add News And Announcement</h5>
                                    </div>
                                    <form action="<?= route_to('news_add_announcement') ?>" method="post">
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
                                            <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card card-preview col-md-8">
                            <div class="card-inner">
                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                    <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </th>
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Keyword</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Title</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($newsAndAnnouncement as $news) :
                                            $id = $news['id'];
                                        ?>
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid1">
                                                        <label class="custom-control-label" for="uid1"></label>
                                                    </div>
                                                </td>
                                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                    <span class="tb-amount"><?= $news['keyword'] ?></span>
                                                </td>
                                                <td class="nk-tb-col tb-col-md">
                                                    <span><?= $news['title'] ?></span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="javascript:void(0);" onclick="deleteData('<?php echo $id; ?>')"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item  -->
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div>
                </div> <!-- nk-block -->
            </div><!-- .components-preview -->
        </div>
    </div>
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

    function deleteData(id) {
        console.log(id);
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url(route_to('news_and_announcement')); ?>',
                        data: {
                            delete: 'del',
                            id: id
                        },
                        success: function(result) {
                            console.log(result)
                            location.reload();
                        },
                    });
                } else {
                    swal("Your file is safe!");
                }
            });
    }
</script>
<?= $this->endSection() ?>