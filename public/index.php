<?php

$storagePath = getenv("STORAGE_PATH");

if (!$storagePath) {
    $msg = "STORAGE_PATH not set";
} else if (!is_dir($storagePath)) {
    $msg = "path '$storagePath' is not a directory";
} else if (!is_writable($storagePath)) {
    $msg = "path '$storagePath' is not writable";
} else if (!touch($storagePath)) {
    $msg = "could not write to '$storagePath'";
} else {
    $msg = "wrote to storage";
}

echo "$msg\n";
