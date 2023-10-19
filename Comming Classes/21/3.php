<?php
require '1.php';

class Blobs extends Shares 
{
    function __construct()
    {
        $this->showHTML = false;
        parent::__construct();        
    } // __construct()

    function __destruct() {
        parent::__destruct();
    } // __destruct()
} // class PListosts

$shares = new Blobs();

// $shares->blob(1, 'share');
$shares->blob($_GET['id'], 'share');