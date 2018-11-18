<script>
    export default {
        data() {
            return {
                shownDate: "18",
                today: "18"
            }
        },
        methods: {
            showDate(date) {
                this.shownDate = date;
            },
            style(date) {
                return date == this.shownDate ? '' : 'display:none'
            }
        }
    }
</script>