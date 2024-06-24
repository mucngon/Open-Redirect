<?php
$whitelist = [
    'http://trustedpartner.com',
    'http://anothertrustedpartner.com'
];

if (isset($_GET['url'])) {
    $url = $_GET['url'];
    if (in_array($url, $whitelist)) {
        header("Location: $url");
        exit();
    } else {
        echo "URL không hợp lệ.";
    }
} else {
    echo "No URL provided.";
}

// Không cần thẻ đóng PHP ở đây
