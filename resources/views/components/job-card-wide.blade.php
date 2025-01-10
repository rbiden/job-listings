@props(['job'])

<x-panel class="flex items-center gap-4">
    <section class="h-full">
        <span class="h-full">
            <img class="rounded-lg w-24 h-24 object-cover" src="{{ $job->url }}" alt="">
        </span>
    </section>
    <section class="flex flex-col w-full">
        <header class="flex items-center justify-between">
            <h6 class="text-xs lg:text-sm text-white/80">{{ $job->employer->name }}</h6>
            <div class="space-x-1">
            <x-job-tag href="#" class="text-xxs" :alt="true">{{ $job->location }}</x-job-tag>
            </div>
        </header>
        <main class="text-start mb-3">
            <h1 class="font-bold text-base md:text-base lg:text-lg mb-2 group-hover:text-emphasis">
                {{ $job->title }}
            </h1>
        </main>
        <footer class="mt-auto">
            <div class="flex items-center justify-between">
                <h6 class="text-xxs">{{ $job->schedule }} - From {{ $job->salary }}</h6>
                <ul class="flex flex-wrap gap-1">
                    @foreach ($job->tags as $tag)
                        <x-job-tag class="text-xxs">{{ $tag->name }}</x-job-tag>
                    @endforeach
                </ul>
            </div>
        </footer>
    </section>
</x-panel>
