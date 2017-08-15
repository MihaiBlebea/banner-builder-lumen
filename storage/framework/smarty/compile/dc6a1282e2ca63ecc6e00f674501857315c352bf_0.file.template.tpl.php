<?php
/* Smarty version 3.1.31, created on 2017-08-15 14:53:03
  from "C:\laragon\www\banner-builder-lumen\resources\views\pages\html5\netbetcom\casino\banner\300x600\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59930acf6ccda4_93247443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6a1282e2ca63ecc6e00f674501857315c352bf' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\html5\\netbetcom\\casino\\banner\\300x600\\template.tpl',
      1 => 1502808445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59930acf6ccda4_93247443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->_assignInScope('lpconf', ((string)dirname($_smarty_tpl->source->filepath))."/".((string)$_smarty_tpl->tpl_vars['banner']->value->lang)."/config.conf");
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, $_smarty_tpl->tpl_vars['lpconf']->value, null, 0);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35002450459930acf6a5c92_09498899', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152848141459930acf6a9b21_73124887', 'style');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59557280359930acf6b56a0_36701242', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123326981959930acf6ccda2_51514497', 'footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value->template);
}
/* {block 'head'} */
class Block_35002450459930acf6a5c92_09498899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_35002450459930acf6a5c92_09498899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'style'} */
class Block_152848141459930acf6a9b21_73124887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_152848141459930acf6a9b21_73124887',
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
class Block_59557280359930acf6b56a0_36701242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_59557280359930acf6b56a0_36701242',
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
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banner']->value->highlightTextElement(), 'i', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['k']->value%2 == 1) {?>
                            <div class="text-highlight">
                                <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                            </div>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

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
class Block_123326981959930acf6ccda2_51514497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_123326981959930acf6ccda2_51514497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'footer'} */
}
