@extends('layouts.layout')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Parawisata Provinsi Jawa Timur</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-luggage m-auto text-primary"></i></div>
                            <h3>Perjalanan Wisatawan Domestik</h3>
                            <p class="lead mb-0">Jawa Timur menjadi provinsi tujuan utama pada 2022 dengan jumlah perjalanan tertinggi se-Indonesia sekitar <B style="color: #007BFF; font-weight: bold;">27,29%</B> dari total perjalanan wisnus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-geo-alt-fill m-auto text-primary"></i></div>
                            <h3>Total Destinasi Wisata</h3>
                            <p class="lead mb-0">Menurut data Dinas Kebudayaan dan Pariwisata Jatim, terdapat <B style="color: #007BFF; font-weight: bold;">1.368</B> destinasi wisata dan <B style="color: #007BFF; font-weight: bold;">596</B> desa wisata pada tahun 2023 di Provinsi Jatim.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-coin m-auto text-primary"></i></div>
                            <h3>Pendapatan Sektor Pariwisata</h3>
                            <p class="lead mb-0">Total transaksi dari sektor pariwisata dari wisatawan nusantara ke Jatim mencapai lebih dari Rp 487 trilliun pada tahun 2023.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bromocard.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Objek Wisata</h2>
                        <p class="lead mb-0">Jawa Timur, perpaduan keindahan alam dan warisan kultural, menawarkan pesona unik dalam setiap perjalanan. Dari kemegahan Gunung Bromo hingga kesegaran Kota Malang, serta keajaiban Kawah Ijen, provinsi ini memikat hati wisatawan dengan panorama menakjubkan. Trowulan, pusat sejarah Majapahit, menyuguhkan jejak bersejarah yang mengesankan. Inilah Jawa Timur, destinasi wisata yang menyajikan pengalaman tak terlupakan di setiap sudutnya.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/satemaduracard.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Kuliner</h2>
                        <p class="lead mb-0">Jawa Timur, surganya kuliner, memikat dengan kelezatan sate Madura, rujak cingur Surabaya, dan rawon Probolinggo. Dengan jajanan khas seperti lontong balap dan tahu campur, provinsi ini menawarkan petualangan rasa yang tak terlupakan di setiap sudutnya.</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/reogcard.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Budaya</h2>
                        <p class="lead mb-0">Jawa Timur, landasan budaya yang kaya, memukau dengan wayang kulit, tarian Reog, dan seni batik yang mencerminkan sejarah. Dalam setiap upacara adat, seperti upacara Labuhan di Gunung Bromo, terpancar kekayaan spiritual dan keberagaman yang menjadikan Jawa Timur tak terlupakan.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- list destination -->
        <section class="">
            <h1 class="text-center mb-3">Destinasi Pilihan</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($data as $destination)
                <div class="col-md-3">
                    <div class="card h-100">
                        <!-- Your existing card content goes here -->
                        <img src="{{ asset('storage/' . $destination->image) }}" class=" img-fluid">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $destination->name }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Lokasi: {{ $destination->location }}</li>
                            <li class="list-group-item">Informasi: {{ $destination->description }}</li>
                            <!-- Add more details as needed -->
                        </ul>
                        <div class="card-footer">
                            <small class="text-body-secondary">{{ $destination->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- ======= Portfolio Section ======= -->
        <!-- <main id="main">
            <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                    <h4>Card 2</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                    <h4>Web 2</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>App</p>
                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                    <h4>Card 1</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                    <h4>Card 3</h4>
                    <p>Card</p>
                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt=""></div>
                    <div class="portfolio-info">
                    <h4>Web 3</h4>
                    <p>Web</p>
                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                </div>

            </div>
            </section>
        </main>End Portfolio Section -->
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Team</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-1.jpg" alt="..." />
                            <h5>Kevin Risqi Rachmadi</h5>
                            <p class="font-weight-light mb-0">POLITEKNIK NEGERI JAKARTA</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-2.jpg" alt="..." />
                            <h5>Bagas Rizkiyanto</h5>
                            <p class="font-weight-light mb-0">POLITEKNIK NEGERI JAKARTA</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="assets/img/testimonials-3.jpg" alt="..." />
                            <h5>Edgar Hadhyra Julio</h5>
                            <p class="font-weight-light mb-0">POLITEKNIK NEGERI JAKARTA</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@endsection
