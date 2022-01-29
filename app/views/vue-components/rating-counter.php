<?php
ob_start();
?>
<!-- template -->
<div class="my-5">
    <h1 class="mb-3">{{ title }}</h1>
    <p class="mb-4">Amount: {{ count }}</p>
    <button @click="count--; parent.globalCount--;" class="btn btn-dark me-2">Thumbs Down</button>
    <button @click="count++; parent.globalCount++;" class="btn btn-dark">Thumbs Up</button>
</div>
<!-- template end -->
<?php
$tester = ob_get_clean();
?>

<script>
    app.component('rating-counter', {
        props: [
            'title', 
            'parent',
        ],
        data() {
            return {
                count: 0
            }
        },
        template:   `<?= $tester ?>`
    })
</script>