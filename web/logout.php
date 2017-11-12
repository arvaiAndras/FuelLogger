<?php

include __DIR__ . '/../src/boot.php';

logoutUser();

header("Location: login.php");
exit(0);