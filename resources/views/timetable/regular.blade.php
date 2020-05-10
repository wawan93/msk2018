@foreach($group as $day)
    @if($day->group != 4 )
    <h3 class="my-4 @if($day->isFinal()) final @endif">
        {{ $day->isFinal() ? 'Финал дня' : $day->time }}
    </h3>
    @else
    <h3 class="my-4 final">
        СУПЕРФИНАЛ
    </h3>
    @endif

    <grid :debaters='{!! $day->debaters->toJson() !!}' unique="{{ $day->id }}" inline-template>
        <div class="grid">
            @foreach($day->debaters as $i => $debater)
                @include('partials.debater-card', $debater)
            @endforeach
            @if($day->isFinal() && $day->debaters->count() < 2)
                @for($i = $day->debaters->count(); $i < 2; $i++)
                    <div class="card m-2">
                        <img class="card-img-top" src="/img/quest.png">
                        <div class="card-body">
                            <h5 class="card-title">
                                Будет определен {{ $day->id == 44 ? "18" : $day->day->format('j') }} Ноября
                            </h5>
                        </div>
                    </div>
                @endfor
            @endif
            <div class="debater-expanded" v-if="expandedDebater" :style="expandedStyle">
                <div class="container">
                    <debater-preview :debater="expandedDebater" unique="{{ $day->id }}"></debater-preview>
                </div>
            </div>
        </div>
    </grid>
    <div class="container">
        <a class="card-title" href="{{$day->video_link}}" target="_blank">Смотреть запись дебатов</a>
    </div>
@endforeach
