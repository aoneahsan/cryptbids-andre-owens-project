require("./bootstrap");

require("moment");

import Vue from "vue";

import { InertiaApp } from "@inertiajs/inertia-vue";
import { InertiaForm } from "laravel-jetstream";
import PortalVue from "portal-vue";
import VueParticles from "vue-particles";
import VueScrollTo from "vue-scrollto";
import VueLoading from "vue-element-loading";
import VueYoutube from "vue-youtube";
import { InertiaProgress } from '@inertiajs/progress'

// custom global components
import PageLoader from "./GlobalComponents/PageLoader/PageLoader";

// IMPORTS ENDS ABOVE

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueParticles);
Vue.use(VueScrollTo);
Vue.component("VueLoading", VueLoading); // https://www.npmjs.com/package/vue-element-loading
Vue.use(VueYoutube, { global: true, componentId: "youtube" }); // https://www.npmjs.com/package/vue-youtube

// Custom Defined Components
Vue.component("PageLoader", PageLoader);

// COMPOENENTS DECLERATION ENDS ABOVE

// Inertia Page Loader Progress bar
InertiaProgress.init()

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
