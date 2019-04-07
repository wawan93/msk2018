@extends("layout")

@section('title', 'Дебатный турнир')

@section("content")
    <div class="content">
        <div class="container py-4">
            <h2 class="mt-5 mb-4">Все участники:</h2>
            <grid :debaters='{!! $debaters->toJson() !!}' inline-template>
                <div class="grid">
                    @php $day = null; @endphp
                    @foreach($debaters as $i => $debater)
                        @include('partials.debater-card', $debater)
                    @endforeach
                    <div class="debater-expanded" v-if="expandedDebater" :style="expandedStyle">
                        <div class="container">
                            <debater-preview :debater="expandedDebater"></debater-preview>
                        </div>
                    </div>
                </div>
            </grid>
        </div>
    </div>
@endsection