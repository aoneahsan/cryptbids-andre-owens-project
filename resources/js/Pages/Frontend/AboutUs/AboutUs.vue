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
          <h5 class="color-white mb-0 mb-md-4">
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
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-5"></div>
            <div class="col-12 col-md-7 padding-top-100">
              <h1 class="color-white">
                THE IDEA BEHIND
                <span class="color-primary d-block">CRYPTBIDS</span>
              </h1>
              <h5 class="color-white mb-0 mb-md-4">
                Trading cryptocurrency has become one of the most widespread
                financial activities over the last few years. For a good number
                of people, it represents their first experience of buying and
                selling assets for profit. Beginners can often have a hard time
                dealing with the intricacies of cryptocurrency trading.
              </h5>
              <h5 class="color-white mb-0 mb-md-4">
                Are you new to cryptocurrency and just getting started? No
                Problem! Digital assets may sound puzzling, but we are here to
                assist you!
              </h5>
              <h5 class="color-white mb-0 mb-md-4">
                Cryptbids began as a realization that specific cryptocurrencies
                are complicated. We felt the need for a robust system that
                enables buyers to buy or sell without running into any issues
                and charges.
              </h5>
              <h5 class="color-white mb-0 mb-md-4">
                We envision a P2P marketplace that is easy to use and safe to
                utilize.
              </h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about-us__hero-section about-us__hero-section--3">
      <div class="about-us__hero-section--inner">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-7 padding-top-200">
              <h1 class="color-white">
                EASY FOR
                <span class="color-primary">BEGINNERS</span>
              </h1>
              <h5 class="color-white mb-0 mb-md-4">
                Instead of diving into complexities, we made our market
                machinery simple, robust, and devoid of issues/charges. In order
                to achieve simplicity, we made our dealings Peer to Peer. P2P is
                safer and easier to use.
              </h5>
            </div>
            <div class="col-12 col-md-5"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="about-us__hero-section about-us__hero-section--4">
      <div class="about-us__hero-section--inner">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-5"></div>
            <div class="col-12 col-md-7 padding-top-100 padding-bottom-80">
              <h1 class="color-white">
                CRYPTBIDS
                <span class="color-primary">SECURITY</span>
              </h1>
              <h5 class="color-white mb-0 mb-md-4">
                > To ensure enhanced security of transactions, we accept
                Bitcoin, Ethereum, and Litecoin to process all our payments.
                <br /><br />
                > We DO NOT accept other payment processes like bank or
                debit/credit card transactions (Because your privacy is
                important to us).
                <br /><br />
                > CRYPTBiDS recommends two-step authentication for your payment
                processes in order to maintain the safety of breach/hack.
                <br /><br />
                > To protect your transactions by enforcing 30-day security for
                buyers. This is to make sure you receive what you pay for or get
                a transaction recovery if you did not receive the item.
                <br /><br />
                > To avoid deception, we do not allow payments outside
                CRYPTBiDS. This could easily lead to losing your money to
                scammers. Moreover, it ruins the trust of our customers in our
                services.
                <br /><br />
                > We allow only verified sellers to sell cryptocurrency. We
                suspend the listings of unverified sellers.
                <br /><br />
                > Listing items in the wrong category also leads to account
                suspension.
              </h5>
            </div>
          </div>
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
export default {
  components: {
    InertiaLink,
    Header,
    Footer,
  },
  data() {
    return {};
  },
  created() {
    console.log(this.$route.params.id);
  },
};
</script>

<style>
</style>