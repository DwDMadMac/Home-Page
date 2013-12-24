<?php $pings="smtp;imap;pop3;mysql;teamspeak;jenkins;mindcrack;test-mindcrack;creative-mindcrack;tekkit"; include 'inc/header.php'; ?>
<h1>Service Status</h1>
<table class="serviceStatus">
    <tr>
        <th>Email SMTP</th>
        <td><span class="status" id="ping-smtp">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>Email IMAP</th>
        <td><span class="status" id="ping-imap">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>Email POP3</th>
        <td><span class="status" id="ping-pop3">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>MySQL Server</th>
        <td><span class="status" id="ping-mysql">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>TeamSpeak Server</th>
        <td><span class="status" id="ping-teamspeak">Checking...</span></td>
        <td></td>
    </tr>
</table>
<table class="serviceStatus">
    <tr>
        <th>Jenkins CI Server</th>
        <td><span class="status" id="ping-jenkins">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>Minecraft Hub</th>
        <td><span class="status" id="ping-mindcrack">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>Minecraft Lobby</th>
        <td><span class="status" id="ping-test-mindcrack">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>MindCrack RPG</th>
        <td><span class="status" id="ping-creative-mindcrack">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>MindCrack Creative</th>
        <td><span class="status" id="ping-creative-mindcrack">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>MindCrack Events</th>
        <td><span class="status" id="ping-creative-mindcrack">Checking...</span></td>
        <td></td>
    </tr>
    <tr>
        <th>MindCrack Test</th>
        <td><span class="status" id="ping-creative-mindcrack">Checking...</span></td>
        <td></td>
    </tr>
</table>
<div class="clear"></div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.noAnimate').removeClass('noAnimate');
        checkPing();
    });
</script>
<?php include 'inc/footer.php'; ?>