<template>
  <div class=" bg-dark">
    <PageLoader :show="true" :time="800" />
    <Header />
    <div class="full-screen padding-top-150 padding-bottom-100 mb-0 mb-md-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 text-center text-md-left mb-0 mb-md-5 mb-md-0">
            <h1 class="fs-huge color-white">Careers at Cryptbids</h1>
            <h3 class="color-white font-light mb-0 mb-md-5">
              Join our global community team of people who have discovered their
              pathway to the crypto world with Cryptbids.
            </h3>
            <InertiaLink :href="route('contact-us')" class="btn btn-inverse">
              Let's Talk
            </InertiaLink>
          </div>
          <div class="col-12 col-md-6 text-center text-md-left">
            <img
              src="images/cryptbids/phongphong-coin.png"
              class="w-100 h-100"
            />
          </div>
        </div>
      </div>
    </div>
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