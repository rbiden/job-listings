<x-layout>
    <header class="w-full md:w-3/4 relative mx-auto text-center mb-12 mt-8">
        <h1 class="font-extrabold text-2xl md:text-3xl mb-4">Let's Find You A Great Job</h1>
        <form class="block" action="{{ route('jobs.search') }}">
            <x-input name="q" id="q" placeholder="I'm looking for..." spellcheck="false" autocomplete="false"></x-input>
        </form>
    </header>

    <main class="space-y-8 w-full mx-auto">
        <section>
            <x-header class="mb-2">Featured Jobs</x-header>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 w-full">
                @forelse ($jobs->filter(fn($job) => $job->featured)->take(6) as $job)
                    <x-job-card :$job></x-job-card>
                @empty
                    <h6 class="text-sm px-4">There are no featured jobs at the moment.</h6>
                @endforelse

            </div>
        </section>

        <section>
            <x-header class="mb-2">Tags</x-header>
            <main class="flex flex-wrap gap-2">
                @forelse ($tags as $tag)
                    <x-job-tag class="text-xs" href="#">{{ $tag->name }}</x-job-tag>
                @empty
                    <h6 class="text-sm px-4">There are no tags found.</h6>
                @endforelse
            </main>
        </section>

        <section>
            <x-header class="mb-2">Recent Jobs</x-header>

            <div class="space-y-3 w-full">
                @forelse ($jobs as $job)
                    <x-job-card-wide :$job></x-job-card-wide>
                @empty
                    <h6 class="text-sm px-4">There are no jobs at the moment.</h6>
                @endforelse
            </div>
        </section>
    </main>
</x-layout>
