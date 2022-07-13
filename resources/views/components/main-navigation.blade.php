<div class="navbar-area shadow-navbar relative z-2">
    <div class="togy-responsive-nav lg:hidden">
        <div class="container">
            <div class="togy-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="togy-nav hidden lg:block">
        <div class="container xl:max-w-full 3xl:max-w-[1700px]">
            <nav class="navbar flex flex-wrap">
                <a class="navbar-brand self-center" href="/">
                    <img src="assets/img/logo.png" alt="logo" width="40" height="40">
                </a>
                <div class="flex self-center grow basis-auto">
                    <ul class="self-center flex flex-row ml-auto mr-auto">
                        <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                            <a href="/" class="block active text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Home</a>
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
                                    >Witaj, {{ auth()->user()->username }}
                                </a>
                            </li>

                            <form action="/" 
                                    method="POST">
                                    @csrf

                                <li class="ml-12 xl:ml-15 mr-15">
                                    <button type="submit" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Wyloguj</button>
                                </li>
                            </form>

                            <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                                <a href="/create" class="block active text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Create</a>
                            </li>
                        @else
                            <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                                <a href="/register" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Zarejestruj</a>
                            </li>
                            <li class="ml-12 xl:ml-15 mr-12 xl:mr-15 relative group">
                                <a href="/login" class="block text-black-color font-semibold text-16px ease-in duration-300 hover:text-primary-color pt-30 pb-30">Zaloguj</a>
                            </li>
                                <div class="self-center">
                                <a href="contact.html" class="inline-block font-semibold text-13px md:text-14px lg:text-15px rounded-sm text-white pt-17 pb-13 pl-35 pr-35 bg-secondary-gradient-color shadow-custom-box-shadow hover:shadow-secondary-btn ease-in duration-300">Rozpocznij</a>
                            </div>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>