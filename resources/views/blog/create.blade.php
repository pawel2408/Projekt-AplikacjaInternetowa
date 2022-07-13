<x-admin.layout>

        {{-- <!-- Page Title Area -->
           <div class="relative z-1 text-center pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
               <div class="container">
                   <h1 class="font-black text-25px md:text-35px lg:text-40px xl:text-48px 2xl:text-54px text-black-color mb-8">Post <span class="text-primary-color">Utwórz</span></h1>
                   <p class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color">A wię w końcu! Nadszedł czas, aby coś opublikować na świat!</p>
               </div>
           </div>
   <!-- End Page Title Area --> --}}

   <div class="pt-40 mx-auto">
       <div class="container mx-auto p-20">
           <div class="mx-auto p-20">
               <div class="mx-auto p-20">

               <div class="mx-auto p-20">
                   <h2 class="font-black text-25px md:text-35px lg:text-40px xl:text-48px 2xl:text-54px text-black-color mb-8">Napisza <span class="text-primary-color">Posta</span></h2>
                   <div class="p-20">
                   <form action="/create" 
                         enctype="multipart/form-data" 
                         method="POST"
                         class="mx-auto p-20"
                         >
                         @csrf  

                        <x-form.input name="Title" />

                        <x-form.input name="Slug" />

                        <x-form.input name="thumbnail" type="file"/>

                        <x-form.input name="excerpt" />

                        <x-form.textarea name="body" />

                        <x-form.field>
                            <x-form.label name="category" />

                            <select name="category_id"                                   
                                    id="category_id"
                                    required
                                    >
                                    @php
                                        $categories = \App\Models\Category::all(); 
                                    @endphp
                                    
                                    @foreach ($categories as $category)
                                        <option 
                                            value="{{ $category->id }}" 
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                                            >{{ ucwords($category->name) }}</option>
                                    @endforeach
                            </select>

                            <x-form.error name="category" />

                        </x-form.field>

                        <x-submit-button>Publikuj</x-submit-button>

                   </form>
                </div>
               </div>
           </div>
       </div>
   </div>

</x-admin.layout>