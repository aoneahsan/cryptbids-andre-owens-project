<template>
  <div>
    <PageLoader :show="true" :time="800" />
    <Header />
    <footer id="contact">
      <div class="container">
        <!-- Contact Us -->
        <div class="contact">
          <h1 class="color-white mb-4 mb-md-5 text-center d-block">
            Get In Touch With us
          </h1>
          <!-- Success Msg -->
          <div id="contact_message" class="success-msg">
            <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been
            Submitted
          </div>

          <!-- FORM -->
          <form
            role="form"
            id="contact_form"
            class="contact-form"
            method="post"
            onSubmit="return false"
          >
            <ul class="row nolist-style">
              <li class="col-sm-4">
                <label>
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    placeholder="Name"
                  />
                </label>
              </li>
              <li class="col-sm-4">
                <label>
                  <input
                    type="text"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Email"
                  />
                </label>
              </li>
              <li class="col-sm-4">
                <label>
                  <input
                    type="text"
                    class="form-control"
                    name="company"
                    id="company"
                    placeholder="Phone"
                  />
                </label>
              </li>
              <li class="col-sm-12">
                <label>
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="5"
                    placeholder="Message"
                  ></textarea>
                </label>
              </li>
              <li class="col-sm-12 text-left">
                <button
                  type="submit"
                  class="btn btn-inverse"
                  value="submit"
                  id="btn_submit"
                  onClick="proceed();"
                >
                  SUBMIT
                </button>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </footer>
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
};
</script>

<style>
</style>