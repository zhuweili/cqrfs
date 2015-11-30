<?php

session_start();
session_unset();
session_destroy();
echo "log out successfully! Please refresh the pervious pages!";
?>