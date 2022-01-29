<!-- Main template -->
<div class="container my-5">
    <div id="app">
        <p class="mb-3">{{ parentHeader.label }}: {{ parentHeader.globalCount }}</p>
        <hr />
        <rating-counter title="Rating 1" :parent="parentHeader"></rating-counter>
        <rating-counter title="Rating 2" :parent="parentHeader"></rating-counter>
        <rating-counter title="Rating 3" :parent="parentHeader"></rating-counter>
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
                    label: "Global counter is at: ",
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