<template>
  <div>
    <PageLoader :show="true" :time="800" />
    <Header />
    <Footer />
  </div>
</template>

<script>
import { InertiaLink } from "@inertiajs/inertia-vue";
import Header from "./../Header/Header";
import Footer from "./../Footer/Footer";
import PageLoader from "./../PageLoader/PageLoader";
export default {
  components: {
    InertiaLink,
    Header,
    Footer,
    PageLoader,
  },
};
</script>

<style>
</style>