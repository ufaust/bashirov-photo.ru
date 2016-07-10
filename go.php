<?php
$url = $_GET['url'];
?>
<b>wait for redirect</b>
<script>
setTimeout( 'location="<?=$url?>";', 1000 );
</script>