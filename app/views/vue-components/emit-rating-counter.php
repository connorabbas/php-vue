<?php
ob_start();
?>
<!-- template -->
<div>
    <button @click="$emit('emitrating', -1);" class="btn btn-dark me-2">Thumbs Down</button>
    <button @click="$emit('emitrating', 1);" class="btn btn-dark">Thumbs Up</button>
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