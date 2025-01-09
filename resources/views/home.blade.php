<x-layout>
    <header class="w-3/5 mx-auto text-center mb-12 mt-8">
        <h1 class="font-extrabold text-2xl md:text-3xl mb-4">Let's Find You A Great Job</h1>
        <form class="block" action="">
            <x-input placeholder="I'm looking for..." spellcheck="false" autocomplete="false"></x-input>
        </form>
    </header>

    <main class="space-y-8 md:px-12 lg:px-44">
        <section>
            <x-header class="mb-2">Featured Jobs</x-header>
            <div class="flex gap-3 w-full">
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
                <x-job-card></x-job-card>
            </div>
        </section>

        <section>
            <x-header class="mb-2">Tags</x-header>
            <main class="flex flex-wrap gap-2">
                <x-job-tag class="text-xs">Tag</x-job-tag>
                <x-job-tag class="text-xs">Tag</x-job-tag>
                <x-job-tag class="text-xs">Tag</x-job-tag>
                <x-job-tag class="text-xs">Tag</x-job-tag>
                <x-job-tag class="text-xs">Tag</x-job-tag>
            </main>
        </section>

        <section>
            <x-header class="mb-2">Recent Jobs</x-header>

            <div class="space-y-3 w-full">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>
        </section>
    </main>
</x-layout>
