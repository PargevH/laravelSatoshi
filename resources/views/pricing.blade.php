@extends('layouts.app')


@section('content')
<section class="pricing">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h1>Be confident about your next cryptocurrency trade</h1>
                    <p>Concise trading signals to help you make the right decision, every time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricingType">
    <div class="content">
        <div class="row no-gutters">
            <div class="col-md-5">
                <div class="checkPrice">
                    <ul id="myCheckbox">
                        <li class="active">
                            <div class="radioButtons">
                                <label class="checkContainer">Free
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">Free</span>
                            </div>

                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Starter
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide"> <span>$20</span> USD / <span>month</span> </span>
                            </div>
                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Pro
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">Q3 2018</span>
                            </div>
                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Advanced
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">Q3 2018</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 offset-1">
                <div class="starter">
                    <h3>Starter</h3>
                    <p>For traders new to the cryptocurrency markets, or traders that only want to receive
                        the most common trading signals.</p>
                    <div class="mainPoints">
                        <ul>
                            <li>Upside Potential / Bullish Alerts</li>
                            <li>Coin Price & Volume Check</li>
                            <li> RSI Signals</li>
                            <li> Ichimoku Signals</li>
                            <li>CryptoPanic Sentiment Alerts</li>
                            <li>Price Alerts in USDT</li>
                        </ul>
                        <ul>
                            <li>Blacklisted Coins</li>
                            <li>ITF Proprietary Alert 1 (RSI + SMA)</li>
                            <li>ITF Proprietary Alert 2 (Q3 2018)</li>
                            <li>ITF Proprietary Alert 3 (Q4 2018)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="asweredQuest">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h1>Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="quest">
                    <h5 class="question">How do I get started with Telegram?</h5>
                    <p class="answer">You can learn more about Telegram on their website.</p>
                </div>
                <div class="quest">
                    <h5 class="question">How do I pay?</h5>
                    <p class="answer">The Starter plan is $20 USD per month, payable in ITT tokens. After
                        you purchase ITT tokens on a cryptocurrency exchange, you can
                        transfer them to us within the Telegram Bot.</p>
                </div>
                <div class="quest">
                    <h5 class="question">How do I transfer ITT tokens?</h5>
                    <p class="answer">Please refer to the User Guide.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="quest">
                    <h5 class="question">What should I do after I install Telegram?</h5>
                    <p class="answer">You need to add @intelligenttradingbot in your Telegram app, then
                        complete the registration wizard. Here are step-by-step instructions.</p>
                </div>
                <div class="quest">
                    <h5 class="question">Does my subscription automatically renew?</h5>
                    <p class="answer">No. You must manually transfer additional ITT tokens after your
                        30-day subscription runs out.</p>
                </div>
                <div class="quest">
                    <h5 class="question">How do I transfer ITT tokens?</h5>
                    <p class="answer">Please refer to the User Guide.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
