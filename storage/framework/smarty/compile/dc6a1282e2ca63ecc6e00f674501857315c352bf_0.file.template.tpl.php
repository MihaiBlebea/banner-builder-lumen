<?php
/* Smarty version 3.1.31, created on 2017-08-15 11:28:01
  from "C:\laragon\www\banner-builder-lumen\resources\views\pages\html5\netbetcom\casino\banner\300x600\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5992dac18a6946_03897179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6a1282e2ca63ecc6e00f674501857315c352bf' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\html5\\netbetcom\\casino\\banner\\300x600\\template.tpl',
      1 => 1502796439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992dac18a6946_03897179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('lpconf', ((string)dirname($_smarty_tpl->source->filepath))."/".((string)$_smarty_tpl->tpl_vars['banner']->value->lang)."/config.conf");
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['lpconf']->value, null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4051515335992dac188f226_57886717', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19076090885992dac188f223_91294539', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16611976895992dac189adb4_29155290', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11022418195992dac18a6948_55848418', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value->template);
}
/* {block 'head'} */
class Block_4051515335992dac188f226_57886717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4051515335992dac188f226_57886717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_19076090885992dac188f223_91294539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_19076090885992dac188f223_91294539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    .banner-container {
        width: 300px;
        height: 600px;
        background-image: url('<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bg_path');?>
/<?php echo $_smarty_tpl->tpl_vars['banner']->value->background;?>
');
    }
    .body {
        flex:5;
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
class Block_16611976895992dac189adb4_29155290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16611976895992dac189adb4_29155290',
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
                <!--
                <div class="offer-text">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'text1');?>

                </div>
                <div class="offer-text">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'text2');?>

                </div>
                <div class="offer-text">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'text3');?>

                </div>
                -->
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
class Block_11022418195992dac18a6948_55848418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11022418195992dac18a6948_55848418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'footer'} */
}
