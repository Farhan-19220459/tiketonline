<?php

    require('views/essentials.php');

    session_start();
    session_destroy();
    redirect('index.php');

?>