<pre>
<?php

require __DIR__ . '/autoload.php';


$users = \App\Models\User::findAll();

var_dump($users);