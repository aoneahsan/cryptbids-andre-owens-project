<template>
  <CrypticFullPage>
    <div
      class="exchange-section data_background text-center"
      data-background="./../cryptic-template-assets/images/exchange-background.png"
      style="height: 100%;"
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
      <div
        class="alert alert-info mb-4"
        role="alert"
        v-if="!user.email_verified_at"
      >
        <strong>Email verification email send, verify email to continue</strong>
      </div>
      <h1 class="text-center">Didn't found email?</h1>
      <p class="text-center">Use below link to recreate verification email.</p>
      <inertia-link
        :href="route('verification.send')"
        class="btn btn-default button-element"
      >
        Resend Verify Email
      </inertia-link>
    </div>
  </CrypticFullPage>
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
.data_background {
  height: 100%;
}
</style>