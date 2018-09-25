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
                                    <input type="radio" checked="checked" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">Free</span>
                            </div>
                            <button class="checkbox">Check Out</button>
                            <ul class="dropdown_text">
                                <li class="list-inline-item">
                                    <p class="second_dropdown_button">Biweekly Crypto Newsletter</p>
                                </li>
                                <li class="list-inline-item">
                                    <p class="second_dropdown_button">Updates on Satoshi Signals strategy performance</p>
                                </li>
                                <li class="list-inline-item">
                                    <p class="second_dropdown_button">Free signal giveaway</p>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Starter
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide"> <span>$20</span> USD / <span>month</span> </span>
                            </div>
                            <button class="checkbox">check Out</button>
                            <ul class="dropdown_text">
                                <li class="list-inline-item">
                                    <p class="second_dropdown_button">
                                        Access to signals from one of the following cryptocurrency trading
                                        strategies:
                                        <span><i class="fa fa-chevron-down"></i></span>
                                    </p>
                                    <ul id="second_dropdown">
                                        <li>
                                            <p class="second_dropdown_button">Momentum:</p>
                                        </li>
                                        <li>
                                            <p class="second_dropdown_button">Bitcoin Long/Short (Q4 2018):</p>
                                        </li>
                                        <li>
                                            <p class="second_dropdown_button">Bitcoin Oversold (Q4 2018):</p>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-inline-item">
                                    <p class="second_dropdown_button">
                                        Access to private Satoshi Signals Twitter, Discord, and Telegram feeds
                                        <span><i class="fa fa-chevron-down"></i></span>
                                    </p>
                                    <ul id="second_dropdown">
                                        <li>
                                            <p class="second_dropdown_button">Momentum:</p>
                                        </li>
                                        <li>
                                            <p class="second_dropdown_button">Live updates for all trade signals occurring</p>
                                        </li>
                                        <li>
                                            <p class="second_dropdown_button">Digital asset news, price analysis, charts, and research</p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Pro Q4 2018
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">$250/Month</span>
                            </div>
                            <button class="checkbox">Check Out</button>
                            <ul class="dropdown_text">
                                <li class="list-inline-item">
                                    <p class="second_dropdown_button">Access to signals from all of our proprietary trading strategies
                                        (Bitcoin Long/Short, Momentum, Bitcoin Oversold):</p>
                                </li>
                                <li class="list-inline-item">
                                    <a class="second_dropdown_button">Automated Starter</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="second_dropdown_button">Bitcoin Oversold (Q4 2018):</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Auto Starter
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">$750/Month</span>
                            </div>
                            <button class="checkbox">Check Out</button>
                            <ul class="dropdown_text">
                                <li class="list-inline-item">
                                    <p class="second_dropdown_button">
                                        SatoshiBot Automated Trading Software for one of our
                                        cryptocurrency trading strategies
                                        <span><i class="fa fa-chevron-down"></i></span>
                                    </p>
                                    <ul id="second_dropdown">
                                        <li>
                                            <p class="second_dropdown_button">
                                                Software that exposes users to automated trading. SatoshiBot receives
                                                our trading signals and executes trades on your behalf using your
                                                exchange credentials.
                                            </p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="radioButtons">
                                <label class="checkContainer">Auto Pro
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                                <span class="float-right rightSide">$1000/Month</span>
                            </div>
                            <button class="checkbox">Check Out</button>
                            <ul class="dropdown_text">
                                <li class="list-inline-item">
                                    <p class="second_dropdown_button">
                                        SatoshiBot Automated Trading Software for all of our proprietary
                                        trading strategies (Bitcoin Long/Short, Momentum, Bitcoin Oversold)
                                        <span><i class="fa fa-chevron-down"></i></span>
                                    </p>
                                    <ul id="second_dropdown">
                                        <li>
                                            <p class="second_dropdown_button">
                                                The ultimate Satoshi Signals package.
                                            </p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
