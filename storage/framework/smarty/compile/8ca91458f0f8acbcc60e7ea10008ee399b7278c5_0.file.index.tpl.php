<?php
/* Smarty version 3.1.31, created on 2017-08-15 13:59:09
  from "C:\laragon\www\banner-builder-lumen\resources\views\pages\admin\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5992fe2d227102_64233239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ca91458f0f8acbcc60e7ea10008ee399b7278c5' => 
    array (
      0 => 'C:\\laragon\\www\\banner-builder-lumen\\resources\\views\\pages\\admin\\index.tpl',
      1 => 1502805547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5992fe2d227102_64233239 (Smarty_Internal_Template $_smarty_tpl) {
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
                display:flex;
            }
            .left-edit-zone {

            }
            .right-edit-zone {

            }
            .spacer {
                padding: 10px;
            }
            .app-button {
                padding: 10px 30px;
                background-color: #52BF90;
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
            .error-log {
                background-color:#FF5E5E;
                border: 2px solid #BF0000;
                border-radius:15px;
                padding:10px;
                color:#fff;
                max-width:50%;
            }
            .display-link {
                background-color:#52BF90;
                border: 2px solid #317256;
                border-radius:15px;
                padding:10px;
                color:#fff;
                max-width:90%;:
            }
            label {
                font-size: 18px;
            }
            .select {
                width:200px;
                padding:5px;
                border-radius:5px;
            }
            .error-is-active {
                border: 2px solid #FF5E5E;
            }
        </style>
    </head>
    <body>
        <div id="app" class="container">
            <div class="left-container">
                <h3>Preview zone</h3>
                <iframe :src="iframeUrl" :height="iframeH" :width="iframeW" style="border:none;"></iframe>
                <div class="error-log" v-if="error == true">
                    There has been an error. Please fill all the available informations.
                </div>
                <div class="display-link" v-text="iframeUrl" v-if="iframeUrl !== null"></div>
            </div>
            <div class="right-container">
                <div class="left-edit-zone">
                    <div class="spacer">
                        <label>Select domain:</label><br />
                        <select class="select" v-bind:class="errorDomain" v-model="domain">
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
                        <select class="select" v-bind:class="errorProduct" v-model="product">
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
                        <select class="select" v-bind:class="errorCampaign" v-model="campaign">
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
                        <select class="select" v-bind:class="errorSize" v-model="size" v-on:change="iframeUrl = null">
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
                        <select class="select" v-bind:class="errorLang" v-model="lang">
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
                </div>
                <div class="right-edit-zone">
                    <div class="spacer">
                        <label>Select template:</label><br />
                        <select class="select" v-bind:class="errorTemplate" v-model="template">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['templates']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['template']->value;?>

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
                        <select class="select" v-bind:class="errorBg" v-model="background">
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
                        <select class="select" v-model="button">
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
                        <input class="select" type="text" v-model="cta"/>
                    </div>

                    <div class="spacer">
                        <label>Write offer text:</label><br />
                        <input class="select" type="text" v-model="text"/>
                    </div>

                    <div class="spacer">
                        <label>Pick a font size:</label><br />
                        <input class="select" type="text" v-model="textS"/>
                    </div>

                    <div class="spacer">
                        <label>Select heroes:</label><br />
                        <select class="select" v-bind:class="errorHero" v-model="hero">
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
        </div>
        <?php echo '<script'; ?>
>
            var app = new Vue({
                el: '#app',
                data: function() {
                    return {
                        basePath: 'http://localhost:2777/banner-builder-lumen/public/index.php/html5',
                        iframeUrl: null,
                        domain: null,
                        product: null,
                        campaign: null,
                        size: null,
                        lang: null,
                        template: null,
                        background: null,
                        button: null,
                        cta: 'Play Now!',
                        text: 'Buy my stuff',
                        textS: '3em',
                        hero: null,
                        error: false
                    }
                },
                computed: {
                    iframeW: function() {
                        if(this.size !== null && this.error !== true)
                        {
                            return Number(this.size.split("x")[0]) + 20;
                        } else {
                            return 0;
                        }

                    },
                    iframeH: function() {
                        if(this.size !== null && this.error !== true)
                        {
                            return Number(this.size.split("x")[1]) + 20;
                        } else {
                            return 0;
                        }
                    },
                    errorDomain: function () {
                        return {
                            'error-is-active': this.error == true && this.domain == null
                        }
                    },
                    errorProduct: function () {
                        return {
                            'error-is-active': this.error == true && this.product == null
                        }
                    },
                    errorCampaign: function () {
                        return {
                            'error-is-active': this.error == true && this.campaign == null
                        }
                    },
                    errorSize: function () {
                        return {
                            'error-is-active': this.error == true && this.size == null
                        }
                    },
                    errorLang: function () {
                        return {
                            'error-is-active': this.error == true && this.lang == null
                        }
                    },
                    errorTemplate: function () {
                        return {
                            'error-is-active': this.error == true && this.template == null
                        }
                    },
                    errorBg: function () {
                        return {
                            'error-is-active': this.error == true && this.background == null
                        }
                    },
                    errorHero: function () {
                        return {
                            'error-is-active': this.error == true && this.hero == null
                        }
                    }
                },
                methods: {
                    iframeCall: function() {
                        if(this.domain !== null && this.product !== null && this.campaign !== null && this.size !== null && this.lang !== null && this.template !== null && this.background !== null && this.hero !== null)
                        {
                            return this.iframeUrl =  this.basePath + '/' +
                                                     this.product + '/' +
                                                     this.size + '/' +
                                                     this.lang +
                                                     '?camp=' + this.campaign +
                                                     '&temp=' + this.template +
                                                     '&bg=' + this.background +
                                                     '&button=' + this.button +
                                                     '&cta=' + this.cta +
                                                     '&hero=' + this.hero +
                                                     '&text=' + this.text +
                                                     '&textS=' + this.textS;
                        } else {
                            this.error = true;
                            setTimeout(()=> {
                                this.error = false;
                            },5000);
                        }
                    }
                }
            });
        <?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
