<div class="card m-2">
    <img class="card-img-top" src="{{ $debater->photo_url }}" alt="{{ $debater->full_name }}">
    <div class="card-body">
        <h5 class="card-title">
            {{ $debater->last_name }}
            <br>
            <small>{{ $debater->first_name }}</small>
            <br>
            <small>{{ $debater->middle_name }}</small>
        </h5>

        <a @click.prevent='toggle({{ $debater->id }}, {{ $i }})' href="#" class="btn btn-small">Подробнее</a>
    </div>
</div>