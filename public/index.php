<?php

if ( !session_id() ) session_start();

require_once "../src/app/init.php";

new App();
