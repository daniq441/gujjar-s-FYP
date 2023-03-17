@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        <div class="text-primary fs-3 fw-light py-5">
            Tell us about your experience
        </div>
        @if(@isset($bg_color))
        <form action="/experience-store/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" method="POST">
        @else
        <form action="/experience-store/{{ $image}}/{{$color}}/{{ $templatePath }}" method="POST">
        @endif
            @csrf
            {{-- <div class="row">
                <div class="col-9">
                    <h1 class="text-primary fs-3 fw-light py-5">Tell us about your most recent job</h1>
                </div>
            </div> --}}
            <div class="experience-section">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="position" class="control-label">Job Title</label>
                            {{-- <div role="combobox" class="autosuggest-container"> --}}
                                <input type="text" name="JOB" class="form-control" placeholder="(i.e). Software Engineer" id="position" maxlength="50" spellcheck="true" required value="">
                            {{-- </div> --}}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="company">Company Name</label>
                            <input type="text" name="COMP" placeholder="(i.e). Macro Mobile Solutions" maxlength="100" class="form-control" id="company" required value="">
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-city col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="jobcity">City</label>
                            <input type="text" name="CITY" placeholder="(i.e). Lahore" maxlength="100" class="form-control" id="jobcity" autocomplete="address-level2" required value="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="jobcountry">Country</label>
                            <input type="text" name="COUNT" placeholder="(i.e). Pakistan" maxlength="50" class="form-control" id="jobcountry" required value="">
                        </div>
                    </div>
                </div>
                <label class="control-label" for="jobdescription">Description</label><br/>
                <div class="input-group">
                    <textarea class="form-control mb-3" name="DESC" aria-label="With textarea" id="jobdescription" rows="5"></textarea>
                </div>
                <div class="row w-50">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="fromCal">Start Date</label>
                            <input type="text" name="STDT" placeholder="YYYY-MM" maxlength="7" class="form-control data_formate" id="fromCal" required value="" oninput="startDateFormate()">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="toCal">End Date</label>
                            <input type="text" name="EDDT" placeholder="YYYY-MM" maxlength="7" class="form-control data_formate" id="toCal" value="" oninput="endDateFormate()">
                        </div>
                        <div class="custom-control custom-checkbox checkbox-sm">
                            <input type="checkbox" class="custom-control-input" id="currentJob" value="" onclick="checkCheckbox()">
                            <label class="custom-control-label" for="currentJob"> I currently work here</label>
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

