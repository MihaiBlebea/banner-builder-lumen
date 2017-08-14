<?php
/* Smarty version 3.1.31, created on 2017-08-14 21:39:49
  from "C:\Laragon\www\banner-builder-lumen\resources\views\pages\admin\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_599218a51eb831_63360039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '973ee49a089bcebe4ef10f51dabfde4bc00d8d2e' => 
    array (
      0 => 'C:\\Laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\admin\\index.tpl',
      1 => 1502746785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_599218a51eb831_63360039 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title>Admin Zone</title>
        <?php echo '<script'; ?>
 src="https://unpkg.com/axios/dist/axios.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://unpkg.com/vue"><?php echo '</script'; ?>
>

        <style>
            .container {
                display:flex;
                flex-direction:row;
            }
            .left-container {
                flex:1;
            }
            .right-container {
                flex:1;
            }
            .spacer {
                padding: 10px;
            }
            .app-button {
                padding: 10px 30px;
                background-color: green;
                border: 0;
                color:#fff;
                box-shadow: 5px 5px black;
                transition: all 0.3s ease-in-out;
                position:relative;
            }
            .app-button:hover {
                cursor:pointer;
                box-shadow: 2px 2px black;
                top:3px;
                left:3px;
            }
        </style>
    </head>
    <body>
        <div id="app" class="container">
            <div class="left-container">
                <h4>Preview zone</h4>
                <iframe :src="iframeUrl" :height="iframeH" :width="iframeW" style="border:none;"></iframe>
                <p v-text="iframeUrl"></p>
            </div>
            <div class="right-container">
                <h4>Edit zone</h4>
                <div class="spacer">
                    <label>Select domain:</label><br />
                    <select v-model="domain">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['domains']->value, 'domain');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['domain']->value;?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </select>
                </div>

                <div class="spacer">
                    <label>Select product:</label><br />
                    <select v-model="product">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['product']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['product']->value;?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </select>
                </div>

                <div class="spacer">
                    <label>Select campaign:</label><br />
                    <select v-model="campaign">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campaigns']->value, 'campaign');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['campaign']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['campaign']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['campaign']->value;?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </select>
                </div>

                <div class="spacer">
                    <label>Select sizes:</label><br />
                    <select v-model="size">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sizes']->value, 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['size']->value;?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </select>
                </div>

                <div class="spacer">
                    <label>Select language:</label><br />
                    <select v-model="lang">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['langs']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value;?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </select>
                </div>

                <div class="spacer">
                    <label>Select backgrounds:</label><br />
                    <select v-model="background">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['backgrounds']->value, 'background');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['background']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['background']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['background']->value;?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </select>
                </div>

                <div class="spacer">
                    <label>Select buttons:</label><br />
                    <select v-model="button">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buttons']->value, 'button');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['button']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['button']->value;?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </select>
                </div>

                <div class="spacer">
                    <label>Write call to action:</label><br />
                    <input type="text" v-model="cta"/>
                </div>

                <div class="spacer">
                    <label>Select heroes:</label><br />
                    <select v-model="hero">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['heros']->value, 'hero');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hero']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['hero']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['hero']->value;?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </select>
                </div>

                <div class="spacer">
                    <button class="app-button" v-on:click="iframeCall">Show banner</button>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
>
            var app = new Vue({
                el: '#app',
                data: function() {
                    return {
                        basePath: 'http://localhost:8070/banner-builder-lumen/public/html5',
                        iframeUrl: null,
                        domain: null,
                        product: null,
                        campaign: null,
                        size: null,
                        lang: null,
                        background: null,
                        button: null,
                        cta: null,
                        hero: null
                    }
                },
                computed: {
                    iframeW: function() {
                        if(this.size !== null)
                        {
                            return Number(this.size.split("x")[0]) + 20;
                        } else {
                            return 0;
                        }

                    },
                    iframeH: function() {
                        if(this.size !== null)
                        {
                            return Number(this.size.split("x")[1]) + 20;
                        } else {
                            return 0;
                        }
                    }
                },
                methods: {
                    getProducts: function() {
                        axios.get(this.basePath + '/products').then((response)=> {
                            console.log(response);
                        })
                    },
                    iframeCall: function() {
                        return this.iframeUrl =  this.basePath + '/' +
                                                 //this.domain + '/' +
                                                 this.product + '/' +
                                                 this.size + '/' +
                                                 this.lang +
                                                 '?camp=' + this.campaign +
                                                 '&bg=' + this.background +
                                                 '&button=' + this.button +
                                                 '&cta=' + this.cta +
                                                 '&hero=' + this.hero;
                    }
                }
            });
        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
