<?php
function includeAndCache($filePath, $cacheFile)
{
    global $cacheTime;

    // Check if cache file exists and is still valid
    if (!file_exists($cacheFile) || (time() - filemtime($cacheFile) > $cacheTime)) {
        echo "<!-- Cache is being regenerated for: $filePath -->";  // Debugging line
        ob_start();
        include($filePath); // Include the original file
        $content = ob_get_contents();
        ob_end_clean();

        // Save the content to cache file
        file_put_contents($cacheFile, $content);
    } else {
        echo "<!-- Using cached content for: $filePath -->";  // Debugging line
        // Load cached content if it's still valid
        $content = file_get_contents($cacheFile);
    }

    // Output the content directly (to be included in the page)
    echo $content;
}

