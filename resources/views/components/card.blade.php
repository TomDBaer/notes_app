@props(['job'])

<a href="/jobs/{{ $job->id }}" {{ $attributes->merge(['class' => 'w-80 block px-3 py-4 border rounded-lg mb-3']) }}>
    <div class="font-bold text-blue-400 text-sm">{{ $job->employer->name }}</div>
    <div><strong>{{ $job->title }}:</strong> Pay {{ $job->salary }} per year</div>
</a>
