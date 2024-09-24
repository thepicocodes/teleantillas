<?php

/**
 *
 * Template Name: Noticias Page
 *
 * @package teleantillas
 */
get_header();
?>

<div class="mx-auto mt-8 grid w-full max-w-[1360px] justify-items-center gap-x-5 gap-y-5 px-5 xl:grid-cols-[160px_1fr_160px]">
  <div class="xl:max-w-40 order-1 hidden h-40 w-full rounded-lg bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <div class="xl:max-w-40 order-3 mb-5 hidden h-40 w-full rounded-lg bg-[#D6CCFF] xl:block xl:h-[600px]"></div>

  <div class="order-2 w-full">
    <div class="mx-auto hidden h-[274px] w-full max-w-[994px] bg-[#F1F3F7] px-3 py-3 md:block">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>

    <!--  -->
    <section class="mx-auto mt-10 max-w-[960px]">
      <h5 class="text-m-b lg:text-h5 text-yellow-YellowTeleantillas">Noticias</h5>

      <div class="mt-5 grid grid-cols-1 gap-[30px] md:grid-cols-[1fr_300px]">
        <article class="from-overlay-100 to-overlay-0 relative h-[460px] w-full bg-gradient-to-t">
          <a href="#" class="rounded-lg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-14.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">

            <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-5 text-white lg:p-10">
              <span class="rounded-[18px] w-fit py-1 px-2 bg-yellow-YellowTeleantillas text-xs-b">Farándula</span>
              <p class="text-m-b lg:text-h4 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="text-lightBlue-100 mt-2 text-xs">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </a>
        </article>

        <div class="flex flex-col gap-5">
          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <p class="text-body-b w-full p-4 text-gray-100 lg:text-[0.875rem] xl:text-[1rem]">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>

          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <p class="text-body-b w-full p-4 text-gray-100 lg:text-[0.875rem] xl:text-[1rem]">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>

          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <p class="text-body-b w-full p-4 text-gray-100 lg:text-[0.875rem] xl:text-[1rem]">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>
        </div>
      </div>

      <div class="md:mt-[30px]">
        <div class="grid gap-[30px] md:grid-cols-[1fr_300px] lg:grid-cols-[1fr_300px_300px]">
          <div class="grid gap-5">
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

          <div class="relative h-[300px]">
            <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
              <a href="#" class="relative block h-full w-full bg-white">
                <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                  <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
                <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                  <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="text-lightBlue-100 mt-2 text-xs">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </a>
            </article>
          </div>

          <div class="relative h-[300px]">
            <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
              <a href="#" class="relative block h-full w-full bg-white">
                <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                  <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
                <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                  <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="text-lightBlue-100 mt-2 text-xs">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </a>
            </article>
          </div>

        </div>
      </div>
    </section>

    <!-- ad -->
    <div class="mx-auto mb-5 mt-10 hidden h-[114px] w-full max-w-[752px] bg-[#F1F3F7] p-3 md:block">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
    <section class="mx-auto mt-10 grid max-w-[960px] gap-5 lg:grid-cols-[1fr_320px]">
      <div class="flex flex-col gap-y-5">

        <a href="">
          <article class="grid h-max w-full lg:h-[250px] lg:grid-cols-[300px_1fr]">
            <div class="relative">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="max-h-[300px] min-h-[256px] w-full rounded-bl-none rounded-br-none rounded-tl-lg rounded-tr-lg object-cover lg:rounded-bl-lg lg:rounded-tl-lg lg:rounded-tr-none">
              <div class="absolute left-2.5 top-2.5 z-[2] px-4 py-2 ">
                <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
            </div>
            <div class="flex w-full flex-col justify-between rounded-bl-lg rounded-br-lg border px-2 py-4 lg:rounded-bl-none lg:rounded-br-lg lg:rounded-tr-lg lg:px-4">
              <div>
                <span class="rounded-[18px] w-fit py-1 px-2 bg-yellow-YellowTeleantillas text-xs-b text-white">Farándula</span>
                <p class="text-body-b lg:text-m-b text-blueLight-900 mt-2">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit...</p>
              </div>

              <div class="mt-1.5 text-xs text-gray-700">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <a href="">
          <article class="grid w-full lg:h-[250px] lg:grid-cols-[1fr_300px]">
            <div
              class="order-2 flex w-full flex-col justify-between rounded-bl-lg rounded-br-lg border px-2 py-4 lg:order-1 lg:rounded-bl-lg lg:rounded-br-none lg:rounded-tl-lg lg:rounded-tr-none lg:px-4">
              <div>
                <span class="rounded-[18px] w-fit py-1 px-2 bg-yellow-YellowTeleantillas text-xs-b text-white">Farándula</span>
                <p class="text-body-b lg:text-m-b text-blueLight-900 mt-2">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit...</p>
              </div>

              <div class="mt-1.5 text-xs text-gray-700">
                victor santana • 08/04/2024 14:51
              </div>
            </div>

            <div class="relative order-1">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="relative order-1 max-h-[300px] min-h-[256px] w-full rounded-bl-none rounded-br-none rounded-tl-lg rounded-tr-lg object-cover lg:order-2 lg:rounded-bl-none lg:rounded-br-lg lg:rounded-tl-none lg:rounded-tr-lg">
              <div class="absolute left-2.5 top-2.5 z-[2] px-4 py-2 ">
                <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
            </div>
          </article>
        </a>

        <a href="">
          <article class="grid h-max w-full lg:h-[250px] lg:grid-cols-[300px_1fr]">
            <div class="relative">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="max-h-[300px] min-h-[256px] w-full rounded-bl-none rounded-br-none rounded-tl-lg rounded-tr-lg object-cover lg:rounded-bl-lg lg:rounded-tl-lg lg:rounded-tr-none">
              <div class="absolute left-2.5 top-2.5 z-[2] px-4 py-2 ">
                <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
            </div>
            <div class="flex w-full flex-col justify-between rounded-bl-lg rounded-br-lg border px-2 py-4 lg:rounded-bl-none lg:rounded-br-lg lg:rounded-tr-lg lg:px-4">
              <div>
                <span class="rounded-[18px] w-fit py-1 px-2 bg-yellow-YellowTeleantillas text-xs-b text-white">Farándula</span>
                <p class="text-body-b lg:text-m-b text-blueLight-900 mt-2">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit...</p>
              </div>

              <div class="mt-1.5 text-xs text-gray-700">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <a href="">
          <article class="grid w-full lg:h-[250px] lg:grid-cols-[1fr_300px]">
            <div class="order-2 flex w-full flex-col justify-between rounded-bl-lg rounded-br-lg border px-2 py-4 lg:order-1 lg:rounded-bl-lg lg:rounded-br-none lg:rounded-tl-lg lg:rounded-tr-none lg:px-4">
              <div>
                <span class="rounded-[18px] w-fit py-1 px-2 bg-yellow-YellowTeleantillas text-xs-b text-white">Farándula</span>
                <p class="text-body-b lg:text-m-b text-blueLight-900 mt-2">Lorem ipsum dolor sit amet, consectetur
                  adipiscing elit...</p>
              </div>

              <div class="mt-1.5 text-xs text-gray-700">
                victor santana • 08/04/2024 14:51
              </div>
            </div>

            <div class="relative order-1">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="relative order-1 max-h-[300px] min-h-[256px] w-full rounded-bl-none rounded-br-none rounded-tl-lg rounded-tr-lg object-cover lg:order-2 lg:rounded-bl-none lg:rounded-br-lg lg:rounded-tl-none lg:rounded-tr-lg">
              <div class="absolute left-2.5 top-2.5 z-[2] px-4 py-2 ">
                <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
            </div>
          </article>
        </a>
      </div>

      <div class="grid gap-5">
        <div class="mx-auto flex h-[274px] w-full max-w-[320px] items-center justify-center rounded-lg bg-[#F1F3F7]">
          <div class="h-[250px] w-[300px] bg-[#D6CCFF]"></div>
        </div>

        <div class="mx-auto h-[274px] w-[300px] rounded-lg bg-[#D6CCFF] p-3">
        </div>

        <div>
          <h5 class="text-xl-b lg:text-h5 text-blue-900">Más vistos</h5>
          <div class="flex flex-col gap-5 mt-2">
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
    <div class="mx-auto mb-5 mt-10 hidden h-[114px] w-full max-w-[752px] bg-[#F1F3F7] p-3 md:block">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="mt-5 grid grid-cols-1 gap-[30px] md:grid-cols-[1fr_300px]">
        <a href="#">
          <article class="from-overlay-100 to-overlay-0 relative h-[460px] w-full bg-gradient-to-t">
            <img src="<?php echo get_template_directory_uri(); ?>/images/espectaculos.png" alt="" class="absolute left-0 top-0 h-full w-full object-cover rounded-lg">
            <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-5 text-white lg:p-10">
              <span class="rounded-[18px] w-fit py-1 px-2 bg-yellow-YellowTeleantillas text-xs-b">Farándula</span>
              <p class="text-m-b lg:text-h4 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="text-lightBlue-100 mt-2 text-xs">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="flex flex-col gap-5">
          <div class="relative h-[300px]">
            <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
              <a href="#" class="relative block h-full w-full bg-white">
                <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                  <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
                <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                  <span class="rounded-[18px] w-fit py-1 px-2 bg-yellow-YellowTeleantillas text-xs-b">Farándula</span>
                  <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="text-lightBlue-100 mt-2 text-xs">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </a>
            </article>
          </div>

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

      <div class="mt-10">
        <div class="grid gap-x-8 gap-y-5 md:grid-cols-2 lg:grid-cols-3">
          <div class="relative h-[300px]">
            <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
              <a href="#" class="relative block h-full w-full bg-white">
                <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                  <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
                <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                  <span class="rounded-[18px] w-fit py-1 px-2 bg-yellow-YellowTeleantillas text-xs-b">Farándula</span>
                  <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="text-lightBlue-100 mt-2 text-xs">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </a>
            </article>
          </div>

          <div class="relative h-[300px]">
            <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
              <a href="#" class="relative block h-full w-full bg-white">
                <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                  <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-lightBlue-primary drop-shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
                <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                  <span class="rounded-[18px] w-fit py-1 px-2 bg-yellow-YellowTeleantillas text-xs-b">Farándula</span>
                  <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="text-lightBlue-100 mt-2 text-xs">
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
      </div>
    </section>


  </div>

</div>
<?php
get_footer();
