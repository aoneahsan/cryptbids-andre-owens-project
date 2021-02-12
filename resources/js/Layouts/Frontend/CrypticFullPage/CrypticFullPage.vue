<template>
  <div>
    <div id="st-container" class="st-container st-effect">
      <!-- MAIN PAGE CONTAINER -->
      <div class="container body">
        <div class="main_container">
          <!-- LEFT PRIMARY NAVIGATION -->
          <div class="col-md-3 left_col">
            <div class="scroll-view">
              <div class="navbar nav_title">
                <h1 class="logo_wrapper">
                  <a href="/" class="site_logo">
                    <img
                      class="logo"
                      src="/cryptic-template-assets/images/cryptic-logo.png"
                      alt="cryptic logo"
                    />
                    <span class="logo-text">Cryptbids</span>
                  </a>
                </h1>
              </div>
              <div class="clearfix"></div>
              <div
                id="sidebar-menu"
                class="main_menu_side hidden-print main_menu"
              >
                <div class="menu_section">
                  <h3>General</h3>
                  <div class="clearfix"></div>
                  <ul class="nav side-menu">
                    <li>
                      <inertia-link :href="route('dashboard')"
                        ><i class="icon-home icons"></i>
                        <span>Dashboard</span></inertia-link
                      >
                    </li>
                    <li>
                      <inertia-link :href="route('coins')"
                        ><v-icon name="coins"></v-icon>
                        <span>Coins</span></inertia-link
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <!-- /sidebar menu -->
              <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small">
                <a
                  data-toggle="tooltip"
                  id="btnFullscreen"
                  data-placement="top"
                  title="FullScreen"
                >
                  <span
                    class="icon-size-fullscreen icons"
                    aria-hidden="true"
                  ></span>
                </a>
                <a
                  data-toggle="tooltip"
                  data-placement="top"
                  title="Logout"
                  href="/logout"
                >
                  <span class="icon-power icons" aria-hidden="true"></span>
                </a>
              </div>
              <!-- /menu footer buttons -->
            </div>
          </div>
          <!-- TOP SECONDARY NAVIGATION -->
          <div class="top_nav">
            <div class="nav_menu">
              <ul class="nav navbar-nav navbar-left new-navbar-right">
                <li class="toggle-li">
                  <div class="nav toggle burger-nav">
                    <a id="menu_toggle">
                      <div class="burger">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Page Content Slot Starts -->
          <div class="crypticfullpage-layout-spacer col-3"></div>
          <div class="crypticfullpage-layout-content col-9">
            <slot></slot>
          </div>
          <!-- Page Content Slot Ends -->
          <!-- {{-- Footer Content Started --}} -->
          <a href="#" class="scrollToTop"
            ><i class="fa fa-chevron-up text-white" aria-hidden="true"></i
          ></a>
          <!-- PAGE FOOTER -->
          <footer>
            <div class="pull-right">
              All rights reserved <a href="http://cryptbids.com">Cryptbids</a>
            </div>
            <div class="clearfix"></div>
          </footer>
        </div>
      </div>
      <!-- RIGHT SIDE: SEARCH FORM -->
      <div class="search search-main">
        <div
          id="btn-search-close"
          class="btn btn--search-close"
          aria-label="Close search form"
        >
          <i class="fa fa-times"></i>
        </div>
        <form
          class="search__form"
          action="http://html.modeltheme.com/cryptic/search.html"
        >
          <input
            class="search__input"
            name="search"
            type="search"
            placeholder="Hash, transactions..."
            autocapitalize="off"
            spellcheck="false"
          />
          <span class="search__info">Hit enter to search or ESC to close</span>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
.nav_menu {
  min-height: 70px;
}
.crypticfullpage-layout-content {
  /* height: 100vh !important; */
}
.crypticfullpage-layout-content,
.crypticfullpage-layout-spacer {
  padding: 0;
}
body.nav-sm .crypticfullpage-layout-content {
  width: calc(100vw - 70px);
  margin: -10px 0 0 auto;
  padding: 0;
}
body.nav-sm .crypticfullpage-layout-spacer {
  width: 70px;
}
@media all and (min-width: 992px) {
  body.nav-md .crypticfullpage-layout-content {
    width: calc(100vw - 280px);
    margin: -10px 0 0 auto;
  }
  body.nav-md .crypticfullpage-layout-spacer {
    width: 280px;
  }
}
</style>