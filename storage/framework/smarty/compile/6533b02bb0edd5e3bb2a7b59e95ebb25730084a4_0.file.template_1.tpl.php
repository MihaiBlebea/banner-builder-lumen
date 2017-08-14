<?php
/* Smarty version 3.1.31, created on 2017-08-14 21:56:28
  from "C:\Laragon\www\banner-builder-lumen\resources\views\banner-lab\templates\template_1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59921c8cc7af94_41118373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6533b02bb0edd5e3bb2a7b59e95ebb25730084a4' => 
    array (
      0 => 'C:\\Laragon\\www\\banner-builder-lumen\\resources\\views\\banner-lab\\templates\\template_1.tpl',
      1 => 1502747530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59921c8cc7af94_41118373 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208043021859921c8cc6b962_33746237', 'head');
?>


        <style>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199208136159921c8cc70660_52268518', 'style');
?>

        </style>
    </head>
    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204794261359921c8cc749b3_96872028', 'body');
?>


        <?php echo '<script'; ?>
 src="<?php echo URL::to('/');?>
/../resources/views/banner-lab/resources/js/animation.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
/* {block 'head'} */
class Block_208043021859921c8cc6b962_33746237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_208043021859921c8cc6b962_33746237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_199208136159921c8cc70660_52268518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_199208136159921c8cc70660_52268518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_204794261359921c8cc749b3_96872028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_204794261359921c8cc749b3_96872028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
