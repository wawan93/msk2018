<script>
    export default {
        data() {
            return {
                shownDate: "СУПЕРФИНАЛ",
                today: "СУПЕРФИНАЛ"
            }
        },
        methods: {
            showDate(date) {
                this.shownDate = date;
            },
            style(date) {
                return date == this.showDate ? '' : 'display:none'
            }
        }
    }
</script>