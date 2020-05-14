<h1>YouTube Channel Statistics</h1>
<p>This small app can store daily statistics of YouTube channel</p>

![ytcm1](https://user-images.githubusercontent.com/16212149/32591004-81a3588c-c547-11e7-8063-a0e4971ed939.png)


![ytcm2](https://user-images.githubusercontent.com/16212149/32591021-98654f08-c547-11e7-94de-531e8644da03.png)

<p>Currently it can store:</p>
<ul>
    <li>Daily View Count</li>
    <li>Daily Subscriber Count</li>
    <li>Daily uploaded Video Count</li>
</ul>

<p>Once you setup the app, you can add as much YouTube channel as you wish</p>
<p>Requirements</p>
<ul>
    <li>Server that can run php</li>
    <li>MySQL/MariaDB</li>
    <li>Cron Job (If you want the app to run itself daily at a certain time)</li>
</ul>

<p>Setup</p>
<ul>
    <li>Download the zip file <a href="https://github.com/iamfaysal/YouTube_Channel_Statistics/archive/master.zip">YouTube_Channel_Statistics</a></li>
    <li>Or using git- <code> $ git clone https://github.com/iamfaysal/YouTube_Channel_Statistics.git </code></li>
    <li>Copy the config.sample.php file to config.php</li>
    <li>Add database credentials to config.php</li>
    <li>Add YouTube API key to config.php Learn How to get an YouTube Data API from <a target="_blank" href="https://www.youtube.com/watch?v=SzlG5Qnjd4Y">Here</a></li>
    <li>Run yourdomain.com/directory/install.php</li>
    <li>After successful installation, remove the install.php file </li>
    <li>Enjoy! add youtube channel</li>
    <li>You can run the app manually to store the statistics of the channel you added or you can add a Cron job to run yourdomain/directory/app.php for you at a certain time everyday. Learn how to setup cron job in cpanel from <a target="_blank" href="https://www.youtube.com/watch?v=WzIqEJkK_pM">here</a> </li>

</ul>

<p>If you have any question, feel free to contact me: devfaysal@gmail.com</p>
