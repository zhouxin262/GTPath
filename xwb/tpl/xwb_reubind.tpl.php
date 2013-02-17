<?php if (!defined('IS_IN_XWB_PLUGIN')) {die('access deny!');}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>绑定插件 - 新浪微博插件</title>
<link href="<?php echo XWB_plugin::getPluginUrl('images/xwb_admin.css');?>" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="<?php echo XWB_plugin::getPluginUrl('images/xwb_'. XWB_S_VERSION .'.css');?>" />
<script type="text/javascript" src="<?php echo XWB_plugin::getPluginUrl('images/xwb.js');?>"></script>
</head>
<body>
<div class="bind-setting xwb-plugin">
	<p class="alert-tips">您的帐号与新浪微博的绑定已过期！</p>
	<div class="bing-text">
            <p>您的帐号与新浪微博的绑定已过期，您需要重新进行绑定。</p>
			<p>绑定后您可以继续使用发帖，日志、记录等同步到新浪微博 直接使用微博账号登陆等功能</p>
		 	<br><a class="binding-btn binding-w" href="javascript:void(0)" onclick="window.top.location='<?php echo XWB_plugin::getEntryURL('xwbAuth.login');?>'"><span>重新绑定新浪微博</span></a>
             
    </div>
     
    
</div>
 
</body>
</html>