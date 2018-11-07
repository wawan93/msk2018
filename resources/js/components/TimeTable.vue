<script>
    export default {
        data() {
            return {
                shownDate: 5
            }
        },
        methods: {
            showDate(date) {
                this.shownDate = date;
            },
            style(date) {
                return +date === +this.showDate ? '' : 'display:none'
            }
        }
    }
</script>