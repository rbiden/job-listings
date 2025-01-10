<x-layout>
    <p class="mt-8">Results for:</p>
    <h1 class="font-extrabold text-2xl text-emphasis mb-8">{{ $query }}</h1>

    <div class="space-y-3">
        @forelse ($jobs as $job)
            <x-job-card-wide :$job></x-job-card-wide>
        @empty
            <h6 class="text-sm font-light">
                There are no jobs found with a title of <strong>{{ $query }}</strong>
            </h6>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $jobs->links() }}
    </div>
</x-layout>
