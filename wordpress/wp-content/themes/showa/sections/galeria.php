<section class="galeria" id="empreendimento">
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
            Fachada
          </button>
        </li>
        <!-- 
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
        -->
      </ul>

      <div class="tab-content" id="tabGalleryContent">
        <div class="tab-pane fade show active" id="areascomuns" role="tabpanel" aria-labelledby="areascomuns-tab">
          <?php
            if( have_rows('fotos_areas_comuns') ) :
          ?>
            <div class="slider_galeria owl-carousel owl-theme galeria_areascomuns" id="galeriaAreasComuns">
              <?php
                while( have_rows('fotos_areas_comuns') ) : the_row();
              ?>
                <div class="item">
                  <img src="<?php the_sub_field('lista_fotos'); ?>" alt="" class="img-fluid">
                </div>
              <?php
                endwhile;
              ?>
            </div>
          <?php
            endif;
            reset_rows();
          ?>
        </div>

        <div class="tab-pane fade" id="privativa" role="tabpanel" aria-labelledby="privativa-tab">
          <?php
            if( have_rows('fotos_areas_privativa') ) :
          ?>
            <div class="slider_galeria owl-carousel owl-theme galeria_privativa" id="galeriaPrivativa">
              <?php
                while( have_rows('fotos_areas_privativa') ) : the_row();
              ?>
                <div class="item">
                  <img src="<?php the_sub_field('lista_fotos'); ?>" alt="" class="img-fluid">
                </div>
              <?php
                endwhile;
              ?>
            </div>
          <?php
            endif;
            reset_rows();
          ?>
        </div>

      </div>
    </div>
  </div>
</section>