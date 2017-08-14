<?php
/* Smarty version 3.1.31, created on 2017-08-14 21:40:08
  from "C:\Laragon\www\banner-builder-lumen\resources\views\pages\html5\netbetcom\casino\banner\120x600\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_599218b8a0f015_62395451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b7fe1b600c8651146ccc02e9ac30a0b83098d4c' => 
    array (
      0 => 'C:\\Laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\html5\\netbetcom\\casino\\banner\\120x600\\template.tpl',
      1 => 1502739745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599218b8a0f015_62395451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('lpconf', ((string)dirname($_smarty_tpl->source->filepath))."/".((string)$_smarty_tpl->tpl_vars['banner']->value->lang)."/config.conf");
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['lpconf']->value, null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1353543168599218b89d1819_04222170', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1009882899599218b89d7d72_83665624', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1957462103599218b89eb728_00604976', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_772164785599218b8a0b6f5_37893978', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "banner-lab/templates/template_1.tpl");
}
/* {block 'head'} */
class Block_1353543168599218b89d1819_04222170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1353543168599218b89d1819_04222170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_1009882899599218b89d7d72_83665624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_1009882899599218b89d7d72_83665624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        .banner-container {
            width: 120px;
            height: 600px;
            background-color: red;
            overflow:hidden;
            background-image: url('<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bg_path');?>
/<?php echo $_smarty_tpl->tpl_vars['banner']->value->background;?>
');
        }
        .header {
            background-color:#000;
            padding:3px;
        }
        .logo {
            max-width: 100%;
        }
        .body {
            padding: 5px;
        }
        .cta-offer {
            text-align:center;
            margin-bottom:10px;
        }
        .hero {
            width:100%;
            margin-top:20px;
            margin-bottom:20px;
        }
        .offer-text {
            color: #fff;
            font-size: 2.5em;
            font-family: fantasy;
            margin-top:5px;
        }
        .button {
            margin-top:40px;
        }
        .footer {
            color:#fff;
            text-align:center;
        }

<?php
}
}
/* {/block 'style'} */
/* {block 'body'} */
class Block_1957462103599218b89eb728_00604976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1957462103599218b89eb728_00604976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="banner-container">
        <div class="header">
            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['banner']->value->getLogoPath();?>
" />
        </div>
        <div class="body">
            <img class="hero" src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'home_path');?>
/<?php echo $_smarty_tpl->tpl_vars['banner']->value->getHeroPath();?>
" />
            <div class="cta-offer">
                <div class="offer-text">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'text1');?>

                </div>
                <div class="offer-text">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'text2');?>

                </div>
                <div class="offer-text">
                    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'text3');?>

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
class Block_772164785599218b8a0b6f5_37893978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_772164785599218b8a0b6f5_37893978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'footer'} */
}
