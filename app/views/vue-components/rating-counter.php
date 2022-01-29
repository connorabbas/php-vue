<?php
ob_start();
?>
<!-- template -->
<div>
    <h1>{{ title }}</h1>
    <button @click="count--; parent.globalCount--;">Thumbs Down</button>
    {{ count }}
    <button @click="count++; parent.globalCount++;">Thumbs Up</button>
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