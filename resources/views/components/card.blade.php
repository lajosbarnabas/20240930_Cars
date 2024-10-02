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
