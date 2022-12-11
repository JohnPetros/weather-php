<?php
if (isset($_SESSION["error_msg"])) {
    echo '
      <script>
        alert("' . $_SESSION["error_msg"] . '")
      </script>
      ';
}
unset($_SESSION['error_msg']);
session_destroy();
?>