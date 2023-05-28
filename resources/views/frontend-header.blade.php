
<!-- Section Top Bar -->
<section class="header w-full px-6 pt-3 overflow-hidden bg-white xl:px-8">
    <div
        class="absolute top-0 left-0 w-full h-20 md:h-16 p-4 bg-gradient-to-r from-primary to-secondary text-center text-white">
        Are your a software developer? Join as a dev, list a dev community or a software company <a href="http://">JOIN
            NOW!</a>
    </div>
    <nav x-data="{ mobile: false }"
        class="relative mt-16 md:mt-12 pt-6 mx-auto md:pb-6 max-w-7xl md:flex md:justify-between md:items-center">
        <div class="relative z-20 flex items-center justify-between">
            <div>
                <a class="text-xl font-bold text-gray-800 md:text-2xl hover:text-gray-700" href="#_">
                    <img src="img/logo-dark.png" alt="DevsInfo_Ke" class="w-auto h-6 text-blue-700 fill-current md:-mt-2">
                </a>
            </div>

            <!-- Mobile menu button -->
            <div @click="mobile = !mobile" class="flex md:hidden">
                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                    aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="{ 'hidden': !mobile, 'flex': mobile }"
            class="left-0 z-10 items-center justify-center w-full font-semibold select-none md:flex lg:absolute">
            <div
                class="flex flex-col justify-center w-full mt-4 space-y-2 md:mt-0 md:flex-row md:space-x-6 lg:space-x-10 xl:space-x-16 md:space-y-0">
                <a class="py-3 text-gray-800 hover:text-gray-700 hover:underline" href="/">Home</a>
                <a class="py-3 text-gray-800 hover:text-gray-700 hover:underline" href="/jobs">Jobs</a>
                <a class="py-3 text-gray-800 hover:text-gray-700 hover:underline" href="/events">Events</a>
                <a class="py-3 text-gray-800 hover:text-gray-700 hover:underline" href="/events">Tips</a>

            </div>
        </div>

        <div :class="{ 'flex': mobile, 'hidden md:flex': !mobile }"
            class="relative z-20 flex-col justify-center pr-5 mt-4 space-y-8 md:pr-3 lg:pr-0 md:flex-row md:space-y-0 md:items-center md:space-x-6 md:mt-0">
            <a class="flex-shrink-0 font-semibold text-gray-900 hover:underline" href="/login">Login</a>

            <a href="/register"
                class="flex-shrink-0 w-auto text-base font-semibold leading-5 text-left text-primary capitalize bg-transparent md:text-sm md:py-3 md:px-8 md:font-medium md:text-center md:text-white md:bg-primary md:mx-0 rounded">
                Join as a Dev or Org
            </a>
        </div>
    </nav>


</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>


