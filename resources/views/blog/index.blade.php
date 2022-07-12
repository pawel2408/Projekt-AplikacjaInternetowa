<x-main-layout>

<!-- Page Title Area -->
    <div
      class="relative z-1 text-center pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100"
    >
      <div class="container">
        <h1
          class="font-black text-25px md:text-35px lg:text-40px xl:text-48px 2xl:text-54px text-black-color mb-8"
        >
        Witamy na <span class="text-primary-color">Blogu</span>
        </h1>
        <p
          class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color"
        >
          Tutaj dowiesz się więcej, o naszej powstającej firmie
          Będziesz na bieżąco z najnowszymi informacjami, blog to świetne miejsce
          dla osób lubiących czytać.
        </p>
      </div>
      <div class="mt-1 relative rounded-md shadow-sm px-3 py-2">
        <form action="#" method="GET">
            <input 
                type="text" 
                name="search" 
                placeholder="szukaj"
                class="focus:ring-indigo-500 focus:border-indigo-500 block pl-7 pr-12 sm:text-sm border-gray-300 rounded-md border-4 border-indigo-600"
                value="{{ request('search') }}">
        </form>
      </div>

    </div>
    <!-- End Page Title Area -->

    <!-- Blog Area -->
    <div class="pb-60 md:pb-80 lg:pb-100">
      <div class="container">
        <div
          class="grid gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
          
          @if($posts->count())

          @foreach ($posts as $post)
              <x-post-card :post="$post" class="mt-2 mb-2"/>
          @endforeach

            <span class="p-4">{{ $posts->links() }}</span>
            
          @else
              <p>Brak wyników <a href="/blog" class="p-4">Powród do bloga</a></p>
          @endif

        </div>
        <x-button>Zobacz więcej</x-button>
      </div>
    </div>
    <!-- End Blog Area -->
    
    <x-footer.support-area />

</x-main-layout>