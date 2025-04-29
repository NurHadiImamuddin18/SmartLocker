
     <?php
     include "header.php";
     ?>
     <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Welcome Back to Smart Locker Pegadaian,</h2>
                    <p class="mb-md-0"> Sistem penyimpanan pintar berbasis teknologi yang digunakan oleh PT Pegadaian (Persero) </p>
                    <p class="mb-md-0">untuk memberikan layanan mandiri kepada nasabah dalam menyimpan, mengambil, atau menebus barang gadai</p>
                  </div>
                  <div class="d-flex">
                    <img src="images/ty.png" alt="logo" style="height: 83px; margin-left: 150px;" class="d-none d-md-block">
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <ul class="nav nav-tabs px-4" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Profile Nasabah</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="sales" aria-selected="false">Lokasi Pegadaian</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab" aria-controls="purchases" aria-selected="false">Barang Pegadaian</a>
                    </li>
                  </ul>
                  <div class="tab-content py-0 px-0">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-account mr-3 icon-lg" style="color: #20a1ad;"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Nama</small>
                            <h5 class="mr-2 mb-0">Nur Hadi Imamuddin</h5>
                          </div>
                        </div>

                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-account-card-details mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">NIK</small>
                            <h5 class="mr-2 mb-0">2233783083294278</h5>
                          </div>
                        </div>
                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-contact-mail mr-3 icon-lg" style="color: #152453;"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Tempat, Tanggal Lahir</small>
                            <h5 class="mr-2 mb-0">Probolinggo, 18 Januari 2005</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-google-physical-web mr-3 icon-lg text-success"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Kode Pegadaian</small>
                            <h5 class="mr-2 mb-0">2233783</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-bank mr-3 icon-lg" style="color: #20a1ad;"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Alamat Pegadaian</small>
                            <h5 class="mr-2 mb-0">Mastrip, Sumbersari, Kabupaten Jember, Jawa Timur</h5>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">

                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-information-outline mr-3 icon-lg" style="color: #152453;"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Barang Yang di gadaikan</small>
                            <h5 class="mr-2 mb-0">9</h5>
                          </div>
                        </div>
                       

                        <div class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-checkbox-marked mr-3 icon-lg" style="color: #20a1ad;"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <small class="mb-1 text-muted">Barang yang sudah di ambil</small>
                            <h5 class="mr-2 mb-0">9</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Data Nasabah Pegadaian </p>
                  <div class="table-responsive">
                  <table id="example" class="display" style="width:100%">
                      <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Pegadaian</th>
                            <th>Lokasi Pegadaian</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Levelled up</td>
                            <td>Catalinaborough</td>
                            <td>$790</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
     <?php
     include "footer.php";
     ?>