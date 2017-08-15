<?php
/* Smarty version 3.1.31, created on 2017-08-15 13:21:36
  from "C:\laragon\www\banner-builder-lumen\resources\views\pages\html5\netbetcom\casino\banner\300x600\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5992f56075d8e0_42173707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6a1282e2ca63ecc6e00f674501857315c352bf' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\html5\\netbetcom\\casino\\banner\\300x600\\template.tpl',
      1 => 1502797177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992f56075d8e0_42173707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('lpconf', ((string)dirname($_smarty_tpl->source->filepath))."/".((string)$_smarty_tpl->tpl_vars['banner']->value->lang)."/config.conf");
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['lpconf']->value, null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14711095685992f56074a059_08064461', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4889363025992f56074a055_62728947', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4472026415992f560755bd9_14022091', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16905193165992f56075d8e3_98921906', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value->template);
}
/* {block 'head'} */
class Block_14711095685992f56074a059_08064461 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14711095685992f56074a059_08064461',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_4889363025992f56074a055_62728947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_4889363025992f56074a055_62728947',
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
    .button {
        
    }

<?php
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_4472026415992f560755bd9_14022091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4472026415992f560755bd9_14022091',
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
                <div class="button-holder">
                    
                    <button class="button"><?php echo $_smarty_tpl->tpl_vars['banner']->value->cta;?>
</button>
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
class Block_16905193165992f56075d8e3_98921906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_16905193165992f56075d8e3_98921906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'footer'} */
}
