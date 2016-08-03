<?php
include("Crawler.php");

$mycrawler=new Crawler();

$siteloginurl='http://www.getacoder.com/users/onlogin.php';//URL of form when perform login action
$parameters='username=Yourusername&passwd=Yourpassword';//the parameters the action script need
$mycrawler->logIn($siteloginurl,$parametes);

$url='http://www.getacoder.com/users/manage.php';//the url that we need to crawl. 
//need to authenticate with our own login process before attempting to login

$link=$mycrawler->crawlLinks($url);

//print the result

echo "<table width=\"100%\" border=\"1\">
  <tr>
    <td width=\"30%\"><div align=\"center\"><b>Link Text </b></div></td>
    <td width=\"30%\"><div align=\"center\"><b>Link</b></div></td>
    <td width=\"40%\"><div align=\"center\"><b>Text with Link</b> </div></td>
  </tr>";
for($i=0;$i<sizeof($link['link']);$i++)
{
echo "<tr>
    <td><div align=\"center\">".$link['text'][$i]."</div></td>
    <td><div align=\"center\">".$link['link'][$i]."</div></td>
    <td><div align=\"center\"><a href=\"".$link['link'][$i]."\">".$link['text'][$i]."</a></div></td>
  </tr>";		
		
}  
echo "</table>";
?>
