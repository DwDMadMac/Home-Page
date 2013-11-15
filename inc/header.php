<?php
 
  /*$superIPs = array('69.256.187.113','82.31.224.156','68.81.212.81','24.208.40.91','localhost'); //Dunno IP Dunno IP Macs IP Lords IP
  $forum_url = 'http://downwithdestruction.net';
  if(!in_array($_SERVER['REMOTE_ADDR'],$superIPs)) {
      header('Location: '.$forum_url);
      exit();
  }*/

  //include 'php/api.php';

  //$visitor = XenForo_Visitor::getInstance();
  //$uID = $visitor->getUserID();
  //$user = $visitor->toArray();
  //$avatarUrl = str_replace(CURRENT_DOM, FORUMS_DOM, XenForo_Template_Helper_Core::callHelper('avatar', array($visitor->toArray(), "s", null, true)));
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>DownWithDestruction</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <?php if (isset($pings)) { ?>
            <script type="text/javascript">
                var result = "";
                var ajaxComplete = false;
                $.ajax({
                    url: 'php/pingStatus.php?q=<?php echo $pings; ?>', 
                    success: function(msg) {
                        result = $.parseJSON(msg);
                        ajaxComplete = true;
                        checkPing();
                    }
                });
                function checkPing() {
                    if(ajaxComplete == true) {
                        $.each(result,function(key, val) {
                            if(val.players != null) {
                                if(val == '1' || val.status == '1') {
                                    $('#ping-'+key).addClass('up').html('Online - '+val.players+" / "+val.max_players);
                                }
                                else if(val == '0' || val.status == '0') {
                                    $('#ping-'+key).addClass('down').html('Server Offline');
                                }
                            } else {
                                if(val == '1' || val.status == '1') {
                                    $('#ping-'+key).addClass('up').html('Up');
                                }
                                else if(val == '0' || val.status == '0') {
                                    $('#ping-'+key).addClass('down').html('Down');
                                }
                            }
                        });
                    }
                    else {
                        window.setTimeout("checkPing", 100);
                    }
                }
            </script>
        <?php } ?>
    </head>
    <body>
        <div class="header">
            <div class="clear"></div>
            <div class="navi">
                <ul class="navi-ul">
                    <li class="navi-li">
                        <a href="http://forums.downwithdestruction.net/">News</a>
                    </li>
                    <li class="navi-li">
                        <a href="http://forums.downwithdestruction.net/board/dwd-network/">Minecraft</a>
                    </li>
                    <li class="navi-li">
                        <a href="http://forums.downwithdestruction.net/board/gta-online/">GTA Online</a>
                    </li>
                    <li class="navi-li">
                        <a href="http://forums.downwithdestruction.net/members">Members</a>
                    </li>
                    <li class="navi-li">
                        <a href="http://forums.downwithdestruction.net/doc/terms-of-service/">Terms of Service</a>
                    </li>
                    <li class="navi-li">
                        <a href="http://forums.downwithdestruction.net/help">help</a>
                    </li>
                </ul>
            </div>
            <div class="headwrap">
                <!-- <img src="img/logo.png" class="logo" /> -->
                <div class="userbox">
                </div>
            </div>
        </div>
        <div class="wrap">
            <div class="innerWrap communities">
                <div class="alert alert-info">
                    <strong>Notice</strong> This HomePage is currently in <em>Beta</em>, it is likely that changes will occur.
                </div>
