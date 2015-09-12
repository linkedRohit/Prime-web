<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>	
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {!! HTML::style('css/bootstrap.min.css') !!}
        <style type="text/css">
            .wf{ width:100%; margin-left:auto; margin-right:auto; }
            .br { border-right:1px solid #ECF0F1 }
            .ps { padding:15px 0 }
            .p0 { padding:0; border-radius:0 }
            .p0 .progress-bar, .p0 { height: 14px }
            .f08 { font-size: 0.8em; color: #777 }	
            .rc .text-muted { font-size:0.8em }
            .rc h4 { font-size:1.2em }
            .mb0 { margin:0 5px 1px 0 }
        </style>
    </head>
    <body>
        <div class="navbar navbar-default">
            <a class="navbar-brand">prime</a>
        </div>


        <div class="container">
            <div class="row-fluid">
                <div class="panel panel-default">
                    <div class="panel-heading ps">
                        <div class="row-fluid clearfix">
                            <div class="col-xs-2">
                                <img class="img-circle" src="https://graph.facebook.com/100001038273443/picture?width=42&height=42" />
                            </div>
                            <div class="col-xs-10 rc">
                                <h5 class="mb0">Mayank Mishra</h5>
                                <div class="text-muted">Asked 5 mintues ago</div>
                            </div>
                            <div class="col-xs-12">
                                <h5>Which Smartphone is better, I have budget of 30,000 INR.. Please suggest other than this?</h5>
                                <!--<p class="text-info">#smartphone #mobile #under30k #budgetphone</p>-->
                            </div>
                        </div>
                    </div>
                    <div class="panel-body ps">
                        <div class="row-fluid clearfix">
                            <div class="col-xs-6 br" id="ips">
                                <div>
                                    <img class="wf" src="{{ asset('img/iphone6s.jpg') }}" alt="iPhone 6s" />
                                    <p class="text-center">iPhone 6s</p>
                                </div>
                            </div>
                            <div class="col-xs-6" id="ips">
                                <div>
                                    <img class="wf" src="{{ asset('img/samsungs6.jpg') }}" alt="iPhone 6s" />
                                    <p class="text-center">Samsung Galaxy S6</p>
                                </div>
                            </div>
                        </div>
                        <div class="row-fluid clearfix">
                            <div class="col-xs-6">
                                <div class="progress mb0 p0">
                                    <div class="pull-right progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100" style="width:70%">

                                    </div>
                                </div>
                                <span class="pull-right f08 clearfix">340 votes</span>	</div>
                            <div class="col-xs-6">
                                <div class="progress mb0 p0">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30"
                                         aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                    </div>
                                </div>
                                <span class="pull-left f08 clearfix">95 votes</span>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-xs-6">+ 36 Comments</div>					
                            <div class="col-xs-6 pull-right">Share on f w t</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
