<?php

ini_set('display_error', 'on');

$conn = mysqli_connect('localhost', 'root', 'root', 'caixamagica');

mysqli_autocommit($conn, true);