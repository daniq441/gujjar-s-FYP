@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        <div class="text-primary fs-3 fw-light py-5">
            Enter personal information for amazing Cv
        </div>

        @if(@isset($bg_color))
        <form action="/user-detail/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" method="POST" onsubmit="return detailValidation()">
        @else
        <form action="/user-detail/{{ $image}}/{{$color}}/{{ $templatePath }}" method="POST" onsubmit="return detailValidation()">
        @endif
            @csrf
            <div class="mb-5">
                <div class="">
                    <div class="row ">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label" for="textFNAM">First Name</label>
                                <input type="text" name="FNAM" placeholder="(i.e). Haider" maxlength="35" class="form-control word-check" id="textFNAM" value="" oninput="fName()">
                                <div id="fname-error" class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label " for="textLNAM">Surname</label>
                                <input type="text" name="LNAM" placeholder="(i.e). Saeed" maxlength="35" class="form-control" id="textLNAM" value="" oninput="lName()">
                                <div id="lname-error" class="text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="textDCTL">Address</label>
                                <input type="text" name="ADD" placeholder="(i.e). 90 D Rizwan Block Awan Town" class="form-control" id="textDCTL" value="" oninput="address()">
                                <div id="address-error" class="text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 field-1">
                            <div class="form-group">
                                <label class="control-label " for="city">City</label>
                                <input type="city" name="CITY" placeholder="(i.e). Lahore" maxlength="100" class="form-control" id="city" value="" oninput="cityInput()">
                                <div id="city-error" class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-2">
                            <div class="form-group ">
                                <label class="control-label " for="country">Country</label>
                                <input type="country" name="CNTY" placeholder="(i.e). Pakistan" maxlength="50" class="form-control" id="country" value="" oninput="countryInput()">
                                <div id="country-error" class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-3">
                            <div class="form-group ">
                                <label class="control-label " for="zip">Postal Code</label>
                                <input type="zip" name="ZIPC" placeholder="(i.e). 5400" maxlength="10" class="form-control" id="zip" value="" oninput="zipCode()">
                                <div id="zip-error" class="text-danger"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="HPHN">Phone
                                </label><input type="tel" name="HPHN" placeholder="(i.e). +923056989967" maxlength="20" class="form-control" id="HPHN" value="" oninput="phone()">
                                <div id="phone-error" class="text-danger"></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-email">
                            <div class="form-group">
                                <label class="control-label" for="EMAI">Email</label>
                                <input type="text" name="EMAI" placeholder="(i.e). abc123@gmail.com" maxlength="50" class="form-control" id="EMAI" value="">
                                <div id="email-error" class="text-danger"></div>
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

