<template>
  <div>
    <PageLoader :show="true" :time="800" />
    <Header />
    <div
      class="disclaimer color-white bg-lightgrey padding-top-100 padding-bottom-40 fees-page-bg"
    >
      <div class="container">
        <div class="row">
          <div class="col-12 mb-4 mb-md-5 px-0 px-md-5">
            <h2 class="text-center mb-5 color-white">
              CRYPTBiDS Fees Structure – Simple, Fast, & Secure!
            </h2>
            <p class="color-white">
              Trading in cryptocurrency has become a lucrative and extensive
              financial activity for businesses and individuals for the last
              couple of years. But, at the same time, it is easier to fall into
              the market hype that everyone is getting richer trading in
              cryptocurrency. This makes traders feel the only left off in
              grabbing such amazing opportunities. Leading to the digital market
              with this mindset, not only experienced traders but newbies too,
              jump into trading cryptocurrency. Scammers, on the other end, wait
              eagerly to prey these pumped-up clients and most of the newbies
              face the first bad experience of their life in dealing with
              digital currency.

              <br /><br /><br />
              Next time, either traders keep extra careful and perform deeper
              research or they say “Goodbye!” to such digital trading.

              <br /><br /><br />
              Moreover, newbies are generally afraid of the possible complexity
              of dealing with cryptocurrency and the fear of unknown makes them
              reluctant to take a step in the direction of cryptocurrency
              trading.

              <br /><br /><br />
              To bridge the gap between this uncertainty and traders, CRYPTBiDS
              steps forward and removes the smoke of doubt and fear with a
              simple, easier, faster, and secure marketplace for all new and
              experienced traders.

              <br /><br /><br />
              CRYPTBiDS is a trusted e-commerce marketplace and auction company
              for cryptocurrency which offers its services in many regions,
              including the European Union, United States, South East Asia and
              several more. CRYPTBiDS presents a P2P platform within the
              following five categories:

              <br /><br /><br />
              Token Utility Token Security Token Coin Privacy Coin

              <br /><br /><br />
              CRYPTBiDS ensures a secure transaction and provides its customers
              with privacy and peace of mind.

              <br /><br /><br />
              How does CRYPTBiDS stand out in the market?

              <br /><br /><br />
              CRYPTBiDS believes in serving with authenticity. Here are our
              prominent features.

              <br /><br /><br />
              Easy For Beginners
              <br /><br /><br />
              Instead of diving into complexities, we made our market machinery
              simple, robust, and devoid of issues/charges. In order to achieve
              simplicity, we made our dealings Peer to Peer. P2P is safer and
              easier to use.

              <br /><br /><br />
              CRYPTBiDS Fees
              <br /><br /><br />
              Fees are the most prominent feature that our market has. Here’s
              the detail:
              <br /><br /><br />
              ✓ Posting/Listing on CRYPTBiDS is completely FREE!
              <br /><br /><br />
              ✓ Charges occur on items sale only.
              <br /><br /><br />
              ✓ Once an item is sold/auctioned CRYPTBiDS will charge a total of
              20% of the complete transaction (10% buyer, 10% seller).
              <br /><br /><br />
              Example: In a $100 transaction, the seller and buyer will pay 10%
              each (meaning $10 each).
              <br /><br /><br />
              ✓ In case the deal is canceled (by seller or buyer), COMPLETE
              amount will be returned back to the seller, without a single
              percentage deducted.
              <br /><br /><br />
              (Cancelled orders will not be charged)
              <br /><br /><br />
              ✓ In order to secure each transaction, payment is paid in its
              full: no installments!
              <br /><br /><br />
              ✓ Payments/Transactions are started after a fix-priced item or
              auction is won.
              <br /><br /><br />
              ✓ Transactions must be completed within 48 hours.
              <br /><br /><br />
              ✓ In case the transfer of payment is not successful against any
              item (due to whatever reasons), the seller is responsible to
              notify the buyer or CRYPTBiDS. Failing to do so will cause the
              seller full refund and possible account suspension.
              <br /><br /><br />
              ✓ A refund will cost the seller $2.00 (or 0.034 LTC, 0.00023 BTC,
              ETH 0.0090).
              <br /><br /><br />
              ✓ The refund fees go to CRYPTBiDS account.

              <br /><br /><br />
              CRYPTBiDS Security
              <br /><br /><br />
              > To ensure enhanced security of transactions, we accept Bitcoin,
              Ethereum, and Litecoin to process all our payments.
              <br /><br /><br />
              > We DO NOT accept other payment processes like bank or
              debit/credit card transactions (Because your privacy is important
              to us).
              <br /><br /><br />
              > CRYPTBiDS recommends two-step authentication for your payment
              processes in order to maintain the safety of breach/hack.
              <br /><br /><br />
              > To protect your transactions by enforcing 30-day security for
              buyers. This is to make sure you receive what you pay for or get a
              transaction recovery if you did not receive the item.
              <br /><br /><br />
              > To avoid deception, we do not allow payments outside CRYPTBiDS.
              This could easily lead to losing your money to scammers. Moreover,
              it ruins the trust of our customers in our services.
              <br /><br /><br />
              > We allow only verified sellers to sell cryptocurrency. We
              suspend the listings of unverified sellers.
              <br /><br /><br />
              > Listing items in the wrong category also leads to account
              suspension.
            </p>
          </div>
        </div>
      </div>
    </div>
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