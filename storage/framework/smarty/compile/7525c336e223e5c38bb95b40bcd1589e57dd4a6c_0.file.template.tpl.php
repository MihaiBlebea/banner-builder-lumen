<?php
/* Smarty version 3.1.31, created on 2017-08-15 13:12:35
  from "C:\laragon\www\banner-builder-lumen\resources\views\pages\html5\netbetcom\casino\banner\120x600\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5992f343bfa1b0_28592255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7525c336e223e5c38bb95b40bcd1589e57dd4a6c' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\html5\\netbetcom\\casino\\banner\\120x600\\template.tpl',
      1 => 1502797296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992f343bfa1b0_28592255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('lpconf', ((string)dirname($_smarty_tpl->source->filepath))."/".((string)$_smarty_tpl->tpl_vars['banner']->value->lang)."/config.conf");
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['lpconf']->value, null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12587896005992f343be6924_33901709', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12281038615992f343bea7a8_60336344', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2258030105992f343bf24a5_10598038', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9557388085992f343bfa1b0_43246922', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value->template);
}
/* {block 'head'} */
class Block_12587896005992f343be6924_33901709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_12587896005992f343be6924_33901709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_12281038615992f343bea7a8_60336344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_12281038615992f343bea7a8_60336344',
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
class Block_2258030105992f343bf24a5_10598038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2258030105992f343bf24a5_10598038',
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
class Block_9557388085992f343bfa1b0_43246922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_9557388085992f343bfa1b0_43246922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'footer'} */
}
