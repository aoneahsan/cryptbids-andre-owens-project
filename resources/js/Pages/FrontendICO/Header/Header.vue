<template>
  <div>
    <!-- header -->
    <header class="sticky">
      <div class="container">
        <!-- Logo -->
        <div class="logo">
          <InertiaLink :href="route('home')">
            <img
              class="img-responsive"
              src="custom-assets/images/cryptbids-logo.png"
              alt=""
            />
          </InertiaLink>
        </div>
        <nav class="navbar ownmenu navbar-expand-lg">
          <button
            class="navbar-toggler collapsed"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav">
              <!-- <li class="request()->is('home') ? 'active' : ''">
              <InertiaLink :href="route('home')">Home</InertiaLink>
            </li> -->
              <!-- add "scroll" class for a scroll link, then #id to section where to
            scroll -->
              <!-- <li class="request()->is('about-us') ? 'active' : ''">
              <InertiaLink :href="route('about-us')">About Us</InertiaLink>
            </li>
            <li class="request()->is('faqs') ? 'active' : ''">
              <InertiaLink :href="route('faqs')">FAQs</InertiaLink>
            </li>
            <li class="request()->is('fees') ? 'active' : ''">
              <InertiaLink :href="route('fees')">Fees</InertiaLink>
            </li>
            <li class="request()->is('contact-us') ? 'active' : ''">
              <InertiaLink :href="route('contact-us')">Contact Us</InertiaLink>
            </li> -->

              <li class="scroll">
                <a href="#" v-scroll-to="'#how-it-works'">How it works</a>
              </li>
              <!-- @auth -->
              <!-- <li class="request()->is('logout') ? 'active' : ''">
              <InertiaLink :href="route('logout')" class="btn btn-inverse py-2"
                >Logout</
              >
            </li> -->
              <!-- @endauth @guest -->
              <div v-if="!user">
                <li class="request()->is('sign-in') ? 'active' : ''">
                  <a href="sign-in">Login</a>
                </li>
                <li class="request()->is('register') ? 'active' : ''">
                  <a href="register" class="btn btn-inverse py-2">Register</a>
                </li>
              </div>
              <div v-if="user">
                <li>
                  <a href="/logout" class="btn btn-inverse py-2">Logout</a>
                </li>
              </div>
              <!-- @endguest -->
            </ul>
          </div>
        </nav>
      </div>
      <div class="clearfix"></div>
    </header>
  </div>
</template>

<script>
import { InertiaLink } from "@inertiajs/inertia-vue";
export default {
  props: ["user"],
  components: {
    InertiaLink,
  },
  data() {
    return {};
  },
  methods: {
    // logout() {
    //   this
    // },
  },
  created() {
    console.log("user = ", this.user);
  },
};
</script>

<style>
</style>