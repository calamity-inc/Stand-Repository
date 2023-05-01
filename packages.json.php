<?php
require "data/packages.php";

header("Content-Type: application/json");
echo json_encode($packages);
