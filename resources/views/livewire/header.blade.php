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
                    <a class="rounded-md bg-orange-500 px-5 py-2.5 text-sm font-medium text-white shadow"
                        href="#">
                        Get Started
                    </a>
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
