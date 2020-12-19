<template>
  <!-- Footer -->
  <footer id="contact">
    <div class="footer-sections">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3 pl-0">
            <div class="w-100 text-center text-md-left mt-n3 mb-4">
              <img
                src="images/cryptbids/cryptbids-logo.png"
                class="col-12 col-sm-10 pl-0 d-inline-block"
              />
            </div>
            <p class="color-white">
              Join a global community of people who have discovered their
              pathway to the crypto world with Cryptbids.
            </p>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h5 class="color-white mb-4">About Us</h5>
            <ul>
              <li>
                <InertiaLink
                  class="request()->is('about-us') ? 'active' : ''"
                  :href="route('about-us')"
                  >About</InertiaLink
                >
              </li>
              <li>
                <InertiaLink
                  class="request()->is('career') ? 'active' : ''"
                  :href="route('career')"
                  >Career</InertiaLink
                >
              </li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h5 class="color-white mb-4">Services</h5>
            <ul>
              <li>
                <InertiaLink
                  class="request()->is('fees') ? 'active' : ''"
                  :href="route('fees')"
                  >Fees</InertiaLink
                >
              </li>
              <li>
                <InertiaLink
                  class="request()->is('faqs') ? 'active' : ''"
                  :href="route('faqs')"
                  >FAQs</InertiaLink
                >
              </li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h5 class="color-white mb-4">Community</h5>
            <ul class="socials">
              <li>
                <InertiaLink :href="route('home')"
                  ><i class="fab fa-facebook-f"></i
                ></InertiaLink>
              </li>
              <li>
                <InertiaLink :href="route('home')"
                  ><i class="fab fa-twitter"></i
                ></InertiaLink>
              </li>
              <li>
                <InertiaLink :href="route('home')"
                  ><i class="fab fa-github"></i
                ></InertiaLink>
              </li>
              <li>
                <InertiaLink :href="route('home')"
                  ><i class="fab fa-instagram"></i
                ></InertiaLink>
              </li>
              <li>
                <InertiaLink :href="route('home')"
                  ><i class="fab fa-youtube"></i
                ></InertiaLink>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Rights -->
    <div class="rights">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p>© 2020 Cryptbids.com. All rights reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <InertiaLink
              class="request()->is('disclaimer') ? 'active' : ''"
              :href="route('disclaimer')"
              >Disclaimer
            </InertiaLink>
            <InertiaLink
              class="request()->is('faqs') ? 'active' : ''"
              :href="route('faqs')"
              >Faqs
            </InertiaLink>
            <InertiaLink
              class="request()->is('terms-and-conditions') ? 'active' : ''"
              :href="route('terms-and-conditions')"
              >Terms & Conditions
            </InertiaLink>
            <InertiaLink
              class="request()->is('privacy-policy') ? 'active' : ''"
              :href="route('privacy-policy')"
              >Privacy Policy
            </InertiaLink>
            <InertiaLink
              class="request()->is('contact-us') ? 'active' : ''"
              :href="route('contact-us')"
              >Contact Us</InertiaLink
            >
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
import { InertiaLink } from "@inertiajs/inertia-vue";
export default {
  components: {
    InertiaLink,
  },
};
</script>

<style>
</style>