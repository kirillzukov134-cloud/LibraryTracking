<?php
require __DIR__ . '/../helpers/helpers.php';
session_start();
session_destroy();
redirect('/../index.php');