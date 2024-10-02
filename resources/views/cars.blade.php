<x-layout>

    <x-slot name="title">Available cars</x-slot>

    <p>Available cars</p>
    <div class="row">
        @foreach ($cars as $car)
        <div class="col-md-3">
            <x-card :car="$car"></x-card>
        </div>
        @endforeach
    </div>
</x-layout>
