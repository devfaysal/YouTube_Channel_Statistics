<?php
    session_start();
    require_once 'config.php';
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM yt_channels WHERE `id` = $id";
        $result_set = mysqli_query($link, $sql);
        $channel_info = mysqli_fetch_array($result_set);
        if($channel_info){
            $sql = "SELECT * FROM yt_channel_data WHERE `yt_channel_id` = $id";

            $result = mysqli_query($link, $sql);
        }

    }else{
        header("Location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>YouTube Channel Monitor</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">YouTube Channel Monitor</h1>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-warning" href="index.php">Back</a>
                    <h3>Channel Statistics: <a target="_blank" href="https://www.youtube.com/channel/<?php echo $channel_info['channel_id']?>"><?php echo $channel_info['channel_name']; ?></a></h3>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>View Count</th>
                                <th>Today's View</th>
                                <th>Subscriber Count</th>
                                <th>Today's Subscriber</th>
                                <th>Video Count</th>
                                <th>Today's Video</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($channel = mysqli_fetch_array($result)):?>
                            <tr>
                                <td><?php echo $channel['viewCount']?></td>
                                <td><?php echo $channel['todaysView']?></td>
                                <td><?php echo $channel['subscriberCount']?></td>
                                <td><?php echo $channel['todaysSubscriber']?></td>
                                <td><?php echo $channel['videoCount']?></td>
                                <td><?php echo $channel['todaysVideo']?></td>
                                <td><?php echo $channel['date']?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
