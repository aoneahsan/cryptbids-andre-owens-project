<template>
  <div>
    <div class="container st-container st-effect">
      <div class="block-page text-center">
        <a href="/"
          ><img
            src="cryptic-template-assets/images/logo1.png"
            alt="cryptic-logo"
        /></a>
        <h3 class="text-white text-bold">Sign In</h3>
        <div class="spacer_10"></div>
        <form>
          <div class="row">
            <div class="input--akira">
              <div class="col-xs-12">
                <span class="input input--akira">
                  <input
                    class="input__field input__field--akira"
                    type="email"
                    id="input-2"
                  />
                  <label class="input__label input__label--akira" for="input-1">
                    <span
                      class="input__label-content input__label-content--akira"
                      >Email</span
                    >
                  </label>
                </span>
              </div>
              <div class="col-xs-12">
                <span class="input input--akira">
                  <input
                    class="input__field input__field--akira"
                    type="password"
                    id="input-3"
                  />
                  <label class="input__label input__label--akira" for="input-1">
                    <span
                      class="input__label-content input__label-content--akira"
                      >Password</span
                    >
                  </label>
                </span>
              </div>
            </div>
          </div>
          <button type="button" @click="check">ok</button>
          <input
            class="form-control text-bold"
            type="submit"
            value="Sign In"
          />
        </form>
        <p class="text-white">
          or <InertiaLink :href="route('sign-up')" class="text-bold">register</InertiaLink>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import Button from '../../../Jetstream/Button.vue';
export default {
  components: { Button },
  data() {
    return {};
  },
  created() {
    console.log("this.route().queryParams = ", this.route().queryParams);
  },
  methods: {
    check () {
      console.log("this.route().queryParams = ", this.route().queryParams);
    }
  }
};
</script>

<style>
</style>