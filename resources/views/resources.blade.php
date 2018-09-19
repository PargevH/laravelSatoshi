@extends('layouts.app')

@section('content')
<section class="pricing">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h1>Guides and Resources</h1>
                    <p>Explore and learn</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tutorials">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h1>Tutorials & Documentation</h1>
                    <p>Follow the tutorials to purchase ITT tokens and get started with the trading bot.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="tuotrialsPart getStart">
                    <div class="boxHeader"></div>
                    <div class="boxContent">
                        <h5>Getting Started</h5>
                        <p>Set up the ITF bot in just a few
                            simple steps.</p>
                        <a href="#">
                            View Tutorial
                            <em class="feed anim-menu"></em>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tuotrialsPart userGuide">
                    <div class="boxHeader"></div>
                    <div class="boxContent">
                        <h5>SatoshiBot User Guide</h5>
                        <p>Learn useful commands to get
                            the most out of the ITF trading bot.</p>
                        <a href="#">View Tutorial
                            <em class="feed anim-menu"></em>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tuotrialsPart howBuy">
                    <div class="boxHeader"></div>
                    <div class="boxContent">
                        <h5>Disclaimer and Terms of Use</h5>
                        <p>Follow the guide to making your
                            first ITT token purchase.</p>
                        <a href="#">View Tutorial
                            <em class="feed anim-menu"></em>
                        </a>
                    </div>
                </div>
            </div>
            {{--<div class="col-md-3">--}}
                {{--<div class="tuotrialsPart info">--}}
                    {{--<div class="boxHeader"></div>--}}
                    {{--<div class="boxContent">--}}
                        {{--<h5>Info Bot User Guide</h5>--}}
                        {{--<p>Learn useful commands to get--}}
                            {{--the most out of the ITF info bot--}}
                            {{--for Groups.</p>--}}
                        {{--<a href="#">View Tutorial--}}
                            {{--<em class="feed anim-menu"></em>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</section>

<section class="cryptocurrency">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="sectionTitle">
                    <h1>Crypto 101</h1>
                    <p>New to cryptocurrency? Our 101 guides will get you up to speed.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="newToCryptocurrency">
                    <p>What is Bitcoin?</p>
                    <a href="#">View Guide
                        <em class="feed anim-menu"></em>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newToCryptocurrency">
                    <p>Accessing and Storing Your Crypto</p>
                    <a href="#">View Guide
                        <em class="feed anim-menu"></em>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newToCryptocurrency">
                    <p>Technical Analysis 101</p>
                    <a href="#">View Guide
                        <em class="feed anim-menu"></em>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="newToCryptocurrency">
                    <p>How Bots Influence Trading</p>
                    <a href="#">View Guide
                        <em class="feed anim-menu"></em>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="lastPost">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="lastPostContext">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
