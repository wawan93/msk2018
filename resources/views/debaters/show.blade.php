@extends("debaters.layout")

@section('title', 'Дебатный турнир')

@section("jumbotron")
    <section class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $debater->photo }}" height="300">
                </div>
                <div class="col-md-6">
                    <h1>{{ $debater->last_name }} {{ $debater->first_name }} {{ $debater->middle_name }}</h1>
                    <p>
                        {{ $debater->about }}
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection

@section("content")
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="col-xs-12">
                <h2>Программа</h2>
                {{ $debater->program }}
            </div>
        </div>
    </div>
@endsection