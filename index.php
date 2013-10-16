<?php

include_once($_SERVER['DOCUMENT_ROOT']."/includes/functions.php");
include_once($_SERVER['DOCUMENT_ROOT']."/includes/Database.class.php");

if($_SERVER['REMOTE_ADDR']!=IP_ADDRESS_MYMONEY ){
	mailDebugReport("Someone is trying to browse the private page","");
	header("location: http://www.lifequotes4u.co.uk");
	die();
}



?>

<html>
<head>

    
</head>
<body>
<h1>Accessing Calendar Test</h1>
<p>http://msdn.microsoft.com/en-us/library/live/hh550837.aspx</p>
<p>uses oAuth to login. stores auth info in cookies. in general the libary handles the cookies</p>
<p>its makes calls tothe REST api</p>
<p>&nbsp;</p>
<p>first call should be to WL.login or WL.init</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>can also use JSON: http://msdn.microsoft.com/en-us/library/live/hh243644.aspx</p>
<p>To have Live Connect recognize your app, you need to configure your app   with a few settings, depending on your app's type. For Windows Store   apps, you get these settings at the <a href="http://go.microsoft.com/fwlink/p/?LinkId=233762">Windows Store Dashboard</a>. For all other app types, you get these settings at the <a href="http://go.microsoft.com/fwlink/p/?LinkId=193157">Live Connect app management site</a>. At either site, sign in with a Microsoft account and follow the on-screen directions. For more info, see <a href="http://msdn.microsoft.com/en-us/library/live/hh826541.aspx">Configuring your app</a>.</p>
<p>App Name: LQ4UTest on lobo__@hotmail.com</p>
<div>
  <div>
    <label id="lblAppId" for="appId">Client ID:</label>
  </div>
  <div>
    <div id="appId">0000000040109F06</div>
    This is a unique identifier for your application. </div>
</div>
<div id="rowSecretKey">
  <div>
    <label id="lblSecretKey" for="lblSecretKeyValue"> Client secret (v1): </label>
  </div>
  <div>
    <div>
      <label id="lblSecretKeyValue">IdbgyXq6hQb5zY0GhZSim6qCKKZzbkH2</label>
    </div>
  </div>
</div>
<p>redirect domain: http://www.lifequotes4u.co.uk</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>the app requests a scope for the data it wishes to access</p>
<p>ie wl.<strong>offline_access</strong> to ask the user if it's okay for your app to get a <em>refresh token</em>. A refresh token is a separate, unique string of characters that your app   can use to get a replacement access token when the original expires.</p>
<p><strong>wl.calendars</strong>??</p>
<p><strong>wl.calendars_update</strong>??</p>
<p>For a complete list of available scopes, see <a href="http://msdn.microsoft.com/en-us/library/live/hh243646.aspx">Scopes and permissions</a>.</p>
<p>&nbsp;</p>
<p>Sign In</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>

