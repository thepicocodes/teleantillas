<?php

/**
 *
 * Template Name: Home Page
 *
 * @package teleantillas
 */
get_header();
?>

<div
  class="w-full max-w-[1350px] grid grid-cols-1 xl:grid-cols-[160px_960px_160px] gap-y-5 gap-x-5 justify-items-center mt-8 mx-auto px-5">
  <div class="hidden xl:block order-1 w-full xl:max-w-40 h-40 xl:h-[600px] bg-[#D6CCFF]"></div>
  <div class="hidden xl:block order-3 w-full xl:max-w-40 h-40 xl:h-[600px] mb-5 bg-[#D6CCFF]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="w-full h-40 xl:h-[274px] mb-5 p-3 bg-[#F1F3F7]">
      <div  class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <!--  -->
    <section>
      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-x-8 gap-y-5">
        <a href="#" class="relative block w-full min-h-[300px] bg-white">
          <article class="rounded-lg relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt=""
              class="absolute top-0 left-0 w-full h-full ">
            <div
              class="rounded-lg h-full relative z-[1] p-5 lg:p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-m-b lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="flex flex-col gap-5">
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/coral-logo-lg.png" alt="" class="max-w-[300px] h-[140px]">
          </a>

          <a href=" /">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-900">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>

          <a href="/">
            <article
              class="rounded-md border w-full grid grid-cols-[1fr_120px] overflow-hidden min-h-[140px] max-h-[140px]">
              <p class="w-full p-4 text-body-b text-blue-900">Son una forma emocionante de poner a prueba el cuerpo y la
                mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt=""
                class="image w-[120px] h-[140px]">
            </article>
          </a>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10">
      <div>
        <div class="mb-4 flex items-center justify-between">
          <h3 class="lg:text-h5 text-blue-telesistema text-xl-b">Programación</h3>

        </div>
        <div class="mt-6 flex flex-row items-center gap-x-4 rounded-lg border-2 border-blue-200 bg-blue-100 p-4 text-blue-900">
          <div class="flex w-full flex-row items-center justify-between">
            <div class="flex flex-row items-center gap-4">
              <div class="block h-24 w-24 rounded-lg bg-blue-teleantillas">
                <!-- img -->
              </div>
              <div>
                <h4 class="text-body-b">Esto no tiene nombre</h4>
                <span class="font-normal">Locutor 1 y Locutor 2</span>
              </div>
            </div>
            <div class="mt-4 flex flex-col text-end">
              <span class="text-body-b">12:00 am - 1:00 pm</span>
            </div>
          </div>
        </div>
        <div class="mt-4 flex flex-row items-center gap-x-4 rounded-lg border-2 border-blue-200 bg-blue-100 p-4 text-blue-900">
          <div class="flex w-full flex-row items-center justify-between">
            <div class="flex flex-row items-center gap-4">
              <div class="block h-24 w-24 rounded-lg bg-blue-teleantillas">
                <!-- img -->
              </div>
              <div>
                <h4 class="text-body-b">La RepúblicaLa r</h4>
                <span class="font-normal">Locutor 1 y Locutor 2</span>
              </div>
            </div>
            <div class="mt-4 flex flex-col text-end">
              <span class="text-body-b">12:00 am - 1:00 pm</span>
            </div>
          </div>
        </div>
        <div class="mt-4 flex flex-row items-center gap-x-4 rounded-lg border-2 border-blue-200 bg-blue-100 p-4 text-blue-900">
          <div class="flex w-full flex-row items-center justify-between">
            <div class="flex flex-row items-center gap-4">
              <div class="block h-24 w-24 rounded-lg bg-blue-teleantillas">
                <!-- img -->
              </div>
              <div>
                <h4 class="text-body-b">Esto no tiene nombre</h4>
                <span class="font-normal">Locutor 1 y Locutor 2</span>
              </div>
            </div>
            <div class="mt-4 flex flex-col text-end">
              <span class="text-body-b">12:00 am - 1:00 pm</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Avances de novelas</h2>
          <a href="#" class="text-m-b flex items-center gap-x-2 text-yellow-YellowTeleantillas">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-yellow-YellowTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper swiper1">
            <div class="swiper-wrapper">
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>

              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>

              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>

              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
            </div>
          </div>

          <div class="absolute home-swiper-prev-1 rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next-1 rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>
    <!-- add -->

    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Episodios anteriores</h2>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper swiper2">
            <div class="swiper-wrapper">
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>

              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
            </div>
          </div>

          <div class="absolute home-swiper-prev-2 rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next-2 rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Información y opinión</h2>
          <a href="#" class="text-m-b flex items-center gap-x-2 text-yellow-YellowTeleantillas">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-yellow-YellowTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper swiper3">
            <div class="swiper-wrapper">
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>

              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
            </div>

          </div>

          <div class="absolute home-swiper-prev-3 rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next-3 rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Novelas</h2>
          <a href="#" class="text-m-b flex items-center gap-x-2 text-yellow-YellowTeleantillas">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-yellow-YellowTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper swiper4">
            <div class="swiper-wrapper">
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>

              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
            </div>

          </div>

          <div class="absolute home-swiper-prev-4 rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next-4 rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Películas</h2>
          <a href="#" class="text-m-b flex items-center gap-x-2 text-yellow-YellowTeleantillas">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-yellow-YellowTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper swiper5">
            <div class="swiper-wrapper">
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>

              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
              <article class="swiper-slide relative w-full bg-gradient-to-t from-overlay-100 to-overlay-0">
                <a href="#" class="relative block w-full h-[300px] bg-white">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
                  <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                    <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                  <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                    <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                    <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                    <div class="mt-2 text-xs text-lightBlue-100">
                      Victor Santana • 08/04/2024 14:51
                    </div>
                  </div>
                </a>
              </article>
            </div>

          </div>

          <div class="absolute home-swiper-prev-5 rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next-5 rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-teleantillas" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="flex items-center justify-between">
        <h5 class="mt-5 text-xl-b lg:text-h5 text-blue-telesistema">Noticias</h5>
        <a href="#" class="text-m-b flex items-center gap-x-2 text-yellow-YellowTeleantillas">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-yellow-YellowTeleantillas" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
      </div>

      <div class="mt-6 grid gap-x-5 gap-y-5 md:grid-cols-2 lg:grid-cols-3">
        <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
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
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>

        <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
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

      <div class="mt-6 grid gap-x-5 gap-y-5 md:grid-cols-2 lg:grid-cols-3">
        <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
          <a href="#" class="relative block w-full h-full bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
              <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </a>
        </article>

        <div class="h-[300px] w-full rounded-lg bg-[#F1F3F7] p-3">
          <div class="h-full w-full bg-[#D6CCFF]"></div>
        </div>

        <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
          <a href="#" class="relative block w-full h-full bg-white">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
              <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="rounded-[18px] w-fit py-1 px-2 inline bg-yellow-YellowTeleantillas text-blue-100 text-xs-b">Medios</div>
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </a>
        </article>
      </div>
    </section>

    <!-- add -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

  </div>
  <?php
  get_footer();
