<?php
  include 'inc/header.php';
  $pings="mindcrack";
  $index = true;
?>
            <h1>Please choose from one of our communities below</h1>
                <ul id="communities">
                    <li id="network" class="noAnimate">
                        <h1>DwD Network</h1>
                        <img class="minecraftBackgroundBlock" src="http://static.downwithdestruction.net/img/minecraft_background.png">
                    </li>
                    <li id="gta" class="noAnimate">
                        <img class="gtaBackgroundBlock" src="http://static.downwithdestruction.net/img/GTA-Online.jpg">
                    </li>
                    <!--
                    <li class="full" id="network" class="noAnimate">
                        <h1>DwD Network</h1>
                        <div class="status online" id="ping-mindcrack">v7.0.0</div>
                        <img class="minecraftBackgroundBlock"/>
                    </li>
                    <li class="full" id="gta" class="noAnimate">
                        <h1>GTA Online</h1>
                        <div class="status online" id="ping-mindcrack">v1.0.0</div>
                        <img class="gtaBackgroundBlock"/>
                    </li>
                    -->
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <div class="overlay"></div>
        <div class="overlayContent" id="overlay-network">
            <div class="content">
                <h1>DwD NetWork</h1>
                <p style="padding: 15px 15px 15px 15px;text-align: justify;letter-spacing: 2px;border-radius: 5px;text-shadow: 0px 0px 2px rgba(255, 0, 0, 0.4);box-shadow: 0 0 3px grey;margin: 10px 0;">DwD Network offers a veriety of Minecraft Servers to all. Gaining Member access is as simple as joining DwD Community. Upon joining you are then able to rank up par to meeting all the requirements at hand. DwD Network has friend community with friendly Staff Members. Everything is ran by the community, the Staff are there to keep things in order; not to predict your every action. They're various of Kingdoms you may join and conquoer together. If you are not the RPG fan boy type we have a Creative serve with avaiable plots for you to claim. Just simply type in a couple of commands and there you go. We hey Some of you out there do not even like creative. That is ok, we have a Survival server for all those Survival fanatics. And, if that is not even enough, DwD has a Events server specially 
designed by your fellow community members and Staff. </p>
                <div class="toolbar"><a class="btn pull-right btn-success" href="http://forums.downwithdestruction.net/board/dwd-network/">Visit Community</a></div>
            </div>
            <div class="sidebar">
                <h3>Server Status</h3>
                <table class="serviceStatus mini">
                    <tr>
                        <th>IP</th>
                        <td><em>hub.dwdg.net</em></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><span class="status" id="ping-mindcrack">....</span></td>
                    </tr>
                </table><br />
                <h3>Recent Topics</h3>
                <em></em>
            </div>
        </div>
        <div class="overlayContent" id="overlay-gta">
            <div class="content">
                <h1>GTA Online</h1>
                <p style="padding: 15px 15px 15px 15px;text-align: justify;letter-spacing: 2px;border-radius: 5px;text-shadow: 0px 0px 2px rgba(255, 0, 0, 0.4);box-shadow: 0 0 3px grey;margin: 10px 0;">More Information Coming Soon.</p>
                <div class="toolbar"><a class="btn pull-right btn-success" href="http://forums.downwithdestruction.net/board/gta-online/">Visit Community</a></div>
            </div>
            <div class="sidebar">
                <h3>Basic Information</h3>
                <table class="serviceStatus mini">
                    <tr>
                        <th>Crew Leader</th>
                        <td><em>DwD_MadMac</em></td>
                <h3>Announcements</h3>
                <table class="serviceStatus mini">
                    <tr>
                        <th>IP</th>
                        <td><em>Coming Soon...</em></td>
                    </tr>
                    <tr>
                        <th>Recent Threads</th>
                        <td><span class="status" id="ping-mindcrack">....
                        </span></td>
                    </tr>
                </table><br />
                <h3>Recent Topics</h3>
                <em></em>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.noAnimate').removeClass('noAnimate');
                
                $('#communities li').click(function() {
                    var id = $(this).attr('id');
                   $('.overlay').fadeIn(300,function() {
                       $('#overlay-'+id).fadeIn(300).addClass('overlayContentCurrent');
                   });
                });
                
                $('.overlay').click(function() {
                    $('.overlayContentCurrent').fadeOut(300,function() {
                        $('.overlay').fadeOut();
                    }).removeClass('overlayContentCurrent');
                });
                
                $.ajax({
                   url: 'php/pingStatus.php?q=mindcrack', 
                   success: function(msg) {
                       var result = $.parseJSON(msg);
                       $.each(result,function(key, val) {
                          if(val.status == '1') {
                              $('#ping-'+key).addClass('up').html('Online - '+val.players+" / "+val.max_players);
                          }
                          else if(val.status == '0') {
                              $('#ping-'+key).addClass('down').html('Server Offline');
                          }
                       });
                   }
                });
            });
        </script>
<?php include 'inc/footer.php'; ?>
