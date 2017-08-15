<?php
/* Smarty version 3.1.31, created on 2017-08-15 11:27:46
  from "C:\laragon\www\banner-builder-lumen\resources\views\banner-lab\components\buttons\button_3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5992dab2c86f73_00604139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '069a1cdea92081482e8e7217cb4e637ad59d64ef' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\banner-lab\\components\\buttons\\button_3.tpl',
      1 => 1502787268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992dab2c86f73_00604139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<button style="padding:10px 20px;background-color:yellow;color:#fff;border:0;outine:none;display:block;margin:auto;cursor:pointer;">
    <?php echo $_smarty_tpl->tpl_vars['cta']->value;?>

</button>
<style>
    button:hover {
        background-color: pink;
    }
</style>
<?php }
}
