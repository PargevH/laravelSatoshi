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
                        <ul id="myCheckbox" class="checkboxUl">
                            @foreach($plan as $k => $v)
                                <li>
                                    <div class="radioButtons <?php
                                     if ($v['price'] == 0){
                                        echo 'active';
                                     }
                                     ?>">
                                        <label class="checkContainer">{{$k}}
                                            <input type="radio" class="planRadio" name="radio"
                                            <?php
                                            if ($v['price'] == 0){
                                                echo "checked='checked'";
                                            }
                                            ?>
                                             value="{{$v['title']}}">
                                            <span class="checkmark"></span>
                                        </label>
                                        <span class="float-right rightSide"><span>${{$v['price']}}</span>/<span>Month</span></span></span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 offset-1">
                    <div id="myRadioGroup">
                            <div id="radiofree" class="desc wow slideInLef"  data-wow-duration="2s" >
                                <div class="rightDiv">
                                    <h3>Free</h3>
                                    <div class="mainPoints mainPointsPricing">
                                        <ul>
                                            <li>Biweekly Crypto Newsletter</li>
                                            <li>Updates on Satoshi Signals strategy performance</li>
                                            <li>Free signal giveaway</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="wrap">
                                    <a class="btn-1">Check Out</a>
                                </div>
                            </div>
                        </form>
                        <div id="radiostarter" class="desc">
                            <div class="rightDiv">
                                <h3>Starter</h3>
                                <div class="mainPoints mainPointsPricing">
                                    <p>
                                        $150/Month , Access to signals from one of the following cryptocurrency trading
                                        strategies:
                                    </p>
                                    <ul style="padding-left: 40px;">
                                        <li>Momentum:</li>
                                        <li>Bitcoin Long/Short (Q4 2018):</li>
                                        <li>Bitcoin Oversold (Q4 2018):</li>
                                    </ul>
                                    <p>
                                        Access to private Satoshi Signals Twitter, Discord, and Telegram feeds
                                    </p>
                                    <ul style="padding-left: 40px;">
                                        <li>Live updates for all trade signals occurring:</li>
                                        <li>Digital asset news, price analysis, charts, and research</li>
                                    </ul>
                                </div>
                                <div class="wrap">
                                    <a class="btn-1">Check Out</a>
                                </div>
                            </div>
                        </div>
                        <div id="radiopro" class="desc">
                            <div class="rightDiv">
                                <h3>Pro</h3>
                                <div class="mainPoints mainPointsPricing">
                                    <p>
                                        $250/Month , Access to signals from all of our proprietary trading strategies
                                        (Bitcoin Long/Short, Momentum, Bitcoin Oversold)
                                    </p>
                                </div>
                            </div>
                            <div class="wrap">
                                <a class="btn-1">Check Out</a>
                            </div>
                        </div>
                        <div id="radioautoStarter" class="desc">
                            <div class="rightDiv">
                                <h3>Automated Starter</h3>
                                <div class="mainPoints mainPointsPricing">
                                    <p>
                                        $750/Month, SatoshiBot Automated Trading Software for one of our
                                        cryptocurrency trading strategies
                                    </p>
                                    <ul>
                                        <li>
                                                Software that exposes users to automated trading.
                                            <p style="margin-left: 25px;">
                                                SatoshiBot receives our trading signals and executes trades on your behalf using your
                                                exchange credentials.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="wrap">
                                <a class="btn-1">Check Out</a>
                            </div>
                        </div>
                        <div id="radioautoPro" class="desc">
                            <div class="rightDiv">
                                <h3>Automated Pro (Q4 2018)</h3>
                                <div class="mainPoints mainPointsPricing">
                                    <p>
                                        $1000/Month , SatoshiBot Automated Trading Software for all of our proprietary
                                        trading strategies (Bitcoin Long/Short, Momentum, Bitcoin Oversold)
                                    </p>
                                    <ul>
                                        <li>
                                            The ultimate Satoshi Signals package.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="wrap">
                                <a class="btn-1">Check Out</a>
                            </div>
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
