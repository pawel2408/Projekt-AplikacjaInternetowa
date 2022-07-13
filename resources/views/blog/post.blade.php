<x-posts.post-layout>
    <!-- Blog Details Area -->
    <div class="pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
        <div class="container">

            {{-- @if($post->image)
                <div style="background-image: rul('{{ $post->image->url() }}')">

                </div>
            @else
                <h1>

                </h1>
            @endif --}}

            <div class="xl:max-w-[1110px] xl:ml-auto xl:mr-auto">
                <h3 class="font-extrabold text-18px md:text-22px lg:text-25px xl:text-30px mb-12 lg:mb-18">{{ $post->title }}</h3>
                <ul class="mb-8 md:mb-22">
                    <li class="relative text-13px md:text-15px lg:text-16px text-secondary-color inline-block mb-8 mr-35 last:mr-0 before:w-8 before:h-8 before:absolute before:-right-23 before:top-1/2 before:-translate-y-2/4 before:rounded-full before:bg-primary-gradient-color last:before:hidden">
                        {{ $post->created_at->diffForHumans() }}
                    </li>
                    <li class="relative text-13px md:text-15px lg:text-16px text-black-color inline-block mb-8 mr-35 last:mr-0 before:w-8 before:h-8 before:absolute before:-right-23 before:top-1/2 before:-translate-y-2/4 before:rounded-full before:bg-primary-gradient-color last:before:hidden">
                        Autor <a href="blog-grid.html" class="ease-in duration-300 text-secondary-color hover:text-primary-color">{{ $post->author->name}}</a>
                    </li>
                </ul>
                <img src="{{ $post->image->url() }}" 
                     class=" mb-15 md:mb-25 rounded-sm md:rounded-md lg:rounded-lg" 
                     alt="blog-details">
                <p class="text-13px md:text-15px lg:text-16px leading-7 md:leading-8 text-optional-color mb-15 last:mb-0">
                    {{ $post->body }}
                </p>
                <p class="text-13px md:text-15px lg:text-16px leading-7 md:leading-8 text-optional-color mb-15 last:mb-0">
                    {{ $post->body }}
                </p>              

                

                <div class="mt-25 md:mt-50">
                    <h2 class="font-bold text-18px md:text-22px lg:text-25px mb-30">Comments (5)</h2>
                    <ul>                       
                        <div id="blog-comment">
                            @foreach($post->comments as $comment)
                                <x-posts.post-comment :comment="$comment" />
                            @endforeach
                        </div>
                    </ul>
                </div>
                
                @include('blog._add-comment')

            </div>
        </div>
    </div>
    <!-- End Blog Details Area -->
    </x-posts.post-layout>