@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        {{-- <div class="mt-3">
            @if(session()->has('errors'))
                @foreach ($errors->all()  as $e)
                    <div class="alert alert-danger" role="atert">
                        <p>{{ $e }}</p>
                    </div>
                @endforeach
            @endif
        </div> --}}
        <div class="text-primary fs-3 fw-light pb-5">
            Update Your personal detail
        </div>

        <form action="{{ route('userUpdateCoverletter',[$templatePath, $userData->id]) }}" method="POST">
            @csrf
            <div class="mb-5">
                <div class="">
                    <div class="row ">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label" for="textFNAM">First Name <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="firstName" placeholder="(i.e). Shahzaib" maxlength="35" class="form-control word-check" id="textFNAM" value="{{ $userData->firstName }}">
                                @error('firstName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label " for="textLNAM">Last Name <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="lastName" placeholder="(i.e). Islam" maxlength="35" class="form-control" id="textLNAM" value="{{ $userData->lastName }}">
                                @error('lastName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="textDCTL">Profession <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="profession" placeholder="(i.e). Web Developer" class="form-control" id="textDCTL" value="{{ $userData->profession }}">
                                @error('profession')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label " for="job">Job Title <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="jobTitle" placeholder="(i.e). Backend development" maxlength="100" class="form-control" id="job" value="{{ $userData->jobTitle }}">
                                @error('jobTitle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-6 field-1">
                            <div class="form-group">
                                <label class="control-label " for="city">City <span class="text-danger fw-bold">*</span></label>
                                <input type="city" name="city" placeholder="(i.e). Lahore" maxlength="100" class="form-control" id="city" value="{{ $userData->city }}">
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-2">
                            <div class="form-group ">
                                <label class="control-label " for="country">Country <span class="text-danger fw-bold">*</span></label>
                                <input type="country" name="country" placeholder="(i.e). Pakistan" maxlength="50" class="form-control" id="country" value="{{ $userData->country }}">
                                @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-3">
                            <div class="form-group ">
                                <label class="control-label " for="zip">Zip Code <span class="text-danger fw-bold">*</span></label>
                                <input type="zip" name="zipCode" placeholder="(i.e). 5400" maxlength="10" class="form-control" id="zip" value="{{ $userData->zipCode }}">
                                @error('zipCode')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="HPHN">Phone <span class="text-danger fw-bold">*</span></label>
                                <input type="tel" name="phone" placeholder="(i.e). +923056989967" maxlength="20" class="form-control" id="HPHN" value="{{ $userData->phone }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-email">
                            <div class="form-group">
                                <label class="control-label" for="EMAI">Email <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="email" placeholder="(i.e). abc123@gmail.com" maxlength="50" class="form-control" id="EMAI" value="{{ $userData->email }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mb-3 justify-content-end">
                <input type="submit" class="btn primary-btn" value="Save">
            </div>
        </form>
    </section>
@endsection

