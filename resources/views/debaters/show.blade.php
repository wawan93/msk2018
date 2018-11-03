@extends("debaters.layout")

@section('title', 'Дебатный турнир')

@section("jumbotron")
    <section class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    @if($debater->photo)
                        <img class="photo" src="{{ \Storage::url($debater->photo) }}">
                    @endif
                </div>
                <div class="col-md-8">
                    <h1>{{ $debater->last_name }} {{ $debater->first_name }} {{ $debater->middle_name }}</h1>
                    <p>{!! nl2br($debater->about) !!}</p>
                    <h2>Программа</h2>
                    <p>{!! nl2br($debater->program) !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
