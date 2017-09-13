<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title or "ProC"}} </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    </head>

<body>
    @include('includes.homehead')

    <br>
    
    <br>


    <div class="container">
        <div class="row product">
            <div class="col-md-6 col-md-offset-0"><a class="btn btn-info channels" role="button" href="#channels" data-toggle="modal">View Channels List &raquo; </a>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active"><img class="img-thumbnail" src="assets/img/suit_jacket.jpg" alt="Slide Image"></div>
                        <div class="item"><img src="assets/img/suit_jacket.jpg" alt="Slide Image"></div>
                        <div class="item"><img src="assets/img/suit_jacket.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol
                    class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                        </ol>
                </div>
            </div>
            <div class="col-md-6">
                <div></div>
                <div class="row side-column" id="side-column">
                    <div class="col-md-6 col-sm-5 col-xs-12">
                    <a  href="/login" >
                        <div class="thumbnail blue"><i class="glyphicon glyphicon-user"></i>
                            <div class="caption">
                                <h3>SIGN-IN </h3></div>
                        </div></a>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12">
                    <a href="/register" class="link">
                        <div class="thumbnail yellow"><i class="glyphicon glyphicon-globe"></i>
                            <div class="caption">
                                <h3>REGISTER </h3></div>
                        </div></a>
                    </div>
                </div>
                <div class="row side-column">
                    <div class="col-md-6 col-sm-5 col-xs-12">
                    <a href="#" class="link">
                        <div class="thumbnail green"><i class="glyphicon glyphicon-info-sign"></i>
                            <div class="caption">
                                <h3>BROADBAND</h3></div>
                        </div></a>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12">
                    <a href="#" class="link">
                        <div class="thumbnail green"><i class="glyphicon glyphicon-user"></i>
                            <div class="caption">
                                <h3>PAY-TV </h3></div>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row below">
            <div class="col-md-3 col-sm-5  col-md-offset-0">
            <a href="#" class="link">
                <div class="thumbnail blue">
                    <div class="caption">
                        <p> </p>
                    </div><i class="glyphicon glyphicon-question-sign"></i>
                    <h3>APP </h3></div></a>
            </div>
            <div class="col-md-3 col-sm-5  col-md-offset-0"><a href="#" class="link">
                <div class="thumbnail green">
                    <div class="caption">
                        <p> </p>
                    </div><i class="glyphicon glyphicon-earphone"></i>
                    <h3>NEWS </h3></div></a>
            </div>
            <div class="col-md-3 col-sm-5 col-md-offset-0">
            <a href="#" class="link"><a href="#" class="link">
                <div class="thumbnail green">
                    <div class="caption">
                        <p> </p>
                    </div><i class="glyphicon glyphicon-home"></i>
                    <h3>ABOUT US</h3></div></a>
                    </a>
            </div>
            <div class="col-md-3 col-sm-5 col-md-offset-0">
            <a href="#" class="link">
                <div class="thumbnail yellow">
                    <div class="caption">
                        <p> </p>
                    </div><i class="glyphicon glyphicon-blackboard"></i>
                    <h3>TV GUIDE</h3></div>
                    </a>
            </div>
        </div>
        <div class="media">
            <div class="media-body">
                <p></p>
            </div>
        </div>
        <div class="media">
            <div class="media-body"></div>
        </div>
    </div>
    @include('includes.footer')