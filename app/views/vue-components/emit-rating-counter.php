<?php
ob_start();
?>
<!-- template -->
<div>
    <button @click="$emit('emitrating', -1);">Thumbs Down</button>
    <button @click="$emit('emitrating', 1);">Thumbs Up</button>
</div>
<!-- template end -->
<?php
$ratingCounter = ob_get_clean();
?>

<script>
    app.component('emit-rating-counter', {
        template:   `<?= $ratingCounter ?>`,
    })
</script>