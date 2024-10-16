<?php

/**
 *
 * Template Name: Radio Page
 *
 * @package teleantillas
 */
get_header();
?>

<div id="radio-overlay" class="w-full absolute top-0 bg-white z-50">

  <div class="py-24 px-12 <?php echo is_user_logged_in() ? 'pt-16' : 'top-0' ?>">
    <div class="flex flex-row items-center justify-between">
      <div class="flex flex-row items-center gap-6">
        <h5 class="text-xl-b lg:text-h5 text-gray-100">Transmisión en Vivo</h5>
				<span href="<?php echo esc_url(home_url('/')); ?>" class="rounded-lg inline px-2 py-1 text-s-b md:text-blue-100 font-lato bg-yellow-YellowTeleantillas">En vivo</span>
      </div>

      <span id="radio-overlay-toggler" class="rounded-full w-10 h-10 flex items-center justify-center bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-3" viewBox="0 0 384 512">
          <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path
            d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
        </svg>
      </span>
    </div>

    <div class="w-full mt-10 grid xl:grid-cols-[160px_1fr_160px] gap-5">
      <div class="hidden xl:block w-full xl:max-w-40 h-40 xl:h-[600px] mb-5 bg-[#D6CCFF]"></div>
      <div>
        <div class="relative h-[460px]">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-05.png" alt=""
            class="rounded-lg block w-full h-[460px] object-cover">
          <div class="absolute top-0 w-full h-full p-10 grid">
            <span
              class="rounded self-baseline justify-self-end p-1 text-s font-extrabold font-lato text-white bg-[#FF0000] uppercase">En
              vivo</span>
            <div class="self-baseline justify-self-center">
              <button
                class="rounded-[32px] mt-4 pl-2.5 pr-6 py-1 flex flex-row items-center gap-x-4 text-white bg-[#00AEE6]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 fill-white" viewBox="0 0 384 512">
                  <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path
                    d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
                Ver programa en vivo
              </button>
            </div>
          </div>
        </div>
        <div class="w-full h-[274px] mx-auto mt-3 p-3 bg-[#F1F3F7]">
          <div class="w-full h-full bg-[#D6CCFF]">
          </div>
        </div>
      </div>

      <div class="hidden xl:block w-full xl:max-w-40 h-40 xl:h-[600px] mb-5 bg-[#D6CCFF]"></div>
    </div>
  </div>
</div>
