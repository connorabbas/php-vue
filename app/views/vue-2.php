<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<div id="app">
    {{ parentHeader.label + " " + parentHeader.globalCount }}
    <hr />
    <rating-counter :parent="parentHeader" @increment="parentHeader.globalCount+=$event"></rating-counter>
</div>

<?php
// Vue components from php
include_once 'app/views/vue-components/rating-counter.php';
?>

<script>
    new Vue({
        el: '#app',
        data: {
            parentHeader: {
                label: "Counter is at: ",
                globalCount: 0
            }
        }
    })
</script>