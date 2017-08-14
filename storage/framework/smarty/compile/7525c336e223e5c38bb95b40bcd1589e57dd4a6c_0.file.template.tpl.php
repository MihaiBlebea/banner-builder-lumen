<?php
/* Smarty version 3.1.31, created on 2017-08-14 16:27:53
  from "C:\laragon\www\banner-builder-lumen\resources\views\pages\html5\netbetcom\casino\banner\120x600\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5991cf89ef6a51_42935001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7525c336e223e5c38bb95b40bcd1589e57dd4a6c' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\html5\\netbetcom\\casino\\banner\\120x600\\template.tpl',
      1 => 1502727860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5991cf89ef6a51_42935001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('lpconf', ((string)dirname($_smarty_tpl->source->filepath))."/".((string)$_smarty_tpl->tpl_vars['banner']->value->lang)."/config.conf");
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['lpconf']->value, null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9363994615991cf89edb4c5_63003221', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3023770255991cf89edf349_31698788', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13331629825991cf89eeaec9_37231109', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18617569805991cf89ef2bd6_88826197', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "banner-lab/templates/template_1.tpl");
}
/* {block 'head'} */
class Block_9363994615991cf89edb4c5_63003221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9363994615991cf89edb4c5_63003221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_3023770255991cf89edf349_31698788 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_3023770255991cf89edf349_31698788',
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
class Block_13331629825991cf89eeaec9_37231109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13331629825991cf89eeaec9_37231109',
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
class Block_18617569805991cf89ef2bd6_88826197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18617569805991cf89ef2bd6_88826197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'footer'} */
}
