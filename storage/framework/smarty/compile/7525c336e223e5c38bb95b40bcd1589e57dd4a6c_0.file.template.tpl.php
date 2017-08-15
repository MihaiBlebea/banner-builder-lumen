<?php
/* Smarty version 3.1.31, created on 2017-08-15 11:29:02
  from "C:\laragon\www\banner-builder-lumen\resources\views\pages\html5\netbetcom\casino\banner\120x600\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5992dafe7863a5_41569786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7525c336e223e5c38bb95b40bcd1589e57dd4a6c' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\html5\\netbetcom\\casino\\banner\\120x600\\template.tpl',
      1 => 1502796442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992dafe7863a5_41569786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('lpconf', ((string)dirname($_smarty_tpl->source->filepath))."/".((string)$_smarty_tpl->tpl_vars['banner']->value->lang)."/config.conf");
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['lpconf']->value, null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3948102665992dafe76ec92_98947032', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7927472815992dafe772b10_43482512', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10408059245992dafe77a826_81990439', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16372393875992dafe7863a4_17146861', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value->template);
}
/* {block 'head'} */
class Block_3948102665992dafe76ec92_98947032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_3948102665992dafe76ec92_98947032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_7927472815992dafe772b10_43482512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_7927472815992dafe772b10_43482512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        .banner-container {
            width: 120px;
            height: 600px;
            background-image: url('<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bg_path');?>
/<?php echo $_smarty_tpl->tpl_vars['banner']->value->background;?>
');
        }
        .body {
            flex:10;
        }
        .hero-container {
            max-height: 200px;
        }
        .offer-text {
            font-size:<?php echo $_smarty_tpl->tpl_vars['banner']->value->textS;?>
;
        }
<?php
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_10408059245992dafe77a826_81990439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_10408059245992dafe77a826_81990439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="banner-container">
        <div class="header">
            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value->getLogoPath();?>
" />
        </div>
        <div class="hero-container">
            <img class="hero" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'home_path');?>
/<?php echo $_smarty_tpl->tpl_vars['banner']->value->getHeroPath();?>
" />
        </div>
        <div class="body">
            <div class="cta-offer">
                <div class="offer-text">
                    <?php echo $_smarty_tpl->tpl_vars['banner']->value->text;?>

                </div>
                <div class="button">
                    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['banner']->value->getButtonsPath(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cta'=>$_smarty_tpl->tpl_vars['banner']->value->cta), 0, true);
?>

                </div>
            </div>
        </div>
        <div class="footer">
            <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'terms');?>

        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_16372393875992dafe7863a4_17146861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16372393875992dafe7863a4_17146861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'footer'} */
}
