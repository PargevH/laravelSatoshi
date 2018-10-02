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
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputReferringURI">Referral Link:</label>
                                    <input type="text" id="referralLink" class="form-control" value="{{'https://dev.restadviser.com/prog/prog32/public/register?ref='.$referralLink}}" disabled>
                                    <div id="socialHolder">
                                        <div id="socialShare" class="btn-group share-group">
                                            <a data-toggle="dropdown" class="btn btnAcc share" style="color: #fff;border-radius: 4px;">Share
                                                <i class="fa fa-share-alt fa-inverse"></i>
                                            </a>
                                            <ul class="dropdown-menu social-nav">
                                                <?php
                                                echo Share::page('https://dev.restadviser.com/prog/prog32/public/register?ref='.$referralLink)
                                                    ->facebook()
                                                    ->twitter()
                                                    ->snapchat()
                                                    ->slack()
                                                ?>
                                                    <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://dev.restadviser.com/prog/prog32/public/register?ref={{$referralLink}}=&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button linkedin :class" target="_blank" title="Linkedin" rel="nofollow"><span class="fa fa-linkedin"></span></a></li>
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