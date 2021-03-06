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
    <link rel="stylesheet/less" type="text/css" href="lib/twitter-bootstrap/lib/bootstrap.less">
    <script src="lib/less/less-1.1.5.min.js"></script>

    <link href="styles.css" rel="stylesheet" />
    <link href="pusher-chat-widget.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://js.pusher.com/3.0/pusher.min.js"></script>
    <script src="js/PusherChatWidget.js"></script>
    <script>

        $(document).ready(function(){
            $( "#chat" ).on( "click", function() {

                $.ajax({
                    url: 'php/chatHandler.php',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'action': 'getChannel',
                        'userId': '123'
                    },
                    complete: function(xhr, status) {

                    },
                    success: function(result) {
                        var pusher = new Pusher("51877f0ea58c0460ad37")

                        var chatWidget = new PusherChatWidget(pusher, {
                            appendTo: "#pusher_chat_widget",
                            channel:result.channelId
                        });
                    }
                })

            });

            $( "#chatClose" ).on( "click", function() {

                $("#pusher_chat_widget").empty();

            });
        });

    </script>
</head>
<body>
<div class="row">
    <div class="container" style="margin-top: 30px;">
    <a style="margin-left: 30px" id="chat" class="btn btn-primary">CHAT NOW</a>
    <a style="margin-left: 30px" id="chatClose" class="btn btn-primary">CLOSE</a>
    <div style="height: 50px;"></div>

    <div class="span5" id="pusher_chat_widget">
    </div>

    </div>
</div>

</body>
</html>