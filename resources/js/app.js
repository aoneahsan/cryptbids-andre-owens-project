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

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueParticles);
Vue.use(VueScrollTo);
Vue.component("VueLoading", VueLoading);
Vue.use(VueYoutube, { global: true, componentId: "youtube" });

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
