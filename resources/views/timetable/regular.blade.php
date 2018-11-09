@foreach($group as $day)
    <h3 class="my-4 @if($day->isFinal()) final @endif">
        {{ $day->isFinal() ? 'Финал дня' : $day->time }}
    </h3>

    <grid :debaters='{!! $day->debaters->toJson() !!}' inline-template>
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
                                Будет определен {{ $day->day->format('j') }} Ноября
                            </h5>
                        </div>
                    </div>
                @endfor
            @endif
            <div class="debater-expanded" v-if="expandedDebater" :style="expandedStyle">
                <div class="container">
                    <debater-preview :debater="expandedDebater"></debater-preview>
                </div>
            </div>
        </div>
    </grid>
@endforeach