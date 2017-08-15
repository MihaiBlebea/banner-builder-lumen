<?php
/* Smarty version 3.1.31, created on 2017-08-15 11:06:18
  from "C:\laragon\www\banner-builder-lumen\resources\views\banner-lab\templates\template_1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5992d5aaa8de08_25342211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6764ce4ed2f997b5494c87f29908e94e83b4fe5d' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\banner-lab\\templates\\template_1.tpl',
      1 => 1502791337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992d5aaa8de08_25342211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<html>
    <head>
        <title>Banner</title>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js"><?php echo '</script'; ?>
>
        <!-- <?php echo '<script'; ?>
 src="<?php echo URL::to('/');?>
/../../resources/views/banner-lab/resources/js/animation.js"><?php echo '</script'; ?>
> -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/');?>
/../../resources/views/banner-lab/resources/css/template_1.css">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13275125625992d5aaa89f85_16191826', 'head');
?>


        <style>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5872570015992d5aaa89f85_85845859', 'style');
?>

        </style>
    </head>
    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8824975375992d5aaa8de01_12222328', 'body');
?>


        <?php echo '<script'; ?>
 src="<?php echo URL::to('/');?>
/../../resources/views/banner-lab/resources/js/animation.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
/* {block 'head'} */
class Block_13275125625992d5aaa89f85_16191826 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_13275125625992d5aaa89f85_16191826',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_5872570015992d5aaa89f85_85845859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_5872570015992d5aaa89f85_85845859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_8824975375992d5aaa8de01_12222328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8824975375992d5aaa8de01_12222328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
