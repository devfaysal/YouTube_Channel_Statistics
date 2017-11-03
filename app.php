<?php

require_once 'config.php';
$api_key = $yt_api;

$sql = "SELECT * FROM yt_channels";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {

    while ($channel_data = mysqli_fetch_array($result)) {
        $channel_list[$channel_data['id']] = $channel_data['channel_id'];
    }

    foreach ($channel_list as $id => $channel_id) {
        $url = 'https://www.googleapis.com/youtube/v3/channels?part=statistics&id=' . $channel_id . '&key=' . $api_key;

        $data = json_decode(file_get_contents($url));
        $viewCount = $data->items[0]->statistics->viewCount;
        $subscriberCount = $data->items[0]->statistics->subscriberCount;
        $videoCount = $data->items[0]->statistics->videoCount;

        $sql = "INSERT INTO yt_channel_data ( ";
        $sql .= "`yt_channel_id`, `viewCount`, `subscriberCount`, `videoCount` ";
        $sql .= ") VALUES ( ";
        $sql .= "$id, $viewCount, $subscriberCount, $videoCount ";
        $sql .= ")";

        $result = mysqli_query($link, $sql);
        if ($result) {
            echo $id . ': Successfull' . '<br/>';
        } else {
            echo $id . ': Failed' . '<br/>';
        }
    }
}  else {
    echo 'No Channels Found!! <a href="addChannel.php">Add some channel</a> and come back.';
}

