<?php
    session_start();
    require_once 'config.php';
    
    $sql = "SELECT * FROM yt_channels";
    $result = mysqli_query($link, $sql);
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
                    <?php if(isset($_SESSION['message'])):?>
                        <div class="alert alert-success">
                            <strong>Success!</strong> <?php echo $_SESSION['message'];?>
                        </div>
                    <?php unset($_SESSION['message']); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-12">
                    <h3>YouTube Channels</h3><a class="btn btn-success" href="addChannel.php">Add New</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Channel Name</th>
                                <th>Channel ID</th>
                                <th>Status</th>
                                <th>Statistics</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($channel = mysqli_fetch_array($result)):?>
                            <tr>
                                <td><?php echo $channel['id']; ?></td>
                                <td><?php echo $channel['channel_name']; ?></td>
                                <td><?php echo $channel['channel_id']; ?></td>
                                <td><?php echo $channel['status']; ?></td>
                                <td><a class="btn btn-info" href="channelStatistics.php?id=<?php echo $channel['id']; ?>">View</a></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <a target="_blank" class="btn btn-danger" href="app.php">Run the App now</a>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>