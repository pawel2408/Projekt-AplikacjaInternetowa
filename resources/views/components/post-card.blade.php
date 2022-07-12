<div class="single-blog-post">
    <a href="" class="d-block">
      <img
        src="{{ asset('storage/' . $post->thumbnail) }}"
        {{-- src="assets/img/blog/blog-img6.jpg" --}}
        class="rounded-md mb-25 inline-block"
        alt="blog-image"
      />
    </a>
    <span
      class="block font-medium text-13px md:text-14px lg:text-15px text-secondary-color mb-12"
    >
      Opublikowany {{ $post->created_at->diffForHumans() }}
    </span>
    <span
      class="block font-medium text-13px md:text-14px lg:text-15px text-secondary-color mb-12"
    >
    przez {{ $post->author->name}}
  </span>
    <h3
      class="font-bold text-18px md:text-20px lg:text-22px mb-10 lg:mb-12"
    >
      <a
        href="/blog/{{ $post->slug }}"
        class="inline-block text-black-color hover:text-primary-color ease-in duration-300"
      >
        {{ $post->title }}
      </a>
    </h3>
    <p
      class="leading-7 md:leading-8 text-optional-color mb-10 md:mb-15 text-13px md:text-15px lg:text-16px"
    >
      {{ $post->excerpt }}
    </p>
    <a
      href="/blog/{{ $post->slug }}"
      class="link-btn inline-block relative pr-20 font-medium text-13px md:text-14px lg:text-15px text-secondary-color ease-in duration-100 hover:text-secondary-color hover:tracking-wide"
    >
      Dowiedz się więcej
      <img
        src="assets/img/icon/secondary-arrow-right.svg"
        class="absolute right-0 top-1 md:top-3"
        alt="arrow-right"
      />
    </a>
  </div>