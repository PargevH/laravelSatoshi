@extends('layouts.app')


@section('content')

    <div class="w3-container">
        <div class="container">
            <div class="row">
                <aside class="col-sm-6" style="margin: auto;">
                    <article class="card">
                        <div class="card-body p-5">
                            <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active nav-link-credit nav-link-color" data-toggle="pill" href="#nav-tab-card">
                                        <i class="fa fa-credit-card icon-color"></i> Credit Card</a></li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-color" data-toggle="pill" href="#nav-tab-paypal">
                                        <i class="fab fa-paypal icon-color"></i>  Paypal</a></li>
                                <li class="nav-item">
                                    <a class="nav-link nav-link-color" data-toggle="pill" href="#nav-tab-bank">
                                        <i class="fa fa-university icon-color"></i>  Bank Transfer</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="nav-tab-card">
                                    @if ($message = Session::get('success'))
                                        <div class="w3-panel w3-green w3-display-container">
                                            <span onclick="this.parentElement.style.display='none'" class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ $message }}</p>
                                        </div>
                                        <?php Session::forget('success');?>
                                    @endif
                                    @if ($message = Session::get('error'))
                                        <div class="w3-panel w3-red w3-display-container"><span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">&times;</span>
                                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ $message }}</p>
                                        </div>
                                        <?php Session::forget('error');?>
                                    @endif
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="username">Full name (on the card)</label>
                                            <input type="text" class="form-control" name="username" placeholder="" required="">
                                        </div> <!-- form-group.// -->

                                        <div class="form-group">
                                            <label for="cardNumber">Card number</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="cardNumber" placeholder="">
                                                <div class="input-group-append">
                                                    <span class="input-group-text text-muted">
                                                        <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>  
                                                        <i class="fab fa-cc-mastercard"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div> <!-- form-group.// -->

                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label><span class="hidden-xs">Expiration</span> </label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" placeholder="MM" name="">
                                                        <input type="number" class="form-control" placeholder="YY" name="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                                    <input type="number" class="form-control" required="">
                                                </div> <!-- form-group.// -->
                                            </div>
                                        </div> <!-- row.// -->
                                        <button class="subscribe btn btnAcc btn-block" type="button"> Confirm  </button>
                                    </form>
                                </div> <!-- tab-pane.// -->
                                <div class="tab-pane fade" id="nav-tab-paypal">
                                    <form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">
                                        <div class="w3-container w3-teal w3-padding-16">Paywith Paypal</div>
                                                {{ csrf_field() }}
                                            <h2 class="w3-text-blue">Payment Form</h2>
                                                <p>Demo PayPal form - Integrating paypal in laravel</p>
                                                <label class="w3-text-blue"><b>Enter Amount</b></label>
                                                <input class="w3-input w3-border" id="amount" type="text" name="amount"></p>
                                            <button class="w3-btn w3-blue">Pay with PayPal</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-tab-bank">
                                    <p>Bank accaunt details</p>
                                    <dl class="param">
                                        <dt>BANK: </dt>
                                        <dd> THE WORLD BANK</dd>
                                    </dl>
                                    <dl class="param">
                                        <dt>Accaunt number: </dt>
                                        <dd> 12345678912345</dd>
                                    </dl>
                                    <dl class="param">
                                        <dt>IBAN: </dt>
                                        <dd> 123456789</dd>
                                    </dl>
                                    <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div> <!-- tab-pane.// -->
                            </div> <!-- tab-content .// -->

                        </div> <!-- card-body.// -->
                    </article> <!-- card.// -->


                </aside> <!-- col.// -->
            </div> <!-- row.// -->

        </div>
    </div>

@endsection