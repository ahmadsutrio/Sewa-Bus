<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balenong | {{ $title }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/template.css">
    <link rel="stylesheet" href="/css/@yield('style').css">
</head>

<body>
    <nav class="navbar navbar-expand-lg box-shadow bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand brand" href="/">Belenong</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class=""><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-items hover-prymary text-center {{ $title === 'Beranda' ? 'active' : '' }}"
                            aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-items hover-prymary text-center {{ $title === 'Layanan' ? 'active' : '' }}"
                            href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item ms-lg-2 ms-md-2 text-center">
                        <a class="nav-link nav-items hover-prymary text-center {{ $title === 'Sewa-bus' ? 'active' : '' }}"
                            href="#daftar-bus">Daftar Bus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-items hover-prymary text-center {{ $title === 'Tentang-kami' ? 'active' : '' }}"
                            aria-current="page" href="#tentang-kami">Tentang kami</a>
                    </li>
                    @auth
                    <li class="nav-item text-center">
                        <a class="nav-link nav-items hover-prymary text-center {{ $title === 'Penyewaa' ? 'active' : '' }}"
                            href="/penyewaan/{{ Auth::user()->idAkun }}" tabindex="-1" aria-disabled="true">Status Sewa</a>
                    </li>
                    @endauth
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    @guest
                        <li class="nav-item me-lg-2">
                            <a class="nav-link nav-items hover-prymary text-center {{ $title === 'Masuk' ? 'active' : '' }}"
                                aria-current="page" href="{{ route('masuk') }}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-items hover-prymary text-center{{ $title === 'Daftar' ? 'active' : '' }}"
                                href="/daftar">Daftar</a>
                        </li>
                    @endguest
                    @auth
                        <div class="dropdown">
                            <a class="btn border bg-white text-capitalize dropdown-toggle" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->namaLengkap }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="/profil/{{ Auth::user()->idAkun }}">Profil</a></li>
                                <li><a class="dropdown-item" href="{{ route('keluar') }}">Keluar</a></li>
                            </ul>
                        </div>
                    @endauth


                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    @include('sweetalert::alert')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
    <script>
        const b = new TypeIt("#tagline-text", {

        }).go();
        const a = new TypeIt("#tagline-text-p", {
            speed: 50,
            waitUntilVisible: true,
        }).go();
    </script>
    <script>
        function jumlah() {
            var lokasi = document.getElementById('lokasi-penjemputan').value;
            if (lokasi === "Pekanbaru") {
                lokasi = 3000000;
            } else {
                lokasi = 2500000;
            }

            // console.log(lokasi);
            var lamaPenyewaan = parseInt(document.getElementById("jumlahHariPenyewaan").value);
            var harga = parseInt(document.getElementById("harga").value);
            var total = lamaPenyewaan * harga + lokasi;
            var dp = total * 0.1;
            console.log(lokasi);
            console.log(lamaPenyewaan);
            console.log(harga);
            console.log(total);
            document.getElementById("hasilAkir").value = total;
            document.getElementById("dp").value = dp;
        }
    </script>
</body>

</html>
