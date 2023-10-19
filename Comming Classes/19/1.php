<?php
require '../20.php';

class Posts extends Table 
{
    function __construct()
    {
        // parent::__CONSTRUCT();
        parent::__construct();

        // echo "<h1>Posts.__construct()</h1>";

        $this->tblName = 'posts';
        $this->auth = "WHERE user_id = {$_SESSION['user_id']}";
        $this->tblCols = array(
            '#' => 'id',
            'Title' => 'title',
            'Body' => 'body',
            'Status' => 'status',
        );
    } // __construct()

    function __destruct() {
        // echo "<h1>Posts.__destruct()</h1>";

        parent::__destruct();
    } // __destruct()
} // class Posts

// $posts = new Posts();
// $posts->list();