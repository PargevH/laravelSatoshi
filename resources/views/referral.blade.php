@extends('layouts.app')


@section('content')
    <section class="pricingType" style="margin-top: unset;">
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputReferringID">My Referral ID:</label>
                                    <input type="text" id="referralId" class="form-control" value="1111" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputReferringURI">Referral Link:</label>
                                    <input type="text" id="referralLink" class="form-control" value="2222" disabled>
                                    <div id="socialHolder">
                                        <div id="socialShare" class="btn-group share-group">
                                            <a data-toggle="dropdown" class="btn btnAcc share" style="color: #fff;border-radius: 4px;">Share
                                                <i class="fa fa-share-alt fa-inverse"></i>
                                            </a>
                                            <ul class="dropdown-menu social-nav">
                                                <?php
                                                echo Share::page('http://jorenvanhocht.be')
                                                    ->facebook()
                                                    ->linkedin('Extra linkedin summary can be passed here')
                                                    ->twitter()
                                                    ->snapchat()
                                                    ->slack()
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection