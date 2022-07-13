
<x-main-layout>

    <!-- Page Title Area -->
    <div class="relative z-1 text-center pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
        <div class="container">
            <h1 class="font-black text-25px md:text-35px lg:text-40px xl:text-48px 2xl:text-54px text-black-color mb-8">Miło Cię <span class="text-primary-color">opublikuj coś</span></h1>
            <p class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color">Od ostatniego razu minęło parę chwil, zobacz co się zmieniło.</p>
        </div>
    </div>
    <!-- End Page Title Area -->
    
    <div class="pb-60 md:pb-80 lg:pb-100">
        <div class="container">
            <div class="grid gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                <div class="lg:pr-15">
                    <h2 class="font-bold text-22px md:text-30px lg:text-35px mb-25 text-black-color">Zaczynajmy...</h2>

                    <form method="POST" 
                          action='/test'
                          enctype="multipart/form-data">
                            @csrf

                            <div class="mb-25">
                            <label class="text-black-color font-semibold text-13px
                                    md:text-15px lg:text-16px block mb-15"
                                    >Tytuł
                            </label>
                            <input type="text" 
                                placeholder="Tytuł posta" 
                                name="title"
                                id="title"
                                required
                                value="{{ old('title') }}"
                                class="block w-full text-black-color bg-[#F5F0E8] h-50 lg:h-60 leading-[50px] lg:leading-[60px] rounded-sm pl-20 pr-20 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px"/>
                                <div>
                                    @error('title')
                                        <p> {{$message}} </p>
                                    @enderror
                                </div>
                            
                        </div>
                        
                        <div class="mb-25">
                            <label class="text-black-color font-semibold text-13px
                                md:text-15px lg:text-16px block mb-15"
                                >Tekst
                            </label>
                                <textarea cols="30" 
                                        rows="5"
                                        name="body"
                                        id="body"
                                        class="mt-20 block w-full text-black-color bg-[#F5F0E8] rounded-sm p-15 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px" placeholder="Zawartość postu"
                                        required
                                    >{{ old('body') }}</textarea>
                        </div>

                        <div class="mb-25">
                            <label class="text-black-color font-semibold text-13px
                                md:text-15px lg:text-16px block mb-15"
                                >Thumbnail
                            </label>
                            <input type="file"
                                   name="thumbnail"
                                   id="thumbnail"
                                   {{-- required --}}
                                   class="block w-full text-black-color bg-[#F5F0E8] h-50 lg:h-60 leading-[50px] lg:leading-[60px] rounded-sm pl-20 pr-20 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px"/>       
                        </div>

                        <div class="mt-25">
                            <button type="submit" 
                                    class="inline-block font-semibold text-13px md:text-14px lg:text-15px rounded-sm text-white pt-17 pb-16 pl-35 pr-35 bg-secondary-gradient-color shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300"
                                    >Publikuj
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-main-layout>
