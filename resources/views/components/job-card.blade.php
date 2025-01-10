@props(['job'])

<x-panel>
    <header class="flex justify-start">
        <h6 class="text-xs lg:text-sm">{{ $job->employer->name }}</h6>
    </header>
    <main class="text-center my-8 px-4 lg:px-6">
        <h1 class="font-extrabold text-base md:text-base lg:text-lg mb-2 group-hover:text-emphasis">
            {{ $job->title }}
        </h1>
        <h6 class="text-xxs">{{ $job->schedule }} - From {{ $job->salary }}</h6>
    </main>
    <footer class="flex items-end justify-between gap-4">
        <ul class="flex flex-wrap gap-1">
            @foreach ($job->tags as $tag)
                <x-job-tag href="#" class="text-xxs">{{ $tag->name }}</x-job-tag>
            @endforeach
        </ul>
        <span class="bg-white p-[0.35rem] rounded-lg">
            <img class="rounded-md w-8 h-8 object-cover" src="{{ $job->url }}" alt="">
        </span>
    </footer>
</x-panel>
