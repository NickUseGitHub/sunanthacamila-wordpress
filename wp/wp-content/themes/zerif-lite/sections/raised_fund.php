<style>
  section.raised-fund {
    display: flex;
    justify-content: center;
  }

  .raised-fund.container {
    background: #fff;
    padding: 20px;
  }

  @media (max-width: 767px) {
    .raised-fund.container {
        width: 80%;
    }
  }

  @media (min-width: 768px) {
    .raised-fund.container {
        width: 60%;
    }
  }

  @media (min-width: 1024px) {
    .raised-fund.container {
        width: 50%;
    }
  }

  .raised-fund .horizontal .progress-bar {
    background-color: transparent;
    float: left;
    height: 45px;
    width: 100%;
    padding: 12px 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  
  .raised-fund .horizontal .progress-track {
    background-color: #009ee3;
    position: relative;
    width: 100%;
  }

  .raised-fund .horizontal .progress-fill {
    position: relative;
    background: #f9b235;
    width: 5%;
    color: #fff;
    text-align: center;
    font-family: "Lato","Verdana",sans-serif;
    font-size: 12px;
  }

  .raised-fund .rounded .progress-track,
  .raised-fund .rounded .progress-fill {
    height: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 3px;
    box-shadow: inset 0 0 5px rgba(0,0,0,.2);
  }

  .raised-fund .rounded .progress-fill span {
    font-size: 15pt;
    font-weight: 900;
  }

  /* raised-fund information */
  .raised-fund.container .information {
    display: flex;
    justify-content: space-between;
  }

  .raised-fund.container .information div {
    display: flex;
    flex-direction: column;
  }

  .raised-fund.container .information div:first-child {
    align-items: flex-start;
  }

  .raised-fund.container .information div:last-child {
    align-items: flex-end;
  }

  .raised-fund.container .information div .title {
    font-size: 21pt;
    font-weight: 900;
  }

  .raised-fund.container .information div .amount {
    font-weight: 700;
    line-height: 8pt;
  }
  /* */
</style>

<section class="raised-fund" id="raised-fund">
  <div class="raised-fund container horizontal rounded">
    <div class="information">
      <div>
        <span class="title">Raised</span>
        <span class="amount">$15,359</span>
      </div>
      <div>
        <span class="title">Goal</span>
        <span class="amount">$500,000</span>
      </div>
    </div>
    <div class="progress-bar horizontal">
      <div class="progress-track">
        <div class="progress-fill">
          <span>5%</span>
        </div>
      </div>
    </div>
  </div>
</section>