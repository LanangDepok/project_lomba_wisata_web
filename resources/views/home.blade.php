@extends('layouts.layout')

@section('content')
    <header class="masthead">
        <div class="container-fluid position-relative">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xl-6 text-center text-white">
                    <!-- Page heading with a bold and larger font -->
                    <h1 class="mb-4 display-4 fw-bold animate__animated animate__fadeIn">Parawisata Provinsi Jawa
                        Timur</h1>

                    <!-- Add a brief and enticing description -->
                    <p class="lead mb-5 animate__animated animate__fadeIn animate__delay-1s">Discover the beauty and
                        charm of East Java Province. Explore breathtaking landscapes, rich culture, and unforgettable
                        experiences.</p>

                    <!-- Add a call-to-action button with a subtle animation -->
                    <a class="btn btn-primary btn-lg animate__animated animate__fadeIn animate__delay-2s"
                        href="#explore">Explore Now</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Icons Grid-->
    <section class="features-icons">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mb-5">
                        <i class="bi bi-luggage text-primary display-1"></i>
                        <h3 class="mt-3">Perjalanan Wisatawan Domestik</h3>
                        <p class="lead">Jawa Timur menjadi provinsi tujuan utama pada 2022 dengan jumlah perjalanan
                            tertinggi se-Indonesia sekitar <strong
                                style="color: #007BFF; font-weight: bold;">27,29%</strong> dari total perjalanan wisnus.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item mb-5">
                        <i class="bi bi-geo-alt-fill text-primary display-1"></i>
                        <h3 class="mt-3">Total Destinasi Wisata</h3>
                        <p class="lead">Menurut data Dinas Kebudayaan dan Pariwisata Jatim, terdapat <strong
                                style="color: #007BFF; font-weight: bold;">1.368</strong> destinasi wisata dan <strong
                                style="color: #007BFF; font-weight: bold;">596</strong> desa wisata pada tahun 2023 di
                            Provinsi Jatim.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="features-icons-item">
                        <i class="bi bi-coin text-primary display-1"></i>
                        <h3 class="mt-3">Pendapatan Sektor Pariwisata</h3>
                        <p class="lead">Total transaksi dari sektor pariwisata dari wisatawan nusantara ke Jatim mencapai
                            lebih dari <B style="color: #007BFF; font-wight: bold;">Rp 487 trilliun</B> pada tahun 2023.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Image Showcases-->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 showcase-img" style="background-image: url('assets/img/bromocard.jpg')">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2 class="mb-4">Objek Wisata</h2>
                    <p class="lead">Jawa Timur, perpaduan keindahan alam dan warisan kultural, menawarkan pesona unik
                        dalam
                        setiap perjalanan. Dari kemegahan Gunung Bromo hingga kesegaran Kota Malang, serta keajaiban Kawah
                        Ijen, provinsi ini memikat hati wisatawan dengan panorama menakjubkan. Trowulan, pusat sejarah
                        Majapahit, menyuguhkan jejak bersejarah yang mengesankan. Inilah Jawa Timur, destinasi wisata yang
                        menyajikan pengalaman tak terlupakan di setiap sudutnya.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 showcase-img" style="background-image: url('assets/img/satemaduracard.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2 class="mb-4">Kuliner</h2>
                    <p class="lead">Jawa Timur, surganya kuliner, memikat dengan kelezatan sate Madura, rujak cingur
                        Surabaya,
                        dan rawon Probolinggo. Dengan jajanan khas seperti lontong balap dan tahu campur, provinsi ini
                        menawarkan petualangan rasa yang tak terlupakan di setiap sudutnya.</p>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 showcase-img" style="background-image: url('assets/img/reogcard.jpg')">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2 class="mb-4">Budaya</h2>
                    <p class="lead">Jawa Timur, landasan budaya yang kaya, memukau dengan wayang kulit, tarian Reog, dan
                        seni
                        batik yang mencerminkan sejarah. Dalam setiap upacara adat, seperti upacara Labuhan di Gunung Bromo,
                        terpancar kekayaan spiritual dan keberagaman yang menjadikan Jawa Timur tak terlupakan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- list destination -->
    <!-- list destination -->
    <!-- list destination -->
    <section class="container mt-4">
        @can('admin')
            <a href="/destination/create" class="btn btn-danger">Create</a>
        @endcan
        <h1 class="text-center mb-4">Destinasi Pilihan</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($data as $destination)
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm" data-aos="fade-up">
                        <form action="/destination/{{ $destination->id }}" method="POST">
                            @csrf
                            <img src="{{ asset('storage/' . $destination->image) }}" class="card-img-top rounded-3"
                                alt="{{ $destination->name }}">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bold">{{ $destination->name }}</h5>
                                <p class="card-text">
                                    {{ strlen($destination->description) > 10 ? substr($destination->description, 0, 150) . '...' : $destination->description }}
                                </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item border-0">Lokasi: {{ $destination->location }}</li>
                                <!-- Add more details as needed -->
                            </ul>
                            <div class="card-footer bg-white border-0 text-end">
                                <small class="text-muted">{{ $destination->created_at->diffForHumans() }}</small>
                            </div>
                            <a href="/destination/{{ $destination->id }}" class="btn btn-primary btn-sm">Detail</a>
                            @can('admin')
                                <a href="/destination/{{ $destination->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="button"
                                    onclick="confirmDelete('{{ $destination->id }}')">Delete</button>
                            @endcan
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="testimonials text-center">
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
                                <input class="form-control form-control-lg" id="emailAddressBelow" type="email"
                                    placeholder="Email Address" data-sb-validations="required,email" />
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">
                                    Email Address is required.</div>
                                <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email
                                    Address Email is not valid.</div>
                            </div>
                            <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton"
                                    type="submit">Submit</button></div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                <p>To activate this form, sign up at</p>
                                <a class="text-white"
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        function confirmDelete(destinationId) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will not be able to recover this destination!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form for deletion
                    document.querySelector(`form[action="/destination/${destinationId}"]`).submit();
                }
            });
        }
    </script>
@endsection
