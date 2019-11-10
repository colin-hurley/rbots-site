
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
<h3>Triggers</h3>
<table width="100%">
<tr><td width="80">800</td><td>Game options - sent from startup cog to bot</td></tr>
<tr><td width="80">900</td><td>Respawn bot - sent from startup cog to bot</td></tr>
<tr><td width="80">901</td><td>Kill & remove bot - sent from startup cog to bot</td></tr>
<tr><td width="80">910</td><td>Add bot - sent from hotkey to startup cog</td></tr>
<tr><td width="80">920</td><td>Remove bot - sent from hotkey to startup cog</td></tr>
<tr><td width="80">930</td><td>Set Difficulty level - sent from hotkey to all bots</td></tr>
<tr><td width="80">940</td><td>Cycle number of bots - sent from hotkey to startup cog</td></tr>
<tr><td width="80">950</td><td>Bot has respawned</td></tr>
<tr><td width="80">960</td><td>Query thing number - sent to bot</td></tr>
<tr><td width="80">970</td><td>Return thing number - sent from bot</td></tr>
<tr><td width="80">990</td><td>Player killed by bot - sent from player cog to startup cog</td></tr>
<tr><td width="80">1000</td><td>Bot died</td></tr>
<tr><td width="80">1001</td><td>Used by CTF</td></tr>
<tr><td width="80">1002</td><td>Used by CTF</td></tr>
<tr><td width="80">1003</td><td>Used by CTF</td></tr>
<tr><td width="80">10000</td><td>Bot requests new position from nav cog</td></tr>
<tr><td width="80">10001</td><td>Used by CTF</td></tr>
<tr><td width="80">11000</td><td>New position info sent from nav cog to bot</td></tr>
<tr><td width="80">11010</td><td>Bot arrived at node, sent from srv</td></tr>
<tr><td width="80">11020</td><td>Special info sent from special cog to bot</td></tr>
<tr><td width="80">11030</td><td>Activate message sent to other cogs</td></tr>
<tr><td width="80">11040</td><td>Wait for arrival message sent from other cogs to bot</td></tr>
<tr><td width="80">11050</td><td>Arrival message sent from other cogs to bot</td></tr>
<tr><td width="80">11060</td><td>Request for special nav info sent from nav cog</td></tr>
<tr><td width="80">11070</td><td>Response for special nav info sent to nav cog</td></tr>
<tr><td width="80">12000</td><td>Backpack taken by bot</td></tr>
<tr><td width="80">12001</td><td>Backpack info sent to bot (part 1)</td></tr>
<tr><td width="80">12002</td><td>Backpack info sent to bot (part 2)</td></tr>
<tr><td width="80">12003</td><td>Backpack info sent to bot (part 3)</td></tr>
<tr><td width="80">12004</td><td>Backpack info sent to bot (part 4)</td></tr>
<tr><td width="80">12010</td><td>Backpack info sent from bot or player (part 1)</td></tr>
<tr><td width="80">12011</td><td>Backpack info sent from bot or player (part 2)</td></tr>
<tr><td width="80">12012</td><td>Backpack info sent from bot or player (part 3)</td></tr>
<tr><td width="80">12013</td><td>Backpack info sent from bot or player (part 4)</td></tr>
<tr><td width="80">12200</td><td>Bot touched CTF flag</td></tr>
<tr><td width="80">12210</td><td>Update CTF info</td></tr>
<tr><td width="80">15080</td><td>Update selected bot (used by hotkeys)</td></tr>
<tr><td width="80">100000</td><td>Bot srv cog requests update from srv2 cog</td></tr>
<tr><td width="80">100001</td><td>Bot srv2 cog responds to update request (part 1)</td></tr>
<tr><td width="80">100002</td><td>Bot srv2 cog responds to update request (part 2)</td></tr>
<tr><td width="80">100003</td><td>Bot srv cog sends damage update to srv2 cog</td></tr>
<tr><td width="80">101000</td><td>Bot srv2 cog tells srv cog to change weapon</td></tr>
<tr><td width="80">101010</td><td>Bot srv2 cog tells srv cog to pick up an item</td></tr>
<tr><td width="80">101020</td><td>Bot srv2 cog tells srv cog to fire weapon</td></tr>
<tr><td width="80">101025</td><td>Bot srv force cog tells cli cog to play sound effect (not fully implemented)</td></tr>
<tr><td width="80">101026</td><td>Bot srv force cog tells cli cog to stop playing sound effect (not fully implemented)</td></tr>
<tr><td width="80">101030</td><td>Bot srv force cog tells srv2 cog that a force power was used against the bot</td></tr>
<tr><td width="80">101040</td><td>Bot srv force cog sends mana update to srv2 cog</td></tr>
<tr><td width="80">101050</td><td>Ask startup cog for bot with highest score (sent from srv2 to startup)</td></tr>
<tr><td width="80">101051</td><td>Startup cog responds with high scorer</td></tr>
<tr><td width="80">101060</td><td>Bot srv cog tells skin cog to create a new bot thing</td></tr>
<tr><td width="80">101061</td><td>Skin cog responds with created bot thing number</td></tr>
<tr><td width="80">101062</td><td>Bot srv cog tells skin cog to change bot's weapon mesh</td></tr>
<tr><td width="80">101999</td><td>Bot uses force power against player (e.g. blinding, deadly sight), sent from srv force cog to player cog</td></tr>
<tr><td width="80">120000</td><td>Update bot target mask, sent from hotkey to srv2 cog</td></tr>
<tr><td width="80">1852000</td><td>Cog registers for auto-discovery</td></tr>
</table>
<h3>Armed Mode</h3>
<table width="100%">
<tr><td width="80">0</td><td>unarmed</td></tr>
<tr><td width="80">1</td><td>armed</td></tr>
<tr><td width="80">2</td><td>saber</td></tr>
<tr><td width="80">3</td><td>unarmed in water</td></tr>
<tr><td width="80">4</td><td>armed in water</td></tr>
<tr><td width="80">5</td><td>saber in water</td></tr>
</table>
<h3>Gamemode</h3>
<table width="100%">
<tr><td width="80">0x01</td><td>Allow guns</td></tr>	
<tr><td width="80">0x02</td><td>Allow sabers</td></tr>
<tr><td width="80">0x04</td><td>Allow force</td></tr>
<tr><td width="80">0x08</td><td>Teams</td></tr>
</table>
<h3>Respawn Mask (startup cog)</h3>
<table width="100%">
<tr><td width="80">0x1</td><td>Ignore walkplayer 1</td></tr>	
<tr><td width="80">0x2</td><td>Ignore walkplayer 2</td></tr>
<tr><td width="80">0x4</td><td>Ignore walkplayer 3</td></tr>
<tr><td width="80">0x8</td><td>Ignore walkplayer 4</td></tr>
<tr><td width="80">0x10</td><td>Ignore walkplayer 5</td></tr>	
<tr><td width="80">0x20</td><td>Ignore walkplayer 6</td></tr>
<tr><td width="80">0x40</td><td>Ignore walkplayer 7</td></tr>
<tr><td width="80">0x80</td><td>Ignore walkplayer 8</td></tr>
<tr><td width="80">0x100</td><td>Ignore walkplayer 9</td></tr>	
<tr><td width="80">0x200</td><td>Ignore walkplayer 10</td></tr>
<tr><td width="80">0x400</td><td>Ignore walkplayer 11</td></tr>
<tr><td width="80">0x800</td><td>Ignore walkplayer 12</td></tr>
<tr><td width="80">0x1000</td><td>Ignore walkplayer 13</td></tr>	
<tr><td width="80">0x2000</td><td>Ignore walkplayer 14</td></tr>
<tr><td width="80">0x4000</td><td>Ignore walkplayer 15</td></tr>
<tr><td width="80">0x8000</td><td>Ignore walkplayer 16</td></tr>
<tr><td width="80">0x10000</td><td>Ignore walkplayer 17</td></tr>	
<tr><td width="80">0x20000</td><td>Ignore walkplayer 18</td></tr>
<tr><td width="80">0x40000</td><td>Ignore walkplayer 19</td></tr>
<tr><td width="80">0x80000</td><td>Ignore walkplayer 20</td></tr>
<tr><td width="80">0x100000</td><td>Ignore walkplayer 21</td></tr>	
<tr><td width="80">0x200000</td><td>Ignore walkplayer 22</td></tr>
<tr><td width="80">0x400000</td><td>Ignore walkplayer 23</td></tr>
<tr><td width="80">0x800000</td><td>Ignore walkplayer 24</td></tr>
<tr><td width="80">0x1000000</td><td>Ignore walkplayer 25</td></tr>	
<tr><td width="80">0x2000000</td><td>Ignore walkplayer 26</td></tr>
<tr><td width="80">0x4000000</td><td>Ignore walkplayer 27</td></tr>
<tr><td width="80">0x8000000</td><td>Ignore walkplayer 28</td></tr>
<tr><td width="80">0x10000000</td><td>Ignore walkplayer 29</td></tr>	
<tr><td width="80">0x20000000</td><td>Ignore walkplayer 30</td></tr>
<tr><td width="80">0x40000000</td><td>Ignore walkplayer 31</td></tr>
<tr><td width="80">0x80000000</td><td>Ignore walkplayer 32</td></tr>
</table>
<h3>Respawn Flags (startup cog)</h3>
<table width="100%">
<tr><td width="80">0x1</td><td>Spawn point is disabled (temporarily set after a bot spawn)</td></tr>	
<tr><td width="80">0x2</td><td>Spawn point cannot be used by any bot in non-team play</td></tr>
<tr><td width="80">0x4</td><td>Spawn point cannot be used by team 1 (red)</td></tr>
<tr><td width="80">0x8</td><td>Spawn point cannot be used by team 2 (gold)</td></tr>
<tr><td width="80">0x10</td><td>Spawn point cannot be used by team 3 (blue)</td></tr>
<tr><td width="80">0x20</td><td>Spawn point cannot be used by team 4 (green)</td></tr>
</table>
<h3>Botmode</h3>
<table width="100%">
<tr><td width="80">0x01</td><td>seek gun 0 (conc rifle)</td></tr>
<tr><td width="80">0x02</td><td>seek gun 1 (raildet)</td></tr>
<tr><td width="80">0x04</td><td>seek gun 2 (repeater)</td></tr>
<tr><td width="80">0x08</td><td>seek gun 3 (st rifle)</td></tr>
<tr><td width="80">0x10</td><td>seek gun 4 (crossbow)</td></tr>
<tr><td width="80">0x20</td><td>seek energy cells</td></tr>
<tr><td width="80">0x40</td><td>seek power cells</td></tr>
<tr><td width="80">0x80</td><td>seek rail charges</td></tr>
<tr><td width="80">0x100</td><td>seek therm dets</td></tr>
<tr><td width="80">0x200</td><td>seek seq mines</td></tr>
<tr><td width="80">0x400</td><td>seek health</td></tr>
<tr><td width="80">0x800</td><td>seek shields</td></tr>
<tr><td width="80">0x1000</td><td>running backwards on current path</td></tr>
<tr><td width="80">0x2000</td><td>seek target (not in use?)</td></tr>
<tr><td width="80">0x4000</td><td>has target</td></tr>
<tr><td width="80">0x8000</td><td>under attack</td></tr>
<tr><td width="80">0x10000</td><td>alive</td></tr>
<tr><td width="80">0x20000</td><td>attacking target</td></tr>
<tr><td width="80">0x40000</td><td>cannot fire at target (i.e. weapon remounting)</td></tr>
<tr><td width="80">0x80000</td><td>(not used)</td></tr>
<tr><td width="80">0x100000</td><td>move slowly</td></tr>
<tr><td width="80">0x200000</td><td>swinging saber (i.e. not able to block)</td></tr>
<tr><td width="80">0x400000</td><td>force gripped</td></tr>
<tr><td width="80">0x800000</td><td>CTF attack characteristic (not in use)</td></tr>
<tr><td width="80">0x1000000</td><td>CTF defend characteristic (not in use)</td></tr>
<tr><td width="80">0x2000000</td><td>CTF freelance characteristic (not in use)</td></tr>
<tr><td width="80">0x4000000</td><td>ignore items, move straight to next node</td></tr>
</table>
<h3>Path Requirements</h3>
<table width="100%">
<tr><td width="80">0x1</td><td>Requires CTF red key</td></tr>
<tr><td width="80">0x2</td><td>Requires CTF gold key</td></tr>
</table>
<h3>Special Nodes</h3>
<table width="100%">
<tr><td width="80">0x01</td><td>full stop (apparently not implemented yet)</td></tr>
<tr><td width="80">0x02</td><td>slow</td></tr>
<tr><td width="80">0x04</td><td>jump forward</td></tr>
<tr><td width="80">0x08</td><td>jump backward</td></tr>
<tr><td width="80">0x10</td><td>lay mine</td></tr>
<tr><td width="80">0x20</td><td>activate forward</td></tr>
<tr><td width="80">0x40</td><td>activate backward</td></tr>
<tr><td width="80">0x80</td><td>(not used)</td></tr>
<tr><td width="80">0x100</td><td>(not used)</td></tr>
<tr><td width="80">0x200</td><td>run fast</td></tr>
<tr><td width="80">0x400</td><td>ignore items, move straight to next node</td></tr>
</table>
<h3>Navigation Special Nodes</h3>
<table width="100%">
<tr><td width="80">0x1</td><td>Ignore node when finding nearest node for lost bot</td></tr>
</table>
<h3>Force powers</h3>
<table width="100%">
<tr><td width="80">0x01</td><td>speed</td></tr>
<tr><td width="80">0x02</td><td>jump</td></tr>
<tr><td width="80">0x04</td><td>pull</td></tr>
<tr><td width="80">0x08</td><td>seeing</td></tr>
<tr><td width="80">0x10</td><td>healing</td></tr>
<tr><td width="80">0x20</td><td>persuasion</td></tr>
<tr><td width="80">0x40</td><td>blinding</td></tr>
<tr><td width="80">0x80</td><td>absorb</td></tr>
<tr><td width="80">0x100</td><td>protection</td></tr>
<tr><td width="80">0x200</td><td>throw</td></tr>
<tr><td width="80">0x400</td><td>grip</td></tr>
<tr><td width="80">0x800</td><td>lightning</td></tr>
<tr><td width="80">0x1000</td><td>destruction</td></tr>
<tr><td width="80">0x2000</td><td>deadly sight</td></tr>
<tr><td width="80">0x4000</td><td>lightside surge</td></tr>
<tr><td width="80">0x8000</td><td>darkside surge</td></tr>
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
