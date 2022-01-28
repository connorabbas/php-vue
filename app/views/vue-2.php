<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<div class="container">
    <div id="app">
        {{ parentHeader.label + " " + parentHeader.globalCount }}
        <hr />
        <emit-rating-counter :parent="parentHeader" @emitrating="updateRating($event)"></emit-rating-counter>
    </div>
</div>

<?php
// Vue components from php
include_once 'app/views/vue-components/emit-rating-counter.php';
?>

<script>
    new Vue({
        el: '#app',
        data: {
            parentHeader: {
                label: "Counter is at: ",
                globalCount: 0
            }
        },
        methods: {
            updateRating(eventVal) {
                this.parentHeader.globalCount += eventVal;
            }
        },
    })
</script>