<x-layout>

    <x-slot name="title">Cars</x-slot>

    <p>Available cars</p>
    <div class="row">
        @foreach ($cars as $car)
        <div class="col-md-3">
            <div class="card">
            <img src="{{$car ['image']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$car['title']}}</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <p class="card-text">Start production: {{$car['start_production'] ?? '-'}}</p>
                        </li>
                        <li class="list-group-item">
                            <p class="card-text">Class: {{$car['class'] ?? '-'}}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
