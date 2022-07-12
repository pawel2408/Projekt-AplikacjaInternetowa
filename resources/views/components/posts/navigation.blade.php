  <!-- Navbar Area -->
  <div class="navbar-area shadow-navbar relative z-2">
    <div class="togy-responsive-nav lg:hidden">
        <div class="container">
            <div class="togy-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="../assets/img/logo.png" alt="logo" width="40" height="40">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="togy-nav hidden lg:block">
        <div class="container xl:max-w-full 3xl:max-w-[1700px]">
            <nav class="navbar flex flex-wrap">
                <a class="navbar-brand self-center" href="/">
                    <img src="../assets/img/logo.png" alt="logo" width="40" height="40">
                </a>
                <div class="flex self-center grow basis-auto">
                    <ul class="self-center flex flex-row ml-auto mr-auto">
                        <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                            <a href="/" class="block active text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Home</a>
                        </li>
                        <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                            <a href="#" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color hover:before:bg-primary-color hover:after:bg-primary-color pt-30 pb-30">Pages</a>
                            <ul class="absolute bg-white left-0 w-[250px] rounded-sm top-84 z-99 shadow-dropdown pt-10 pb-10 opacity-0 invisible ease-in duration-300 group-hover:opacity-100 group-hover:visible">
                                <li>
                                    <a href="about.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">About Us</a>
                                </li>
                                <li>
                                    <a href="team.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">Team</a>
                                </li>
                                <li class="relative">
                                    <a href="features.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20 relative before:absolute before:right-27 before:top-16 before:w-1 before:h-9 before:bg-black-color before:-rotate-45 before:ease-in before:duration-300 after:absolute after:right-20 after:top-16 after:w-1 after:h-9 after:bg-black-color after:rotate-45 after:ease-in after:duration-300 hover:before:bg-primary-color hover:after:bg-primary-color">Features</a>
                                    <ul class="absolute bg-white w-[250px] rounded-sm top-0 z-99 shadow-dropdown pt-10 pb-10 opacity-0 invisible ease-in duration-300 left-full">
                                        <li>
                                            <a href="features.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">Features</a>
                                        </li>
                                        <li>
                                            <a href="products-features.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">Products Features</a>
                                        </li>
                                        <li>
                                            <a href="top-flexibility.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">Top Flexibility</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="pricing.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">Pricing</a>
                                </li>
                                <li>
                                    <a href="faq.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">FAQ</a>
                                </li>
                                <li>
                                    <a href="profile-authentication.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">Login/Register</a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="terms-conditions.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="not-found.html" class="block font-medium text-16px text-black-color ease-in duration-300 hover:text-primary-color pt-9 pb-9 pl-20 pr-20">404 Error Page</a>
                                </li>
                            </ul>
                        </li>
                        <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                            <a href="blog" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Usługi</a>
                        </li>
                        <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                            <a href="blog" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Portfolio</a>
                        </li>
                        <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                            <a href="blog" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Blog</a>
                        </li>
                        <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                            <a href="/contact" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Kontakt</a>
                        </li>
                        
                        @auth
                            <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                                <a href="/" class="block active text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30"
                                    >Witaj, {{ auth()->user()->name }} {{ auth()->user()->username }}
                                </a>
                            </li>

                            <form action="/logout" 
                                    method="POST">
                                    @csrf

                                <li class="ml-12 xl:ml-15 mr-15">
                                    <button type="submit" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Wyloguj</button>
                                </li>
                            </form>
                        @else
                            <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                                <a href="/register" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Zarejestruj</a>
                            </li>
                            <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                                <a href="/login" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Zaloguj</a>
                            </li>
                        @endauth
                    </ul>
{{-- koniec menu --}}




                    <div class="self-center">
                        <a href="contact.html" class="inline-block font-semibold text-13px md:text-14px lg:text-15px rounded-sm text-white pt-17 pb-13 pl-35 pr-35 bg-secondary-gradient-color shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300">Get Started</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->