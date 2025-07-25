
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Rbots - multiplayer bots for Jedi Knight</title>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
	<meta name="reply-to" content="raynar@gamebox.net">
	<meta name="keywords" CONTENT="Rbots, Jedi Knight, Mysteries of the Sith, bot, bots"> 
	<meta name="description" CONTENT="Rbots - multiplayer bots for Jedi Knight.">
	<meta name="distribution" content="Global">
	<meta name="owner" content="brian@massassi.net">
	<meta name="author" content="raynar@gamebox.net">
	<meta name="language" content="en">
	<meta name="rating" content="General">
	<meta http-equiv="expires" content="0">

	<style type="text/css">

	a:link{text-decoration: none; color: #00FFFF; }
	a:visited{text-decoration: none; color: #00FFFF; }
	a:active{text-decoration: none; color: #00FFFF; }
	a:hover{text-decoration:underline; color: #00FFFF;}

	BODY, A, DIV, INPUT, TEXTAREA, TD, SELECT, OPTION
	{
	font-family:tahoma, verdana, arial, helvetica, sans-serif;
	}

	</style>

</head>

<BODY bgcolor="#000000" text="#C0C0C0" link="#00FFFF" vlink="#00FFFF" ALINK="#BFD9EA"><A NAME="#TOP"></a>

<center><img src="images/title.jpg" width="640" height="121" border="0" align="middle" alt="Rbots - Multiplayer bots for Jedi Knight"></center>
<p align="center">
</p>
<TABLE border=0 CELLPADDING=0 CELLSPACING=0 WIDTH="100%">
 <TR valign=top>
  <TD ALIGN=left width=150>
   <TABLE border=0 CELLPADDING=0 CELLSPACING=0 WIDTH="150">
    <TR VALIGN=top>
     <TD ALIGN=left>
       <TABLE border=0 CELLPADDING=0 CELLSPACING=0 WIDTH="150">
        <TR>
         <TD WIDTH="10">
         </TD>
         <TD>
	<!-- Menu options start here -->
<br>
<h3>Main</h3>
<FONT size="2">
<a href="index.php" name="News" title="News">News</a><br>
<a href="http://forums.massassi.net/vb3/forumdisplay.php?f=11" name="Cog Forum" title="Cog Forum">Cog Forum</a><br>
</font>
<br>
<h3>About Rbots</h3>
<FONT size="2">
<a href="about.php" name="What is Rbots?" title="What is Rbots?">What is Rbots?</a><br>
<a href="downloads.php" name="Downloads" title="Downloads">Downloads</a><br>
<a href="screenshots.php" name="Screenshots" title="Screenshots">Screenshots</a><br>
<a href="tutorial.php" name="Tutorials" title="Tutorials">Tutorials</a><br>
<a href="faq.php" name="FAQ" title="FAQ">FAQ</a><br>
<a href="reviews.php" name="Reviews" title="Reviews">Reviews</a><br>
<a href="techinfo.php" name="Technical Info" title="Technical Info">Technical Info</a><br>
<a href="problems.php" name="Problems Page" title="Problems Page">Problems Page</a><br>
<a href="staff.php" name="Contributors" title="Contributors">Contributors</a><br>
</font>
<h3>Email</h3>
<FONT size="2">
<a href="mailto:james.poll@gmail.com" title="Send email">James Bond</a><br>
<a href="mailto:raynar@gamebox.net" title="Send email">Raynar</a><br>
</font>
<br>
<br>
<h3>Hosted by</h3>
<a href="http://www.massassi.net/"><img src="images/massassi.gif" height="36" width="90" alt="The Massassi Temple: #1 Source For Everything Jedi Knight" border="0"></a>
<br>


	<!-- Menu options end here -->
      </TD>
      </TR>
      </TABLE>
     </TD>
    </TR>
   </TABLE>
  </TD>
  <TD align=left width="100%">
   <TABLE border=0 CELLPADDING=0 CELLSPACING=0 width="100%">
    <TR VALIGN=top>
     <TD ALIGN=left WIDTH="12">
     </TD>
     <TD ALIGN=left WIDTH="100%">
      <BR CLEAR=ALL>
      <!-- start body -->

<!-- News Here -->
<center><h2>Technical Info</h2></center>

<p>
This document is intended for use as an aide for those who wish to study the intricate details of the code. It is not designed to be used as a tutorial.
</p>
<p>
<h3>Cog Type ID</h3>
<table>
<tr><th width="80" align="left">Type ID</th><th width="350" align="left">Description</th><th align="left">Implemented By</th></tr>
<tr><td>1010</td><td>System</td><td>rbot-startup.cog</td></tr>
<tr><td>1020</td><td>Bot Srv</td><td>rbot-srv.cog</td></tr>
<tr><td>1022</td><td>Bot Srv (Force)</td><td>rbot-srv-force.cog</td></tr>
<tr><td>1023</td><td>Bot Srv (Weapons)</td><td>rbot-srv-weapons.cog</td></tr>
<tr><td>1030</td><td>Bot Skin</td><td>rbot-skin.cog</td></tr>
<tr><td>1041</td><td>Item Special Info</td><td>rbot-item-special.cog</td></tr>
<tr><td>1050</td><td>Backpack</td><td>rbot-backpack.cog</td></tr>
<tr><td>1060</td><td>Navigation</td><td>rbot-nav.cog</td></tr>
<tr><td>1061</td><td>Navigation Special Info</td><td>rbot-nav-special.cog</td></tr>
<tr><td>1070</td><td>Path</td><td>rbot-path.cog</td></tr>
<tr><td>2010</td><td>TODO</td><td>rbot-admin-selection.cog</td></tr>
<tr><td>3000</td><td>Customizer</td><td>ctf_main.cog, kfy_main.cog</td></tr>
</table>
<h3>Triggers</h3>
<table>
<tr><th width="80" align="left">Trigger</th><th width="350" align="left">Description</th><th align="left">Sender/Receiver</th></tr>
<tr><td>800</td><td>Game options</td><td>Broadcast from startup</td></tr>
<tr><td>910</td><td>Add bot</td><td>Sent from hotkey to startup</td></tr>
<tr><td>920</td><td>Remove bot</td><td>Sent from hotkey to startup</td></tr>
<tr><td>930</td><td>Set Difficulty level</td><td>Sent from hotkey to startup</td></tr>
<tr><td>949</td><td>Dead bot being removed before respawn</td><td>Sent from startup to botcam</td></tr>
<tr><td>950</td><td>Bot respawned</td><td>Broadcast from srv</td></tr>
<tr><td>960</td><td>Bot killed</td><td>Broadcast from srv</td></tr>
<tr><td>961</td><td>Player killed</td><td>Broadcast from player</td></tr>
<tr><td>970</td><td>Bot joined the game</td><td>Broadcast from srv</td></tr>
<tr><td>971</td><td>Bot left the game</td><td>Broadcast from srv</td></tr>
<tr><td>1001</td><td>Used by CTF/KFY</td><td>CTF/KFY</td></tr>
<tr><td>1002</td><td>Used by CTF</td><td>CTF</td></tr>
<tr><td>1003</td><td>Used by CTF</td><td>CTF</td></tr>
<tr><td>10001</td><td>Used by CTF</td><td>CTF</td></tr>
<tr><td>11010</td><td>Bot arrived at node</td><td>Broadcast from srv</td></tr>
<tr><td>11020</td><td>Special info</td><td>Sent to srv/srv-weapons</td></tr>
<tr><td>11031</td><td>Activate surface</td><td>Broadcast from activate and arrival</td></tr>
<tr><td>11032</td><td>Activate thing</td><td>Broadcast from activate and arrival</td></tr>
<tr><td>11040</td><td>Wait for arrival message</td><td>Sent to srv</td></tr>
<tr><td>11050</td><td>Arrival message</td><td>Sent to srv</td></tr>
<tr><td>12210</td><td>Update CTF info</td><td>Broadcast from CTF</td></tr>
<tr><td>12220</td><td>Update KFY info</td><td>Broadcast from KFY</td></tr>
<tr><td>15080</td><td>Update selected bot</td><td>Sent from hotkey to hotkey</td></tr>
<tr><td>101050</td><td>Request bot with highest score</td><td>Sent to startup</td></tr>
<tr><td>101051</td><td>High scorer response</td><td>Sent from startup</td></tr>
<tr><td>120000</td><td>Update bot target mask</td><td>Sent from hotkey to srv</td></tr>
<tr><td>1852000</td><td>Cog registers for auto-discovery</td><td>Broadcast from any discoverable cog type</td></tr>
</table>
<h3>Armed Mode</h3>
<table width="100%">
<tr><th width="80" align="left">Mode</th><th align="left">Description</th></tr>
<tr><td>0</td><td>unarmed</td></tr>
<tr><td>1</td><td>armed</td></tr>
<tr><td>2</td><td>saber</td></tr>
<tr><td>3</td><td>unarmed in water</td></tr>
<tr><td>4</td><td>armed in water</td></tr>
<tr><td>5</td><td>saber in water</td></tr>
</table>
<h3>Gamemode</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>Allow guns</td></tr>	
<tr><td>0x2</td><td>Allow sabers</td></tr>
<tr><td>0x4</td><td>Allow force</td></tr>
</table>
<h3>Respawn Mask (startup cog)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>Ignore walkplayer 1</td></tr>
<tr><td>0x2</td><td>Ignore walkplayer 2</td></tr>
<tr><td>0x4</td><td>Ignore walkplayer 3</td></tr>
<tr><td>0x8</td><td>Ignore walkplayer 4</td></tr>
<tr><td>0x10</td><td>Ignore walkplayer 5</td></tr>
<tr><td>0x20</td><td>Ignore walkplayer 6</td></tr>
<tr><td>0x40</td><td>Ignore walkplayer 7</td></tr>
<tr><td>0x80</td><td>Ignore walkplayer 8</td></tr>
<tr><td>0x100</td><td>Ignore walkplayer 9</td></tr>
<tr><td>0x200</td><td>Ignore walkplayer 10</td></tr>
<tr><td>0x400</td><td>Ignore walkplayer 11</td></tr>
<tr><td>0x800</td><td>Ignore walkplayer 12</td></tr>
<tr><td>0x1000</td><td>Ignore walkplayer 13</td></tr>
<tr><td>0x2000</td><td>Ignore walkplayer 14</td></tr>
<tr><td>0x4000</td><td>Ignore walkplayer 15</td></tr>
<tr><td>0x8000</td><td>Ignore walkplayer 16</td></tr>
<tr><td>0x10000</td><td>Ignore walkplayer 17</td></tr>
<tr><td>0x20000</td><td>Ignore walkplayer 18</td></tr>
<tr><td>0x40000</td><td>Ignore walkplayer 19</td></tr>
<tr><td>0x80000</td><td>Ignore walkplayer 20</td></tr>
<tr><td>0x100000</td><td>Ignore walkplayer 21</td></tr>
<tr><td>0x200000</td><td>Ignore walkplayer 22</td></tr>
<tr><td>0x400000</td><td>Ignore walkplayer 23</td></tr>
<tr><td>0x800000</td><td>Ignore walkplayer 24</td></tr>
<tr><td>0x1000000</td><td>Ignore walkplayer 25</td></tr>
<tr><td>0x2000000</td><td>Ignore walkplayer 26</td></tr>
<tr><td>0x4000000</td><td>Ignore walkplayer 27</td></tr>
<tr><td>0x8000000</td><td>Ignore walkplayer 28</td></tr>
<tr><td>0x10000000</td><td>Ignore walkplayer 29</td></tr>
<tr><td>0x20000000</td><td>Ignore walkplayer 30</td></tr>
<tr><td>0x40000000</td><td>Ignore walkplayer 31</td></tr>
<tr><td>0x80000000</td><td>Ignore walkplayer 32</td></tr>
</table>
<h3>Respawn Flags (startup cog)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>Spawn point is disabled (temporarily set after a bot spawn)</td></tr>	
<tr><td>0x2</td><td>Spawn point cannot be used by any bot in non-team play</td></tr>
<tr><td>0x4</td><td>Spawn point cannot be used by team 1 (red)</td></tr>
<tr><td>0x8</td><td>Spawn point cannot be used by team 2 (gold)</td></tr>
<tr><td>0x10</td><td>Spawn point cannot be used by team 3 (blue)</td></tr>
<tr><td>0x20</td><td>Spawn point cannot be used by team 4 (green)</td></tr>
</table>
<h3>Bot Mode (srv cog)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>Bot has left the path to seek items</td></tr>
<tr><td>0x2</td><td>Item cooldown (bot cannot use an item until after the cooldown)</td></tr>
<tr><td>0x4</td><td>Bot is trying to use the lightsaber to slash open a grate</td></tr>
<tr><td>0x8</td><td>Bot is allowed to fall without becoming 'lost'</td></tr>
<tr><td>0x10</td><td>(not used)</td></tr>
<tr><td>0x20</td><td>(not used)</td></tr>
<tr><td>0x40</td><td>(not used)</td></tr>
<tr><td>0x80</td><td>(not used)</td></tr>
<tr><td>0x100</td><td>(not used)</td></tr>
<tr><td>0x200</td><td>(not used)</td></tr>
<tr><td>0x400</td><td>(not used)</td></tr>
<tr><td>0x800</td><td>(not used)</td></tr>
<tr><td>0x1000</td><td>running backwards on current path</td></tr>
<tr><td>0x2000</td><td>(not used)</td></tr>
<tr><td>0x4000</td><td>(not used)</td></tr>
<tr><td>0x8000</td><td>(not used)</td></tr>
<tr><td>0x10000</td><td>(not used)</td></tr>
<tr><td>0x20000</td><td>(not used)</td></tr>
<tr><td>0x40000</td><td>(not used)</td></tr>
<tr><td>0x80000</td><td>bot disabled</td></tr>
<tr><td>0x100000</td><td>(not used)</td></tr>
<tr><td>0x200000</td><td>(not used)</td></tr>
<tr><td>0x400000</td><td>(not used)</td></tr>
<tr><td>0x800000</td><td>(not used)</td></tr>
<tr><td>0x1000000</td><td>(not used)</td></tr>
<tr><td>0x2000000</td><td>(not used)</td></tr>
<tr><td>0x4000000</td><td>item seeking disabled - bot will not stray from path to find items (bot will still pick up items along the path)</td></tr>
<tr><td>0x8000000</td><td>combat roaming disabled - bot will not stray from path to engage in combat (bot will still attack enemies along the path)</td></tr>
</table>
<h3>Weapon Mode (srv weapons cog)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>Weapon cooldown (bot cannot fire, block with saber, or change weapons until after the cooldown)</td></tr>
<tr><td>0x2</td><td>(not used)</td></tr>
<tr><td>0x4</td><td>Bot is trying to use the lightsaber to slash open a grate</td></tr>
</table>
<h3>Path Requirements (path cog)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>Requires CTF red key</td></tr>
<tr><td>0x2</td><td>Requires CTF gold key</td></tr>
</table>
<h3>Special Mode (special cogs)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>(not used)</td></tr>
<tr><td>0x2</td><td>(not used)</td></tr>
<tr><td>0x4</td><td>(not used)</td></tr>
<tr><td>0x8</td><td>(not used)</td></tr>
<tr><td>0x10</td><td>(not used)</td></tr>
<tr><td>0x20</td><td>(not used)</td></tr>
<tr><td>0x40</td><td>(not used)</td></tr>
<tr><td>0x80</td><td>disable cliff checks, allow bot to walk off cliffs</td></tr>
<tr><td>0x100</td><td>(not used)</td></tr>
<tr><td>0x200</td><td>(not used)</td></tr>
<tr><td>0x400</td><td>disable item seeking, move straight to next node</td></tr>
<tr><td>0x800</td><td>disable combat roaming, move straight to next node</td></tr>
<tr><td>0x1000</td><td>(DEPRECATED) use lightwaber to slash open grate</td></tr>
<tr><td>0x2000</td><td>disable fall checking, allow bot to fall without becoming 'lost'</td></tr>
</table>
<h3>Arrival Mode (arrival cog)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>Wait for arrival if running forward</td></tr>
<tr><td>0x2</td><td>Wait for arrival if running backward</td></tr>
</table>
<h3>Item Special Mode (item special cog)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>Ignore item</td></tr>
<tr><td>0x2</td><td>Skip LOS check when picking up item</td></tr>
</table>
<h3>Navigation Special Mode (nav special cog)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>Ignore node when finding nearest node for lost bot</td></tr>
</table>
<h3>Force powers (srv force cog)</h3>
<table width="100%">
<tr><th width="80" align="left">Flag</th><th align="left">Description</th></tr>
<tr><td>0x1</td><td>speed</td></tr>
<tr><td>0x2</td><td>jump</td></tr>
<tr><td>0x4</td><td>pull</td></tr>
<tr><td>0x8</td><td>seeing</td></tr>
<tr><td>0x10</td><td>healing</td></tr>
<tr><td>0x20</td><td>persuasion</td></tr>
<tr><td>0x40</td><td>blinding</td></tr>
<tr><td>0x80</td><td>absorb</td></tr>
<tr><td>0x100</td><td>protection</td></tr>
<tr><td>0x200</td><td>throw</td></tr>
<tr><td>0x400</td><td>grip</td></tr>
<tr><td>0x800</td><td>lightning</td></tr>
<tr><td>0x1000</td><td>destruction</td></tr>
<tr><td>0x2000</td><td>deadly sight</td></tr>
<tr><td>0x4000</td><td>lightside surge</td></tr>
<tr><td>0x8000</td><td>darkside surge</td></tr>
</table>

      <!-- end body -->
     </TD>
    </TR>
   </TABLE>
  </TD>
 </TR>
 <TR>
  <TD WIDTH="10">
  </TD>
  <TD>
   <TABLE WIDTH="100%">
   <TR>
    <TD>
     <BR>
     <BR>
     <BR>
    </TD>
   </TR>
   <TR>
    <TD ALIGN="LEFT">
         </TD>
    <TD ALIGN="RIGHT">
         </TD>
   </TR>
   </TABLE>
  </TD>
 </TR>
 </TABLE>
</BODY>
</HTML>
