
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
<tr><td width="80">930</td><td>Set Difficulty level - sent from hotkey to all bots</td></tr>
<tr><td width="80">940</td><td>Cycle number of bots - sent from hotkey to startup cog</td></tr>
<tr><td width="80">950</td><td>Confirmed respawn - sent from each bot back to startup cog</td></tr>
<tr><td width="80">960</td><td>Query thing number - sent to bot</td></tr>
<tr><td width="80">970</td><td>Return thing number - sent from bot</td></tr>
<tr><td width="80">990</td><td>Player killed by bot - sent from player cog to startup cog</td></tr>
<tr><td width="80">1000</td><td>Bot died</td></tr>
</table>
<p>
Effects sent from bot server cog to local bot client cog
Parameters: (0 - botid    1 - Thing number) 
</p>
<table width="100%">
<tr><td width="80">2000</td><td>Respawn effects</td></tr>
<tr><td width="80">2001</td><td>Play saber mount sounds</td></tr>
<tr><td width="80">2002</td><td>Play dismount saber sounds</td></tr>
<tr><td width="80">2003</td><td>Play gun mount sound (param(2) - gun type = 0,1,2)</td></tr>
<tr><td width="80">2004</td><td>Create smoke effects at bot position - used for deadly sight</td></tr>
<tr><td width="80">2100</td><td>Play saber block animation</td></tr>
<tr><td width="80">2101</td><td>Stop saber block animation</td></tr>
<tr><td width="80">3000</td><td>Fire weapon 0</td></tr>
<tr><td width="80">3001</td><td>Fire weapon 1</td></tr>
<tr><td width="80">3002</td><td>Fire weapon 2</td></tr>
<tr><td width="80">3003</td><td>Fire weapon 3</td></tr>
<tr><td width="80">3004</td><td>Fire weapon 4</td></tr>
<tr><td width="80">3005</td><td>Fire weapon 5</td></tr>
<tr><td width="80">3006</td><td>Fire weapon 6</td></tr>
<tr><td width="80">3007</td><td>Fire weapon 7</td></tr>
<tr><td width="80">3008</td><td>Fire weapon 8</td></tr>
<tr><td width="80">3009</td><td>Fire weapon 9</td></tr>
</table>
<br>
<table width="100%">
<tr><td width="80">10000</td><td>Bot requests new position</td></tr>
<tr><td width="80">10010</td><td>Nav cog busy - ask caller to retry</td></tr>
<tr><td width="80">11000</td><td>New position info sent from nav cog to bot</td></tr>
<tr><td width="80">11010</td><td>Special info request from bot to special cog</td></tr>
<tr><td width="80">11020</td><td>Special info reply from special cog to bot</td></tr>
<tr><td width="80">11030</td><td>Activate message sent to other cogs</td></tr>
<tr><td width="80">11040</td><td>Arrived message sent from other cogs to bot</td></tr>
<tr><td width="80">12000</td><td>Backpack taken by bot</td></tr>
<tr><td width="80">12001</td><td>Backpack info sent to bot</td></tr>
<tr><td width="80">12002</td><td>Backpack info sent to bot</td></tr>
<tr><td width="80">12003</td><td>Backpack info sent to bot</td></tr>
<tr><td width="80">12004</td><td>Backpack info sent to bot</td></tr>
<tr><td width="80">12010</td><td>Backpack info sent from bot or player</td></tr>
<tr><td width="80">12011</td><td>Backpack info sent from bot or player</td></tr>
<tr><td width="80">12012</td><td>Backpack info sent from bot or player</td></tr>
<tr><td width="80">12013</td><td>Backpack info sent from bot or player</td></tr>
<tr><td width="80">12200</td><td>Bot touched CTF flag</td></tr>
<tr><td width="80">12210</td><td>Update CTF info</td></tr>
<tr><td width="80">15010</td><td>Enter hotkey pressed</td></tr>
<tr><td width="80">15020</td><td>Setup hotkey pressed</td></tr>
<tr><td width="80">15030</td><td>Request botname</td></tr>
<tr><td width="80">15040</td><td>Returned botname</td></tr>
<tr><td width="80">15050</td><td>Pause/unpause bots during menu</td></tr>
<tr><td width="80">15060</td><td>Pause/unpause players during menu</td></tr>
<tr><td width="80">15070</td><td>Difficulty hotkey pressed</td></tr>
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
<h3>Botmode</h3>
<table width="100%">
<tr><td width="80">0x01</td><td>seek gun 0</td></tr>
<tr><td width="80">0x02</td><td>seek gun 1</td></tr>
<tr><td width="80">0x04</td><td>seek gun 2</td></tr>
<tr><td width="80">0x08</td><td>seek gun 3</td></tr>
<tr><td width="80">0x10</td><td>seek gun 4</td></tr>
<tr><td width="80">0x20</td><td>seek energy</td></tr>
<tr><td width="80">0x40</td><td>seek power</td></tr>
<tr><td width="80">0x80</td><td>seek rail dets</td></tr>
<tr><td width="80">0x100</td><td>seek therm dets</td></tr>
<tr><td width="80">0x200</td><td>seek seq mines</td></tr>
<tr><td width="80">0x400</td><td>seek health</td></tr>
<tr><td width="80">0x800</td><td>seek shields</td></tr>
<tr><td width="80">0x1000</td><td>run other direction</td></tr>
<tr><td width="80">0x2000</td><td>seek target</td></tr>
<tr><td width="80">0x4000</td><td>found target</td></tr>
<tr><td width="80">0x8000</td><td>under attack</td></tr>
<tr><td width="80">0x10000</td><td>alive</td></tr>
<tr><td width="80">0x20000</td><td>attacking target</td></tr>
<tr><td width="80">0x40000</td><td>cannot fire at target</td></tr>
<tr><td width="80">0x80000</td><td>waiting</td></tr>
<tr><td width="80">0x100000</td><td>slow</td></tr>
<tr><td width="80">0x200000</td><td>saber can block</td></tr>
<tr><td width="80">0x400000</td><td>force gripped</td></tr>
<tr><td width="80">0x800000</td><td>CTF attack mode (not in use)</td></tr>
<tr><td width="80">0x1000000</td><td>CTF defend mode (not in use)</td></tr>
<tr><td width="80">0x2000000</td><td>CTF freelance mode (not in use)</td></tr>
</table>
<h3>Path Info</h3>
<table width="100%">
<tr><td width="80">0x01</td><td>move forward only</td></tr>
<tr><td width="80">0x02</td><td>looping</td></tr>
</table>
<h3>CTF Path Info</h3>
<table width="100%">
<tr><td width="80">0x01</td><td>Red base forward - priority 1</td></tr>
<tr><td width="80">0x02</td><td>Red base reverse - priority 1</td></tr>
<tr><td width="80">0x04</td><td>Gold base forward - priority 1</td></tr>
<tr><td width="80">0x08</td><td>Gold base reverse - priority 1</td></tr>
<tr><td width="80">0x10</td><td>Red base forward - priority 2</td></tr>
<tr><td width="80">0x20</td><td>Red base reverse - priority 2</td></tr>
<tr><td width="80">0x40</td><td>Gold base forward - priority 2</td></tr>
<tr><td width="80">0x80</td><td>Gold base reverse - priority 2</td></tr>
<tr><td width="80">0x100</td><td>Red base forward - priority 3</td></tr>
<tr><td width="80">0x200</td><td>Red base reverse - priority 3</td></tr>
<tr><td width="80">0x400</td><td>Gold base forward - priority 3</td></tr>
<tr><td width="80">0x800</td><td>Gold base reverse - priority 3</td></tr>
<tr><td width="80">0x1000</td><td>move forward only</td></tr>
</table>
<h3>Special Nodes</h3>
<table width="100%">
<tr><td width="80">0x01</td><td>full stop</td></tr>
<tr><td width="80">0x02</td><td>slow</td></tr>
<tr><td width="80">0x04</td><td>jump forward</td></tr>
<tr><td width="80">0x08</td><td>jump backward</td></tr>
<tr><td width="80">0x10</td><td>lay mine</td></tr>
<tr><td width="80">0x20</td><td>activate forward</td></tr>
<tr><td width="80">0x40</td><td>activate backward</td></tr>
<tr><td width="80">0x80</td><td>wait forward</td></tr>
<tr><td width="80">0x100</td><td>wait backward</td></tr>
<tr><td width="80">0x200</td><td>run fast</td></tr>
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
<h3>Characteristics</h3>
<table width="100%">
<tr><td width="80">0x01</td><td>Attack</td></tr>
<tr><td width="80">0x02</td><td>Defend</td></tr>
<tr><td width="80">0x04</td><td>Freelance</td></tr>
<tr><td width="80">0x08</td><td>unused</td></tr>
<tr><td width="80">0x10</td><td>unused</td></tr>
<tr><td width="80">0x20</td><td>unused</td></tr>
<tr><td width="80">0x40</td><td>unused</td></tr>
<tr><td width="80">0x80</td><td>unused</td></tr>
<tr><td width="80">0x100</td><td>unused</td></tr>
<tr><td width="80">0x200</td><td>unused</td></tr>
<tr><td width="80">0x400</td><td>unused</td></tr>
<tr><td width="80">0x800</td><td>unused</td></tr>
<tr><td width="80">0x1000</td><td>unused</td></tr>
<tr><td width="80">0x2000</td><td>unused</td></tr>
<tr><td width="80">0x4000</td><td>unused</td></tr>
<tr><td width="80">0x8000</td><td>unused</td></tr>
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
