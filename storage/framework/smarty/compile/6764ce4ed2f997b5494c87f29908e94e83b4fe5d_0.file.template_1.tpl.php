<?php
/* Smarty version 3.1.31, created on 2017-08-14 16:27:54
  from "C:\laragon\www\banner-builder-lumen\resources\views\banner-lab\templates\template_1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5991cf8a0122a8_64989547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6764ce4ed2f997b5494c87f29908e94e83b4fe5d' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\banner-lab\\templates\\template_1.tpl',
      1 => 1502722186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5991cf8a0122a8_64989547 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18853767935991cf8a00e427_73401555', 'head');
?>


        <style>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14659396095991cf8a00e423_85906970', 'style');
?>

        </style>
    </head>
    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14376194855991cf8a00e428_00760939', 'body');
?>


        <?php echo '<script'; ?>
 src="<?php echo URL::to('/');?>
/../../resources/views/banner-lab/resources/js/animation.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
/* {block 'head'} */
class Block_18853767935991cf8a00e427_73401555 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_18853767935991cf8a00e427_73401555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_14659396095991cf8a00e423_85906970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_14659396095991cf8a00e423_85906970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_14376194855991cf8a00e428_00760939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14376194855991cf8a00e428_00760939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
