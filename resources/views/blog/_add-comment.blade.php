@auth
    <div class="mt-25 md:mt-50">
        <h2 class="font-bold text-18px md:text-22px lg:text-25px mb-20 md:mb-25">Dodaj komentaż</h2>
        <form action="/blog/{{$post->slug}}/comments"  
            method="POST">
            @csrf

            <textarea 
                cols="30" 
                rows="5" 
                name="body"
                required
                class="mt-20 block w-full text-black-color bg-[#F5F0E8] rounded-sm p-15 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px" placeholder="Your message here..."></textarea>

            <div class="">
                @error('body')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="inline-block font-semibold text-13px md:text-14px lg:text-15px mt-15 md:mt-25 rounded-sm text-white pt-17 pb-13 pl-35 pr-35 bg-gradient-color shadow-custom-box-shadow hover:shadow-primary-btn ease-in duration-300">Post</button>

        </form>
    </div>
@else
    <p>
        Aby dodać komentaż<a href="/login"> zaloguj się</a>.
    </p>
@endauth