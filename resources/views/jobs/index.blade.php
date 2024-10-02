<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>

    <div class="mt-4 flex justify-around gap-4">
        <div>
            <h3 class="mb-4 text-lg text-center font-bold">Planning</h3>
            @foreach ($jobs as $job)
                <x-card :job="$job" class="border-blue-500"></x-card>
            @endforeach
        </div>
        <div>
            <h3 class="mb-4 text-lg text-center font-bold">Doing</h3>
            @foreach ($jobs as $job)
                <x-card :job="$job" class="border-green-500"></x-card>
            @endforeach
        </div>
        <div>
            <h3 class="mb-4 text-lg text-center font-bold">Done</h3>
            @foreach ($jobs as $job)
                <x-card :job="$job" class="border-red-500"></x-card>
            @endforeach
        </div>
    </div>
</x-layout>
