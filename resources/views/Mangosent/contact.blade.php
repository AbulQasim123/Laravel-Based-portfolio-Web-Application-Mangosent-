@extends('Master.master')
@section('master')
<div style="margin-top: 116px">
    <div id="pageheader">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-a">Contact</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding: 55px;">
    <div class="my-5">
        <h4 style="font-weight:bold">GET IN TOUCH WITH US <br> <small class="text-muted font-weight-bold" style="font-size: 13px;">CONTACT INFORMATION</small></h4>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img src="images/certificate.jpg" alt="" width="300" height="400" class="img-thumbnail" />
        </div>
        <div class="col-md-8">
            <div class="contact-form">
                @if(Session::has('success'))
                    <span class="text-sucess text-center">{{ Session::get('success') }}</span>
                @endif
                <form action="{{ route('postuser') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Name" class="form-control border" name="name" id="name">
                            @error('name') <small class="text-danger">{{ $message }}</small>  @enderror
                        <br><br>
                       
                        <input type="text" placeholder="Email" class="form-control border" name="email" id="email">
                            @error('email') <small class="text-danger">{{ $message }}</small>  @enderror
                        <br><br>
                       
                        <input type="text" placeholder="Subject" class="form-control border" name="subject" id="subject">
                            @error('subject') <small class="text-danger">{{ $message }}</small>  @enderror
                        <br><br>
                        
                        <textarea name="message" id="message" class="form-control border" placeholder="Message"></textarea>
                        @error('message') <small class="text-danger">{{ $message }}</small>  @enderror
                        <br><br>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm" id="submit_msg">Submit Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection