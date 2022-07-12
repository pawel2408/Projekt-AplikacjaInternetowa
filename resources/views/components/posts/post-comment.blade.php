<li class="relative md:pl-[125px] mb-25 md:mb-30 last:mb-0">
    <img src="https://i.pravatar.cc/60?u={{ $comment->id }}" class="mb-20 md:mb-0 md:absolute md:left-0 w-100 h-100 md:top-0 rounded-full" alt="user">
    <h4 class="font-bold text-14px md:text-15px lg:text-17px mb-8">{{ $comment->author->username}}</h4>
    <span class="block font-medium text-13px md:text-14px lg:text-15px text-secondary-color mb-12">
     {{ $comment->created_at->diffForHumans() }}
  </span>
    <p class="text-13px md:text-15px lg:text-16px leading-7 md:leading-8 text-optional-color mb-15 last:mb-0">
        {{ $comment->body }}
    </p>
    {{-- <a href="blog-details.html" class="uppercase inline-block font-bold text-secondary-color ease-in duration-300 text-13px hover:text-primary-color">Odpowiedz</a> --}}
</li>
