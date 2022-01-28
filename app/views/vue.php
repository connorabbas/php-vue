<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<div class="container">
    <div id="app">
    {{ parentHeader.label }}
    {{ parentHeader.globalCount }}
    <hr />
    <rating-counter title="Rating 1" :parent="parentHeader"></rating-counter>
    <rating-counter title="Rating 2" :parent="parentHeader"></rating-counter>
    <rating-counter title="Rating 3" :parent="parentHeader"></rating-counter>
    </div>
</div>

<?php
// Vue components from php
include_once 'app/views/vue-components/tester.php';
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