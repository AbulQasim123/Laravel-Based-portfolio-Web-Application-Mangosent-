@extends('Master.master')
@section('master')
<div style="margin-top: 90px">
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://lipsum.app/id/33/1200x675" alt="Los Angeles" width="100%" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://lipsum.app/id/44/1200x675" alt="Chicago" width="100%" height="500">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://lipsum.app/id/55/1200x675" alt="New York" width="100%" height="500">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</div>

<div id="page-content" style="padding: 50px;">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-sm-12">

                <div class="text-center">
                    <h6 class="text-primary">We are the best</h6>
                    <h3>GIS Solution's</h3>
                </div><!-- headline -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

    <!-- Card  -->
    <div class="container" style="padding: 40px;">
        <div class="row card-columns">
            <div class="card-deck">
                <div class="col-sm-4">
                    <div class="card">
                        <h5 class="card-title text-center my-3"><i class="fa-solid fa-mobile-button"></i> MOBILE APPLICATION</h5>
                        <div class="card-body" style="text-align: justify;">
                            <p class="card-text text-secondary">We have more than a Four Android Application for GIS Survey, Live on Androind Play Store.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <h5 class="card-title text-center my-3"><i class="fa-solid fa-desktop"></i> WEB APPLICATION</h5>
                        <div class="card-body" style="text-align: justify">
                            <p class="card-text text-secondary">besties Web Application with offline and online mood. Productive and Effective application for GIS Maping.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <h5 class="card-title text-center my-3"><i class="fa-solid fa-users"></i> BEST TEAM</h5>
                        <div class="card-body" style="text-align: justify">
                            <p class="card-text text-secondary">More than Seven field Office with Best and Big Team at each office.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Headline -->
<div class="">
    <div class="row">
        <div class="col-md-6">
            <p class="visible-xs"><img class="img-responsive" src="images/mobilemap.jpg" alt="" width="550" height="450"></p>
        </div>
        <div class="col-md-6" style="padding: 100px;">
            <h6 style="font-size: larger; font-weight: bold">TAKE EVERY <br> CHALLENGES AND <br> DROP EVERY FEAR</h6>
            <h6>DISCOVERING THE WORLD THROUGH GIS</h6><br>
            <p>
                Mango’s Enterprises is a digital edge company. Since 2012 Mango's Enterprises delivering innovative and practical solutions in marketplace To be a global leader in Geocapital (GIS ) and Information Technology.
            </p>
            <button class="btn btn-secondary btn-sm">Read More >></button>
        </div>
    </div>

    <!-- Counter -->
    <div id="" class="bg-dark text-white" style="width: 100%">
        <div class="container">
            <div class="counting" style="padding: 15px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="complete-project">
                            <span class="num" data-val="100">0</span><i class="fa-solid fa-plus"></i>
                            <h4 class="name">| complete-project</h4>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-members">
                            <span class="num" data-val="1000">0</span><i class="fa-solid fa-plus"></i>
                            <h3 class="name">| team-members</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="field-office">
                            <span class="num" data-val="7">0</span><i class="fa-solid fa-plus"></i>
                            <h3 class="name">| field-office</h3>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="branch-office">
                            <span class="num" data-val="2">0</span><i class="fa-solid fa-plus"></i>
                            <h3 class="name">| branch-office</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us -->
<div class="container my-5">
    <div class="text-center">
        <h6 style="font-weight:bold">ABOUT US <br> <small class="text-muted font-weight-bold">MARVELOUS PEOPLE</small></h6>
    </div>
</div>

<div class="container">
    <div class="text-center">
        <h6 style="font-weight:bold">IT’S ALL ABOUT MANGO'S ENTERPRISES <br> <small class="text-muted font-weight-bold">THE BEST GIS SOLUTIONS</small></h6>
    </div>

    <div class="row my-5">
        <div class="col-md-4">
            <p class="visible-xs"><img src="images/globe.png" id="myimge" class="img-responsive" alt="" width="300" height="250"></p>
        </div>
        <div class="col-md-4">
            <p style="text-align: justify;">
                We believe in deep collaboration to innovate in a way that others cannot. A company is the company
                created by the people in it. To provide the best people for our clients vision accomplishments
                A World of Solutions for your Growing Needs And To be a global leader in Geocapital (GIS )
                and Information Technology.
            </p>
            <button class="btn btn-info btn-sm">Read More >></button>
        </div>
        <div class="col-md-4">
            <p style="text-align: justify;">
                Integrated Advantages of Mango’s Enterprises.
                1. We have fully organized team for all services which we provide.
                2. We are specialist in GIS, Information Technology and Consulting Services.
                3. Other marketing services
                4. Integration of Advance Technology.
            </p>
            <button class="btn btn-info btn-sm">Read More >></button>
        </div>
    </div>
    <hr style="background-color: #eee;">
</div>

<!-- Our Services -->
<div class="container" style="padding: 40px">
    <div class="text-center">
        <h5 style="font-weight:bold">OUR BEST SERVICES <br> <small class="text-muted" style="font-weight:bold; font-size: 12px;">GEOGRAPHICAL SERVICES & SOLUTIONS</small></h5>
    </div>
    <div class="row my-5">
        <div class="" style="padding: 25px; border: 1px solid #eee">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li id="nav_tab" class="nav-item border_right">
                    <a class="nav-link active" data-toggle="tab" href="#applications">
                        <i class="fa-solid fa-mobile-button"></i> APPLICATIONS
                    </a>
                </li>
                <li id="nav_tab" class="nav-item border_right">
                    <a class="nav-link" data-toggle="tab" href="#survey">
                        <i class="fa-regular fa-pen-to-square"></i> SURVEY
                    </a>
                </li>
                <li id="nav_tab" class="nav-item border_right">
                    <a class="nav-link" data-toggle="tab" href="#dataconversion">
                        <i class="fa-regular fa-rectangle-list"></i> DATA CONVERSION
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="applications" class="container tab-pane active"><br>
                    <h6 class="font-weight-bold">GIS SOFTWARE APPLICATIONS</h6>
                    <p style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        Software development frameworks and libraries GeoBase. Geospatial mapping software available
                        as a software development kit, which performs various functions.
                    </p>
                </div>
                <div id="survey" class="container tab-pane fade"><br>
                    <h6 class="font-weight-bold">GIS SURVEY</h6>
                    <p style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        Surveyors depend on a variety of software and technology to gather existing information,
                        collect new information, analyze data, produce plans, manage projects.
                    </p>
                </div>
                <div id="dataconversion" class="container tab-pane fade"><br>
                    <h6 class="font-weight-bold">DATA CONVERSION</h6>
                    <p style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        GIS data conversion is a process of encoding geographical format into a file.
                        GIS data conversion services are used widely in mapping services.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="" style="padding: 25px; border: 1px solid #eee">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li id="nav_tab" class="nav-item border_right">
                    <a class="nav-link active" data-toggle="tab" href="#geocoding">
                        <i class="fa-solid fa-location-dot"></i> GEOCODING
                    </a>
                </li>
                <li id="nav_tab" class="nav-item border_right">
                    <a class="nav-link" data-toggle="tab" href="#remotesensing">
                        <i class="fa-solid fa-mobile-button"></i> REMOTE SENSING
                    </a>
                </li>
                <li id="nav_tab" class="nav-item border_right">
                    <a class="nav-link" data-toggle="tab" href="#imageprocessing">
                        <i class="fa-solid fa-camera"></i> IMAGE PROCESSING
                    </a>
                </li>
                <li id="nav_tab" class="nav-item border_right">
                    <a class="nav-link" data-toggle="tab" href="#mapdataproduct">
                        <i class="fa-regular fa-map"></i> MAP DATA PRODUCT
                    </a>
                </li>
                <li id="nav_tab" class="nav-item border_right">
                    <a class="nav-link" data-toggle="tab" href="#consulting">
                        <i class="fa-solid fa-handshake"></i> CONSULTING
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="geocoding" class="container tab-pane active"><br>
                    <h6 class="font-weight-bold">GEOCODING</h6>
                    <p style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        Software development frameworks and libraries GeoBase. Geospatial mapping software available as a software development kit, which performs various functions.
                    </p>
                </div>
                <div id="remotesensing" class="container tab-pane fade"><br>
                    <h6 class="font-weight-bold">REMOTE SENSING</h6>
                    <p style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        Surveyors depend on a variety of software and technology to gather existing information, collect new information, analyze data, produce plans, manage projects.
                    </p>
                </div>
                <div id="imageprocessing" class="container tab-pane fade"><br>
                    <h6 class="font-weight-bold">IMAGE PROCESSING</h6>
                    <p style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        GIS data conversion is a process of encoding geographical format into a file. GIS data conversion services are used widely in mapping services.
                    </p>
                </div>
                <div id="mapdataproduct" class="container tab-pane fade"><br>
                    <h6 class="font-weight-bold">OFF-THE-SHELF MAP DATA PRODUCTS</h6>
                    <p style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        Mapping services where simple raster images are converted to vector models.
                    </p>
                </div>
                <div id="consulting" class="container tab-pane fade"><br>
                    <h6 class="font-weight-bold">CONSULTING</h6>
                    <p style="font-family: Georgia, 'Times New Roman', Times, serif;">
                        GIS consultants are responsible for 
                        managing digital mapping data and performing analyses to answer "GIS Questions".
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection