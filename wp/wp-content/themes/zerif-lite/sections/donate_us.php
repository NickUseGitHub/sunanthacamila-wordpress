<style>
  .donate-us {
    display: flex;
    align-items: center;
    background-color: white;
  }

  @media (max-width: 767px) {
    .donate-us .container {
        width: 80%;
    }
  }

  @media (min-width: 768px) {
    .donate-us .container {
        width: 60%;
    }
  }

  @media (min-width: 1024px) {
    .donate-us .container {
        width: 50%;
    }
  }

  .donate-us .container .grid-boxes {
    display: grid;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  @media (max-width: 767px) {
    .donate-us .container .grid-boxes {
      grid-template-columns: 10% 80% 10%;
      grid-template-rows: auto;
      grid-template-areas:
        ". donate-paypay ."
        ". donate-stripe .";
    }
  }

  @media (min-width: 768px) {
    .donate-us .container .grid-boxes {
      grid-template-columns: 10% 35% 5% 5% 35% 10%;
      grid-template-rows: auto;
      grid-template-areas:
        ". donate-paypay . . donate-stripe .";
    }
  }

  @media (min-width: 1024px) {
    .donate-us .container .grid-boxes {
      grid-template-columns: 10% 35% 5% 5% 35% 10%;
      grid-template-rows: auto;
      grid-template-areas:
        ". donate-paypay . . donate-stripe .";
    }
  }

  .donate-us .container .grid-boxes .paypay {
    grid-area: donate-paypay;
  }

  .donate-us .container .grid-boxes .stripe {
    grid-area: donate-stripe;
  }

  .donate-form {
    display: flex;
    flex-direction: column;
  }

  .donate-form .btn-donate-stripe-container {
    cursor: pointer;
    border-radius: 3px;
    border: 2px solid #635bff;
    margin-top: 5px;
  }

  .btn-donate-stripe {
    height: 30px;
  }

</style>

<section class="donate-us" id="donate-us">
  <div class="container">
    <h3>Donate Us</h3>
    <div class="grid-boxes">
      <div class="paypay">
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=UE7DNPCJ5T5J4">
          <img
            class="size-thumbnail wp-image-420 alignleft size-full"
            loading="lazy"
            src="http://www.sunanthacamila.org/wp-content/uploads/2013/06/PayPalDonateNow1.png"
            alt="PayPalDonateNow1"
            width="480"
            height="236">
        </a>
      </div>
      <div class="stripe">
        <form class="donate-form" onclick="return false;">
          <input type="number" name="amount" step="1" min="1" placeholder="$0.00 USD">
          <div class="btn-donate-stripe-container">
            <span>Pay with</span>
            <img class="btn-donate-stripe" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script src="https://js.stripe.com/v3/" defer></script>
<script type="text/javascript">
  const stripeDonateButton = document.querySelector(".btn-donate-stripe");

  stripeDonateButton.addEventListener('click', () => {
    const stripe = Stripe('<STRIPE_PUBLIC_KEY');
    const backendUrl = '<BACKEND_URL>';
    const formData = new FormData(document.querySelector(".donate-form"));
    const domainUrl = window.location.href;
    const cancel_url = domainUrl + "cancel_url";
    const success_url = domainUrl + "success_url";
    const amount = Number(formData.get("amount")) * 100;

    if (amount < 1) {
      alert("Please insert valid Amount number");
      return;
    }
    
    fetch(backendUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        name: "Sununthacamila Donation",
        amount: Number(formData.get("amount")) * 100,
        cancel_url: cancel_url,
        success_url: success_url
      })
    })
    .then(res => res.text())
    .then(sessionId => stripe.redirectToCheckout({ sessionId }));
  });
</script>