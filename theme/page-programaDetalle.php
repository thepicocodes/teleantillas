<?php

/**
 *
 * Template Name: ProgramaDetalle Page
 *
 * @package teleantillas
 */
get_header();
?>

<div class="w-full max-w-[1350px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] gap-y-5 gap-x-5 justify-items-center mt-8 mx-auto px-5">
  <div class="xl:max-w-40 order-1 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <div class="xl:max-w-40 order-3 mb-5 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="mb-5 hidden h-40 w-full bg-[#F1F3F7] p-3 md:block xl:h-[274px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>

    <section class="shadow-md rounded-lg border grid lg:grid-cols-[500px_1fr] gap-6 p-6">
      <div class="rounded-lg bg-[#89BFFF] h-[300px]"></div>
      <div>
        <h5 class="text-xl-b lg:text-h5 text-lightBlue-900">Telenoticias estelar</h5>
        <p class="mt-2 text-m">
          Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por La Nota
          Diferente 95.7FM y para Estados Unidos por TV QUISQUEY
        </p>
        <div class="mt-4">
          <span class="text-m-b text-lightBlue-900">Presentado por:</span>
          <div class="mt-2 flex flex-row gap-2">
            <span class="rounded-lg py-1 px-2 text-s-b text-white bg-yellow-YellowTeleantillas">Roberto Cavada</span>
          </div>
        </div>
      </div>
    </section>

    <!-- add banner -->
    <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mt-10">
      <div class="flex flex-row items-center justify-between">
        <h5 class="text-h5 md:text-h5 text-blue-telesistema">Lista de episodios</h5>
        <div class="px-2.5 lg:px-0">
          <div class="relative">
            <input type="search" placeholder="¿Qué andas buscando?" class="border border-gray-1000 rounded-lg w-full md:w-[320px] px-3.5 py-3.5 placeholder:text-gray-200 text-s outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" id="search-icon" class="absolute top-2/4 right-3.5 -translate-y-2/4 h-4 fill-blue-900" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="mt-4 grid grid-cols-1 md:grid-cols-[1fr_320px] gap-6">
        <div class="flex flex-col gap-y-6">

          <a href="#" class="rounded-lg border border-blue-100">
            <div class="grid md:grid-cols-[300px_1fr] gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px] h-[300px]">
              <div class="p-4 md:pl-0 flex flex-col justify-between">
                <div>
                  <h4 class="text-m-b text-blue-900">Episodio #53</h4>
                  <p class="mt-2 text-body">
                    Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                    La Nota Diferente 95.7FM y para Estados Unidos por TV
                    QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                    Angelo Mercedez . #RepublicaDominicana #Noticias
                  </p>
                </div>
                <div class="flex flex-row items-center gap-x-3.5">
                  <span class="rounded-full w-10 h-10 flex items-center justify-center bg-lightBlue-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                  <div class="text-xs">
                    14:51 - 08/04/2024
                  </div>
                </div>
              </div>
            </div>
          </a>

          <a href="#" class="rounded-lg border border-blue-100">
            <div class="grid md:grid-cols-[300px_1fr] gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px] h-[300px]">
              <div class="p-4 md:pl-0 flex flex-col justify-between">
                <div>
                  <h4 class="text-m-b text-blue-900">Episodio #53</h4>
                  <p class="mt-2 text-body">
                    Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                    La Nota Diferente 95.7FM y para Estados Unidos por TV
                    QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                    Angelo Mercedez . #RepublicaDominicana #Noticias
                  </p>
                </div>
                <div class="flex flex-row items-center gap-x-3.5">
                  <span class="rounded-full w-10 h-10 flex items-center justify-center bg-lightBlue-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                  <div class="text-xs">
                    14:51 - 08/04/2024
                  </div>
                </div>
              </div>
            </div>
          </a>

          <a href="#" class="rounded-lg border border-blue-100">
            <div class="grid md:grid-cols-[300px_1fr] gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px] h-[300px]">
              <div class="p-4 md:pl-0 flex flex-col justify-between">
                <div>
                  <h4 class="text-m-b text-blue-900">Episodio #53</h4>
                  <p class="mt-2 text-body">
                    Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                    La Nota Diferente 95.7FM y para Estados Unidos por TV
                    QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                    Angelo Mercedez . #RepublicaDominicana #Noticias
                  </p>
                </div>
                <div class="flex flex-row items-center gap-x-3.5">
                  <span class="rounded-full w-10 h-10 flex items-center justify-center bg-lightBlue-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                  <div class="text-xs">
                    14:51 - 08/04/2024
                  </div>
                </div>
              </div>
            </div>
          </a>

          <a href="#" class="rounded-lg border border-blue-100">
            <div class="grid md:grid-cols-[300px_1fr] gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px] h-[300px]">
              <div class="p-4 md:pl-0 flex flex-col justify-between">
                <div>
                  <h4 class="text-m-b text-blue-900">Episodio #53</h4>
                  <p class="mt-2 text-body">
                    Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                    La Nota Diferente 95.7FM y para Estados Unidos por TV
                    QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                    Angelo Mercedez . #RepublicaDominicana #Noticias
                  </p>
                </div>
                <div class="flex flex-row items-center gap-x-3.5">
                  <span class="rounded-full w-10 h-10 flex items-center justify-center bg-lightBlue-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                  <div class="text-xs">
                    14:51 - 08/04/2024
                  </div>
                </div>
              </div>
            </div>
          </a>
          <div class="flex justify-center">
            <button class="rounded-lg mt-10 p-4 flex flex-row items-center justify-center gap-x-2 text-body-b lg:text-xl-b text-white bg-blue-telesistema">
              Cargar más
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 lg:h-5 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
              </svg>
            </button>
          </div>
        </div>

        <div>
          <div class="rounded-lg w-full h-[300px] py-3 px-2.5 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>
          <div class="rounded-lg w-full h-[150px] lg:h-[600px] mt-5 bg-[#D6CCFF]"></div>

          <div class="mt-4">
            <h3 class="text-m-b text-blue-900">Siguenos</h3>
            <ul class="mt-2 flex flex-wrap items-center gap-5">
              <li>
                <a href="" class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-50" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-50" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </section>


    <!-- ad -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mt-10">
      <h5 class="text-xl lg:text-h5 text-blue-telesistema">Otros Programas</h5>
      <div class="mt-10 grid md:grid-cols-3 gap-y-10 gap-x-5 justify-center md:justify-start">
        <a href="#" class="group relative block w-full h-full bg-white">
          <article class="relative w-full h-[480px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <h5 class="text-m-b">Freites & su gente</h5>
              <p class="mt-1 text-body">Entrevistamos a Stéphane Chaumet, autor de 'Sur les chemins perdus'.</p>
              <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1">
                Ver contenido
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
              </div>
            </div>
          </article>
        </a>
        <a href="#" class="group relative block w-full h-full bg-white">
          <article class="relative w-full h-[480px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <h5 class="text-m-b">Freites & su gente</h5>
              <p class="mt-1 text-body">Entrevistamos a Stéphane Chaumet, autor de 'Sur les chemins perdus'.</p>
              <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1">
                Ver contenido
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
              </div>
            </div>
          </article>
        </a>
        <a href="#" class="group relative block w-full h-full bg-white">
          <article class="relative w-full h-[480px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <h5 class="text-m-b">Freites & su gente</h5>
              <p class="mt-1 text-body">Entrevistamos a Stéphane Chaumet, autor de 'Sur les chemins perdus'.</p>
              <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1">
                Ver contenido
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
              </div>
            </div>
          </article>
        </a>
      </div>
    </section>

    <!-- ad -->
    <div class="w-full max-w-[994px] h-[274px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-telesistema">Noticias</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-blue-50">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <div class="p-4">
                <span class="text-yellow-YellowTeleantillas text-xs-b">Farándula</span>
                <p class="text-body-b w-full text-blue-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
              </div>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>

          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <div class="p-4">
                <span class="text-yellow-YellowTeleantillas text-xs-b">Farándula</span>
                <p class="text-body-b w-full text-blue-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
              </div>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>
        </div>
        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-lightBlue-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <div class="p-4">
                <span class="text-yellow-YellowTeleantillas text-xs-b">Farándula</span>
                <p class="text-body-b w-full text-blue-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
              </div>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>

          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <div class="p-4">
                <span class="text-yellow-YellowTeleantillas text-xs-b">Farándula</span>
                <p class="text-body-b w-full text-blue-900">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
              </div>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <a href="#" class="relative block w-full h-full bg-white">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
              <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-lightBlue-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="rounded-lg w-full h-[300px] p-3 bg-[#F1F3F7]">
          <div class="w-full h-full bg-[#D6CCFF]"></div>
        </div>

        <a href="#" class="relative block w-full h-full bg-white">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
              <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-lightBlue-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>
      </div>
    </section>

  </div>
</div>

<?php
get_footer();
