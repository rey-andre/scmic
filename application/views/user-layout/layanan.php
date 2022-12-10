    <!-- Layanan -->
    <section class="container">
      <br /><br /><br />
      <h1 class="heading pb-3">Layanan Masyarakat</h1>


      <!-- Smart Government -->
      <div class="container kesehatan shadow">
        <h1 class="pt-3 ms-3">Smart Government</h1>
        <div class="row justify-content-start pb-3">
        <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="350">
            <?php if($this->session->userdata('email') == NULL) { ?>
              <a href="<?=site_url('login')?>">
                <div class="card kartu shadow m-md-3">
                  <img src="<?=base_url('')?>assets/user/images/layanan/cc.jpg" class="card-img-top mt-3" alt="command center" />
                  <div class="card-body">
                    </a>
                    <h3 class="text-center mt-3 ">Laporan Masyarakat</h3>
                  </div>
                </div>
            <?php } else { ?>
              <a href="<?=site_url('lapor')?>">
                <div class="card kartu shadow m-md-3">
                  <img src="<?=base_url('')?>assets/user/images/layanan/cc.jpg" class="card-img-top mt-3" alt="command center" />
                  <div class="card-body">
                    </a>
                    <h3 class="text-center mt-3">Laporan Masyarakat</h3>
                  </div>
                </div>
            <?php } ?>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50">
            <a href="https://www.bppkpd.com/layanan-aplikasi/e-planning/" target='_blank'>
              <div class="card kartu shadow m-md-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50">
                <img src="<?=base_url('')?>assets/user/images/layanan/devplan.png" class="card-img-top mt-3" alt="e-devplan" />
                <div class="card-body">
                  </a>
                  <h3 class="text-center mt-5">E-Planning</h3>
                </div>
              </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="150">
            <div class="card kartu shadow m-md-3">
              <img src="<?=base_url('')?>assets/user/images/layanan/simpeg.jpg" class="card-img-top mt-3" alt="simpeg" />
              <div class="card-body">
                <h3 class="text-center mt-5">SIMPEG</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">
            <a href="https://splp.layanan.go.id/devportal/apis" target='_blank'>
              <div class="card kartu shadow m-md-3">
                <img src="<?=base_url('')?>assets/user/images/layanan/splp.png" class="card-img-top mt-3 ms-1" alt="SPLP" />
                <div class="card-body">
                  </a>
                  <h3 class="text-center mt-5">SPLP</h3>
                </div>
              </div>
          </div>
          
          <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="450">
            <a href="https://perizinan.pu.go.id/portal/" target='_blank'>
              <div class="card kartu shadow m-md-3">
                <img src="<?=base_url('')?>assets/user/images/layanan/perizinan.jpg" class="card-img-top mt-3" alt="perizinan" />
                <div class="card-body">
                  </a>
                  <h3 class="text-center mt-5">Perizinan</h3>
                </div>
              </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="550">
            <a href="https://eppid.kominfo.go.id/" target='blank'>
              <div class="card kartu shadow m-md-3">
                <img src="<?=base_url('')?>assets/user/images/layanan/ppid.jpg" class="card-img-top mt-3" alt="ppid" />
                <div class="card-body">
                  </a>
                  <h3 class="text-center mt-5">PPID</h3>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Smart Health -->
    <div class="container kesehatan shadow">
      <h1 class="pt-3 ms-3">Smart Health</h1>
      <div class="row justify-content-start pb-3">
      <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="250">
          <a href="<?=site_url('covid19')?>">
            <div class="card kartu shadow m-md-3">
              <img src="<?=base_url('')?>assets/user/images/layanan/covid.png" class="card-img-top mt-3" alt="Covid" />
              <div class="card-body">
                </a>
                <h3 class="text-center mt-3">Informasi Covid-19</h3>
              </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50">
          <a href="https://covid19.go.id/id/vaksin-covid19" target='_blank'>
            <div class="card kartu shadow m-md-3">
              <img src="<?=base_url('')?>assets/user/images/layanan/vaccine.png" class="card-img-top mt-3" alt="Vaksinasi & Imunisasi" />
              <div class="card-body">
                </a>
                <h3 class="text-center mt-3">Vaksinasi & Imunisasi</h3>
              </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="150">
          <div class="card kartu shadow m-md-3">
            <img src="<?=base_url('')?>assets/user/images/layanan/hospital.png" class="card-img-top mt-3" alt="RSUD" />
            <div class="card-body">
              <h3 class="text-center mt-3">Informasi RSUD</h3>
            </div>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="350">
          <a href="https://temenin.kemkes.go.id/" target='_blank'>
            <div class="card kartu shadow m-md-3">
              <img src="<?=base_url('')?>assets/user/images/layanan/doctor.png" class="card-img-top mt-3" alt="teledoctor" />
              <div class="card-body">
                </a>
                <h3 class="text-center mt-5">Telemedicine</h3>
              </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="450">
          <a href="https://bpjs-kesehatan.go.id/bpjs/" target='_blank'>
            <div class="card kartu shadow m-md-3">
              <img src="<?=base_url('')?>assets/user/images/layanan/bpjs.png" class="card-img-top mt-3" alt="bpjs" />
              <div class="card-body">
                </a>
                <h3 class="text-center mt-5">BPJS</h3>
              </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="550">
          <a href="https://epuskesmas.id/" target='_blank'>
            <div class="card kartu shadow m-md-3">
              <img src="<?=base_url('')?>assets/user/images/layanan/puskesmas.png" class="card-img-top mt-3" alt="e-puskesmas" />
              <div class="card-body">
                </a>
                <h3 class="text-center mt-5">E-Puskesmas</h3>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>


  <br><br><br>
  <!-- Smart Education -->
  <div class="container kesehatan shadow">
    <h1 class="pt-3 ms-3">Smart Education</h1>
    <div class="row justify-content-start pb-3">
      <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50">
        <a href="https://beasiswa.kemdikbud.go.id/" target='_blank'>
          <div class="card kartu shadow m-md-3">
            <img src="<?=base_url('')?>assets/user/images/layanan/scholarship.png" class="card-img-top mt-3" alt="scholarship" />
            <div class="card-body">
              </a>
              <h3 class="text-center mt-5">Beasiswa</h3>
            </div>
          </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 mb-3" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="150">
        <a href="https://kampusmerdeka.kemdikbud.go.id/" target='_blank'>
          <div class="card kartu shadow m-md-3">
            <img src="<?=base_url('')?>assets/user/images/layanan/mbkm.jpg" class="card-img-top mt-5 mb-1" alt="MBKM" />
            <div class="card-body">
              </a>
              <h3 class="text-center mt-5 p-2">Kampus Merdeka</h3>
            </div>
          </div>
      </div>

    </div>
  </div>
</section>
<br><br><br>