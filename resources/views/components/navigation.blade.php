<nav class="flex items-center justify-between px-6 py-3 bg-black">
    <section>
        <a href="{{ route('home') }}" class="text-white font-bold text-sm lg:text-lg">
            {{-- <img 
                src="{{ Vite::asset('resources/images/logo.png') }}" 
                alt="logo"
                width="30px"
                height="30px"> --}}
            Job Listings
        </a>
    </section>
    <section class="space-x-3">
        <x-nav-link href="{{ route('jobs') }}">Jobs</x-nav-link>
        <x-nav-link href="{{ route('career') }}">Career</x-nav-link>
        <x-nav-link href="{{ route('salary') }}">Salaries</x-nav-link>
        <x-nav-link href="{{ route('company') }}">Companies</x-nav-link>
    </section>
    <section>
        <button class="text-white text-xs lg:text-sm flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                class="bi bi-suitcase-lg-fill fill-emphasis" viewBox="0 0 16 16">
                <path
                    d="M7 0a2 2 0 0 0-2 2H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14H2a.5.5 0 0 0 1 0h10a.5.5 0 0 0 1 0h.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2H11a2 2 0 0 0-2-2zM6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM3 13V3h1v10zm9 0V3h1v10z" />
            </svg>
            <h6 class="font-bold">Post a Job</h6>
        </button>
    </section>
</nav>
