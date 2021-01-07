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
        <form @submit.prevent="login()">
          <div class="row">
            <div class="input--akira">
              <div class="col-xs-12">
                <span class="input input--akira">
                  <input
                    class="input__field input__field--akira"
                    type="email"
                    v-model="user.email"
                    id="input-2"
                  />
                  <label
                    class="input__label input__label--akira"
                    for="input-1"
                    :class="{ 'bg-danger': errors.email }"
                  >
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
                    v-model="user.password"
                    id="input-3"
                  />
                  <label
                    class="input__label input__label--akira"
                    for="input-1"
                    :class="{ 'bg-danger': errors.password }"
                  >
                    <span
                      class="input__label-content input__label-content--akira"
                      >Password</span
                    >
                  </label>
                </span>
                <span v-if="errors.email">{{ errors.email }}</span>
                <span v-if="errors.password">{{ errors.password }}</span>
              </div>
            </div>
          </div>
          <input class="form-control text-bold" type="submit" value="Sign In" />
        </form>
        <p class="text-white">
          or
          <InertiaLink :href="route('sign-up')" class="text-bold"
            >register</InertiaLink
          >
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import Button from "../../../Jetstream/Button.vue";
export default {
  components: { Button },
  data() {
    return {
      user: {
        email: "",
        password: "",
      },
      errors: {},
    };
  },
  beforeMount() {
    const urlParams = window.location.search.replace(/\?/, "").split("=");
    this.user.email = urlParams[1];
  },
  mounted() {},
  created() {},
  methods: {
    login() {
      this.errors = {};
      this.$inertia.post("/sign-in", this.user, {
        preserveScroll: true,
        onSuccess: (res) => {
          if (!!res.props.errors) {
            this.errors = res.props.errors;
          } else {
            window.open("/dashboard", "_self");
          }
          console.log("this.errors = ", this.errors);
          console.log("this.errors.email = ", this.errors.email);
        },
        onError: (err) => {
          console.log(err);
        },
      });
    },
  },
};
</script>

<style>
</style>