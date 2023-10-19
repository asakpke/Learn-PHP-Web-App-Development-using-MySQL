<?php
require '1.php';

class Lists extends Posts 
{
    function __construct()
    {
        parent::__construct();
    } // __construct()

    function __destruct() {
        parent::__destruct();
    } // __destruct()
} // class PListosts

$posts = new Lists();
$posts->list();