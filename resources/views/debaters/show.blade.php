@extends("layout")

@section('title', 'Дебатный турнир')

@section("content")
    <div class="container">
        <debater-preview :debater='{!! $debater->toJson() !!}'></debater-preview>
    </div>
@endsection
