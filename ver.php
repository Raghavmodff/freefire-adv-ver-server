<?php
header('Content-Type: application/json');

$response = [
    "code" => 0,
    "is_server_open" => true,
    "is_firewall_open" => false,
    "cdn_url" => "https://dl.cdn.freefiremobile.com/advance/ABHotUpdates/",
    "abhotupdate_cdn_url" => "https://dl.cdn.freefiremobile.com/advance/ABHotUpdates/",
    "backup_cdn_url" => "https://dl.cdn.freefiremobile.com/advance/ABHotUpdates/",
    "img_cdn_url" => "https://dl.cdn.freefiremobile.com/common/",
    "need_track_hotupdate" => false,
    "latest_release_version" => "OB55",
    "min_hint_size" => 12,
    "remote_version" => "1.132.2",
    "server_url" => "https://login.advance.freefiremobile.com/",
    "is_review_server" => false
];

echo json_encode($response, JSON_UNESCAPED_SLASHES);
?>
