<?php
/* Smarty version 3.1.28, created on 2016-06-17 07:17:37
  from "D:\vhosts\nx\admin\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5763a411c53d53_55845764',
  'file_dependency' => 
  array (
    'f7761feba8347ae1b98cc5c120b75075f8e4fbd8' => 
    array (
      0 => 'D:\\vhosts\\nx\\admin\\templates\\index.html',
      1 => 1464145145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5763a411c53d53_55845764 ($_smarty_tpl) {
?>
<h2><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</h2>
<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lang_0_saved_item = isset($_smarty_tpl->tpl_vars['lang']) ? $_smarty_tpl->tpl_vars['lang'] : false;
$_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable();
$__foreach_lang_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_lang_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$__foreach_lang_0_saved_local_item = $_smarty_tpl->tpl_vars['lang'];
?>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
<br/>
<?php
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_0_saved_local_item;
}
}
if ($__foreach_lang_0_saved_item) {
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_0_saved_item;
}
}
}
