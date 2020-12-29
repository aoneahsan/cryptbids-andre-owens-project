<template>
  <div>
    <div class="container st-container st-effect">
      <div class="block-page text-center">
        <a href="#" @click="openHome"
          ><img
            src="cryptic-template-assets/images/logo1.png"
            alt="cryptic-logo"
        /></a>
        <h3 class="text-white text-bold">Sign Up</h3>
        <div class="spacer_10"></div>
        <form>
          <div class="row">
            <div class="input--akira">
              <div class="col-xs-6">
                <span class="input input--akira">
                  <input
                    class="input__field input__field--akira"
                    type="text"
                    id="input-1"
                  />
                  <label class="input__label input__label--akira" for="input-1">
                    <span
                      class="input__label-content input__label-content--akira"
                      >Name</span
                    >
                  </label>
                </span>
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
              <div class="col-xs-6">
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
                <span class="input input--akira">
                  <input
                    class="input__field input__field--akira"
                    type="password"
                    id="input-4"
                  />
                  <label class="input__label input__label--akira" for="input-1">
                    <span
                      class="input__label-content input__label-content--akira"
                      >Repeat Password</span
                    >
                  </label>
                </span>
              </div>
            </div>
          </div>
          <div class="register-check">
            <input type="checkbox" id="c1" name="terms" value="terms" />
            <label for="c1" class="text-white"
              ><span></span>Accept terms & conditions</label
            >
          </div>
          <input
            class="form-control text-bold"
            type="submit"
            value="create an account"
          />
        </form>
        <p class="text-white">
          or
          <InertiaLink :href="route('sign-in', {id: 19})" class="text-bold"
            >login</InertiaLink
          >
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    openHome() {
      window.open("/", "_self");
    },
  },
};
</script>

<style>
</style>