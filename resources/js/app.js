import Vue from 'vue';
import VueScrollTo from 'vue-scrollto';

Vue.use(VueScrollTo);

import Grid from './components/Grid.vue';
import TimeTable from './components/TimeTable.vue';
import DebaterPreview from './components/DebaterPreview.vue';

Vue.component('grid', Grid);
Vue.component('timetable', TimeTable);
Vue.component('debater-preview', DebaterPreview);
new Vue({el: '#app'});
