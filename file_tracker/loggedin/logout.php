<?php
session_start();
unset($_SESSION["user_id"]);
?>
<script type="text/javascript">
location.href="../homepage.php";
</script>