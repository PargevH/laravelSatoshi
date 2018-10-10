@extends('layouts.app')




@section('content')

    <!-- link to the custom styles for SqPaymentForm -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sqpaymentform.css') }}">

    <div class="w3-container">
        <div class="container">
            <div class="row">
                <aside class="col-sm-6" style="margin: auto;">
                    <article class="card">
                        <div class="card-body p-5">
                            <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active nav-link-credit nav-link-color" data-toggle="pill"
                                       href="#nav-tab-card">
                                        <i class="fa fa-credit-card icon-color"></i> Credit Card</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-color" data-toggle="pill" href="#nav-tab-paypal">
                                        <i class="fab fa-paypal icon-color"></i> PayPal</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade" id="nav-tab-paypal">
                                    <form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST"
                                          id="payment-form" action="{!! URL::to('paypal') !!}">
                                        <div class="w3-container w3-teal w3-padding-16">Paywith Paypal</div>
                                        {{ csrf_field() }}
                                        <h2 class="w3-text-blue">Payment Form</h2>
                                        <p>Demo PayPal form - Integrating paypal in laravel</p>
                                        <label class="w3-text-blue"><b>Enter Amount</b></label>
                                        <input class="w3-input w3-border" id="amount" type="text" name="amount"></p>
                                        <button class="w3-btn w3-blue">Pay with PayPal</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade show active" id="nav-tab-card">

                                    <div id="sq-ccbox">
                                        <!--
                                          You should replace the action attribute of the form with the path of
                                          the URL you want to POST the nonce to (for example, "/process-card")
                                        -->
                                        <form id="nonce-form" novalidate action="path/to/payment/processing/page" method="post">
                                            Pay with a Credit Card
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td>Card Number:</td>
                                                    <td><div id="sq-card-number"></div></td>
                                                </tr>
                                                <tr>
                                                    <td>CVV:</td>
                                                    <td><div id="sq-cvv"></div></td>
                                                </tr>
                                                <tr>
                                                    <td>Expiration Date: </td>
                                                    <td><div id="sq-expiration-date"></div></td>
                                                </tr>
                                                <tr>
                                                    <td>Postal Code:</td>
                                                    <td><div id="sq-postal-code"></div></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <button id="sq-creditcard" class="button-credit-card" onclick="requestCardNonce(event)">
                                                            Pay with card
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <input type="hidden" id="card-nonce" name="nonce">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </aside>
            </div>
        </div>
    </div>

    <!-- link to the SqPaymentForm library -->
    <script type="text/javascript" src="https://js.squareup.com/v2/paymentform">
    </script>

    <!-- link to the local SqPaymentForm initialization -->
    <script type="text/javascript" src="{{ asset('js/sqpaymentform.js') }}"></script>

@endsection
