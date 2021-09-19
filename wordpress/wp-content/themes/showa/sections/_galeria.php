<section class="galeria">
  <div class="container">
    <h2>
      <?php the_field('titulo_galeria'); ?>
    </h2>

    <div class="slideGaleria">
      <ul class="nav nav-tabs" id="tabGallery" role="tablist">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#areascomuns" type="button" role="tab" aria-controls="areascomuns" aria-selected="true">
            Áreas comuns
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#privativa" type="button" role="tab" aria-controls="privativa" aria-selected="false">
            Área privativa
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#plantas" type="button" role="tab" aria-controls="plantas" aria-selected="false">
            Plantas
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#localizacao" type="button" role="tab" aria-controls="localizacao" aria-selected="false">
            Localização
          </button>
        </li>
      </ul>

      <div class="tab-content" id="tabGalleryContent">
        <div class="tab-pane fade show active" id="areascomuns" role="tabpanel" aria-labelledby="areascomuns-tab">
          <div class="slider_galeria galeria_areascomuns">
            <?php for ($i = 1; $i <= 14; $i++) { ?>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-1.jpg" alt="" class="img-fluid">
              </div>
            <?php } ?>
          </div>

          <div class="slider-nav nav_areascomuns">
            <?php for ($i = 1; $i <= 14; $i++) { ?>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-1.jpg" alt="" class="img-fluid">
              </div>
            <?php } ?>
          </div>
        </div>

        <div class="tab-pane fade" id="privativa" role="tabpanel" aria-labelledby="privativa-tab">
          <div class="slider_galeria galeria_privativa">
            <?php for ($i = 1; $i <= 14; $i++) { ?>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-1.jpg" alt="" class="img-fluid">
              </div>
            <?php } ?>
          </div>

          <div class="slider-nav nav_privativa">
            <?php for ($i = 1; $i <= 14; $i++) { ?>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-1.jpg" alt="" class="img-fluid">
              </div>
            <?php } ?>
          </div>
        </div>

        <div class="tab-pane fade" id="plantas" role="tabpanel" aria-labelledby="plantas-tab">
          <div class="slider_galeria galeria_plantas">
            <?php for ($i = 1; $i <= 14; $i++) { ?>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-1.jpg" alt="" class="img-fluid">
              </div>
            <?php } ?>
          </div>

          <div class="slider-nav nav_plantas">
            <?php for ($i = 1; $i <= 14; $i++) { ?>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-1.jpg" alt="" class="img-fluid">
              </div>
            <?php } ?>
          </div>
        </div>

        <div class="tab-pane fade" id="localizacao" role="tabpanel" aria-labelledby="localizacao-tab">
          <div class="slider_galeria galeria_localizacao">
            <?php for ($i = 1; $i <= 14; $i++) { ?>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-1.jpg" alt="" class="img-fluid">
              </div>
            <?php } ?>
          </div>

          <div class="slider-nav nav_localizacao">
            <?php for ($i = 1; $i <= 14; $i++) { ?>
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slide-1.jpg" alt="" class="img-fluid">
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>