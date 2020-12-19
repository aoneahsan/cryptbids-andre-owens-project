<template>
  <div>
    <PageLoader :show="true" :time="800" />
    <Header />
    <div class="disclaimer bg-lightgrey padding-top-100 padding-bottom-40">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-4 mb-md-5">
            <h3>Cryptbids Legal Disclaimer</h3>
            <p>
              We are announcing that all the cogitation, scrutiny, offers, price
              tags, auction discounts, and considerations present on the website
              (<a href="https://cryptbids.com" target="_blank"
                >https://cryptbids.com</a
              >) provided for information purposes only and the information
              contained therein must not be relied on as credit or legal advice.
              The information contained on the site ”<a
                href="https://cryptbids.com"
                target="_blank"
                >https://cryptbids.com</a
              >” is provided only as general information. Because it is only
              updated periodically, such information may or may not reflect the
              most current information available to “<a
                href="https://cryptbids.com"
                target="_blank"
                >https://cryptbids.com</a
              >”; we cannot guarantee that it is correct or complete at any
              particular time. Further,
              <a href="https://cryptbids.com" target="_blank"
                >https://cryptbids.com</a
              >
              has no control over and does not guarantee the accuracy of the
              information available through any links contained in the site.
            </p>
          </div>
          <div class="col-12 mb-4 mb-md-5">
            <h3>WARRANTY DISCLAIMER</h3>
            <p>
              YOU AGREE THAT ITS YOUR CHOICE TO USE OUR WEBSITE. TO THE FULLEST
              EXTENT PERMITTED BY LAW, CRYPTBIDS, ITS OFFICERS, TRUSTEES,
              EMPLOYEES, AND AGENTS EXCLUDE ALL WARRANTIES, EXPRESS OR IMPLIED,
              IN CONNECTION WITH THE SERVICES AND YOUR USE THEREOF. TO THE
              FULLEST EXTENT PERMITTED BY LAW, FINALLY EXCLUDES ALL WARRANTIES,
              CONDITIONS, TERMS OR REPRESENTATIONS ABOUT THE ACCURACY OR
              COMPLETENESS OF THIS SITE’S CONTENT.
            </p>
          </div>
          <div class="col-12 mb-4 mb-md-5">
            <h3>INFORMATION TO CONSIDER</h3>
            <p>
              <a href="https://cryptbids.com" target="_blank"
                >https://cryptbids.com</a
              >
              its subsidiaries, affiliates, and its licensors do not warrant
              that: (1) assume that information contained on this landing page
              is up to date; (2) rely upon any such information for any purpose
              without first seeking independent advice; and (3) provide any
              information to “
              <a href="https://cryptbids.com" target="_blank"
                >https://cryptbids.com</a
              >/” if the provider considers the information confidential, as the
              site may not be secure.
            </p>
          </div>
          <div class="col-12 mb-4 mb-md-5">
            <h3>USER WARRANTIES AND DISCLAIMER:</h3>
            <p>
              <a href="https://cryptbids.com" target="_blank"
                >https://cryptbids.com</a
              >
              does not provide investment, financial, or legal advice. This site
              cannot replace professional advice and independent actual
              verification. The content presented on this site is for
              informational purposes only and for its use, you must accept the
              disclaimer of
              <a href="https://cryptbids.com" target="_blank"
                >https://cryptbids.com</a
              >.
            </p>
            <ul>
              <li>
                <a href="https://cryptbids.com" target="_blank"
                  >https://cryptbids.com</a
                >
                is neither a trading platform.
              </li>
              <li>
                We do not ask for entering into any securities transactions or
                investment advice.
              </li>
              <li>We do not provide personalized recommendation.</li>
              <li>
                We do not guarantee that our auction is suitable for investment.
              </li>
              <li>We are neither accountants nor lawyers.</li>
            </ul>
          </div>
          <div class="col-12 mb-4 mb-md-5">
            <h3>PROCESSING OF AUCTION DATA</h3>
            <p>
              In addition, you acknowledge that the purpose of this Service is
              to provide information about the Foundation, the Service, and the
              Auctions. Whether you wish to submit or have submitted individual
              information to us to be enlisted for investment in the Auctions as
              well as a potential acquirer of Tokens, you consent to our
              collection, processing, use and disclosure of such personal data
              for the purposes of such registration and also the issuance of
              Tokens for the purposes of the Auctions.
            </p>
            <p>
              We additionally maintain whatever authority is needed to screen,
              check and procedure your own information if important to examine
              or get proof concerning any objection, guarantee or debate or any
              genuine or suspected illegal or unlawful conduct or to aid in such
              investigation or evidence gathering by any law enforcement or
              regulatory authorities.
            </p>
          </div>
          <div class="col-12 mb-4 mb-md-5">
            <h3>CORRESPONDENCE EXCHANGE</h3>
            <p>
              It should be deemed and acknowledged to all of our website
              visitors that we do not provide crypto exchange services with any
              third parties or individual, including banks and other financial
              institutions. There are no correspondence exchange services are
              being entertained here only Cryptbids.com is an online
              cryptocurrency auction platform.
            </p>
          </div>
          <div class="col-12 mb-4 mb-md-5">
            <h3>CONSENT DISCLAIMER:</h3>
            <p>
              Bearing the applicable consent allowed by law, in no occasion
              shall
              <a href="https://cryptbids.com" target="_blank"
                >https://cryptbids.com</a
              >
              or our providers be liable to you or any outsider for any lost
              benefits, lost information, expenses of acquisition of substitute
              remedies, or any circuitous, important, excellent, coincidental,
              uncommon or reformatory harms emerging from or identifying with
              these terms or your utilization of, or inadequacy to utilize the
              site regardless of whether an organization has been instructed
              concerning the likelihood of such harms. Access to and utilization
              of the site is at your own consent and risk, and you will be
              exclusively in charge of any harm to your gadget or operating
              system, or loss of (data)information coming about in this manner.
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