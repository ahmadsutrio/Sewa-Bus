<?php
class HalamanDepan{
    public function tampil()
    {
        $daftarBus = Bus::ambil();
        return view('HalamanDepan/HalamanDepan', [
            "title" => "Beranda",
            "data" => $daftarBus
        ]);
    }
}
?>
@extends('template.main')
@section('style', 'beranda')
@section('content')

    <div class="container-fluid p-0 overflow-hidden">
        <div class="mt-5">
            <div class="row border mt-lg-5">

                <!-- Hero -->
                <div class="col-lg-12 mt-5 pt-5 pt-lg-0 pt-md-0">
                    <img src="img/hero.png" class="img-fluid mt-5 mt-lg-0 mt-md-0" alt="" srcset="">
                </div>
                <div class="position-absolute col-lg-4 col-md-5 offset-lg-1 offset-md-1 mt-lg-5 pt-lg-5 ">
                    <div class="tagline mt-lg-5 mt-2 mt-md-5 ms-2 ms-lg-0 ms-md-0 ps-lg-5">
                        <h3 class="tagline-text " id="tagline-text">Solusi Perjalanan Anda</h3>
                        <p class="p-tagline" id="tagline-text-p">Rental bus Balenong Hadir untuk permudah perjalanan anda
                            dengan layanan yang kami sediakan !!</p>
                        <a href="#daftar-bus" class="btn button-prymary ">Sewa sekarang!</a>
                    </div>
                </div>

                <!-- Layanan -->
                <div class="col-12 " style="background-color:#7e7b8c ;" id="layanan">
                    <div class="mt-5 row justify-content-center">
                        <div class="col-lg-9">
                            <div class="px-2 mt-lg-5 px-lg-0">
                                <h4 class="text-center layanan" data-aos="fade-down">Layanan</h4>
                                <p class="text-center mx-auto layanan-items" data-aos="fade-down" data-aos-offset="305">
                                    Kami menawarkan
                                    beragam layanan dan
                                    jenis kendaraan, mulai
                                    dari sewa
                                    kendaraan
                                    jangka
                                    pendek dan panjang
                                    untuk keperluan
                                    operasional bisnis hingga sewa mobil harian dengan pengemudi yang kami sediakan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-9 py-5">
                            <div class="row gap-5 justify-content-center">
                                <div class="col-lg-3 hover-card col-md-3 col-9 shadow  rounded-3 nav-link text-dark"
                                    data-aos="zoom-in" data-aos-offset="305">
                                    <div class="text-center mt-5 ">
                                        <svg class="" width="157" height="157" viewBox="0 0 157 157"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M86.35 0.3925V16.2495C117.357 20.096 141.3 46.472 141.3 78.5C141.3 103.699 126.228 125.6 104.248 135.648L86.35 117.75V157H125.6L116.023 147.423C140.594 133.999 157 108.016 157 78.5C157 37.837 125.993 4.3175 86.35 0.3925ZM70.65 0C55.3425 1.57 40.82 7.536 28.888 17.3485L40.035 28.4955C48.9055 21.5875 59.503 17.27 70.65 15.7V0ZM17.27 28.888C7.536 40.82 1.57 55.3425 0 70.65H15.7C17.1915 59.503 21.5875 48.9055 28.4955 40.035L17.27 28.888ZM31.4 47.1V62.8H54.95V70.65H47.1C38.465 70.65 31.4 77.715 31.4 86.35V109.9H70.65V94.2H47.1V86.35H54.95C63.6635 86.35 70.65 79.3635 70.65 70.65V62.8C70.65 54.165 63.6635 47.1 54.95 47.1H31.4ZM78.5 47.1V86.35H102.05V109.9H117.75V86.35H125.6V70.65H117.75V47.1H102.05V70.65H94.2V47.1H78.5ZM0 86.35C1.57 101.658 7.6145 116.18 17.427 128.112L28.574 116.965C21.666 108.094 17.27 97.497 15.7 86.35H0ZM40.1135 128.505L28.888 139.652C40.82 149.385 55.3425 155.43 70.65 157V141.3C59.503 139.809 48.984 135.413 40.1135 128.505Z"
                                                fill="#4D6D77" />
                                        </svg>
                                    </div>
                                    <div class="mt-5 mb-5 w-75 mx-auto text-center">
                                        <h2 class="fw-bold" style="color: #215261;">24 Jam</h2>
                                        <p>Layanan kami selalu siap untuk Anda</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 hover-card col-md-3 col-9 rounded-3 nav-link text-dark"
                                    data-aos="zoom-in" data-aos-offset="310">
                                    <div class="text-center mt-5 ">
                                        <svg width="120" height="162" viewBox="0 0 120 162" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M22.9445 137.449H55.8569V107.53C38.5761 109.267 24.855 121.74 22.9445 137.449ZM64.1418 107.53V137.449H97.0542C95.1437 121.74 81.4226 109.267 64.1418 107.53ZM97.0546 144.981C96.4759 149.743 94.8131 154.203 92.2966 158.158L99.468 161.929C103.347 155.833 105.567 148.754 105.567 141.215C105.567 118.338 85.1653 99.7919 59.9994 99.7919C34.8334 99.7919 14.4321 118.338 14.4321 141.215C14.4321 148.754 16.6513 155.833 20.5307 161.929L27.7021 158.158C25.1856 154.203 23.5228 149.743 22.9441 144.981H97.0546Z"
                                                fill="#4D6D77" />
                                            <path
                                                d="M72.4266 141.215C72.4266 147.454 66.8629 152.512 59.9992 152.512C53.1355 152.512 47.5718 147.454 47.5718 141.215C47.5718 134.976 53.1355 129.918 59.9992 129.918C66.8629 129.918 72.4266 134.976 72.4266 141.215Z"
                                                fill="#4D6D77" />
                                            <path
                                                d="M91.4191 129.334C90.2348 125.316 92.8578 121.186 97.2774 120.11L105.28 118.161C109.7 117.084 114.243 119.468 115.427 123.486L119.716 138.036C120.9 142.054 118.277 146.183 113.858 147.26L105.855 149.209C101.435 150.286 96.8922 147.902 95.7079 143.884L91.4191 129.334Z"
                                                fill="#4D6D77" />
                                            <path
                                                d="M4.5729 123.483C5.75724 119.465 10.3003 117.081 14.7199 118.157L22.7227 120.107C27.1423 121.183 29.7654 125.313 28.581 129.331L24.2923 143.88C23.108 147.898 18.5649 150.283 14.1453 149.206L6.1429 147.257C1.72297 146.18 -0.899924 142.051 0.284368 138.033L4.5729 123.483Z"
                                                fill="#4D6D77" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M22.7163 54.6032V43.306H31.0013V54.6032C31.0013 69.1616 43.9838 80.9634 59.9986 80.9634C76.0134 80.9634 88.9959 69.1616 88.9959 54.6032V43.306H97.2808V54.6032C97.2808 73.3212 80.5892 88.4948 59.9986 88.4948C39.408 88.4948 22.7163 73.3212 22.7163 54.6032Z"
                                                fill="#4D6D77" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M17.7225 32.0087H102.457C102.755 31.3177 103.077 30.5032 103.397 29.5708L103.447 29.4251C104.564 26.1741 105.567 23.257 105.567 17.3102C105.567 14.2946 103.411 11.7553 100.558 9.74753C97.6677 7.71331 93.7199 5.97166 89.3227 4.55202C80.5166 1.709 69.4106 0 59.9994 0C50.5881 0 39.4821 1.709 30.676 4.55202C26.2788 5.97166 22.331 7.71331 19.4404 9.74753C16.5875 11.7553 14.4321 14.2946 14.4321 17.3102C14.4321 22.831 15.4479 25.7406 16.4914 28.7307C16.5887 29.0093 16.686 29.2884 16.783 29.5704C17.1032 30.5028 17.4247 31.3173 17.7225 32.0087ZM43.4295 20.7115C43.4295 18.6318 45.284 16.9458 47.5719 16.9458H72.4268C74.7147 16.9458 76.5692 18.6318 76.5692 20.7115C76.5692 22.7913 74.7147 24.4773 72.4268 24.4773H47.5719C45.284 24.4773 43.4295 22.7913 43.4295 20.7115Z"
                                                fill="#4D6D77" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M18.6628 41.0864C18.8508 40.1909 19.7526 39.5402 20.8052 39.5402H99.1925C100.245 39.5402 101.147 40.1909 101.335 41.0864L101.336 41.0909L101.337 41.0954L101.339 41.1063L101.344 41.1319L101.356 41.2005C101.365 41.2536 101.375 41.3217 101.384 41.4034C101.403 41.5673 101.421 41.7872 101.423 42.0549C101.428 42.5908 101.374 43.324 101.151 44.1875C100.699 45.9329 99.5732 48.1516 96.9945 50.3079C91.8822 54.5828 81.379 58.3688 59.9989 58.3688C38.6187 58.3688 28.1155 54.5828 23.0032 50.3079C20.4246 48.1516 19.2986 45.9329 18.8471 44.1875C18.6238 43.324 18.5696 42.5908 18.5745 42.0549C18.577 41.7872 18.5944 41.5673 18.6135 41.4034C18.623 41.3217 18.6329 41.2536 18.6416 41.2005L18.6536 41.1319L18.6586 41.1063L18.6607 41.0954L18.6619 41.0909L18.6628 41.0864Z"
                                                fill="#4D6D77" />
                                        </svg>

                                    </div>
                                    <div class="mt-5 mb-5 px-lg-3 mx-auto text-center">
                                        <h2 class="fw-bold" style="color: #215261;">Pengemudi</h2>
                                        <p>Dengan pengemudi yang berpengalaman</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 hover-card col-md-3 col-9 rounded-3 nav-link text-dark"
                                    data-aos="zoom-in" data-aos-offset="315">
                                    <div class="text-center mt-5 ">
                                        <svg width="200" height="160" viewBox="0 0 200 212" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M100 17.6667C104.42 17.6667 108.66 19.528 111.785 22.8411C114.911 26.1543 116.667 30.6479 116.667 35.3334C116.667 45.1384 109.25 53 100 53C95.5797 53 91.3405 51.1387 88.2149 47.8256C85.0893 44.5124 83.3333 40.0188 83.3333 35.3334C83.3333 30.6479 85.0893 26.1543 88.2149 22.8411C91.3405 19.528 95.5797 17.6667 100 17.6667ZM103.25 130.645C115.088 130.596 126.916 131.334 138.667 132.853C139.167 108.827 137.167 87.6267 133.333 79.5C132.25 77.115 130.75 75.0834 129.167 73.3167L61.9167 134.443C73.25 132.5 87.5 130.645 103.25 130.645ZM62.1667 150.167C63.25 165.537 65.4167 181.083 68.9167 194.333H86.1667C83.75 186.56 82 177.462 80.6667 167.833C80.6667 167.833 100 163.947 119.333 167.833C118 177.462 116.25 186.56 113.833 194.333H131.083C134.75 180.642 136.917 164.388 138 148.312C126.469 146.834 114.865 146.096 103.25 146.103C87.1667 146.103 73.1667 147.958 62.1667 150.167ZM100 61.8334C100 61.8334 75 61.8334 66.6667 79.5C63.8333 85.5067 62 98.4917 61.4167 114.48L116 64.8367C107.75 61.8334 100 61.8334 100 61.8334ZM154.75 50.085L145.25 38.3367L116 64.925C120.583 66.6034 125.417 69.2534 129.167 73.3167L154.75 50.085ZM172.25 139.832C171.5 139.567 159.5 135.415 138.667 132.853C138.583 137.888 138.333 143.1 138 148.312C156.75 150.785 167.5 154.583 167.667 154.583L172.25 139.832ZM61.4167 114.48L28.5833 144.337L36 157.41C36.1667 157.322 45.8333 153.347 62.1667 150.167C61.25 137.712 61 125.433 61.4167 114.48Z"
                                                fill="#4D6D77" />
                                        </svg>

                                    </div>
                                    <div class="mt-5 mb-5 w-75 mx-auto text-center">
                                        <h2 class="fw-bold" style="color: #215261;">Aman</h2>
                                        <p>Keamanan anda prioritas kami</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Knapa harus rental bus  -->
                <div class="row justify-content-center pb-5 mb-3">
                    <div class="col-9 mt-5">
                        <h4 class="title-rental-bus text-center mx-0 mx-lg-auto mx-md-auto" data-aos="fade-down"
                            data-aos-offset="300">Kenapa
                            harus</h4>
                        <h4 class="title-rental-bus text-center mx-0 mx-lg-auto mx-md-auto" data-aos="fade-down"
                            data-aos-offset="300">Rental bus?</h4>
                        <p class="p-rental-bus mt-lg-3" data-aos="fade-down" data-aos-offset="302">Sebagai salah satu
                            penyedia
                            Rental
                            bus,
                            kami menawarkan solusi transportasi rental
                            mobil yang aman dan
                            nyaman dengan
                            pilihan kendaraan yang lengkap, dengan vasilitas yang baik,serta pengemudi yang handal, dan
                            asuransi yang
                            komprehensif.</p>
                    </div>
                    <img src="img/objekBus2.png" class="col-lg-5 col-md-10 img-fluid rounded-2" data-aos="zoom-in"
                        data-aos-offset="315" alt="" srcset="">
                    <div class="col-lg-5">
                        <div class="row align-items-center justify-content-center">
                            <img src="img/objekBus3.png" class="col-lg-6 col-md-5 img-fluid rounded-2" data-aos="zoom-in"
                                data-aos-offset="315" alt="">
                            <img src="img/objekBus6.png" class="col-lg-6 col-md-5 img-fluid rounded-2" data-aos="zoom-in"
                                data-aos-offset="315" alt="">
                            <img src="img/objekBus4.png" class="col-lg-6 col-md-5 img-fluid rounded-2 mt-lg-4"
                                data-aos="zoom-in" data-aos-offset="315" alt="">
                            <img src="img/objekBus5.png" class="col-lg-6 col-md-5 img-fluid rounded-2 mt-lg-4"
                                data-aos="zoom-in" data-aos-offset="315" id="daftar-bus" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Daftar buss -->
            <div class=" col-lg-12 mb-lg-5">
                <div class="row justify-content-center gap-3">
                    <div class="col-12 title-rental-bus text-center mx-0 mx-lg-auto mx-md-auto" data-aos="fade-down"
                        data-aos-offset="302">Daftar Bus</div>

                    @foreach ($data as $daftarBus)
                        <!-- Card daftar bus -->
                        <div class="col-lg-2 col-9 col-md-4 hover-card-bus rounded-3 " data-aos="zoom-in"
                            data-aos-offset="300">
                            <div class="row p-2 mb-1 mt-3">
                                <img src="img/{{ $daftarBus->fotoBus }}" class="img-fluid col-12 mt-2  rounded-2">
                                <!-- tempat duduk -->
                                <h4 class="text-center col-12  mt-2 overflow-hidden whitespace-nowrap text-nowrap"
                                    style="text-overflow: ellipsis;">{{ $daftarBus->namaBus }}</h4>
                                <div class="col-6 mt-3">
                                    <div class="row align-items-center">
                                        <span class="col-3 bg-vasilitas d-flex flex-column align-items-center py-2">
                                            <svg width="20" height="23" viewBox="0 0 20 23" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.4875 3.87521C3.5125 2.99009 3.5125 1.54895 4.4875 0.663835C5.4625 -0.221278 7.05 -0.221278 8.025 0.663835C9 1.54895 9 2.99009 8.025 3.87521C7.0375 4.77167 5.4625 4.77167 4.4875 3.87521ZM2.5 15.8923V5.67947H0V15.8923C0 19.0243 2.8 21.5661 6.25 21.5661H13.75V19.2966H6.25C4.175 19.2966 2.5 17.776 2.5 15.8923ZM20 20.5108L13.6625 14.7576H9.375V10.5816C11.125 11.8866 13.875 13.0327 16.25 13.0327V10.5816C14.175 10.6043 11.7375 9.59439 10.4125 8.26673L8.6625 6.50785C8.425 6.26955 8.125 6.07664 7.8 5.94047C7.4375 5.7816 7.025 5.67947 6.6 5.67947H6.5625C5.0125 5.67947 3.75 6.82558 3.75 8.23268V14.7576C3.75 16.6413 5.425 18.1618 7.5 18.1618H13.8375L18.2125 22.1335L20 20.5108Z"
                                                    fill="#3D8AA9" />
                                            </svg>
                                        </span>
                                        <span class="col d-flex flex-column w-100 ">
                                            <span class="vasilitas-item">Tempat duduk</span>
                                            <span>{{ $daftarBus->kapasitasPenumpang }}</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- vasilitas -->
                                <div class="col-6 mt-3">
                                    <div class="row gap-1 align-items-center ">
                                        <span class="col-3 bg-vasilitas d-flex flex-column align-items-center py-2">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.4998 14.3175C12.8194 14.3175 14.6998 12.6081 14.6998 10.4995H6.2998C6.2998 12.6081 8.18021 14.3175 10.4998 14.3175Z"
                                                    fill="#3D8AA9" />
                                                <path
                                                    d="M8.3998 7.63596C8.3998 8.16314 7.9297 8.59047 7.3498 8.59047C6.76991 8.59047 6.2998 8.16314 6.2998 7.63596C6.2998 7.10881 6.76991 6.68146 7.3498 6.68146C7.9297 6.68146 8.3998 7.10881 8.3998 7.63596Z"
                                                    fill="#3D8AA9" />
                                                <path
                                                    d="M13.6501 8.59047C14.23 8.59047 14.7001 8.16314 14.7001 7.63596C14.7001 7.10881 14.23 6.68146 13.6501 6.68146C13.0702 6.68146 12.6001 7.10881 12.6001 7.63596C12.6001 8.16314 13.0702 8.59047 13.6501 8.59047Z"
                                                    fill="#3D8AA9" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M21 9.54501C21 14.8166 16.2989 19.0901 10.5 19.0901C4.70101 19.0901 0 14.8166 0 9.54501C0 4.27341 4.70101 -6.10352e-05 10.5 -6.10352e-05C16.2989 -6.10352e-05 21 4.27341 21 9.54501ZM18.9 9.54501C18.9 13.7623 15.1392 17.1811 10.5 17.1811C5.86081 17.1811 2.1 13.7623 2.1 9.54501C2.1 5.32773 5.86081 1.90895 10.5 1.90895C15.1392 1.90895 18.9 5.32773 18.9 9.54501Z"
                                                    fill="#3D8AA9" />
                                            </svg>
                                        </span>
                                        <span class="col d-flex flex-column w-100 ">
                                            <span class="vasilitas-item">Fasilitas</span>
                                            <span>{{ $daftarBus->fasilitasBus }}</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Pengemudi 1 -->
                                <div class="col-6 mt-2 ">
                                    <div class="row align-items-center">
                                        {{-- <img src="img/image-daftar.png" alt="" class=" d-flex img-fluid rounded-circle border col-3 p-0 m-0" alt=""> --}}
                                        <span class="col-3  d-flex flex-column align-items-center">
                                            <svg width="35" height="35" viewBox="0 0 38 38" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="19" cy="19" r="19" fill="#C3DBE4" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.0913 26.519H18.5257V22.4879C16.1974 22.7219 14.3487 24.4025 14.0913 26.519ZM19.642 22.4879V26.519H24.0764C23.819 24.4025 21.9703 22.7219 19.642 22.4879V22.4879ZM24.0764 27.5338C23.9984 28.1754 23.7744 28.7764 23.4353 29.3092L24.4016 29.8173C24.9243 28.9959 25.2233 28.0421 25.2233 27.0264C25.2233 23.9441 22.4745 21.4453 19.0838 21.4453C15.6931 21.4453 12.9444 23.9441 12.9444 27.0264C12.9444 28.0421 13.2434 28.9959 13.7661 29.8173L14.7323 29.3092C14.3932 28.7764 14.1692 28.1754 14.0912 27.5338H24.0764Z"
                                                    fill="#3D8AA9" />
                                                <path
                                                    d="M20.7584 27.0264C20.7584 27.867 20.0088 28.5485 19.084 28.5485C18.1592 28.5485 17.4096 27.867 17.4096 27.0264C17.4096 26.1857 18.1592 25.5043 19.084 25.5043C20.0088 25.5043 20.7584 26.1857 20.7584 27.0264Z"
                                                    fill="#3D8AA9" />
                                                <path
                                                    d="M23.3171 25.4256C23.1576 24.8843 23.511 24.3279 24.1064 24.1828L25.1847 23.9202C25.7802 23.7751 26.3923 24.0964 26.5518 24.6377L27.1297 26.5981C27.2892 27.1394 26.9358 27.6958 26.3403 27.8409L25.2621 28.1035C24.6666 28.2485 24.0545 27.9273 23.895 27.386L23.3171 25.4256Z"
                                                    fill="#3D8AA9" />
                                                <path
                                                    d="M11.6161 24.6372C11.7757 24.0959 12.3878 23.7747 12.9833 23.9197L14.0615 24.1824C14.657 24.3274 15.0104 24.8838 14.8508 25.4251L14.273 27.3855C14.1134 27.9268 13.5013 28.248 12.9059 28.103L11.8277 27.8404C11.2321 27.6953 10.8787 27.1389 11.0383 26.5976L11.6161 24.6372Z"
                                                    fill="#3D8AA9" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.0608 15.3568V13.8347H15.1771V15.3568C15.1771 17.3183 16.9262 18.9084 19.084 18.9084C21.2417 18.9084 22.9909 17.3183 22.9909 15.3568V13.8347H24.1071V15.3568C24.1071 17.8788 21.8582 19.9232 19.084 19.9232C16.3097 19.9232 14.0608 17.8788 14.0608 15.3568Z"
                                                    fill="#3D8AA9" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.3877 12.3127H24.8043C24.8445 12.2195 24.8878 12.1098 24.9309 11.9842L24.9377 11.9645C25.0882 11.5265 25.2233 11.1335 25.2233 10.3323C25.2233 9.92596 24.9329 9.58384 24.5485 9.31332C24.159 9.03924 23.6271 8.80458 23.0347 8.61331C21.8482 8.23026 20.3518 8 19.0838 8C17.8158 8 16.3195 8.23026 15.133 8.61331C14.5405 8.80458 14.0086 9.03924 13.6192 9.31332C13.2348 9.58384 12.9444 9.92596 12.9444 10.3323C12.9444 11.0761 13.0813 11.4681 13.2218 11.871C13.235 11.9085 13.2481 11.9461 13.2611 11.9841C13.3043 12.1098 13.3476 12.2195 13.3877 12.3127V12.3127ZM16.8513 10.7905C16.8513 10.5103 17.1012 10.2832 17.4094 10.2832H20.7582C21.0665 10.2832 21.3164 10.5103 21.3164 10.7905C21.3164 11.0707 21.0665 11.2979 20.7582 11.2979H17.4094C17.1012 11.2979 16.8513 11.0707 16.8513 10.7905Z"
                                                    fill="#3D8AA9" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.5146 13.5357C13.5399 13.4151 13.6614 13.3274 13.8032 13.3274H24.3646C24.5064 13.3274 24.6279 13.4151 24.6533 13.5357L24.6534 13.5363L24.6536 13.5369L24.6538 13.5384L24.6545 13.5419L24.6561 13.5511C24.6573 13.5582 24.6586 13.5674 24.6599 13.5784C24.6625 13.6005 24.6648 13.6301 24.6652 13.6662C24.6658 13.7384 24.6585 13.8372 24.6284 13.9535C24.5676 14.1887 24.4159 14.4876 24.0685 14.7782C23.3797 15.3541 21.9645 15.8642 19.0839 15.8642C16.2033 15.8642 14.7882 15.3541 14.0994 14.7782C13.7519 14.4876 13.6002 14.1887 13.5394 13.9535C13.5093 13.8372 13.502 13.7384 13.5027 13.6662C13.503 13.6301 13.5053 13.6005 13.5079 13.5784C13.5092 13.5674 13.5105 13.5582 13.5117 13.5511L13.5133 13.5419L13.514 13.5384L13.5143 13.5369L13.5144 13.5363L13.5146 13.5357Z"
                                                    fill="#3D8AA9" />
                                            </svg>
                                        </span>
                                        <span class="col d-flex flex-column overflow-hidden">
                                            <span class="vasilitas-item">Pengemudi 1</span>
                                            <span>{{ $daftarBus->supirSatu }}</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Pengemudi 2 -->
                                <div class="col-6 mt-2 ">
                                    <div class="row align-items-center">
                                        <span class="col-3  d-flex flex-column align-items-center">
                                            <svg width="35" height="35" viewBox="0 0 38 38" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="19" cy="19" r="19" fill="#C3DBE4" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.0913 26.519H18.5257V22.4879C16.1974 22.7219 14.3487 24.4025 14.0913 26.519ZM19.642 22.4879V26.519H24.0764C23.819 24.4025 21.9703 22.7219 19.642 22.4879V22.4879ZM24.0764 27.5338C23.9984 28.1754 23.7744 28.7764 23.4353 29.3092L24.4016 29.8173C24.9243 28.9959 25.2233 28.0421 25.2233 27.0264C25.2233 23.9441 22.4745 21.4453 19.0838 21.4453C15.6931 21.4453 12.9444 23.9441 12.9444 27.0264C12.9444 28.0421 13.2434 28.9959 13.7661 29.8173L14.7323 29.3092C14.3932 28.7764 14.1692 28.1754 14.0912 27.5338H24.0764Z"
                                                    fill="#3D8AA9" />
                                                <path
                                                    d="M20.7584 27.0264C20.7584 27.867 20.0088 28.5485 19.084 28.5485C18.1592 28.5485 17.4096 27.867 17.4096 27.0264C17.4096 26.1857 18.1592 25.5043 19.084 25.5043C20.0088 25.5043 20.7584 26.1857 20.7584 27.0264Z"
                                                    fill="#3D8AA9" />
                                                <path
                                                    d="M23.3171 25.4256C23.1576 24.8843 23.511 24.3279 24.1064 24.1828L25.1847 23.9202C25.7802 23.7751 26.3923 24.0964 26.5518 24.6377L27.1297 26.5981C27.2892 27.1394 26.9358 27.6958 26.3403 27.8409L25.2621 28.1035C24.6666 28.2485 24.0545 27.9273 23.895 27.386L23.3171 25.4256Z"
                                                    fill="#3D8AA9" />
                                                <path
                                                    d="M11.6161 24.6372C11.7757 24.0959 12.3878 23.7747 12.9833 23.9197L14.0615 24.1824C14.657 24.3274 15.0104 24.8838 14.8508 25.4251L14.273 27.3855C14.1134 27.9268 13.5013 28.248 12.9059 28.103L11.8277 27.8404C11.2321 27.6953 10.8787 27.1389 11.0383 26.5976L11.6161 24.6372Z"
                                                    fill="#3D8AA9" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.0608 15.3568V13.8347H15.1771V15.3568C15.1771 17.3183 16.9262 18.9084 19.084 18.9084C21.2417 18.9084 22.9909 17.3183 22.9909 15.3568V13.8347H24.1071V15.3568C24.1071 17.8788 21.8582 19.9232 19.084 19.9232C16.3097 19.9232 14.0608 17.8788 14.0608 15.3568Z"
                                                    fill="#3D8AA9" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.3877 12.3127H24.8043C24.8445 12.2195 24.8878 12.1098 24.9309 11.9842L24.9377 11.9645C25.0882 11.5265 25.2233 11.1335 25.2233 10.3323C25.2233 9.92596 24.9329 9.58384 24.5485 9.31332C24.159 9.03924 23.6271 8.80458 23.0347 8.61331C21.8482 8.23026 20.3518 8 19.0838 8C17.8158 8 16.3195 8.23026 15.133 8.61331C14.5405 8.80458 14.0086 9.03924 13.6192 9.31332C13.2348 9.58384 12.9444 9.92596 12.9444 10.3323C12.9444 11.0761 13.0813 11.4681 13.2218 11.871C13.235 11.9085 13.2481 11.9461 13.2611 11.9841C13.3043 12.1098 13.3476 12.2195 13.3877 12.3127V12.3127ZM16.8513 10.7905C16.8513 10.5103 17.1012 10.2832 17.4094 10.2832H20.7582C21.0665 10.2832 21.3164 10.5103 21.3164 10.7905C21.3164 11.0707 21.0665 11.2979 20.7582 11.2979H17.4094C17.1012 11.2979 16.8513 11.0707 16.8513 10.7905Z"
                                                    fill="#3D8AA9" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M13.5146 13.5357C13.5399 13.4151 13.6614 13.3274 13.8032 13.3274H24.3646C24.5064 13.3274 24.6279 13.4151 24.6533 13.5357L24.6534 13.5363L24.6536 13.5369L24.6538 13.5384L24.6545 13.5419L24.6561 13.5511C24.6573 13.5582 24.6586 13.5674 24.6599 13.5784C24.6625 13.6005 24.6648 13.6301 24.6652 13.6662C24.6658 13.7384 24.6585 13.8372 24.6284 13.9535C24.5676 14.1887 24.4159 14.4876 24.0685 14.7782C23.3797 15.3541 21.9645 15.8642 19.0839 15.8642C16.2033 15.8642 14.7882 15.3541 14.0994 14.7782C13.7519 14.4876 13.6002 14.1887 13.5394 13.9535C13.5093 13.8372 13.502 13.7384 13.5027 13.6662C13.503 13.6301 13.5053 13.6005 13.5079 13.5784C13.5092 13.5674 13.5105 13.5582 13.5117 13.5511L13.5133 13.5419L13.514 13.5384L13.5143 13.5369L13.5144 13.5363L13.5146 13.5357Z"
                                                    fill="#3D8AA9" />
                                            </svg>
                                        </span>
                                        <span class="col d-flex flex-column overflow-hidden">
                                            <span class="vasilitas-item">Pengemudi 2</span>
                                            <span>{{ $daftarBus->supirDua }}</span>
                                        </span>
                                    </div>
                                </div>
                                <a href="" class="btn bg-button-prymary text-white col-12 mt-3 mb-1"
                                    data-bs-toggle="modal" data-bs-target="#sewa-{{ $daftarBus->idBus }}">Sewa</a>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="sewa-{{ $daftarBus->idBus }}" data-bs-backdrop="static"
                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body row justify-content-center px-5">
                                        @guest
                                            <h3 class="col-lg-11 offset-lg-1 mt-3">Maaf Anda Harus Login</h3>
                                            <button type="button"
                                                class="btn btn-secondary "data-bs-dismiss="modal">Oke</button>
                                        @endguest
                                        @auth
                                            <h3 class="col-lg-11 offset-lg-1 mt-3">Penyewaan</h3>
                                            <form action="{{ route('sewa') }}" method="post" enctype="multipart/form-data"
                                                class="px-5 col-10  mt-2 border-0">
                                                @csrf
                                                <div class="row justify-content-center">
                                                    <input type="hidden" name="idBus" value="{{ $daftarBus->idBus }}">
                                                    <input type="hidden" name="idAkun" value="{{ Auth::user()->idAkun }}"
                                                        id="">
                                                    <label for="lokasi-penjemputan"
                                                        class="label-daftar form-control border-0 text-capitalize">lokasi
                                                        penjemputan</label>
                                                    <select class="form-select form-control rounded-3" autocomplete="off"
                                                        required id="lokasi-penjemputan" name="lokasiPenjemputan">
                                                        <option value="Pekanbaru">Pekanbaru</option>
                                                        <option value="Bengkinang">Bengkinang</option>
                                                    </select>
                                                    <label for="alamat-lengkap"
                                                        class="label-daftar form-control border-0 text-capitalize mt-1">alamat
                                                        lengkap</label>
                                                    <input type="text" name="alamatPenjemputan" id="alamat-lengkap"
                                                        class="form-control rounded-3" placeholder="Masukan Alamat Lengkap"
                                                        autocomplete="off" required>
                                                    <label for="lokasiTujuan"
                                                        class="label-daftar form-control border-0 text-capitalize mt-1">lokasi
                                                        tujuan</label>
                                                    <input type="text" name="lokasiTujuan" id="lokasiTujuan"
                                                        class="form-control rounded-3" placeholder="Masukan Lokasi Tujuan"
                                                        autocomplete="off" required>
                                                    <label for="tanggalKeberangkatan"
                                                        class="label-daftar form-control border-0 text-capitalize mt-1">tanggal
                                                        Keberangkatan</label>
                                                    <input type="date" name="tanggalPergiSewa" id="tanggalKeberangkatan"
                                                        class="form-control rounded-3"
                                                        placeholder="Masukan Tanggal Keberangkatan" autocomplete="off"
                                                        required>
                                                    <label for="jumlahHariPenyewaan"
                                                        class="label-daftar form-control border-0 text-capitalize mt-1">jumlah
                                                        Hari Penyewaan</label>
                                                    <input type="number" name="jumlahHariPenyewaan" id="jumlahHariPenyewaan"
                                                        class="form-control rounded-3"
                                                        placeholder="Masukan Jumlah Hari Penyewaan" autocomplete="off"
                                                        required>
                                                    <button type="button" class="btn text-white my-3 rounded-3"
                                                        style="background: #3D8AA9;" onclick="jumlah();">Kalkulasi
                                                        Biaya</button>
                                                    <div class="modal-body row justify-content-center ">
                                                        <img src="img/rekening.png" alt="" class="img-fluid col-8">
                                                        <p class="fw-bold text-center">Total Biaya Yang Harus Dibayarkan</p>
                                                        <input type="hidden" id="harga" class="fw-bold text-center"
                                                            value="{{ $daftarBus->hargaSewa }}">
                                                        </input>
                                                        <input type="" name="totalHarga" readonly
                                                            id="hasilAkir"class="fw-bold form-control text-center"
                                                            value="Slahkan isi jumlah hari penyewaan lalu klik button kalkulasi"></input>
                                                        <p class="fw-bold text-center " id="terget">Minimal DP yang harus
                                                            dibayarkan : <br>
                                                            RP. <input type="number"
                                                                class="border-top-0 fw-bold border-bottom-0 border-start-0 border-end-0"
                                                                name="" id="dp" readonly="readonly">
                                                        </p>
                                                        <label for="nominal" class="">Nominal Yang Dibayarkan</label>
                                                        <input type="number" name="nominalBayar" id="nominal"
                                                            class=" rounded-3 border p-2 ">
                                                        <input type="hidden" name="sisaBayar" id="sisaBayar"
                                                            class="col-8 rounded-3 border p-2 " value="1">
                                                        <input type="hidden" name="statusBayar" id="statusBayar"
                                                            class="col-8 rounded-3 border p-2 " value="Belum lunas">
                                                        <input type="hidden" name="statusSewa" id="statusSewa"
                                                            class="col-8 rounded-3 border p-2 " value="Diproses">
                                                        <label for="formFile" class="">Bukti Pembayaran</label>
                                                        <input class=" form-control" type="file" name="buktiBayar"
                                                            id="formFile" value="">
                                                    </div>
                                                    <div class="d-flex justify-content-between m-0 p-0 mt-3 border-0">
                                                        <button type="button" class="btn btn-secondary "
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn text-white"
                                                            style="background: #3D8AA9;" data-bs-toggle="modal">Sewa</button>
                                                    </div>
                                                </div>
                                            </form>
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- footer -->
              <footer class="row justify-content-center border pt-5" id="tentang-kami" style="background-color:#1B3E4C;">
                <div class="col-lg-4 col-md-5 col-10 pt-2">
                    <h3 class="text-white">Rental Bus Balenong</h3>
                    <p class="text-white">
                        Rental bus Balenong Hadir utuk mempermudah perjalanan anda dengan layanan yang kami sediakan!!!
                    </p>
                </div>
                <div class="col-lg-3 col-md-5 col-10 pt-2 offset-lg-3">
                    <a href="" class="nav-link d-flex p-0">
                        <span><svg width="18" height="20" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 10C9.61875 10 10.1486 9.804 10.5896 9.412C11.0299 9.02067 11.25 8.55 11.25 8C11.25 7.45 11.0299 6.979 10.5896 6.587C10.1486 6.19567 9.61875 6 9 6C8.38125 6 7.85175 6.19567 7.4115 6.587C6.9705 6.979 6.75 7.45 6.75 8C6.75 8.55 6.9705 9.02067 7.4115 9.412C7.85175 9.804 8.38125 10 9 10ZM9 17.35C11.2875 15.4833 12.9844 13.7873 14.0906 12.262C15.1969 10.7373 15.75 9.38333 15.75 8.2C15.75 6.38333 15.0982 4.89567 13.7947 3.737C12.492 2.579 10.8938 2 9 2C7.10625 2 5.50763 2.579 4.20412 3.737C2.90138 4.89567 2.25 6.38333 2.25 8.2C2.25 9.38333 2.80312 10.7373 3.90937 12.262C5.01562 13.7873 6.7125 15.4833 9 17.35ZM9 20C5.98125 17.7167 3.72675 15.5957 2.2365 13.637C0.7455 11.679 0 9.86667 0 8.2C0 5.7 0.904875 3.70833 2.71463 2.225C4.52363 0.741667 6.61875 0 9 0C11.3812 0 13.4764 0.741667 15.2854 2.225C17.0951 3.70833 18 5.7 18 8.2C18 9.86667 17.2549 11.679 15.7646 13.637C14.2736 15.5957 12.0188 17.7167 9 20Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <p class="text-white ms-3 fw-semibold">
                            Jl. Bangkinang - Payakumbuh No.15
                            28554, Kuok, Riau
                        </p>
                    </a>
                    <a href="" class="nav-link d-flex p-0">
                        <span>
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2 18C1.45 18 0.979333 17.8043 0.588 17.413C0.196 17.021 0 16.55 0 16V4C0 3.45 0.196 2.97933 0.588 2.588C0.979333 2.196 1.45 2 2 2H12.1C12.0333 2.33333 12 2.66667 12 3C12 3.33333 12.0333 3.66667 12.1 4H2L10 9L13.65 6.725C13.8833 6.94167 14.1377 7.129 14.413 7.287C14.6877 7.44567 14.975 7.58333 15.275 7.7L10 11L2 6V16H18V7.9C18.3833 7.81667 18.7417 7.7 19.075 7.55C19.4083 7.4 19.7167 7.21667 20 7V16C20 16.55 19.8043 17.021 19.413 17.413C19.021 17.8043 18.55 18 18 18H2ZM2 4V16V4ZM17 6C16.1667 6 15.4583 5.70833 14.875 5.125C14.2917 4.54167 14 3.83333 14 3C14 2.16667 14.2917 1.45833 14.875 0.875C15.4583 0.291667 16.1667 0 17 0C17.8333 0 18.5417 0.291667 19.125 0.875C19.7083 1.45833 20 2.16667 20 3C20 3.83333 19.7083 4.54167 19.125 5.125C18.5417 5.70833 17.8333 6 17 6Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <p class="text-white ms-3 fw-semibold">
                            busbalenong@gmail.com
                        </p>
                    </a>
                    <a href="" class="nav-link d-flex p-0">
                        <span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_602_1939)">
                                    <path
                                        d="M0.0835938 9.87721C0.0830469 11.6181 0.541406 13.3175 1.41281 14.8155L0 19.9339L5.27898 18.5605C6.73352 19.3474 8.37117 19.7622 10.0376 19.7629H10.0419C15.53 19.7629 19.9977 15.3312 20 9.88512C20.0009 7.24574 18.9659 4.7638 17.0859 2.89674C15.2057 1.02992 12.7057 0.00108527 10.0419 0C4.55281 0 0.0858594 4.43101 0.0836719 9.87721H0.0835938ZM3.22734 14.5575L3.03023 14.2471C2.20164 12.9398 1.7643 11.4291 1.76492 9.87783C1.76672 5.35109 5.47953 1.66822 10.045 1.66822C12.2559 1.66915 14.3337 2.52434 15.8966 4.07597C17.4593 5.62775 18.3192 7.69054 18.3187 9.8845C18.3166 14.4112 14.6037 18.0946 10.0419 18.0946H10.0386C8.5532 18.0938 7.09641 17.698 5.82594 16.95L5.52359 16.7721L2.39094 17.5871L3.22734 14.5574V14.5575Z"
                                        fill="url(#paint0_linear_602_1939)" />
                                    <path
                                        d="M7.55297 5.74789C7.36656 5.3368 7.17039 5.32851 6.99312 5.3213C6.84797 5.31509 6.68203 5.31556 6.51625 5.31556C6.35031 5.31556 6.0807 5.3775 5.85281 5.6244C5.62468 5.87153 4.98187 6.46874 4.98187 7.68339C4.98187 8.89812 5.87351 10.072 5.99781 10.2369C6.12226 10.4015 7.71914 12.9739 10.2482 13.9635C12.3501 14.7859 12.7778 14.6223 13.234 14.5811C13.6902 14.54 14.7062 13.984 14.9134 13.4075C15.1209 12.8311 15.1209 12.337 15.0587 12.2337C14.9965 12.1308 14.8305 12.069 14.5817 11.9456C14.3328 11.8221 13.1095 11.2249 12.8815 11.1425C12.6534 11.0601 12.4875 11.019 12.3216 11.2663C12.1556 11.5131 11.6791 12.069 11.5339 12.2337C11.3888 12.3987 11.2436 12.4193 10.9948 12.2958C10.7459 12.1719 9.94453 11.9115 8.99383 11.0705C8.25414 10.4161 7.75476 9.60796 7.60961 9.36075C7.46445 9.11393 7.59406 8.98013 7.71883 8.85711C7.83062 8.74649 7.96773 8.56882 8.09226 8.42471C8.21633 8.28052 8.25773 8.17765 8.3407 8.013C8.42375 7.8482 8.38219 7.70401 8.32008 7.58052C8.25773 7.45703 7.77422 6.2361 7.55297 5.74796"
                                        fill="white" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_602_1939" x1="10" y1="19.9339"
                                        x2="10" y2="0" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F9F9F9" />
                                        <stop offset="1" stop-color="white" />
                                    </linearGradient>
                                    <clipPath id="clip0_602_1939">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <p class="text-white ms-3 fw-semibold">
                            0822-8865-1218
                        </p>
                    </a>
                </div>
                <div class="border col-lg-10 col-10 bg-white mt-lg-5 mt-md-4 mt-3"></div>
                <div class="copyright col-lg-10 col-10 my-lg-4 my-md-3 my-3">
                    <p class="text-white text-end me-4">&copy Copyright 2022 - Designed by Balenong 2022</p>
                </div>
            </footer>
        </div>


    @endsection

