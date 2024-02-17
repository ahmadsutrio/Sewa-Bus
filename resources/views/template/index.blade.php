            {{-- @section('modal')
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-body row">
                                <img src="img/objekBus.png" class="col-lg-5 col-12" alt="">
                                <div class="col-lg-7 col-12">
                                    <div class="row">
                                        <h3 class="col-12 text-capitalize text-center my-3"></h3>
                                        <div class="col-12">
                                            <div class="row align-items-center px-3">
                                                <!-- Tempat duduk -->
                                                <div class="col-6">
                                                    <div class="row align-items-center">
                                                        <span
                                                            class="col-3 bg-vasilitas d-flex flex-column align-items-center py-2">
                                                            <svg width="20" height="23" viewBox="0 0 20 23"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M4.4875 3.87521C3.5125 2.99009 3.5125 1.54895 4.4875 0.663835C5.4625 -0.221278 7.05 -0.221278 8.025 0.663835C9 1.54895 9 2.99009 8.025 3.87521C7.0375 4.77167 5.4625 4.77167 4.4875 3.87521ZM2.5 15.8923V5.67947H0V15.8923C0 19.0243 2.8 21.5661 6.25 21.5661H13.75V19.2966H6.25C4.175 19.2966 2.5 17.776 2.5 15.8923ZM20 20.5108L13.6625 14.7576H9.375V10.5816C11.125 11.8866 13.875 13.0327 16.25 13.0327V10.5816C14.175 10.6043 11.7375 9.59439 10.4125 8.26673L8.6625 6.50785C8.425 6.26955 8.125 6.07664 7.8 5.94047C7.4375 5.7816 7.025 5.67947 6.6 5.67947H6.5625C5.0125 5.67947 3.75 6.82558 3.75 8.23268V14.7576C3.75 16.6413 5.425 18.1618 7.5 18.1618H13.8375L18.2125 22.1335L20 20.5108Z"
                                                                    fill="#3D8AA9" />
                                                            </svg>
                                                        </span>
                                                        <span class="col d-flex flex-column">
                                                            <span class="vasilitas-item">Tempat duduk</span>
                                                            <span>30</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Vasilitas -->
                                                <div class="col-6">
                                                    <div class="row align-items-center">
                                                        <span
                                                            class="col-3 bg-vasilitas d-flex flex-column align-items-center py-2">
                                                            <svg width="21" height="20" viewBox="0 0 21 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                        <span class="col d-flex flex-column">
                                                            <span class="vasilitas-item">Vasilitas</span>
                                                            <span>AC</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Pengemudi 1 -->
                                                <div class="col-6 mt-2">
                                                    <div class="row align-items-center">
                                                        <img src="../../../public/img/image-daftar.png" alt=""
                                                            class=" d-flex img-fluid rounded-circle border col-3 p-0 m-0"
                                                            alt="">
                                                        <span class="col d-flex flex-column">
                                                            <span class="vasilitas-item">Pengemudi 1</span>
                                                            <span>Nama</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- Pengemudi 2 -->
                                                <div class="col-6 mt-2">
                                                    <div class="row align-items-center">
                                                        <img src="../../../public/img/image-daftar.png" alt=""
                                                            class=" d-flex img-fluid rounded-circle border col-3 p-0 m-0"
                                                            alt="">
                                                        <span class="col d-flex flex-column">
                                                            <span class="vasilitas-item">Pengemudi 1</span>
                                                            <span>Nama</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <form action="pembayaran.php" method="post" class="px-5 col-12  mt-2 border-0">
                                        <label for="lokasi-penjemputan"
                                            class="label-daftar form-control border-0 text-capitalize">lokasi
                                            penjemputan</label>
                                        <select class="form-select form-control rounded-pill"
                                            aria-label="Default select example" autocomplete="off" required
                                            id="lokasi-penjemputan">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="alamat-lengkap"
                                            class="label-daftar form-control border-0 text-capitalize mt-1">alamat
                                            lengkap</label>
                                        <input type="text" name="" id="alamat-lengkap"
                                            class="form-control rounded-pill" placeholder="Masukan Alamat Lengkap"
                                            autocomplete="off" required>
                                        <label for="lokasiTujuan"
                                            class="label-daftar form-control border-0 text-capitalize mt-1">lokasi
                                            tujuan</label>
                                        <input type="text" name="" id="lokasiTujuan"
                                            class="form-control rounded-pill" placeholder="Masukan Lokasi Tujuan"
                                            autocomplete="off" required>
                                        <label for="tanggalKeberangkatan"
                                            class="label-daftar form-control border-0 text-capitalize mt-1">tanggal
                                            Keberangkatan</label>
                                        <input type="date" name="" id="lokasiTujuan"
                                            class="form-control rounded-pill" placeholder="Masukan Tanggal Keberangkatan"
                                            autocomplete="off" required>
                                        <label for="tanggalPulang"
                                            class="label-daftar form-control border-0 text-capitalize mt-1">tanggal
                                            Kepulangan</label>
                                        <input type="date" name="" id="lokasiTujuan"
                                            class="form-control rounded-pill" placeholder="Masukan Tanggal Kepulangan"
                                            autocomplete="off" required>

                                        <div class="d-flex justify-content-between m-0 p-0 mt-3 border-0">
                                            <button type="button" class="btn btn-secondary "
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Selanjutnya</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection --}}