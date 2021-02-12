require("./bootstrap");

require("moment");
const VueUploadComponent = require("vue-upload-component"); //https://lian-yue.github.io/vue-upload-component/#/en/documents
import Vue from "vue";

import { InertiaApp } from "@inertiajs/inertia-vue";
import { InertiaForm } from "laravel-jetstream";
import PortalVue from "portal-vue";
import VueParticles from "vue-particles";
import VueScrollTo from "vue-scrollto";
import VueLoading from "vue-element-loading";
import VueYoutube from "vue-youtube";
import { InertiaProgress } from "@inertiajs/progress";
import Icon from "vue-awesome/components/Icon"; // https://github.com/Justineo/vue-awesome

import { HasError, AlertError, AlertErrors, AlertSuccess } from "vform"; //https://www.npmjs.com/package/vform
import Notifications from "vue-notification"; // https://github.com/euvl/vue-notification
import VModal from "vue-js-modal"; // https://euvl.github.io/vue-js-modal/
import vueCountryRegionSelect from "vue-country-region-select"; //https://www.npmjs.com/package/vue-country-region-select
import VueCurrencyInput from "vue-currency-input"; //https://dm4t2.github.io/vue-currency-input/guide/#installation
import Vuetable from "vuetable-2"; //https://www.vuetable.com/guide/getting-started.html#usage

// other packages imports
import "es6-promise/auto"; //https://github.com/stefanpenner/es6-promise

// CSS IMPORTS
import "vue-awesome/icons"; // https://github.com/Justineo/vue-awesome

// IMPORTS ENDS ABOVE

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueParticles);
Vue.use(VueScrollTo);
Vue.component("VueLoading", VueLoading); // https://www.npmjs.com/package/vue-element-loading
Vue.use(VueYoutube, { global: true, componentId: "youtube" }); // https://www.npmjs.com/package/vue-youtube
Vue.component("v-icon", Icon); // https://github.com/Justineo/vue-awesome
Vue.component(HasError.name, HasError); //https://www.npmjs.com/package/vform
Vue.component(AlertError.name, AlertError); //https://www.npmjs.com/package/vform
Vue.component(AlertErrors.name, AlertErrors); //https://www.npmjs.com/package/vform
Vue.component(AlertSuccess.name, AlertSuccess); //https://www.npmjs.com/package/vform
Vue.use(Notifications); // https://github.com/euvl/vue-notification
Vue.use(VModal, { dialog: true }); // https://euvl.github.io/vue-js-modal/
Vue.component("v-icon", Icon); //https://github.com/Justineo/vue-awesome
Vue.use(vueCountryRegionSelect); //https://www.npmjs.com/package/vue-country-region-select
Vue.component("file-upload", VueUploadComponent); //https://lian-yue.github.io/vue-upload-component/#/en/documents
const VueCurrencyInput_pluginOptions = {
    //https://dm4t2.github.io/vue-currency-input/guide/#installation
    /* see config reference */
    globalOptions: { currency: "USD" }
};
Vue.use(VueCurrencyInput, VueCurrencyInput_pluginOptions); //https://dm4t2.github.io/vue-currency-input/guide/#installation
Vue.component("Vuetable", Vuetable); //https://www.vuetable.com/guide/getting-started.html#usage

// COMPOENENTS DECLERATION ENDS ABOVE

// Inertia Page Loader Progress bar
InertiaProgress.init();

const app = document.getElementById("app");

new Vue({
    render: h =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: name => require(`./Pages/${name}`).default
            }
        })
}).$mount(app);

require("./global-components");
