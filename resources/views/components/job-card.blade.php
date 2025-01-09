<x-panel href="#">
    <header class="flex justify-start">
        <h6 class="text-xs lg:text-sm">Employer</h6>
    </header>
    <main class="text-center my-8 px-4 lg:px-6">
        <h1 class="font-extrabold text-base md:text-base lg:text-lg mb-2 group-hover:text-emphasis">Senior Software Engineer</h1>
        <h6 class="text-xxs">Full Time - From $60,000</h6>
    </main>
    <footer class="flex items-end justify-between gap-4">
        <ul class="flex flex-wrap gap-1">
            <x-job-tag class="text-xxs">Frontend</x-job-tag>
            <x-job-tag class="text-xxs">Backend</x-job-tag>
            <x-job-tag class="text-xxs">API</x-job-tag>
        </ul>
        <span class="bg-white p-[0.35rem] rounded-lg">
            <img class="rounded-md" src="https://picsum.photos/id/{{ rand(0, 1000) }}/25/25" alt="">
        </span>
    </footer>
</x-panel>
