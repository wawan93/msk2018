@extends("layout")

@section('title', 'Дебатный турнир')

@section("content")
    <div class="album py-5 bg-light">
        <div class="container">
            @foreach($days as $day)
                @php
                    $date = \Carbon\Carbon::parse($day->day)
                @endphp
                <div class="row">
                    <div class="col-md-12 py-5">
                        <h2>{{$date->day}} {{ $date->localeMonth }}, {{ $day->group == 1 ? "19:00" : ($day->group == 2 ? "20:30" : "ФИНАЛ") }}</h2>
                    </div>
                </div>
                <div class="row">
                    @for($i = 1; $i <= 4; $i++)
                        @if($day["debater{$i}"] != null)
                            @php
                                $debater = $debaters[$day["debater{$i}"]]
                            @endphp
                            <div class="col-md-3">
                                <div class="card mb-3 box-shadow @if($day->winner == $debater->id) alert-success @endif">
                                    @if($debater->photo)
                                        <a href="/debater/{{ $debater->id }}" class="photo-link">
                                            <img class="list-photo"
                                                 src="{{ \Storage::url($debater->photo) }}"
                                                 alt="{{ $debater->last_name }} {{ $debater->first_name }} {{ $debater->middle_name }}">
                                        </a>
                                    @endif
                                    <div class="card-body">
                                        <h4 class="card-title"><a
                                                    href="/debater/{{ $debater->id }}">{{ $debater->last_name }}<br> {{ $debater->first_name }}<br> {{ $debater->middle_name }}</a>
                                        </h4>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="/debater/{{ $debater->id }}"
                                                   class="btn btn-sm btn-primary btn-outline-secondary">Подробнее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                    @endfor
                </div>
            @endforeach
        </div>
    </div>
@endsection