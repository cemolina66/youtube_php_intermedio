<?php

session_start();
session_destroy();

header("Location: ../index.php?page=inicio_sesion");
exit;
