@extends('Master.master')
@section('master')
<div style="margin-top: 116px">
    <div id="pageheader">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-a">ABOUT</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding: 75px;">
    <div class="text-center">
        <h6 style="font-weight:bold">IT’S ALL ABOUT MILO <br> <small class="text-muted font-weight-bold">MILO CREATIVE AGENCY</small></h6>
    </div>

    <div class="row my-5">
        <div class="col-md-4">
            <p class="visible-xs"><img src="images/globe.png" id="myimge" class="img-responsive" alt="" width="300" height="250"></p>
        </div>
        <div class="col-md-4">
            <p style="text-align: justify;">
                We believe in deep collaboration to innovate in a way that others cannot.
                A company is the company created by the people in it. To provide the best people for our
                clients vision accomplishments A World of Solutions for your Growing Needs And To be a global
                leader in Geocapital (GIS ) and Information Technology.
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

<!-- Header -->
<div class="" style="background-color: #eee">
    <div class="container">
        <div class="row" style="padding: 80px;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h4 class="font-weight-bold">KEEP IT, CLEAN & SIMPLE!</h4>
                <div>
                    <p class="text-muted">
                        Our core values are at the heart of your business. They define who we are how we work, what we believe in and what we stand for...
                    </p>
                    <ul style="list-style-type:circle" class="text-muted">
                        <li>We knows our customers business needs and deliver innovative and practical solutions.</li>
                        <li>We treat each other with respect and work hard to earn it from others.</li>
                        <li>We work together to deliver superior results and win in the marketplace.</li>
                        <li>We help our clients develop and implement solutions that improve overall performance.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Crousel -->
<div class="my-4">
    <div align="center">
        <h4 class="font-weight-bold">"Meet Our Teams"</h4>
        <hr style="width: 400px;">
    </div>
    <div class="">
        <!-- Meet Our Team -->
        <div class="table-responsive">
            <table class="table table-bordered table-sm mango_team">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Profile</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <!-- <th>Detail</th> -->
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal fade" id="teamModel">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Team Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div id="team_photo">

                </div>
                <table class="table table-bordered table-sm">
                    <tr>
                        <th>First Name</th>
                        <td id="firstname"></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td id="lastname"></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td id="email"></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td id="gender"></td>
                    </tr>
                    <tr>
                        <th>Profile</th>
                        <td id="profile"></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td id="phone"></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td id="address"></td>
                    </tr>
                </table>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>

@endsection