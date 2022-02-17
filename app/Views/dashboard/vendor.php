<?= $this->extend('dashboard/layout _venders') ?>

<?= $this->section('content') ?>

<div class="container-xl wide-xl">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="components-preview">
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Welcome To The Vender Dashboard</h4>
                            <div class="nk-block-des">
                                <p>Here is the table for Vender</p>
                            </div>
                        </div>
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
</script>
<?= $this->endSection() ?>