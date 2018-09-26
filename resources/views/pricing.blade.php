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
                        <li>
                            <div class="radioButtons active">
                                <label class="checkContainer">Free
                                    <input type="radio" checked="checked" name="radio" value="free">
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
                                <label class="checkContainer">Pro Q4 2018
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">$250/Month</span>
                            </div>
                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Auto Starter
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">$750/Month</span>
                            </div>
                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Auto Pro
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">$1000/Month</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 offset-1 informationDiv">
                <div id="free" class="information">
                    <h3>Free</h3>
                    <div class="mainPoints">
                        <ul>
                            <li class="list-inline-item">
                                <p>Biweekly Crypto Newsletter</p>
                            </li>
                            <li class="list-inline-item">
                                <p>Updates on Satoshi Signals strategy performance</p>
                            </li>
                            <li class="list-inline-item">
                                <p>Free signal giveaway</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="starter" class="information">
                    <h3>Starter</h3>
                    <p>
                        $150/Month, Access to signals from one of the following cryptocurrency trading strategies:
                    </p>
                    <div class="mainPoints">
                        <ul>
                            <li>
                                Momentum:
                            </li>
                            <li>
                                Bitcoin Long/Short (Q4 2018):
                            </li>
                            <li>
                                Bitcoin Oversold (Q4 2018):
                            </li>
                        </ul>
                        <ul>
                            <li>Blacklisted Coins</li>
                            <li>ITF Proprietary Alert 1 (RSI + SMA)</li>
                            <li>ITF Proprietary Alert 2 (Q3 2018)</li>
                            <li>ITF Proprietary Alert 3 (Q4 2018)</li>
                        </ul>
                    </div>
                </div>
                <div id="Pro" class="Pro information">
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
                <div id="AutoStarter" class="AutoStarter information">
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
                <div id="AutoPro" class="AutoPro information">
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
                    <h5 class="question">How do I access the private Satoshi Signals social media feeds?</h5>
                    <p class="answer">
                        Access to our private social media feeds for news and price analysis is
                        obtained by subscribing to the Starter, Pro, or Advanced packages.
                    </p>
                </div>
                <div class="quest">
                    <h5 class="question">How do I upgrade my subscription?</h5>
                    <p class="answer">
                        In your my account section in the member area look for the subscription
                        you are currently subscribed to. You can select a different package and
                        the changes will take effect in the next pay period.
                    </p>
                </div>
                <div class="quest">
                    <h5 class="question">How do I pay?</h5>
                    <p class="answer">Please refer to the User Guide.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="quest">
                    <h5 class="question">How do I pay?</h5>
                    <p class="answer">
                        Add a package to your cart and choose your payments method. Once we
                        have received your order and payment we will email you with your
                        subscription details.
                    </p>
                </div>
                <div class="quest">
                    <h5 class="question">Does my subscription automatically renew?</h5>
                    <p class="answer">
                        Yes, your subscription is charged on a monthly/yearly basis if you have
                        paid with a credit/debit card or paypal. If you are paying with
                        cryptocurrency we will send you a monthly invoice with payment
                        instructions.
                    </p>
                </div>
                <div class="quest">
                    <h5 class="question">How do I cancel my subscription?</h5>
                    <p class="answer">
                        Login to the member area and look for the my account section. Once in
                        your account page please click cancel your subscription and proceed.
                        We will email you afterwards confirming your cancellation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
