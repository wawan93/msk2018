<script>
    import * as _ from 'lodash';
    import VueScrollTo from 'vue-scrollto';

    export default {
        props: ['debaters', 'isFinal', 'unique'],
        data() {
            return {
                expanded: null,
                index: 0
            }
        },
        mounted() {
            window.addEventListener('resize', this.calculateCardsPerRow);
            this.calculateCardsPerRow();
        },
        methods: {
            calculateCardsPerRow() {
                let width = document.body.clientWidth;
                if(width >= 768) {
                    this.cardsPerRow = this.isFinal ? 3 : 4;
                } else if(width > 576) {
                    this.cardsPerRow = 2;
                } else {
                    this.cardsPerRow = 1;
                }
            },
            toggle(id, index) {
                if(this.expanded === id) {
                    this.expanded = null;
                } else {
                    this.expanded = id;
                    this.index = index;
                    this.$nextTick(() => {
                        VueScrollTo.scrollTo(document.getElementById('details-about' + this.unique))
                    })
                }
            }
        },
        computed: {
            expandedStyle() {
                let row = Math.ceil((this.index + 1) / this.cardsPerRow) + 1;
                let column =  this.cardsPerRow + 1;
                return `grid-column: 1/${column}; grid-row: ${row}`
            },
            expandedDebater() {
                return _.find(this.debaters, debater => debater.id === this.expanded);
            },
        }
    }
</script>