<template>
  <CrypticFullPage>
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
      <h1 class="text-center">List of Coins!</h1>
      <Vuetable
        ref="vuetable"
        :api-mode="false"
        class="vuetable"
        :fields="['id', 'name', 'email', 'gender']"
        :data="coins"
      ></Vuetable>
      <!-- <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Coin Flag</th>
            <th>Coin Name</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <tr :key="index" v-for="(coin, index) in coins">
            <td>{{ coin.id }}</td>
            <td>{{ coin.symbol }}</td>
            <td>{{ coin.name }}</td>
            <td>{{ coin.price }}</td>
          </tr>
        </tbody>
      </table> -->
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
  data() {
    return {
      coins: [],
    };
  },
  created() {
    this.fetchCoins();
  },
  methods: {
    resendVerifyEmail() {},
    fetchCoins() {
      axios
        .get(
          "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false"
        )
        .then((res) => {
          console.log("coin/list === fetchCoins == res = ", res);
          this.coins = res.data;
        })
        .catch((err) => {
          console.log("coin/list === fetchCoins == err = ", err);
        });
    },
  },
};
</script>

<style>
.data_background {
  height: 100%;
}
.table {
  background: white;
}
</style>