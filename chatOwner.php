<?php
// Start the session
session_start();

if(!isset($_SESSION["chatId"])){
    $_SESSION["chatId"] = 523161;
}

echo $_SESSION["chatId"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Chat Test</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet/less" type="text/css" href="lib/twitter-bootstrap/lib/bootstrap.less">
    <script src="lib/less/less-1.1.5.min.js"></script>

    <link href="styles.css" rel="stylesheet" />
    <link href="pusher-chat-widget.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://js.pusher.com/3.0/pusher.min.js"></script>
    <script src="js/PusherChatWidgetOwner.js"></script>
    <script>
        $(document).ready(function(){



            var pusher = new Pusher("51877f0ea58c0460ad37")

            var chatWidget = new PusherChatWidget(pusher, {
                appendTo: "#pusher_chat_widget",
                nickname: "Συνεργείο"
            });

            chatWidget._buildListHistory();

        });
    </script>
</head>
<body>
<div class="row">
    <div class="container" style="margin-top: 30px;">
    <div style="height: 50px;"></div>
    <div class="span5" id="pusher_chat_widget">
    </div>
    </div>
</div>

</body>
</html>