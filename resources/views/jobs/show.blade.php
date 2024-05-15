<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <P>This job pays {{ $job['salary']}} per year.</P>

</x-layout>