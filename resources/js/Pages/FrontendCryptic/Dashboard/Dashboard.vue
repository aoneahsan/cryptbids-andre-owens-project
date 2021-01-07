<template>
  <div
    class="exchange-section data_background text-center"
    data-background="./../cryptic-template-assets/images/exchange-background.png"
  >
    <div class="alert alert-success mb-4" role="alert" v-if="success_message">
      <strong>{{ success_message }}</strong>
    </div>
    <div class="alert alert-warning mb-4" role="alert" v-if="warning_message">
      <strong>{{ warning_message }}</strong>
    </div>
    <div class="alert alert-danger mb-4" role="alert" v-if="danger_message">
      <strong>{{ danger_message }}</strong>
    </div>
    <h1 class="text-center">Welcome to Cryptbids!</h1>
    <h2 class="text-center">world best auction platform, where you can.</h2>
    <!-- <inertia-link
      :href="route('verification.send')"
      class="btn btn-default button-element"
    >
      Resend Verify Email
    </inertia-link> -->
  </div>
</template>

<script>
export default {
  props: [
    "user",
    "success_message",
    "info_message",
    "warning_message",
    "danger_message",
    "primary_message",
    "dark_message",
  ],
  methods: {
    resendVerifyEmail() {},
  },
};
</script>

<style>
</style>