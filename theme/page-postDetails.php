<?php

/**
 *
 * Template Name: Post Details Page
 *
 * @package teleantillas
 */
get_header();
?>

<div class="w-full max-w-[1354px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] justify-items-center gap-y-5 gap-x-5 mt-8 mx-auto px-5">
  <div class="xl:max-w-40 order-1 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <div class="xl:max-w-40 order-3 mb-5 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="mb-5 hidden h-40 w-full bg-[#F1F3F7] p-3 md:block xl:h-[274px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
    <div class="mt-8">
      <h5 class="text-xl-b lg:text-h5 text-yellow-YellowTeleantillas">Noticias</h5>
      <h1 class="text-xl-b md:text-h1 mt-1 text-gray-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h1>

      <div class="mt-2 text-p text-[#6A6A6A]">
        <p class="text-m ">
          Las autoridades de Palmira y la Policía Nacional llevan a
          cabo procedimientos especiales para el partido de este viernes
          en Palmaseca.
        </p>
      </div>
      <div class="border-t border-b border-[#E2E2E2] mt-2 py-4 px-0 md:px-4 flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="text-s text-[#8F8F8F]">
          Victor Santana • 08/04/2024 14:51
        </div>
        <div class="flex flex-row items-center gap-4">
          <span class="text-s md:text-body">compartir en:</span>
          <ul class="flex items-center gap-x-5">
            <li>
              <a href="" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-50" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="mt-10 grid md:grid-cols-[1fr_300px] gap-y-5 gap-x-8">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-14.png" alt="Post thumbnail" class="aspect-square w-full rounded-lg object-cover object-center">
          <p class="mt-8 text-body text-[#6A6A6A] leading-[24px]">
            En medio de distintas realidades, Deportivo Cali y América protagonizarán una nueva edición del clásico vallecaucano. El Verde, que atraviesa una crisis deportiva que lo complica con el descenso, recibe al equipo de César Farías, que por el contrario dejó atrás la mala racha y encadenó una serie de resultados positivos que lo tiene en la pelea por clasificar a cuadrangulares de la Liga BetPlay.
            <br> <br>
            El derbi se jugará este viernes 12 de abril desde las 8:15 p.m., en Palmaseca. A dos días del enfrentamiento, las autoridades inician un plan de procedimientos especiales para garantizar la seguridad, así lo dio a conocer José Alberto Ortiz, periodista de Caracol Radio, quien detalló las medidas adoptadas por el municipio de Palmira y la Policía Nacional de cara al clásico.
            <br> <br>
            Entre las acciones que se llevarán a cabo destacan las reuniones con los representantes de las diferentes barras para garantizar el buen desarrollo del partido. También se reforzará el dispositivo de seguridad en tribunas que han sido sancionadas recientemente por malos comportamientos.
            <br> <br>
            Por otro lado, Caracol Radio señaló que “la Policía anunció que está preparada con mil uniformados para el clásico de fútbol de este viernes 12 de abril, en el estadio Palmaseca en Palmira, entre el Deportivo Cali y el América, para garantizar a los asistentes una fiesta del fútbol en paz y sana convivencia”.
          </p>
        </div>

        <div>
          <h3 class="text-xl-b text-blue-telesistema">Más visto</h3>
          <div class="mt-5 grid grid-rows-3 grid-cols-1 gap-y-4">
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
            <!-- -->
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
            <!--  -->
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
          </div>
          <div class="rounded-lg w-full max-w-[752px] h-[600px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>
        </div>
      </div>

      <!-- grid row -->
      <div class="w-full mx-auto mt-10">
        <h5 class="text-h5 text-blue-telesistema">Noticias relacionadas</h5>

        <div class="mt-5 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
          <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>

            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
          </div>
          <!--  -->
          <div class="rounded-md w-full h-[300px] py-5 px-2.5 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>
          <!--  -->
          <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>

            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
          </div>
        </div>
      </div>
      <!-- Grid row -->
      <div class="w-full mx-auto mt-5">
        <div class="mt-5 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
          <!--  -->
          <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>

            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
          </div>
          <!--  -->
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
get_footer();
