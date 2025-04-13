        <header class="w-full bg-gray-100 dark:bg-gray-800 text-sm py-3">
            @if (Route::has('login'))
                <nav class="flex items-end justify-between gap-4">
                    <div>   
                        <a
                            href="{{ url('/') }}"
                            class=" bg-white inline-block mr-3 ml-3 px-5 mpx-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                                Home
                        </a>                     
                        <a
                            href="{{ url('/about') }}"
                            class=" bg-white inline-block mr-3 px-5 mpx-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                                About
                        </a>
                        <a
                            href="{{ url('/contact') }}"
                            class=" bg-white inline-block mr-3 px-5 mpx-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                            Contact
                        </a>
                    </div>
                    <div>
                        @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class=" bg-white inline-block mr-3 px-5 mpx-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class=" bg-white inline-block mr-3 px-5 mpx-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">

                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class=" bg-white inline-block mr-3 px-5 mpx-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">

                                Register
                            </a>
                        @endif
                    @endauth
                    </div>
                </nav>
            @endif
        </header>