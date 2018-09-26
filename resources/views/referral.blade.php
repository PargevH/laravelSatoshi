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
                                            echo Share::page('http://referral_link.be')
                                                ->facebook()
                                                ->linkedin('Extra linkedin summary can be passed here')
                                                ->twitter()
                                            ?>


                                                {{--<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://jorenvanhocht.be" target="_blank" title="Facebook" rel="nofollow" id="facebookId" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
                                                {{--<li><a href="#" target="_blank" title="Linkedin" rel="nofollow" class="linkedin"><i class="fa fa-linkedin"></i></a></li>--}}
                                                {{--<li><a href="#" target="_blank" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
                                                <li><a href="#" target="_blank" title="snapchat" rel="nofollow" class="snapchat"><i class="fa fa-snapchat-ghost"></i></a></li>
                                                <li><a href="#" target="_blank" title="Slack" rel="nofollow" class="slack"><i class="fa fa-slack"></i></a></li>
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