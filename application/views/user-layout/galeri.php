    <!-- Galeri -->
    <br />
    <br />
    <br />
    <br />
    <br />

    <!-- Foto -->
    <section class="galeri" id="galeri">
      <div class="col-md-4 content">
        <center>
          <h3  style="color: #fff" data-aos="fade-down" data-aos-duration="1000">#DiIndonesiaAja</h3>
          <p style="color: #fff" data-aos="fade-right" data-aos-duration="1000">Yuk, Intip Eksotisme Nusantara yang tak ada tandingannya</p>
        </center>
      </div>
      <div class="col-md-4 content" data-aos="fade-left" data-aos-duration="1000">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <?php foreach ($galeri_header as $data_header) : ?>
            <div class="swiper-slide">
              <p class="position-absolute top-0 start-50 translate-middle pt-5 mt-4"><?=ucfirst($data_header->nama_galeri)?></p>
              <img class="img-fluid" src="<?=base_url('uploads/galeri/'.$data_header->foto_galeri)?>" alt="<?=ucfirst($data_header->nama_galeri)?>">
            </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </section>

    <section class="listGaleri" id="listGaleri">
      <h1 class="heading" data-aos="fade-down" data-aos-duration="1000">Destinasi Pilihan</h1>
      <div class="row">
        <?php foreach ($galeri_destinasi as $data_destinasi) : ?>
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img data-aos="flip-up" data-aos-delay="50" data-aos-duration="1000" src="<?=base_url('uploads/galeri/'.$data_destinasi->foto_galeri)?>" class="w-100 shadow-1-strong rounded mb-4"/>
        </div>
        <?php endforeach ?>
      </div>
    </section>

    <section class="listGaleri" id="listGaleri">
      <h1 class="heading" data-aos="fade-down" data-aos-duration="1000">Inspirasi Perjalanan</h1>
      <div class="row">
        <?php foreach ($galeri_inspirasi as $data_inspirasi) : ?>
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <img data-aos="flip-up" data-aos-delay="50" data-aos-duration="1000" src="<?=base_url('uploads/galeri/'.$data_inspirasi->foto_galeri)?>" class="w-100 shadow-1-strong rounded mb-4" />
        </div>
        <?php endforeach ?>
      </div>
    </section>

    <section class="servicePage">
      <h1 class="heading">Panduan Perjalanan</h1>
      <div class="box-container">
          <div class="row row-cols-1 row-cols-md-3 g-4 shadow-lg p-3 mb-5 bg-body rounded">
  
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url('')?>assets/user/images/kesehatan.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Smart Care</h5>
                    <p class="card-text">panduan protokol kesehatan pariwisata yang mengedepankan 
                      usaha terbaik dalam mewujudkan kebersihan, kesehatan, keselamatan, dan 
                      kelestarian lingkungan bersama di destinasi pariwisata Indonesia.
                    </p>
                  </div>
                </div>
              </div>
  
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url('')?>assets/user/images/pemerintah.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">E-Visa</h5>
                    <p class="card-text">Pastikan untuk mempelajari semua persyaratan keimigrasian 
                      yang harus dipenuhi sebelum mengunjungi Indonesia, termasuk e-paspor dan 
                      e-visa.</p>
                  </div>
                </div>
              </div>
  
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url('')?>assets/user/images/masyarakat.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Informasi Umum</h5>
                    <p class="card-text">Temukan semua yang perlu Smart People ketahui tentang 
                      cara menuju ke sini, peraturan apa yang harus diperhatikan, dan banyak hal 
                      penting lainnya dalam mengatur rencana perjalanan Sobat Pesona ke Indonesia.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>