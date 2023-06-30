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
            Enter Name and Contact
        </div>

        <form action="{{ route('clUserStore',[$templatePath]) }}" method="POST">
            @csrf
            <div class="mb-5">
                <div class="">
                    <div class="row ">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label" for="textFNAM">First Name <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="firstName" placeholder="(i.e). Shahzaib" maxlength="35" class="form-control word-check" id="textFNAM" value="{{ old('firstName') }}">
                                @error('firstName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label " for="textLNAM">Last Name <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="lastName" placeholder="(i.e). Islam" maxlength="35" class="form-control" id="textLNAM" value="{{ old('lastName') }}">
                                @error('lastName')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="textDCTL">Profession <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="profession" placeholder="(i.e). Web Developer" class="form-control" id="textDCTL" value="{{ old('profession') }}">
                                @error('profession')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 field-1">
                            <div class="form-group">
                                <label class="control-label " for="job">Job Title <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="jobTitle" placeholder="(i.e). Backend development" maxlength="100" class="form-control" id="job" value="{{ old('jobTitle') }}">
                                @error('jobTitle')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 field-2">
                            <div class="form-group ">
                                <label class="control-label " for="experience">Experience</label>
                                <select id="experience" name="experience" class="form-select">
                                    <option selected value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10+">10+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 field-1">
                            <div class="form-group">
                                <label class="control-label " for="city">City <span class="text-danger fw-bold">*</span></label>
                                <input type="city" name="city" placeholder="(i.e). Lahore" maxlength="100" class="form-control" id="city" value="{{ old('city') }}">
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-2">
                            <div class="form-group ">
                                <label class="control-label " for="country">Country <span class="text-danger fw-bold">*</span></label>
                                <input type="country" name="country" placeholder="(i.e). Pakistan" maxlength="50" class="form-control" id="country" value="{{ old('country') }}">
                                @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6 col-xl-3 field-3">
                            <div class="form-group ">
                                <label class="control-label " for="zip">Zip Code <span class="text-danger fw-bold">*</span></label>
                                <input type="zip" name="zipCode" placeholder="(i.e). 5400" maxlength="10" class="form-control" id="zip" value="{{ old('zipCode') }}">
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
                                <input type="tel" name="phone" placeholder="(i.e). +923056989967" maxlength="20" class="form-control" id="HPHN" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 col-email">
                            <div class="form-group">
                                <label class="control-label" for="EMAI">Email <span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="email" placeholder="(i.e). abc123@gmail.com" maxlength="50" class="form-control" id="EMAI" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="skill1">Skill 1<sup>st</sup><span class="text-danger fw-bold">*</span></label>
                                <input type="tel" name="skill1" placeholder="(i.e). Soft Skill" maxlength="60" class="form-control" id="skill1" value="{{ old('skill1') }}">
                                @error('skill1')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="skill2">Skill 2<sup>nd</sup><span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="skill2" placeholder="(i.e). Soft Skill" maxlength="50" class="form-control" id="skill2" value="{{ old('skill2') }}">
                                @error('skill2')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label" for="skill3">Skill 3<sup>rd</sup><span class="text-danger fw-bold">*</span></label>
                                <input type="text" name="skill3" placeholder="(i.e). Soft Skill" maxlength="50" class="form-control" id="skill3" value="{{ old('skill3') }}">
                                @error('skill3')
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

