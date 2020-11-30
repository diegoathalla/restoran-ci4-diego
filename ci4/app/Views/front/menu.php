<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Special Menu</h1>
            </div>
        </div>
    </div>
</div>
<!-- End All Pages -->


<!-- Start Menu -->
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Special Menu</h2>

                </div>
            </div>
        </div>

        <div class="row inner-menu-box">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
                    <?php foreach ($kategori as $key => $value) : ?>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-<?= $value['idkategori'] ?>" role="tab" aria-controls="v-pills-profile" aria-selected="false"><?= $value['kategori'] ?></a>
                    <?php endforeach ?>

                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">
                            <?php foreach ($menu as $key => $value) : ?>
                                <div class="col-lg-4 col-md-6 special-grid drinks">
                                    <div class="gallery-single fix">
                                        <img src="<?= base_url('/uploud/' . $value['gambar'] . '') ?>" class="img-fluid" style="height: 152px;width: 255px;" alt="Image">
                                        <div class="why-text">
                                            <h4><?= $value['menu'] ?></h4>

                                            <p>Rp. <?= number_format($value['harga'], 0, ',', '.')  ?></p>
                                            <a href="<?= base_url('tambah-ke-keranjang/' . $value['idmenu']) ?>">
                                                <h5 class="tect-center">ADD TO CART</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>

                    </div>
                    <?php foreach ($kategori as $key => $value) : ?>
                        <div class="tab-pane fade" id="v-pills-<?= $value['idkategori'] ?>" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                            <div class="row">
                                <?php foreach ($menu as $key => $data) : ?>
                                    <?php if ($data['idkategori'] === $value['idkategori']) : ?>
                                        <div class="col-lg-4 col-md-6 special-grid drinks">
                                            <div class="gallery-single fix">
                                                <img src="<?= base_url('/uploud/' . $data['gambar'] . '') ?>" class="img-fluid" style="height: 152px;width: 255px;" alt="Image">
                                                <div class="why-text">
                                                    <h4><?= $data['menu'] ?></h4>
                                                    <p>Rp. <?= number_format($data['harga'], 0, ',', '.')  ?></p>
                                                    <a href="<?= base_url('tambah-ke-keranjang/' . $data['idmenu']) ?>">
                                                        <h5 class="tect-center">ADD TO CART</h5>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Menu -->

<?= $this->endsection() ?>