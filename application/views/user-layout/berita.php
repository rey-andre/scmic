    <section class="berita" id="berita"> <br/> <br/>
        <div class="container">
			<div class="logo-wrapper d-flex align-items-center">
				<h1>
					Berita Indonesia
				</h1>
			</div>
		</div>

        <div class="container-fluid menu">
            <div class="container">
                <div class="d-flex menu-items">
                    <div class="<?php if($this->uri->segment(1) == "berita" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){echo 'active';}?>">
                        <a href="<?=site_url('berita')?>">Home</a>
                    </div>
                    <div class="<?php if($this->uri->segment(1) == "berita" && $this->uri->segment(2) == "kategori" && $this->uri->segment(3) == "health"){echo 'active';}?>">
                        <a href="<?=site_url('berita/kategori/health')?>">Health</a>
                    </div>
                    <!-- <div>
                        <a href="<?=site_url('berita/kategori')?>">Religion</a>
                    </div>
                    <div>
                        <a href="<?=site_url('berita/kategori')?>">Technology</a>
                    </div>
                    <div>
                        <a href="<?=site_url('berita/kategori')?>">Business</a>
                    </div>
                    <div>
                        <a href="<?=site_url('berita/kategori')?>">Politics</a>
                    </div>
                    <div>	
                        <a href="<?=site_url('berita/kategori')?>">Features</a>
                    </div>
                    <div>	
                        <a href="<?=site_url('berita/kategori')?>">Interviews</a>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="container section mt-4">
            <div class="section-title">
                <span><?=$title?></span>
            </div>
            <div class="row">
                <?php foreach ($berita->articles as $news) : ?>
                    <div class="col-sm-12 col-xs-12 col-md-4 col-lg-4 mb-3">
                        <div class="mb-2 image image-xs">
                            <img class="thumb" src="<?=$news->urlToImage?>" >
                        </div>
                        <a href="<?=$news->url?>" target="_blank">
                            <h5><?=$news->title?></h5>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    </section>