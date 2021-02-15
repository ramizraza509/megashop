<?php
 #unset($_SESSION['login_name']);
session_start();
session_unset();
session_destroy();
session_write_close();
header('Location:index.php');
?>
<script type="text/javascript">
//window.open('index.php','_self');
</script>