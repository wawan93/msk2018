@extends("debaters.layout")

@section('title', 'Дебатный турнир')

@section("jumbotron")
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Дебатный турнир</h1>
            <p class="lead text-muted">
                Мы приглашаем вас стать участниками Дебатного турнира, в ходе которого будут высказаны и услышаны самые
                разные точки зрения о будущем Московского отделения </p>
            <p>
                <a href="https://docs.google.com/spreadsheets/d/1_Qy_yOBC4k4iOx16wwMocgKw61rVLefym8igOM6o1cs/edit?usp=sharing" class="btn btn-primary my-2">Расписание дебатов</a>
                {{--<a href="#" class="btn btn-secondary my-2">Расписание</a>--}}
            </p>
        </div>
    </section>
@endsection

@section("content")
    <div class="album py-5 bg-light">
        <div class="container">
            @if($days)
                <h2>Сегодня дебатируют</h2>
                <hr>
                @foreach($days as $day)
                    <div class="row">
                        @for($i = 1; $i <= 4; $i++)
                            @if($day["debater{$i}"] != null)
                                @php
                                    $debater = $debaters[$day["debater{$i}"]]
                                @endphp
                                <div class="col-md-3">
                                    <div class="card mb-3 box-shadow">
                                        @if($debater->photo)
                                            <a href="/debater/{{ $debater->id }}" class="photo-link">
                                                <img class="list-photo"
                                                     src="{{ \Storage::url($debater->photo) }}"
                                                     alt="{{ $debater->last_name }} {{ $debater->first_name }} {{ $debater->middle_name }}">
                                            </a>
                                        @endif
                                        <div class="card-body">
                                            <h4 class="card-title"><a
                                                        href="/debater/{{ $debater->id }}">{{ $debater->last_name }} {{ $debater->first_name }} {{ $debater->middle_name }}</a>
                                            </h4>
                                            {{--<p class="card-text">{{ substr($debater->about, 0, 200) }}...</p>--}}
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a href="/debater/{{ $debater->id }}"
                                                       class="btn btn-sm btn-primary btn-outline-secondary">Программа</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @endfor
                    </div>
                @endforeach
            @endif
            <h2>Все участники дебатов</h2>
            <hr>
            <div class="row">
                @foreach($debaters as $debater)
                    <div class="col-md-3">
                        <div class="card mb-3 box-shadow">
                            @if($debater->photo)
                                <a href="/debater/{{ $debater->id }}" class="photo-link">
                                    <img class="list-photo"
                                         src="{{ \Storage::url($debater->photo) }}"
                                         alt="{{ $debater->last_name }} {{ $debater->first_name }} {{ $debater->middle_name }}">
                                </a>
                            @endif
                            <div class="card-body">
                                <h4 class="card-title"><a href="/debater/{{ $debater->id }}">{{ $debater->last_name }} {{ $debater->first_name }} {{ $debater->middle_name }}</a></h4>
                                {{--<p class="card-text">{{ substr($debater->about, 0, 200) }}...</p>--}}
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="/debater/{{ $debater->id }}"
                                           class="btn btn-sm btn-primary btn-outline-secondary">Программа</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection

@section("styles")
    <style>
        .jumbotron .container {
            max-width: 40rem;
        }
    </style>
@endsection