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
                    :class="{ 'bg-danger': errors.name > 0 }"
                  >
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
                    name="email"
                    v-model="user.email"
                    id="email"
                    required
                    email
                  />
                  <label
                    class="input__label input__label--akira"
                    for="email"
                    :class="{ 'bg-danger': errors.email > 0 }"
                  >
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
                    v-model="user.password"
                    id="password"
                    name="password"
                    required
                    min="6"
                  />
                  <label
                    class="input__label input__label--akira"
                    for="password"
                    :class="{ 'bg-danger': errors.password > 0 }"
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
                    id="password"
                    name="password_confirmation"
                    required
                    min="6"
                  />
                  <label
                    class="input__label input__label--akira"
                    for="password_confirmation"
                    :class="{ 'bg-danger': errors.password_confirmation > 0 }"
                  >
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
          <InertiaLink :href="route('sign-in', { id: 19 })" class="text-bold"
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
      console.log("this.user = ", this.user);
      this.$inertia.post("/sign-up", this.user, {
        preserveScroll: true,
        onSuccess: (res) => {
          console.log(res);
        },
        onError: (err) => {
          console.log(err);
          this.errors = err?.props?.errors;
        },
      });
    },
  },
};
</script>

<style>
</style>