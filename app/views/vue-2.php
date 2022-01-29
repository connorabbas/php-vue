<!-- Latest Vue CDN -->
<script src="https://unpkg.com/vue@next"></script>

<!-- Main template -->
<div class="container">
    <div id="app">
        {{ parentHeader.label + " " + parentHeader.globalCount }}
        <hr />
        <emit-rating-counter :parent="parentHeader" @emitrating="updateRating($event)"></emit-rating-counter>
    </div>
</div>

<!-- App -->
<script>
    const app =  Vue.createApp({
        data() {
            return {
                parentHeader: {
                    label: "Counter is at: ",
                    globalCount: 0
                }
            }
        },
        methods: {
            updateRating(eventVal) {
                this.parentHeader.globalCount += eventVal;
            }
        },
    });
</script>

<!-- Vue components from php (since we are using CDN version) -->
<?php
include_once 'app/views/vue-components/emit-rating-counter.php';?>

<!-- Mount -->
<script>
    app.mount('#app');
</script>