<?php
    require_once 'config.php';
        
        $sql  = "CREATE TABLE yt_channels ( ";
        $sql .= "id INT(11) not null auto_increment primary key, ";
        $sql .= "channel_name VARCHAR(350), ";
        $sql .= "channel_id VARCHAR(100), ";
        $sql .= "status TINYINT(2) ";
        $sql .= ")";
        $result_yt_channels = mysqli_query($link, $sql);
        if($result_yt_channels){
            $message['yt_channels'] = 'yt_channels Table created successfully!!';
        }
        
        $sql  = "CREATE TABLE yt_channel_data ( ";
        $sql .= "id BIGINT not null auto_increment primary key, ";
        $sql .= "yt_channel_id INT, ";
        $sql .= "viewCount INT, ";
        $sql .= "subscriberCount INT, ";
        $sql .= "videoCount INT, ";
        $sql .= "date TIMESTAMP ";
        $sql .= ")";
        $result_yt_channel_data = mysqli_query($link, $sql);
        if($result_yt_channel_data){
            $message['yt_channel_data'] = 'yt_channel_data Table created successfully!!';
        }
        
        if(isset($message['yt_channels'])){
            echo '<p style="text-align:center;">' . $message['yt_channels'] . '</p><br/>';
        }
        if(isset($message['yt_channel_data'])){
            echo '<p style="text-align:center;">' . $message['yt_channel_data'] . '</p><br/>';
        }
        if($result_yt_channels && $result_yt_channel_data){
            echo '<p style="text-align:center;">Installed Successfully! </p><br/>';
            echo '<p style="text-align:center;"><a href="index.php">Go to App Home</a></p>';
        }
