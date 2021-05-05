require("jquery");
require("jquery-ui-bundle");
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

/**
 * From here on out, my own code starts ;)
 */
var beney = {
    _init : function() {
        beney.startAutoComplete.init();
    },
    startAutoComplete : {
        init : function(){
            this.coupleSystems();
            this.coupleFactions();
            this.coupleHomeSystems();
            $( "#faction-input" ).on("autocompletesearch", function(){
                $( "#faction-input" ).autocomplete(
                    "option",
                    "source",
                    "/faction/autocomplete/" + $( "#system-input" ).val()
                );
            })
        },
        coupleSystems : function() {
            $( "#system-input" ).autocomplete({
                source : "/system/autocomplete"
            });
        },
        coupleFactions : function () {
            $( "#faction-input" ).autocomplete({
                source : "/faction/autocomplete"
            });
        },
        coupleHomeSystems : function () {
            $( "#faction-add-home-system" ).autocomplete({
                source : "/system/autocomplete"
            });
        }
    }
};
beney._init();
