<!-- Latest Vue CDN -->
<script src="https://unpkg.com/vue@next"></script>

<!-- Main template -->
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
        }
    });
</script>

<!-- Vue components from php (since we are using CDN version) -->
<?php
include_once 'app/views/vue-components/rating-counter.php';
?>

<!-- Mount -->
<script>
    app.mount('#app');
</script>