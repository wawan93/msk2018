<script>
    export default {
        data() {
            return {
                shownDate: new Date().getDate(),
                today: new Date().getDate()
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