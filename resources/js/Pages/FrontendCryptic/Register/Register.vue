<template>
  <div>
    <div class="container st-container st-effect">
      <div class="block-page text-center">
        <a href="#" @click="openHome"
          ><img
            src="cryptic-template-assets/images/logo1.png"
            alt="cryptic-logo"
            class="mx-auto"
        /></a>
        <h3 class="text-white text-bold">Sign Up</h3>
        <div class="spacer_30"></div>
        <form @submit.prevent="register()">
          <div class="row">
            <div class="input--akira">
              <div class="col-xs-6">
                <span class="input input--akira">
                  <input
                    class="input__field input__field--akira"
                    type="text"
                    name="name"
                    v-model="user.name"
                    id="name"
                    required
                  />
                  <label
                    class="input__label input__label--akira"
                    for="name"
                    :class="{ 'bg-danger': errors.name }"
                  >
                    <span
                      class="input__label-content input__label-content--akira"
                      >Name</span
                    >
                  </label>
                </span>
                <!-- <span v-if="errors.name">{{ errors.name }}</span> -->
                <span class="input input--akira">
                  <input
                    class="input__field input__field--akira"
                    type="email"
                    name="email"
                    v-model="user.email"
                    id="email"
                    required
                    email
                  />
                  <label
                    class="input__label input__label--akira"
                    for="email"
                    :class="{ 'bg-danger': errors.email }"
                  >
                    <span
                      class="input__label-content input__label-content--akira"
                      >Email</span
                    >
                  </label>
                </span>
                <span class="text-danger" v-if="errors.email">{{
                  errors.email
                }}</span>
              </div>
              <div class="col-xs-6">
                <span class="input input--akira">
                  <input
                    class="input__field input__field--akira"
                    type="password"
                    v-model="user.password"
                    id="password"
                    name="password"
                    required
                    min="6"
                  />
                  <label
                    class="input__label input__label--akira"
                    for="password"
                    :class="{ 'bg-danger': errors.password }"
                  >
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
                    v-model="user.password_confirmation"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    min="6"
                  />
                  <label
                    class="input__label input__label--akira"
                    for="password_confirmation"
                    :class="{ 'bg-danger': errors.password_confirmation }"
                  >
                    <span
                      class="input__label-content input__label-content--akira"
                      >Repeat Password</span
                    >
                  </label>
                </span>
                <span v-if="errors.password">{{ errors.password }}</span>
                <span v-if="errors.password_confirmation">{{
                  errors.password_confirmation
                }}</span>
              </div>
            </div>
          </div>
          <!-- <div class="register-check">
            <input type="checkbox" id="c1" name="terms" value="terms" />
            <label for="c1" class="text-white"
              ><span></span>Accept terms & conditions</label
            >
          </div> -->
          <input
            class="form-control text-bold"
            type="submit"
            value="create an account"
          />
        </form>
        <p class="text-white">
          or
          <InertiaLink :href="route('sign-in')" class="text-bold"
            >login</InertiaLink
          >
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user: {
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
      },
      errors: {},
    };
  },
  beforeMount() {
    const urlParams = window.location.search.replace(/\?/, "").split("=");
    this.user.email = urlParams[1];
  },
  methods: {
    openHome() {
      window.open("/", "_self");
    },
    register() {
      this.errors = {};
      this.$inertia.post("/sign-up", this.user, {
        preserveScroll: true,
        onSuccess: (res) => {
          console.log("res = ", res);
          if (!!res.props.errors) {
            this.errors = res.props.errors;
          } else {
            this.route("dashboard");
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