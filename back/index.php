<?php

$User = (object)[
    "id" => "1",
    "username" => "pef",
    "email" => "test@example.com",
];

$encodedUser = json_encode($User);

echo "<script type='text/javascript'> user={$encodedUser}</script>";
require(__DIR__ . "/react/index.html");
