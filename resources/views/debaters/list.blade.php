@extends("layout")

@section('title', 'Дебатный турнир')

@section("content")
    <div class="content">
        <div class="container py-4">
            @if($days->isNotEmpty())
                <h2 class="my-2">Дебатируют сегодня</h2>

                @foreach($days as $day)
                    <h3 class="my-4 @if($day->isFinal()) final @endif">
                        {{ $day->time }}
                    </h3>

                    <grid :debaters='{!! $debaters->toJson() !!}' inline-template>
                        <div class="grid">
                            @foreach($day->debaters as $i => $debater)
                                @include('partials.debater-card', $debater)
                            @endforeach
                            <div class="debater-expanded" v-if="expandedDebater" :style="expandedStyle">
                                <div class="container">
                                    <debater-preview :debater="expandedDebater"></debater-preview>
                                </div>
                            </div>
                        </div>
                    </grid>
                @endforeach
            @endif
        </div>
        <hr class="my-3" />

        <div class="container">
            <h2 class="mt-5 mb-4">Все участники:</h2>
            <grid :debaters='{!! $debaters->toJson() !!}' inline-template>
                <div class="grid">
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