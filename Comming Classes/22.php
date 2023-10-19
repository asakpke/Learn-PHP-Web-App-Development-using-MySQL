<?php
require '20.php';

class Dashboard extends Table 
{
    function __construct()
    {
        parent::__construct();
        $this->tblName = 'posts';
    } // __construct()

    function __destruct() {
        parent::__destruct();
    } // __destruct()
} // class Posts

$dashboard = new Dashboard();
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, exercitationem minima ab placeat reiciendis cum expedita veniam ipsum provident iure neque nulla consequatur harum dolores ipsa quis, maxime sequi. Nisi.</p>
</main>