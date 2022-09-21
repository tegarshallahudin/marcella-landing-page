@extends('partials.template')
<!-- content banner-->
<section class="hero-container ">
    <div class="" id="particles-js">
        <canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1903" height="683"></canvas>
    </div>
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6 text-center" id="hero__container__bg">
                <div data-aos="fade-up" data-aos-delay="250">
                    <img src="img/bg-banner.png" alt="" class=" bg__img mb-4">
                </div>
                <div class="header-content" >
                    <!-- <span class="badge bg-secondary px-3 py-2">MARCELLA</span> -->
                    <h1 class="fw-bold mt-4">
                        <span style="color: #0083CA;" id="typed"></span> Monitoring
                    </h1>
                    <h3 class=" mt-1" >
                        Cyber Patrol & Product Inteligent
                    </h3>
                    <a href="#about" class="btn btn-primary btn-lg mt-5">
                        Get Started
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- endcontent banner-->

<!-- about -->
<section class="section__about" id="about" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center position-relative" >
            <div class="col-lg-5 col-md-12 col-xs-12 ">
                    <img src="img/bg-about.jpg" alt="" class="img-fluid shadow-sm">

                <div class="section__gambar"></div>
            </div>
            <div class="col-lg-5 col-md-12 cols-xs-12 py-2 px-3">
                <div class="pb-2 section__header">
                    <span>Tentang</span>
                    <h1 class="fw-bold pt-2">Marcella - Marketplace Analysis</h1>
                </div>
                <p>Marcella Monitoring melakukan analisis dan pemantauan data produk yang dijual secara daring sehingga mampu menampilkan berbagai insight, seperti produk yang mengandung bahan berbahaya, profil penjual produk, dan jumlah transaksi produk. Insight tersebut dapat mendukung pengambilan keputusan pemerintah sehingga didapatkan strategi terbaik berdasarkan data.</p>
            </div>
        </div>
    </div>
</section>
<!-- endabout -->

<!-- start usecase -->
<section class="section__usecase py-4" id="usecase">
    <div class="container">
        <span>use case</span>
        <hr>
        <div class="row py-3" data-aos="fade-up" data-aos="fade-up">
            <div class="col-md-10 col-xs-12">
                <p>Berbagai bidang aspek profesi di masyarakat akan dimudahkan dengan adanya <strong class="fw-bold">MARCELLA</strong> yang dikembangkan dengan dilengkapi fitur-fitur unggulan.</p>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="3000" data-aos-anchor-placement="center-bottom">
            <div class="col-md-3 pb-3" >
                <div class="card">
                    <div class="card-body p-4">
                        <div class="card__heading_usecase">
                            <img src="img/icon/user.svg" class="img-fluid mb-2" alt="">
                            <h4>Patroli Cyber</h4>
                        </div>
                        <p>Melakukan patroli yang meliputi mencari, memantau, dan membuat daftar produk obat dan makanan berbahaya untuk di take down atau ditindaklanjut dan pembinaan di marketplace dan e-commerce.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-3" >
                <div class="card">
                    <div class="card-body p-4">
                        <div class="card__heading_usecase">
                            <img src="img/icon/carbon_cloud-monitoring.svg" class="img-fluid mb-2" alt="">
                            <h4>Seller Monitoring</h4>
                        </div>
                        <p>Memantau penjualan produk Industri Kecil dan Menengah (IKM) yang meliputi,
                            pemantauan perkembangan produk, rating penjualan, penjualan produk berdasarkan
                            lokasi IKM, dan persebaran IKM.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-3" >
                <div class="card">
                    <div class="card-body p-4">
                        <div class="card__heading_usecase">
                            <img src="img/icon/icon-park-outline_trend.svg" class="img-fluid mb-2" alt="">
                            <h4>Seller Trend Analysis</h4>
                        </div>
                        <p>Melakukan patroli yang meliputi mencari, memantau, dan membuat daftar produk obat dan
                            makanan berbahaya untuk di take down atau ditindaklanjut dan pembinaan
                            di marketplace dan e-commerce.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 pb-3" >
                <div class="card">
                    <div class="card-body p-4">
                        <div class="card__heading_usecase">
                            <img src="img/icon/ep_data-analysis.svg" class="img-fluid mb-2" alt="">

                            <h4>Market Analysis</h4>
                        </div>
                        <p>
                            Analisa pasar untuk mendapatkan insight tentang penjualan online, seperti perbandingan jumlah barang dengan penjual, marketplace paling banyak permintaannya, brand paling laku, dan penjual yang paling laris.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- endusecase -->

<!-- start section Keunggulan-->
<section class="section__feature my-5 p-5" data-aos="fade-up" data-aos-duration="3000">
    <div class="container">
        <div class="section__header text-center mb-5">
            <span>Keunggulan Marcella</span>
            <p class="my-3">Ledakan penjualan produk yang susah dipantau menjadi masalah dalam pengawasannya, terutama produk ilegal yang mengandung bahan berbahaya dan terlarang. MARCELLA dihadirkan sebagai solusi permasalahan dengan berbagai keunggulan.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="row">
                    <div class="col-lg-6 pb-3">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="img/icon/material-symbols_screen-search-desktop-outline-rounded.svg" alt="">
                                </div>
                                <h6 class="text-center">Pengawasan Produk Ilegal</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-3">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="img/icon/bx_box.svg" alt="">
                                </div>
                                <h6 class="text-center">Pelacakan Identitas Penjual Produk Ilegal</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-3">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="img/icon/iconoir_home-sale.svg" alt="">
                                </div>
                                <h6 class="text-center">Pelacakan Identitas Penjual Produk Ilegal</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-3">
                        <div class="card">
                            <div class="card-body p-5">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="img/icon/carbon_content-delivery-network.svg" alt="">
                                </div>
                                <h6 class="text-center ">Pelacakan Identitas Penjual Produk Ilegal</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="img/bg-feature.png" class="img-fluid mx-2" alt="">
            </div>

        </div>
    </div>
</section>
<!-- end section Keunggulan-->

<!-- start section contact -->
<section class="section__contact my-5" id="contact" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mx-auto" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
                <div class="section__header text-center">
                    <h1>Apakah anda ingin mendapatkan manfaatnya ?</h1>
                </div>

                <form class="row g-3 form__contact">
                    <div class="col-md-12">
                        <!-- jika validasi tambahkan is-invalid pada class input -->
                        <input type="text" class="form-control" id="name" value="" name="name" placeholder="Nama Lengkap">
                        <!-- <div id="name" class="invalid-feedback">
                            Please provide a valid city.
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <!-- jika validasi tambahkan is-invalid pada class input -->
                        <input type="text" class="form-control" id="name" value="" name="name" placeholder="Alamat Email">
                        <!-- <div id="name" class="invalid-feedback">
                            Please provide a valid city.
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <!-- jika validasi tambahkan is-invalid pada class input -->
                        <input type="text" class="form-control"  id="name" value="" name="name" placeholder="Subjek Pesan">
                        <!-- <div id="name" class="invalid-feedback">
                            Please provide a valid city.
                        </div> -->
                    </div>
                    <div class="col-md-12">
                        <!-- jika validasi tambahkan is-invalid pada class input -->
                        <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Pesan"></textarea>
                        <!-- <div id="name" class="invalid-feedback">
                            Please provide a valid city.
                        </div> -->
                    </div>

                    <div class="d-flex justify-content-center">
                      <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- end section contact -->

<!-- start section fitur -->
<section class="section__fitur my-5" id="featured" data-aos="fade-up" data-aos-anchor-placement="center-center">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="section__header text-center">
                    <span>FITUR MARCELLA MONITORING</span>
                    <p class="mt-4">
                        Berbagai bidang aspek profesi di masyarakat akan dimudahkan dengan adanya <strong class="fw-bold">MARCELLA</strong> yang dikembangkan dengan dilengkapi fitur-fitur unggulan.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center my-4">
                <div class="col-md-5 pb-4">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="pb-4 text-center">
                                <h5 class="fw-bold ">Product Monitoring</h5>
                            </div>
                            <p>
                                <strong class="fw-bolds">Marcella</strong> memungkinkan untuk melakukan pemantauan dan pengawasan terhadap produk ilegal yang di jual secara daring, transaksi penjualan melalui marketplace, dan identitas penjual dan pembelinya secara realtime.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center pb-5">
                                <a href="{{ route('detail-fitur') }}">
                                    <button class="btn btn-outline-primary rounded-circle "><i class="fa-solid fa-chevron-right"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pb-4">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="pb-4 text-center">
                                <h5 class="fw-bold ">Product Crawling</h5>
                            </div>
                            <p>
                                <strong>Marcella</strong> memungkinkan untuk melakukan pelacakan realtime terhadap penjualan produk ilegal, identitas penjual produk ilegal, dan peredaran produk ilegal yang dijual di marketplace secara daring.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center pb-5">
                                <button class="btn btn-outline-primary rounded-circle "><i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section fitur -->
