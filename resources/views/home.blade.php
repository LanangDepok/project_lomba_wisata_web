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
    <section class="container mt-4">
        @can('admin')
            <a href="/destination/create" class="btn btn-danger">Create</a>
        @endcan
        <h1 class="text-center mb-4">Destinasi Pilihan</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            {{-- @foreach ($data as $destination) --}}
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" data-aos="fade-up">
                    <form action="/destination//" method="POST">
                        @csrf
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('/storage/1.jpg') }}" class="card-img-top rounded-3"
                                style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Gunung Bromo</h5>
                            <p class="card-text" style="height: 70px; overflow: hidden; text-overflow: ellipsis;">
                                Gunung Bromo atau dalam bahasa Tengger dieja "Brama", juga disebut Kaldera Tengger, adalah
                                sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329
                                meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten
                                Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo
                                terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo
                                menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo
                                termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">Lokasi:
                                <a style="text-decoration: none" href="https://maps.app.goo.gl/ZU2yHg4sXdzaSE2N6">klik di
                                    sini</a>
                            </li>
                            <!-- Add more details as needed -->
                        </ul>
                        <div class="card-footer bg-white border-0 text-center"> <!-- Center-align buttons -->
                            <small class="text-muted">5 menit yang lalu</small>
                            <div class="mt-3"> <!-- Add margin-top for spacing -->
                                {{-- <a href="/destination/1" class="btn btn-primary btn-sm mx-1">Detail</a> --}}
                                @can('admin')
                                    <a href="/destination///edit" class="btn btn-warning btn-sm mx-1">Edit</a>
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mx-1" type="button"
                                        onclick="confirmDelete('/')">Delete</button>
                                @endcan
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" data-aos="fade-up">
                    <form action="/destination//" method="POST">
                        @csrf
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('/storage/2.jpg') }}" class="card-img-top rounded-3" alt="JaTim Park"
                                style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">JaTim Park</h5>
                            <p class="card-text" style="height: 70px; overflow: hidden; text-overflow: ellipsis;">
                                Jawa Timur Park adalah sebuah tempat rekreasi dan taman belajar masa kini
                                yang menawarkan permainan, pengetahuan hingga hiburan dan menjadi salah satu icon
                                wisata Jawa Timur yang terdapat di Kota Batu.
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">Lokasi: <a
                                    href="https://maps.app.goo.gl/oGLi1JfxHBNCHofLA">klik di sini</a></li>
                            <!-- Add more details as needed -->
                        </ul>
                        <div class="card-footer bg-white border-0 text-center"> <!-- Center-align buttons -->
                            <small class="text-muted">5 menit yang lalu</small>
                            <div class="mt-3"> <!-- Add margin-top for spacing -->
                                {{-- <a href="/destination/1" class="btn btn-primary btn-sm mx-1">Detail</a> --}}
                                @can('admin')
                                    <a href="/destination///edit" class="btn btn-warning btn-sm mx-1">Edit</a>
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mx-1" type="button"
                                        onclick="confirmDelete('/')">Delete</button>
                                @endcan
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" data-aos="fade-up">
                    <form action="/destination//" method="POST">
                        @csrf
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('/storage/3.jpg') }}" class="card-img-top rounded-3"
                                style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Kampung Warna Warni Jodipan di Malang</h5>
                            <p class="card-text" style="height: 70px; overflow: hidden; text-overflow: ellipsis;">
                                Kampung Warna Warni Jodipan menjadi salah satu tempat wisata unik dan favorit di Kota
                                Malang. Rumah-rumah di Kampung Jodipan ini di cat warna-warni. Terlihat indah dan menjunjung
                                tinggi nilai seni.
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">Lokasi: <a
                                    href="https://maps.app.goo.gl/tbbhenLS9aY9ZZGX9">klik di sini</a></li>
                            <!-- Add more details as needed -->
                        </ul>
                        <div class="card-footer bg-white border-0 text-center"> <!-- Center-align buttons -->
                            <small class="text-muted">5 menit yang lalu</small>
                            <div class="mt-3"> <!-- Add margin-top for spacing -->
                                {{-- <a href="/destination/1" class="btn btn-primary btn-sm mx-1">Detail</a> --}}
                                @can('admin')
                                    <a href="/destination///edit" class="btn btn-warning btn-sm mx-1">Edit</a>
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mx-1" type="button"
                                        onclick="confirmDelete('/')">Delete</button>
                                @endcan
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" data-aos="fade-up">
                    <form action="/destination//" method="POST">
                        @csrf
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('/storage/4.jpg') }}" class="card-img-top rounded-3"
                                style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Pantai Pasir Putih</h5>
                            <p class="card-text" style="height: 70px; overflow: hidden; text-overflow: ellipsis;">
                                Pantai Karanggongso atau Pantai Pasir Putih Trenggalek adalah sebuah pantai pasir putih
                                indah yang berada di Kecamatan Watulimo, Kabupaten Trenggalek, Jawa Timur. Pantai
                                Karanggongso terletak sekitar 1 km dari pantai Prigi, terkenal dengan pasir putihnya. Ombak
                                di pantai ini relatif tenang, sehingga sangat cocok untuk berenang dan mandi. Di sepanjang
                                pantai tumbuh rimbun pohon-pohon yang menambah sejuk udara pantai di siang hari.Pantai
                                Karanggongso atau Pantai Pasir Putih Trenggalek adalah sebuah pantai pasir putih indah yang
                                berada di Kecamatan Watulimo, Kabupaten Trenggalek, Jawa Timur. Pantai Karanggongso terletak
                                sekitar 1 km dari pantai Prigi, terkenal dengan pasir putihnya. Ombak di pantai ini relatif
                                tenang, sehingga sangat cocok untuk berenang dan mandi. Di sepanjang pantai tumbuh rimbun
                                pohon-pohon yang menambah sejuk udara pantai di siang hari.
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">Lokasi: <a
                                    href="https://maps.app.goo.gl/XHKkBDiowG9JKZYu8">klik di sini</a></li>
                            <!-- Add more details as needed -->
                        </ul>
                        <div class="card-footer bg-white border-0 text-center"> <!-- Center-align buttons -->
                            <small class="text-muted">5 menit yang lalu</small>
                            <div class="mt-3"> <!-- Add margin-top for spacing -->
                                {{-- <a href="/destination/1" class="btn btn-primary btn-sm mx-1">Detail</a> --}}
                                @can('admin')
                                    <a href="/destination///edit" class="btn btn-warning btn-sm mx-1">Edit</a>
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mx-1" type="button"
                                        onclick="confirmDelete('/')">Delete</button>
                                @endcan
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" data-aos="fade-up">
                    <form action="/destination//" method="POST">
                        @csrf
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('/storage/5.jpg') }}" class="card-img-top rounded-3"
                                style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Gunung Semeru</h5>
                            <p class="card-text" style="height: 70px; overflow: hidden; text-overflow: ellipsis;">
                                Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia.
                                Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676
                                meter dari permukaan laut. Gunung ini terbentuk akibat subduksi Lempeng Indo-Australia
                                kebawah Lempeng Eurasia.
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">Lokasi: <a
                                    href="https://maps.app.goo.gl/QoMNtD8vPgMF8hyv7">klik di sini</a></li>
                            <!-- Add more details as needed -->
                        </ul>
                        <div class="card-footer bg-white border-0 text-center"> <!-- Center-align buttons -->
                            <small class="text-muted">5 menit yang lalu</small>
                            <div class="mt-3"> <!-- Add margin-top for spacing -->
                                {{-- <a href="/destination/1" class="btn btn-primary btn-sm mx-1">Detail</a> --}}
                                @can('admin')
                                    <a href="/destination///edit" class="btn btn-warning btn-sm mx-1">Edit</a>
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mx-1" type="button"
                                        onclick="confirmDelete('/')">Delete</button>
                                @endcan
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm" data-aos="fade-up">
                    <form action="/destination//" method="POST">
                        @csrf
                        <div style="height: 200px; overflow: hidden;">
                            <img src="{{ asset('/storage/1.jpg') }}" class="card-img-top rounded-3"
                                style="object-fit: cover; width: 100%; height: 100%;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bold">Telaga Sarangan</h5>
                            <p class="card-text" style="height: 70px; overflow: hidden; text-overflow: ellipsis;">
                                Telaga Sarangan, juga dikenal sebagai Telaga Pasir adalah telaga alami yang berada di
                                ketinggian 1.200 meter di atas permukaan laut dan terletak di lereng Gunung Lawu, Kecamatan
                                Plaosan, Kabupaten Magetan, Jawa Timur. Telaga ini berjarak sekitar 16 kilometer arah
                                barat Kota Magetan.
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item border-0">Lokasi: <a
                                    href="https://maps.app.goo.gl/QDC6ah2yKzzVUPtb9">klik di sini</a></li>
                            <!-- Add more details as needed -->
                        </ul>
                        <div class="card-footer bg-white border-0 text-center"> <!-- Center-align buttons -->
                            <small class="text-muted">5 menit yang lalu</small>
                            <div class="mt-3"> <!-- Add margin-top for spacing -->
                                {{-- <a href="/destination/1" class="btn btn-primary btn-sm mx-1">Detail</a> --}}
                                @can('admin')
                                    <a href="/destination///edit" class="btn btn-warning btn-sm mx-1">Edit</a>
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm mx-1" type="button"
                                        onclick="confirmDelete('/')">Delete</button>
                                @endcan
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- @endforeach --}}
        </div>
    </section>
    </br>
    <!-- Call to Action-->
    <section class="call-to-action text-white text-center" id="signup">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <h2 class="mb-4">Parawisata Provinsi Jawa Timur</h2>
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
