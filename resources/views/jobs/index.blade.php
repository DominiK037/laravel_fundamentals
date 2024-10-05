<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <div>
        @foreach($jobs as $job)
                <a href="/jobs/{{ $job['id'] }}" class="block border border-gray-200 px-4 py-6">
                    <div class="text-blue-400 font-bold">
                        {{ $job->employer->name }}
                    </div>
                    <div>
                        <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }} per year.
                    </div>
                </a>
        @endforeach

        <div class="mt-4">
            {{ $jobs->links() }}
        </div>
    </div>

</x-layout>
