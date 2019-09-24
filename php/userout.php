<?php
session_start();
session_destroy();
echo "<script>
window.location.href='http://localhost:63342/Hopeless/vistor.html';
</script>";
?>
