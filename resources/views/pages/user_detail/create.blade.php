@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        <div class="text-primary fs-3 fw-light py-5">
            Enter personal information for amazing Cv
        </div>
        <div class="mt-3">
            @if(session()->has('errors'))
                @foreach ($errors->all()  as $e)
                    <div class="alert alert-danger" role="atert">
                        <p>{{ $e }}</p>
                    </div>
                @endforeach
            @endif
        </div>
        @if(@isset($bg_color))
        <form action="/user-detail/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" method="POST">
        @else
        <form action="/user-detail/{{ $image}}/{{$color}}/{{ $templatePath }}" method="POST">
        @endif
            @csrf
            <div class="mb-5">
                <div class="">
                    <div class="row ">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label" for="textFNAM">First Name</label>
                                <input type="text" name="FNAM" placeholder="(i.e). Haider" maxlength="35" class="form-control" id="textFNAM" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label " for="textLNAM">Surname</label>
                                <input type="text" name="LNAM" placeholder="(i.e). Saeed" maxlength="35" class="form-control" id="textLNAM" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="textDCTL">Address</label>
                                <input type="text" name="ADD" placeholder="(i.e). 90 D Rizwan Block Awan Town" class="form-control" id="textDCTL" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 field-1">
                            <div class="form-group">
                                <label class="control-label " for="city">City</label>
                                <input type="city" name="CITY" placeholder="(i.e). Lahore" maxlength="100" class="form-control" id="city" value="">
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-2">
                            <div class="form-group ">
                                <label class="control-label " for="country">Country</label>
                                <input type="country" name="CNTY" placeholder="(i.e). Pakistan" maxlength="50" class="form-control" id="country" value="">
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-3">
                            <div class="form-group ">
                                <label class="control-label " for="zip">Postal Code</label>
                                <input type="zip" name="ZIPC" placeholder="(i.e). 5400" maxlength="10" class="form-control" id="zip" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="HPHN">Phone
                                </label><input type="tel" name="HPHN" placeholder="(i.e). +923056989967" maxlength="20" class="form-control" id="HPHN" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-email">
                            <div class="form-group">
                                <label class="control-label" for="EMAI">Email</label>
                                <input type="email" name="EMAI" placeholder="(i.e). abc123@gmail.com" maxlength="50" class="form-control" id="EMAI" value="">
                                <i class="icon-error" aria-hidden="true"></i>
                                <label class="invalid-feedback" id="invalid-email">Please enter your email address.</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mb-3 justify-content-end">
                <input type="submit" class="btn primary-btn" value="Next">
            </div>

        </form>
    </section>
@endsection

