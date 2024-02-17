<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balenong | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"
        integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/templateAdmin.css">
</head>

<body>
    <!-- sidebar -->
    <section class="sidebar">
        <div class="brand d-flex mt-3 ">
            <p class="my-auto text-center mx-auto">Balenong</p>
        </div>
        <ul class="navbar-nav position-relative mt-3">
            <li class="nav-item hover">
                <a href="{{ route('beranda') }}" class="nav-link ">
                    <i class="fa-solid fa-house"></i>
                    <span class="overflow-hidden">Beranda</span>
                </a>
            </li>
            <li class="nav-item hover ">
                <a href="/Admin/DaftarSemuaBus" class="nav-link " style="color: #ffff;">
                    <i class="bi bi-journal-bookmark"></i>
                    <span class="me-1 overflow-hidden">Daftar Bus
                </a>
            </li>

            {{-- <ul class="collapse w-100 position-relative" id="submenu1" aria-labelledby="navbarDropdown">
                <li class="w-100 hover">
                    <a href="/Admin/DaftarSemuaBus" class="nav-link text-decoration-none px-0 ">
                        <span class="ms-3  overflow-hidden ">Semua</span>
                    </a>
                </li>
                <li class="w-100 hover">
                    <a href="/Admin/DaftarBusTersedia" class="nav-link text-decoration-none px-0">
                        <span class="ms-3  overflow-hidden ">Tersedia</span>
                    </a>
                </li>
                <li class="w-100 hover">
                    <a href="/Admin/DaftarBusDisewa" class="nav-link text-decoration-none px-0 ">
                        <span class="ms-3  overflow-hidden ">Di Sewa</span>
                    </a>
                </li>
            </ul> --}}
            <li class="nav-item hover">
                <a href="/Admin/penyewaan" class="nav-link">
                    <i class="fa-solid fa-users"></i>
                    <span class="overflow-hidden">Penyewaan Bus</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="bi bi-person-circle"></i>
                    <span>Daftar Pengguana</span>
                </a>
            </li> --}}
        </ul>

    </section>
    <!-- home section -->
    <section class="home-section ">
        <nav class="border-bottom d-flex justify-content-between">
            <div class="button-dashboard" style="cursor: pointer;">
                <div class="bg">
                    <i class="fa-solid fa-bars sidebarBtn my-auto"></i>
                </div>
            </div>
            <div class="profile d-flex align-items-center">
                <div class="dropdown">
                    <a class="btn bg-white text-capitalize dropdown-toggle" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->namaLengkap }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('keluar') }}">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        @include('sweetalert::alert')


        <script src="/js/templateAdmin.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
            integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
        </script>
</body>

</html>
