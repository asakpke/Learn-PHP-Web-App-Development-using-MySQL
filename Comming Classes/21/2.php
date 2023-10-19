<?php
require '1.php';

class Lists extends Shares 
{
    function __construct()
    {
        parent::__construct();
    } // __construct()

    function __destruct() {
        parent::__destruct();
    } // __destruct()
} // class PListosts

$shares = new Lists();
$shares->list();