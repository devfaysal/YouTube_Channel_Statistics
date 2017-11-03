<?php 
    session_start();
    require_once 'config.php';
    if(isset($_POST['add_channel'])){
        $channel_name = $_POST['channel_name'];
        $channel_id = $_POST['channel_id'];
        $status = $_POST['status'];
        
        $sql  = "INSERT INTO yt_channels ( ";
        $sql .= "`channel_name`, `channel_id`, `status` ";
        $sql .= ") VALUES ( ";
        $sql .= "'$channel_name', '$channel_id', $status ";
        $sql .= ")";
        
        $result = mysqli_query($link, $sql);
        if($result){
            $_SESSION['message'] = "Channel Added Successfully";
            header("Location: index.php");
        }
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
                    <h3 class="text-center">Add new YouTube Channel</h3>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="channel_name">Channel Name</label>
                            <input type="text" class="form-control" id="channel_name" name="channel_name" placeholder="Channel Name" required>
                        </div>
                        <div class="form-group">
                            <label for="channel_id">Channel ID</label>
                            <input type="text" class="form-control" id="channel_id" name="channel_id" placeholder="Channel ID" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <input type="submit" name="add_channel" class="btn btn-info" value="Add Channel" /> <a class="btn btn-warning" href="index.php">Back</a>
                    </form>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>