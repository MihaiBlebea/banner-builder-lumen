<?php
/* Smarty version 3.1.31, created on 2017-08-14 21:56:21
  from "C:\Laragon\www\banner-builder-lumen\resources\views\pages\html5\netbetcom\casino\banner\300x600\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59921c85b55560_28921742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e903e598c078c788c152fe610d193aff054353' => 
    array (
      0 => 'C:\\Laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\html5\\netbetcom\\casino\\banner\\300x600\\template.tpl',
      1 => 1502747339,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59921c85b55560_28921742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('lpconf', ((string)dirname($_smarty_tpl->source->filepath))."/".((string)$_smarty_tpl->tpl_vars['banner']->value->lang)."/config.conf");
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['lpconf']->value, null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78807839559921c85b091d6_07025984', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83894449759921c85b0e859_13431062', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191339748559921c85b24ad2_10517659', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125463658559921c85b50df6_11128283', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "banner-lab/templates/template_1.tpl");
}
/* {block 'head'} */
class Block_78807839559921c85b091d6_07025984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_78807839559921c85b091d6_07025984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_83894449759921c85b0e859_13431062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_83894449759921c85b0e859_13431062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        .banner-container {
            width: 300px;
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
            max-width: 50%;
        }
        .body {
            padding: 5px;
        }
        .cta-offer {
            text-align:center;
            margin-bottom:10px;
        }
        .hero {
            width:70%;
            margin-top:20px;
            margin-bottom:20px;
            display:block;
            margin:auto;
        }
        .offer-text {
            color: #fff;
            font-size: 3.5em;
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
class Block_191339748559921c85b24ad2_10517659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_191339748559921c85b24ad2_10517659',
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
class Block_125463658559921c85b50df6_11128283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_125463658559921c85b50df6_11128283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'footer'} */
}
