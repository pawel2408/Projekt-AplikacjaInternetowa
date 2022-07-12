<x-main-layout>

         <!-- Page Title Area -->
            <div class="relative z-1 text-center pt-60 md:pt-80 lg:pt-100 pb-60 md:pb-80 lg:pb-100">
                <div class="container">
                    <h1 class="font-black text-25px md:text-35px lg:text-40px xl:text-48px 2xl:text-54px text-black-color mb-8">Witamy! <span class="text-primary-color">Poraz pierwszy tutaj?</span></h1>
                    <p class="lg:text-16px md:text-15px text-13px lg:max-w-2xl lg:mx-auto leading-7 md:leading-8 text-optional-color">Zarejestruj się i zdobądź dostęp do niezwykłej zawoartości, to już tylko jeden mały krok.</p>
                </div>
            </div>
	<!-- End Page Title Area -->

    <div class="pb-60 md:pb-80 lg:pb-100">
		<div class="container">
			<div class="grid gap-25 grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
				<div class="lg:pr-15">

				<div class="lg:pl-15">
					<h2 class="font-bold text-22px md:text-30px lg:text-35px mb-25 text-black-color">Załóż konto</h2>
                    
                    <form action="/register" 
                        method="POST">
                        @csrf  

						<div class="mb-25">
							<label class="text-black-color font-semibold text-13px
                                 md:text-15px lg:text-16px block mb-15"
                                 >Username
                            </label>
                            <input type="text" 
                                placeholder="nazwa użytkownika" 
                                name="username"
                                value="{{ old('username') }}"
                                required
                                class="block w-full text-black-color bg-[#F5F0E8] h-50 lg:h-60 leading-[50px] lg:leading-[60px] rounded-sm pl-20 pr-20 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px"/>
                                <div>
                                    @error('username')
                                        <p> {{$message}} </p>
                                    @enderror
                                </div>
						</div>

                        <div class="mb-25">
							<label class="text-black-color font-semibold text-13px
                                 md:text-15px lg:text-16px block mb-15"
                                 >Imię i nazwisko
                            </label>
                                <input type="text" 
                                placeholder="imię i nazwisko" 
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="block w-full text-black-color bg-[#F5F0E8] h-50 lg:h-60 leading-[50px] lg:leading-[60px] rounded-sm pl-20 pr-20 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px"/>
                            
                                <div>
                                    @error('name')
                                        <p> {{$message}} </p>
                                    @enderror
                                </div>

                        </div>

                        <div class="mb-25">
							<label class="text-black-color font-semibold text-13px
                                 md:text-15px lg:text-16px block mb-15"
                                 >email
                            </label>
                            <input type="email" 
                                placeholder="email" 
                                name="email"
                                value="{{ old('emaiil') }}"
                                required
                                class="block w-full text-black-color bg-[#F5F0E8] h-50 lg:h-60 leading-[50px] lg:leading-[60px] rounded-sm pl-20 pr-20 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px"/>
                                <div>
                                    @error('email')
                                        <p> {{$message}} </p>
                                    @enderror
                                </div>
                        </div>

                        <div class="mb-25">
							<label class="text-black-color font-semibold text-13px
                                 md:text-15px lg:text-16px block mb-15"
                                 >telefon
                            </label>
                            <input type="text" 
                                placeholder="telefon" 
                                name="phone"
                                value="{{ old('phone') }}"
                                required
                                class="block w-full text-black-color bg-[#F5F0E8] h-50 lg:h-60 leading-[50px] lg:leading-[60px] rounded-sm pl-20 pr-20 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px"/>
                                <div>
                                    @error('phone')
                                        <p> {{$message}} </p>
                                    @enderror
                                </div>
                        </div>

                        <div class="mb-25">
							<label class="text-black-color font-semibold text-13px
                                 md:text-15px lg:text-16px block mb-15"
                                 >hasło
                            </label>
                            <input type="password" 
                                placeholder="hasło" 
                                name="password"
                                required
                                class="block w-full text-black-color bg-[#F5F0E8] h-50 lg:h-60 leading-[50px] lg:leading-[60px] rounded-sm pl-20 pr-20 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px"/>
                                <div>
                                    @error('password')
                                        <p> {{$message}} </p>
                                    @enderror
                                </div>
                        </div>

                        <div class="mb-25">
							<label class="text-black-color font-semibold text-13px
                                 md:text-15px lg:text-16px block mb-15"
                                 >powtórz hasło
                            </label>
                            <input type="password" 
                                placeholder="powtórz hasło" 
                                name="password"
                                required
                                class="block w-full text-black-color bg-[#F5F0E8] h-50 lg:h-60 leading-[50px] lg:leading-[60px] rounded-sm pl-20 pr-20 placeholder:text-optional-color outline-0 placeholder:ease-in placeholder:duration-300 focus:placeholder:text-transparent text-13px md:text-15px lg:text-16px"/>
                                <div>
                                    @error('password')
                                        <p> {{$message}} </p>
                                    @enderror
                                </div>
                            
                        </div>

						<div class="mt-25">
							<button type="submit" 
                                class="inline-block font-semibold text-13px md:text-14px lg:text-15px rounded-sm text-white pt-17 pb-16 pl-35 pr-35 bg-gradient-color shadow-custom-box-shadow hover:shadow-primary-btn ease-in duration-300">Zarejestruj dane</button>
						</div>

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="error">{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
					</form>
				</div>
			</div>
		</div>
	</div>

</x-main-layout>