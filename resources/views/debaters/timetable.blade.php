@extends("layout")

@section('title', 'Дебатный турнир')

@section("content")
    <timetable inline-template>
    <div class="content">
        <div class="container py-4">
            <div class="timetable mt-5">
            @foreach($groupedDays as $d => $group)
                <div
                        @click.prevent="showDate('{{ $d }}')"
                        class="{{ ("СУПЕРФИНАЛ" === $d) ? "final" : "" }}"
                        :class="{active: '{{ $d }}' == shownDate}">{{ $d }}</div>
            @endforeach
            </div>

            @foreach($groupedDays as $d => $group)
                <div v-show="'{{ $d }}' == shownDate">
                @if($d !== "СУПЕРФИНАЛ")
                <h2 class="my-2">{{ $d }} ноября, {{ $group->first()->dayOfWeek }}</h2>
                @endif

                @include('timetable.regular', $group)
                </div>
            @endforeach
        </div>
    </div>
    </timetable>
@endsection
