<?php

session_start();
unset($_SESSION['username']);
session_destroy();

echo "
<script>
alert('Anda Berhasil Logout');
window.location = '/e-ticketing airplane/auth/login/login.php'

</script>
";

?>