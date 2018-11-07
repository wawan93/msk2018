@extends("layout")

@section('title', 'Дебатный турнир')

@section("content")
    <timetable inline-template>
    <div class="content">
        <div class="container py-4">
            <div class="timetable mt-5">
            @foreach($groupedDays as $d => $group)
                <div @click.prevent="showDate({{ $d }})" :class="{active: {{ $d }} == shownDate}">{{ $d }}</div>
            @endforeach
            </div>

            @foreach($groupedDays as $d => $group)
                <div v-show="{{ $d }} == shownDate">
                <h2 class="my-2">{{ $d }} ноября:</h2>

                @foreach($group as $day)
                    <h3 class="my-4 @if($day->isFinal()) final @endif">
                        {{ $day->time }}
                    </h3>

                    <grid :debaters='{!! $day->debaters->toJson() !!}' inline-template>
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
                </div>
            @endforeach
        </div>
    </div>
    </timetable>
@endsection