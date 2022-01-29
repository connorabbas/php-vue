<!-- Main template -->
<div class="container my-5">
    <div id="app">
        <p class="mb-3">{{ parentHeader.label + " " + parentHeader.globalCount }}</p>
        <hr />
        <emit-rating-counter :parent="parentHeader" @emitrating="updateRating($event)"></emit-rating-counter>
    </div>
</div>

<!-- Latest Vue CDN -->
<script src="https://unpkg.com/vue@next"></script>

<!-- App -->
<script>
    const app = Vue.createApp({
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