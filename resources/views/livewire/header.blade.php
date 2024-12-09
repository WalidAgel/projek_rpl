<header class="bg-white/50 backdrop-blur-md shadow-sm fixed top-0 w-full z-10">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="md:flex md:items-center md:gap-12">
                <a class="block text-teal-600" href="#">
                    <span class="sr-only">Home</span>
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10">
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:block">
                <nav aria-label="Global">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-gray-700 transition hover:text-orange-500" href="/">Home</a>
                        </li>
                        <li>
                            <a class="text-gray-700 transition hover:text-orange-500" href="#">Explore More</a>
                        </li>
                        <li>
                            <a class="text-gray-700 transition hover:text-orange-500" href="#">About</a>
                        </li>
                        <li>
                            <a class="text-gray-700 transition hover:text-orange-500" href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Buttons -->
            <div class="flex items-center gap-4">
                <div class="sm:flex sm:gap-4">
                    @if (auth()->check())
                        <a href="/cart">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                            <a href="/auth/logout">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                </svg>
                            </a>
                        </a>
                    @else
                        <a class="rounded-md bg-orange-500 px-5 py-2.5 text-sm font-medium text-white shadow"
                            href="/auth/login">
                            Get Started
                        </a>
                    @endif
                </div>

                <!-- Mobile Menu Button -->
                <div class="block md:hidden">
                    <button class="rounded bg-gray-100 p-2 text-gray-600 transition hover:text-gray-900">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
