import Vue from "vue";

// custom global components
import PageLoader from "./GlobalComponents/PageLoader/PageLoader";
import CrypticFullPage from './Layouts/Frontend/CrypticFullPage/CrypticFullPage';
import CrypticSidebar from './Layouts/Frontend/CrypticSidebar/CrypticSidebar';
import ICOFullPage from './Layouts/Frontend/ICOFullPage/ICOFullPage';


// Custom Defined Components
Vue.component("PageLoader", PageLoader);
Vue.component("CrypticFullPage", CrypticFullPage);
Vue.component("CrypticSidebar", CrypticSidebar);
Vue.component("ICOFullPage", ICOFullPage);