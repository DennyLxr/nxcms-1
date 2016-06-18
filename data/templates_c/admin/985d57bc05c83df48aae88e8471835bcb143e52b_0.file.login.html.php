<?php
/* Smarty version 3.1.28, created on 2016-06-17 07:31:47
  from "D:\vhosts\nx\admin\templates\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5763a7634ff7c5_42719672',
  'file_dependency' => 
  array (
    '985d57bc05c83df48aae88e8471835bcb143e52b' => 
    array (
      0 => 'D:\\vhosts\\nx\\admin\\templates\\login.html',
      1 => 1464597529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5763a7634ff7c5_42719672 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="renderer" content="webkit">
		<title>登录 - NxCMS后台管理（<?php echo $_smarty_tpl->tpl_vars['system']->value['version'];?>
）</title>
		<link rel="stylesheet" href="/static/css/pintuer.css">
		<link rel="stylesheet" href="/static/css/admin.css">
		<?php echo '<script'; ?>
 src="/static/js/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/static/js/pintuer.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/static/js/respond.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/static/js/admin.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="container">
			<div class="line">
				<div class="xs6 xm4 xs3-move xm4-move">
					<br />
					<br />
					<div class="media media-y">
						<a href="http://www.nxcms.cn" target="_blank"><img src="/static/images/logo.png" class="radius" alt="NxCMS后台管理系统" /></a>
					</div>
					<br />
					<br />
					<form action="index.php?m=login" method="post">
						<div class="panel">
							<div class="panel-head"><strong>登录 XXX 后台管理</strong></div>
							<div class="panel-body" style="padding:30px;">
								<div class="form-group">
									<div class="field field-icon-right">
										<input type="text" class="input" name="admin" placeholder="登录账号" data-validate="required:请填写账号,length#>=5:账号长度不符合要求" />
										<span class="icon icon-user"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="field field-icon-right">
										<input type="password" class="input" name="password" placeholder="登录密码" data-validate="required:请填写密码,length#>=8:密码长度不符合要求" />
										<span class="icon icon-key"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="field">
										<input type="text" class="input" name="passcode" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
										<img src="images/passcode.jpg" width="80" height="32" class="passcode" />
									</div>
								</div>
							</div>
							<div class="panel-foot text-center">
								<button class="button button-block bg-main text-big">立即登录后台</button>
							</div>
						</div>
					</form>
					<div class="text-right text-small text-gray padding-top"><a class="text-gray" target="_blank" href="http://www.nxcms.cn/?from=backend">NxCMS - 开源免费的多语言企业网站系统 </a></div>
				</div>
			</div>
		</div>
		<div class="hidden">
			<!--// 仅用于统计用户活跃量 -->
			<?php echo '<script'; ?>
 src="http://www.nxcms.cn/stat.php" language="JavaScript"><?php echo '</script'; ?>
>
		</div>
	</body>

</html><?php }
}
