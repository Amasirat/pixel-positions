<x-layout>

    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form class="mt-6">
                <input type="text" placeholder="I'm looking for..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl hover:bg-white/25 transition-colors duration-1000">
            </form>
        </section>


        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="space-x-1 mt-6">
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
                <x-tag>tag</x-tag>
            </div>

        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="space-y-6 mt-6">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>

        </section>
    </div>
</x-layout>
