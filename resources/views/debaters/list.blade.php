@extends("debaters.layout")

@section('title', 'Дебатный турнир')

@section("jumbotron")
    <section class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <h1 class="jumbotron-heading">Дебатный турнир</h1>
                <p class="lead text-muted">
                    Мы приглашаем вас стать участниками Дебатного турнира, в ходе которого будут высказаны и услышаны
                    самые
                    разные точки зрения о будущем Московского отделения </p>
                <p>
                    <a href="/timetable" class="btn btn-primary btn-outline-primary my-2">Расписание дебатов</a>
                    {{--<a href="#" class="btn btn-secondary my-2">Расписание</a>--}}
                </p>
                </div>
                <div class="col-md-6">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/d_TPPu0PJhM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("content")
    <div class="album py-5 bg-light">
        <div class="container">
            @if($days->isNotEmpty())
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
                                                        href="/debater/{{ $debater->id }}">{{ $debater->last_name }}<br> {{ $debater->first_name }}<br> {{ $debater->middle_name }}</a>
                                            </h4>
                                            {{--<p class="card-text">{{ substr($debater->about, 0, 200) }}...</p>--}}
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
    {{--<style>--}}
        {{--.jumbotron .container {--}}
            {{--max-width: 40rem;--}}
        {{--}--}}
    {{--</style>--}}
@endsection