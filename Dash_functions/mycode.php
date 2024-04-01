<?php

// Directory where solved questions are stored
$solvedQuestionsDir = 'C:\wamp64\www\PrepPros\ide\temp';

// Check if directory exists and is a directory
if (file_exists($solvedQuestionsDir) && is_dir($solvedQuestionsDir)) {
    // Open the directory
    if ($handle = opendir($solvedQuestionsDir)) {
        // Display the folder name
        // echo "<h2>Solved Questions Folder: $solvedQuestionsDir</h2>";
        
        // Loop through each file in the directory
        while (false !== ($file = readdir($handle))) {
            // Skip "." and ".." directories
            if ($file != "." && $file != "..") {
                // Read the content of the file
                $content = file_get_contents("$solvedQuestionsDir/$file");
                // Display the filename
                echo "<h3>Solved Question from $file:</h3>";
                // Display the content in a code snippet form
                echo "<pre><code>$content</code></pre>";
            }
        }
        // Close the directory handle
        closedir($handle);
    } else {
        // Failed to open directory
        echo "Failed to open directory: $solvedQuestionsDir";
    }
} else {
    // Directory does not exist or is not a directory
    echo "Directory '$solvedQuestionsDir' does not exist or is not a directory.";
}
?>