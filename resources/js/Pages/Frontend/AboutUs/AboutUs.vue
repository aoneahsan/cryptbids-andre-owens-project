<template>
  <div>
    <PageLoader :show="true" :time="800" />
    <Header />
    <section class="about-us__hero-section about-us__hero-section--1">
      <div class="about-us__hero-section--inner">
        <div class="container text-center">
          <h1 class="color-white">
            WHO ARE
            <span class="color-primary">WE?</span>
          </h1>
          <h5 class="color-white">
            Cryptbids is an E-commerce marketplace for undesirable digital
            currencies, which also serves as an auction company offering
            services in several regions, including the United States, European
            Union, South East Asia and more.
          </h5>
        </div>
      </div>
    </section>
    <section class="about-us__hero-section about-us__hero-section--2">
      <div class="about-us__hero-section--inner">
        <div class="container text-center">
          <h1 class="color-white">
            WHO ARE
            <span class="color-primary">WE?</span>
          </h1>
          <h4 class="color-white">
            Cryptbids is an E-commerce marketplace for undesirable digital
            currencies, which also serves as an auction company offering
            services in several regions, including the United States, European
            Union, South East Asia and more.
          </h4>
        </div>
      </div>
    </section>
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