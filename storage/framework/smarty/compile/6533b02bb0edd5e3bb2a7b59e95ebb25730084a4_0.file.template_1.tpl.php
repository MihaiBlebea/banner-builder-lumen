<?php
/* Smarty version 3.1.31, created on 2017-08-14 21:40:09
  from "C:\Laragon\www\banner-builder-lumen\resources\views\banner-lab\templates\template_1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_599218b90a4b23_51468665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6533b02bb0edd5e3bb2a7b59e95ebb25730084a4' => 
    array (
      0 => 'C:\\Laragon\\www\\banner-builder-lumen\\resources\\views\\banner-lab\\templates\\template_1.tpl',
      1 => 1502739745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599218b90a4b23_51468665 (Smarty_Internal_Template $_smarty_tpl) {
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

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23368379599218b9092f76_06188396', 'head');
?>


        <style>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_368634230599218b9098174_93080879', 'style');
?>

        </style>
    </head>
    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45166888599218b909ce65_81551954', 'body');
?>


        <?php echo '<script'; ?>
 src="<?php echo URL::to('/');?>
/../../resources/views/banner-lab/resources/js/animation.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
/* {block 'head'} */
class Block_23368379599218b9092f76_06188396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_23368379599218b9092f76_06188396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_368634230599218b9098174_93080879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_368634230599218b9098174_93080879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_45166888599218b909ce65_81551954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_45166888599218b909ce65_81551954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
