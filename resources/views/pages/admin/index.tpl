<html>
    <head>
        <title>Admin Zone</title>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://unpkg.com/vue"></script>

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
                        {foreach $domains as $domain}
                            <option value="{$domain}">
                                {$domain}
                            </option>
                        {/foreach}
                    </select>
                </div>

                <div class="spacer">
                    <label>Select product:</label><br />
                    <select v-model="product">
                        {foreach $products as $product}
                            <option value="{$product}">
                                {$product}
                            </option>
                        {/foreach}
                    </select>
                </div>

                <div class="spacer">
                    <label>Select campaign:</label><br />
                    <select v-model="campaign">
                        {foreach $campaigns as $campaign}
                            <option value="{$campaign}">
                                {$campaign}
                            </option>
                        {/foreach}
                    </select>
                </div>

                <div class="spacer">
                    <label>Select sizes:</label><br />
                    <select v-model="size" v-on:change="iframeUrl = null">
                        {foreach $sizes as $size}
                            <option value="{$size}">
                                {$size}
                            </option>
                        {/foreach}
                    </select>
                </div>

                <div class="spacer">
                    <label>Select language:</label><br />
                    <select v-model="lang">
                        {foreach $langs as $lang}
                            <option value="{$lang}">
                                {$lang}
                            </option>
                        {/foreach}
                    </select>
                </div>

                <div class="spacer">
                    <label>Select backgrounds:</label><br />
                    <select v-model="background">
                        {foreach $backgrounds as $background}
                            <option value="{$background}">
                                {$background}
                            </option>
                        {/foreach}
                    </select>
                </div>

                <div class="spacer">
                    <label>Select buttons:</label><br />
                    <select v-model="button">
                        {foreach $buttons as $button}
                            <option value="{$button}">
                                {$button}
                            </option>
                        {/foreach}
                    </select>
                </div>

                <div class="spacer">
                    <label>Write call to action:</label><br />
                    <input type="text" v-model="cta"/>
                </div>

                <div class="spacer">
                    <label>Select heroes:</label><br />
                    <select v-model="hero">
                        {foreach $heros as $hero}
                            <option value="{$hero}">
                                {$hero}
                            </option>
                        {/foreach}
                    </select>
                </div>

                <div class="spacer">
                    <button class="app-button" v-on:click="iframeCall">Show banner</button>
                </div>
            </div>
        </div>
        <script>
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
        </script>
    </body>
</html>
