<template>
  <div>
    <PageLoader :show="true" :time="800" />
    <Header />
    <section class="light-bg padding-top-80 padding-bottom-150" id="team">
      <div class="container">
        <div class="heading text-center">
          <h2>Frequently asked questions</h2>
          <p>
            if you can't find the answer to your question below, then we will be
            more than happy to help you out, just contact us
            <InertiaLink :href="route('contact-us')">here</InertiaLink>
          </p>
        </div>
        <!-- FAQS -->
        <div class="row">
          <!-- full row questions -->
          <div class="col-12">
            <div class="panel-group accordion" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseOne1"
                      class="collapsed"
                    >
                      What is Cryptbids?</a
                    >
                  </h4>
                </div>
                <div id="collapseOne1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    Cryptbids is an E-commerce marketplace for undesirable
                    digital currencies, which also serves as an auction company
                    offering services in several regions, including the United
                    States, European Union, South East Asia and more.
                    <br /><br />
                    We present a P2P platform whereby clients can auction their
                    cryptocurrency within four different categories, including,
                    Application Cryptocurrencies, Platform Cryptocurrencies,
                    Transactional Cryptocurrencies, and Utility
                    Cryptocurrencies. You can rely on us to transact securely
                    and with peace of mind.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseTwo2"
                      class="collapsed"
                    >
                      What coins are supported?</a
                    >
                  </h4>
                </div>
                <div id="collapseTwo2" class="panel-collapse collapse">
                  <div class="panel-body">
                    Currently, we support Bitcoin BTC, Ethereum ETH, and
                    Litecoin LTC.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseThree3"
                      class="collapsed"
                    >
                      What Items can be sold on Cryptbids?</a
                    >
                  </h4>
                </div>
                <div id="collapseThree3" class="panel-collapse collapse">
                  <div class="panel-body">
                    You can sell any cryptocurrency within four different
                    categories, including, Application Cryptocurrencies,
                    Platform Cryptocurrencies, Transactional Cryptocurrencies,
                    and Utility Cryptocurrencies.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapsefour4"
                      class="collapsed"
                    >
                      How is the Bitcoin Price Calculated?</a
                    >
                  </h4>
                </div>
                <div id="collapsefour4" class="panel-collapse collapse">
                  <div class="panel-body">
                    We use BitcoinAverage to get the prices for Bitcoin as a
                    fair average price for both buyers and sellers regardless of
                    the exchange they use.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- half row question 1 -->
          <div class="col-md-6">
            <div class="panel-group accordion" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseOne5"
                      class="collapsed"
                    >
                      Offering to Buy or Sell outside of Cryptbids</a
                    >
                  </h4>
                </div>
                <div id="collapseOne5" class="panel-collapse collapse in">
                  <div class="panel-body">
                    It is against Cryptbids’s Terms to contact another user
                    through our site and services and offer to finalize the deal
                    outside of Cryptbids.
                    <br /><br />
                    If you receive an offer to buy or sell outside Cryptbids,
                    please report it.
                    <br /><br />
                    Make sure you follow these guidelines. If you don’t, you may
                    be subject to a range of actions, including suspension of
                    your account.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseTwo6"
                      class="collapsed"
                    >
                      I have received an email asking me to confirm my password,
                      what is this?</a
                    >
                  </h4>
                </div>
                <div id="collapseTwo6" class="panel-collapse collapse">
                  <div class="panel-body">
                    Cryptbids will NEVER ask you to confirm your password. We do
                    not need your password for any purposes. Cryptbids will ONLY
                    send emails from @Cryptbids.com email addresses. Any emails
                    received claiming to be from Cryptbids and asking for your
                    password is an attempt to gain access to your profile. Be
                    very careful with phishing attempts and fake emails and
                    report such activities to the support team ASAP so the
                    correct actions can be taken to protect your account. Please
                    enable Google 2fa to add another layer of security to your
                    account.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseThree7"
                      class="collapsed"
                    >
                      How much are your Fees and Charges?</a
                    >
                  </h4>
                </div>
                <div id="collapseThree7" class="panel-collapse collapse">
                  <div class="panel-body">
                    Posting/Listing on CRYPTBiDS is completely FREE!
                    <br /><br />
                    Charges occur on items sale only.
                    <br /><br />
                    Once an item is sold/auctioned CRYPTBiDS will charge a total
                    of 20% of the complete transaction (10% buyer, 10% seller).
                    <br /><br />
                    Example: In a $100 transaction, the seller and buyer will
                    pay 10% each (meaning $10 each).
                    <br /><br />
                    In case the deal is canceled (by seller or buyer), COMPLETE
                    amount will be returned back to the seller, without a single
                    percentage deducted. (Cancelled orders will not be charged)
                    <br /><br />
                    In order to secure each transaction, payment is paid in its
                    full: no installments!
                    <br /><br />
                    Transactions must be completed within 48 hours.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapsefour8"
                      class="collapsed"
                    >
                      How does the fees system work?</a
                    >
                  </h4>
                </div>
                <div id="collapsefour8" class="panel-collapse collapse">
                  <div class="panel-body">
                    Fees are calculated and deducted from the final price of any
                    sold items, payment is sent to Cryptbids’s offline wallets
                    where fees get deducted before sending the remaining amount
                    to the seller.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- half row question 2 -->
          <div class="col-md-6">
            <div class="panel-group accordion" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseOne9"
                      class="collapsed"
                    >
                      How is the Litecoin Price Calculated?</a
                    >
                  </h4>
                </div>
                <div id="collapseOne9" class="panel-collapse collapse">
                  <div class="panel-body">
                    We use coindesk to get the average price to calculate the
                    price for Litecoin.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseTwo-1"
                      class="collapsed"
                    >
                      How is the Ethereum Price Calculated?</a
                    >
                  </h4>
                </div>
                <div id="collapseTwo-1" class="panel-collapse collapse">
                  <div class="panel-body">
                    We use ethereumprice Ethereum Calculator & Conversion
                    average price to calculate the price for Ethereum.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseThree-1"
                      class="collapsed"
                    >
                      Do I have to register to participate in any activity on
                      Cryptbids?</a
                    >
                  </h4>
                </div>
                <div id="collapseThree-1" class="panel-collapse collapse">
                  <div class="panel-body">
                    Yes, any buying, selling, or posting on Cryptbids requires
                    the user to be registered.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapsefour-1"
                      class="collapsed"
                    >
                      Why do I need to supply my Bitcoin, Litecoin or Ethereum
                      addresses before I can list?</a
                    >
                  </h4>
                </div>
                <div id="collapsefour-1" class="panel-collapse collapse">
                  <div class="panel-body">
                    Cryptbids does not provide hosted wallets for its users. All
                    transactions are P2P made between buyer and seller with
                    provided wallet addresses. If the address is deemed wrong or
                    if the seller deletes the address after they list an item,
                    we will contact them to advise them to update their address.
                    If they fail to update the address within a 30-day time
                    span, we will refund the coins to the buyer.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- full row question 2 -->
          <div class="col-md-12">
            <div class="panel-group accordion" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseOne-11"
                      class="collapsed"
                    >
                      How can I withdraw funds from Cryptbids.com?</a
                    >
                  </h4>
                </div>
                <div id="collapseOne-11" class="panel-collapse collapse">
                  <div class="panel-body">
                    We do not hold any funds for neither the seller or the buyer
                    on our site, all funds are transferred P2P. The buyer’s
                    funds can be refunded manually either when a seller cancels
                    a sale or if the buyer has requested a refund.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseTwo-12"
                      class="collapsed"
                    >
                      How much time do I have to pay for an item I won and what
                      happens if I don’t pay?</a
                    >
                  </h4>
                </div>
                <div id="collapseTwo-12" class="panel-collapse collapse">
                  <div class="panel-body">
                    When an auction or a fixed price item is won, you are
                    expected to pay for the item in full within 48 hours, in the
                    case that you are unable to pay for the item for whatever
                    reason, it’s your responsibility to notify the seller or
                    Cryptbids, failing to do so will result in action being
                    taken and your account could get suspended.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapseThree-13"
                      class="collapsed"
                    >
                      How can I delete an item I posted?</a
                    >
                  </h4>
                </div>
                <div id="collapseThree-13" class="panel-collapse collapse">
                  <div class="panel-body">
                    You can delete items you’ve posted from your account page
                    under the “Active Listings” menu. If you want to delete a
                    specific purchase of an item, you can “cancel” a sale, which
                    will leave the remaining quantity of your item live but will
                    only delete that single sale.
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapsefour-14"
                      class="collapsed"
                    >
                      What can I do if the buyer never pays for an item?</a
                    >
                  </h4>
                </div>
                <div id="collapsefour-14" class="panel-collapse collapse">
                  <div class="panel-body">
                    If you do not receive an email notifying you that a payment
                    was received for your sold item within 48 hours of the sale,
                    feel free to report your item and make sure you leave the
                    appropriate feedback to the buyer. No further action needs
                    to be taken after that. Items will automatically be void and
                    any funds received later then 48 hours from the buyer will
                    be returned back to them.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <Footer />
  </div>
</template>

<script>
import { InertiaLink } from "@inertiajs/inertia-vue";
import Header from "./../Header/Header";
import Footer from "./../Footer/Footer";
import PageLoader from "./../PageLoader/PageLoader";
export default {
  components: {
    InertiaLink,
    Header,
    Footer,
    PageLoader,
  },
};
</script>

<style>
</style>