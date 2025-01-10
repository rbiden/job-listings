<nav class="flex items-center justify-between px-6 py-3 bg-black">
    <section>
        <h6 class="text-white font-bold text-sm lg:text-lg">
            Job Listings
        </h6>
    </section>
    <section class="space-x-3">
        <x-nav-link href="{{ route('home') }}">Jobs</x-nav-link>
        <x-nav-link href="{{ route('career') }}">Career</x-nav-link>
        <x-nav-link href="{{ route('salary') }}">Salaries</x-nav-link>
        <x-nav-link href="{{ route('company') }}">Companies</x-nav-link>
    </section>
    <section class="flex items-center">
        @if (!Route::is('jobs.create'))
            {
            <a href="{{ route('jobs.create') }}" class="text-white text-xs lg:text-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor"
                    class="bi bi-suitcase-lg-fill fill-emphasis" viewBox="0 0 16 16">
                    <path
                        d="M7 0a2 2 0 0 0-2 2H1.5A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14H2a.5.5 0 0 0 1 0h10a.5.5 0 0 0 1 0h.5a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2H11a2 2 0 0 0-2-2zM6 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zM3 13V3h1v10zm9 0V3h1v10z" />
                </svg>
                <h6 class="font-bold">Post a Job</h6>
            </a>
            }
        @endif

        @guest
            @if (!Route::is(['login', 'register']))
                {
                <a href="{{ route('login') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-door-open-fill fill-emphasis" viewBox="0 0 16 16">
                        <path
                            d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15zM11 2h.5a.5.5 0 0 1 .5.5V15h-1zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                    </svg>
                </a>
                }
            @endif
        @endauth

        @auth
            <form class="flex ms-2" action="{{ route('logout') }}" method="post">
                @csrf
                @method('DELETE')

                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red"
                        class="bi bi-door-open-fill" viewBox="0 0 16 16">
                        <path
                            d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15zM11 2h.5a.5.5 0 0 1 .5.5V15h-1zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                    </svg>
                </button>
            </form>
        @endauth

    </section>
</nav>
