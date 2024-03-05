<?php
echo "##################################";
// Define the path to the upload directory
$uploadDir = __DIR__ . '/upload';

// Use glob() to get all the files and directories in the upload directory
$files = glob($uploadDir . '/*');

// Check if the directory is not empty
if ($files !== false) {
    // Loop through the files and directories
    foreach ($files as $file) {
        // Extract the file name from the full path
        $fileName = basename($file);
        echo $fileName . "<br>";
    }
} else {
    echo "No files found.";
}
