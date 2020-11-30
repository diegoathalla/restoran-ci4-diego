<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>


<!-- Start slides -->
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-left">
			<img src="asset/images/slider-01.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="asset/images/slider-02.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> Live Dinner Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-left">
			<img src="asset/images/slider-03.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Welcome To <br> Yamifood Restaurant</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>

					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	</div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1>Welcome To <span>Live Dinner Restaurant</span></h1>
					<h4>Little Story</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
					<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>

				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="asset/images/about-img.jpg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
	<div class="container">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-center">
				<p class="lead ">
					" Sholatlah sebelum saya sholat i "
				</p>
				<span class="lead">Diego Athalla</span>
			</div>
		</div>
	</div>
</div>
<!-- End QT -->

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
											<a href="<?= base_url('tambah-ke-keranjang/' . $value['idmenu']) ?>" >
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
													<a  href="<?= base_url('tambah-ke-keranjang/' . $data['idmenu']) ?>" >
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

<!-- Start Gallery -->
<div class="gallery-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Gallery</h2>
				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row"><?php foreach ($menu as $key => $value) : ?>
				<div class="col-sm-12 col-md-4 col-lg-4">
					
					<a class="lightbox" href="<?= base_url('/uploud/' . $value['gambar'] . '') ?>">
						<img class="img-fluid" src="<?= base_url('/uploud/' . $value['gambar'] . '') ?>" style="height: 200px;width: 345px;" alt="Gallery Images">
					</a>
					
				</div><?php endforeach?>
			</div>
		</div>
	</div>
</div>
<!-- End Gallery -->



<?= $this->endSection() ?>