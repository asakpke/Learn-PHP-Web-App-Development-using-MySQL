<?php
require '../20.php';

class Shares extends Table 
{
    function __construct()
    {
        // parent::__CONSTRUCT();
        parent::__construct();

        // echo "<h1>Posts.__construct()</h1>";

        $this->tblName = 'shares';
        $this->auth = "INNER JOIN posts ON posts.id = shares.post_id WHERE user_id = {$_SESSION['user_id']}";
        $this->tblCols = array(
            '#' => 'id',
            'Title' => 'title',
            // 'Share' => 'share',
            'Share' => array(
                'blob' => 'share'
            ),
            'Status' => 'status',
        );
    } // __construct()

    function __destruct() {
        // echo "<h1>Posts.__destruct()</h1>";

        parent::__destruct();
    } // __destruct()
} // class Shares

// $shares = new Shares();
// $shares->list();