<?php
/* Smarty version 3.1.31, created on 2017-08-15 11:29:02
  from "C:\laragon\www\banner-builder-lumen\resources\views\banner-lab\templates\template_1\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5992dafe7f7882_79562349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcee41f30603fe57445c7a89d1d9f2fab5c5baf1' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\banner-lab\\templates\\template_1\\template.tpl',
      1 => 1502796366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992dafe7f7882_79562349 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['banner']->value->resourcesPath;?>
/banner-lab/templates/template_1/style.css">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16647210625992dafe7f3a08_03130216', 'head');
?>


        <style>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13538998755992dafe7f7884_30699275', 'style');
?>

        </style>
    </head>
    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9116401895992dafe7f7880_19936812', 'body');
?>


        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['banner']->value->resourcesPath;?>
/banner-lab/templates/template_1/animation.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
/* {block 'head'} */
class Block_16647210625992dafe7f3a08_03130216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_16647210625992dafe7f3a08_03130216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_13538998755992dafe7f7884_30699275 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_13538998755992dafe7f7884_30699275',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_9116401895992dafe7f7880_19936812 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_9116401895992dafe7f7880_19936812',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
