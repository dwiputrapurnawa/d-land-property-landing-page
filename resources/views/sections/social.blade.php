<section class="bg-black text-white pt-52 md:pt-auto">

{{-- DESKTOP --}}
<div class="hidden md:block px-4 md:px-8 lg:px-16">
  <div class="w-full flex flex-col lg:flex-row gap-8 h-full relative">
    <div class="flex flex-col lg:w-1/3 z-50 lg:-ml-16 h-full absolute">
      <div class="bg-white bg-opacity-10 p-12 lg:pt-32 rounded-lg backdrop-filter backdrop-blur-sm h-full flex flex-col">
        <h2 class="text-sm font-semibold tracking-wider mb-4 animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.social_subtitle') }}</h2>
        <h3 class="text-4xl lg:text-5xl font-light mb-8 animated-element opacity-0 transition duration-300 ease-in-out">{{ __('landing.social_title_1') }} <span class="italic font-century font-light">{{ __('landing.social_title_2') }}</span></h3>
        <p class="text-xl pt-20 lg:text-2xl text-white lg:text-zinc-400 mb-12 lg:mb-24 animated-element opacity-0 transition duration-300 ease-in-out">
          {{ __('landing.social_text') }}
        </p>
        <!-- Spacer div with flex-grow to push the link down -->
        <div class="flex-grow"></div>
        <a
          id="visit_instagram_btn"
          href="{{ $company->instagram }}"
          class="self-start w-[300px] inline-block px-8 py-3 border border-white rounded-full text-sm font-semibold tracking-wider transition-colors hover:bg-white hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900 text-center"
          tabindex="0"
        >
          {{ __('landing.social_visit_instagram') }}
        </a>
      </div>
    </div>
    <div class="flex-col w-[80%] lg:ml-auto py-16 mb-10 pl-10">
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-4">
        @for ($i = 1; $i <= 6; $i++)
        <div class="relative aspect-square animated-element opacity-0 transition duration-900 ease-in-out">
          <img
            src="/images/instagram-post-{{ $i }}.webp"
            alt="Instagram post {{ $i }}"
            class="absolute inset-0 w-full h-full object-cover lazy"
            loading="lazy"
          />
          <img 
            src="/images/stack.webp" 
            class="absolute top-3 right-3 w-5 h-5 lazy" 
            alt="Stack icon"
            srcset=""
          />
        </div>
        @endfor
      </div>
    </div>
  </div>
</div>


{{-- MOBILE --}}
<div class="md:hidden relative"> <!-- Parent container remains relative -->

  {{-- Instagram Container --}}
  <div class="absolute -top-52 left-1/2 -translate-x-1/2 flex flex-col z-10 items-center text-center w-4/5">
    <div class="bg-white bg-opacity-10 p-12 lg:pt-32 rounded-lg backdrop-filter backdrop-blur-lg h-full flex flex-col">
      <h3 class="text-4xl lg:text-5xl font-light mb-8 animated-element opacity-0 transition duration-300 ease-in-out">
        {{ __('landing.social_title_1') }} <span class="italic font-century font-light">{{ __('landing.social_title_2') }}</span>
      </h3>
      <p class="text-xl lg:text-2xl text-white lg:text-zinc-400 mb-12 lg:mb-24 animated-element opacity-0 transition duration-300 ease-in-out">
        {{ __('landing.social_text') }}
      </p>
    </div>
  </div>

  {{-- Image Container --}}
  <div class="flex-col w-full lg:ml-auto py-16">
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-4">
      @for ($i = 1; $i <= 6; $i++)
      <div class="relative aspect-square animated-element opacity-0 transition duration-900 ease-in-out">
        <img src="/images/instagram-post-{{ $i }}.webp" alt="Instagram post {{ $i }}" class="absolute inset-0 w-full h-full object-cover lazy" loading="lazy"/>
        <img src="/images/stack.webp" class="absolute top-3 right-3 w-5 h-5 lazy" alt="Stack icon" />
      </div>
      @endfor
    </div>

    <div class="flex items-center justify-center w-full h-full p-10">
      <a
        id="visit_instagram_btn"
        href="{{ $company->instagram }}"
        class="w-full inline-block px-8 py-3 border border-white rounded-full text-sm font-semibold tracking-wider transition-colors hover:bg-white hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-900 text-center"
        tabindex="0"
      >
        {{ __('landing.social_visit_instagram') }}
      </a>
    </div>
  </div>
</div>



  


</section>
