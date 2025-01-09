<x-panel href="#"
    class="flex items-center gap-4">
    <section class="h-full">
        <span class="h-full">
            <img class="rounded-lg" src="https://picsum.photos/id/{{ rand(0, 1000) }}/100/100" alt="">
        </span>
    </section>
    <section class="flex flex-col w-full">
        <header class="flex items-center justify-between">
            <h6 class="text-xs lg:text-sm text-white/80">Employer</h6>
            <div class="space-x-1">
                <x-job-tag class="text-xxs" :alt="true">Remote</x-job-tag>
                <x-job-tag class="text-xxs" :alt="true">22h</x-job-tag>
            </div>
        </header>
        <main class="text-start mb-3">
            <h1 class="font-bold text-base md:text-base lg:text-lg mb-2 group-hover:text-emphasis">Senior Software Engineer</h1>
        </main>
        <footer class="mt-auto">
            <div class="flex items-center justify-between">
                <h6 class="text-xxs">Full Time - From $60,000</h6>
                <ul class="flex flex-wrap gap-1">
                    <x-job-tag class="text-xxs">Frontend</x-job-tag>
                    <x-job-tag class="text-xxs">Backend</x-job-tag>
                    <x-job-tag class="text-xxs">API</x-job-tag>
                </ul>
            </div>
        </footer>
    </section>
</x-panel>
