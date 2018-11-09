<?php

    $date = $group->first()->day;
    $debaters = $group->flatMap(function ($day) {
        return $day->debaters;
    });
?>
<grid :debaters='{!! \App\Debater::all()->toJson() !!}' :is-final="true" inline-template>
    <div class="grid final">
        @foreach($debaters as $i => $debater)
            @include('partials.debater-card', $debater)
        @endforeach
        @if($debaters->count() < 6)
            @for($i = $debaters->count(); $i < 6; $i++)
                <div class="card m-2">
                    <img class="card-img-top" src="/img/quest.png">
                    <div class="card-body">
                        <h5 class="card-title">
                            Будет определен {{ intval($date->format('j')) - (6 - $i) }} Ноября
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