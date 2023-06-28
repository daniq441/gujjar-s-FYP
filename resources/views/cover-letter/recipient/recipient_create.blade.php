@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        <div class="text-primary fs-3 fw-light pb-5">
            Recipient
            <br>
            <span class="fs-6 text-dark">Enter your recipient's information</span>
        </div>

        <form action="{{ route('clRecipientStore',[$templatePath]) }}" method="POST">
            @csrf
            <div class="mb-5">
                <div class="">
                    <div class="row ">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label" for="textFNAM">First Name</label>
                                <input type="text" name="firstName" placeholder="(i.e). Shahzaib" maxlength="35" class="form-control word-check" id="textFNAM" value="{{ old('firstName') }}">
                                @error('firstName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label " for="textLNAM">Last Name</label>
                                <input type="text" name="lastName" placeholder="(i.e). Islam" maxlength="35" class="form-control" id="textLNAM" value="{{ old('lastName') }}">
                                @error('lastName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="companyname">Company Name <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="companyName" placeholder="(i.e). Ilsa Interactive" class="form-control" id="companyname" value="{{ old('companyName') }}">
                                @error('companyName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="position">Recipient Position</label>
                                <input type="text" name="position" placeholder="(i.e). HR Manager" class="form-control" id="position" value="{{ old('position') }}">
                                @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 field-1">
                            <div class="form-group">
                                <label class="control-label " for="city">City</label>
                                <input type="city" name="city" placeholder="(i.e). Lahore" maxlength="100" class="form-control" id="city" value="{{ old('city') }}">
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-2">
                            <div class="form-group ">
                                <label class="control-label " for="country">Country</label>
                                <input type="country" name="country" placeholder="(i.e). Pakistan" maxlength="50" class="form-control" id="country" value="{{ old('country') }}">
                                @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-3">
                            <div class="form-group ">
                                <label class="control-label " for="zip">Zip Code</label>
                                <input type="zip" name="zipCode" placeholder="(i.e). 5400" maxlength="10" class="form-control" id="zip" value="{{ old('zipCode') }}">
                                @error('zipCode')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
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

