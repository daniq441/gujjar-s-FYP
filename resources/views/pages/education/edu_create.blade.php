@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        <div class="text-primary fs-3 fw-light py-5">
            Tell us about your education
        </div>
        @if(@isset($bg_color))
        <form action="/education-detail/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" method="POST">
        @else
        <form action="/education-detail/{{ $image}}/{{$color}}/{{ $templatePath }}" method="POST">
        @endif
            @csrf
            <div class="">
                <div class="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="school" class="control-label">School Name</label>
                                <div role="combobox" class="autosuggest-container">
                                    <input type="text" class="form-control autosuggest" placeholder="(i.e). University Of Lahore" name="SCHO" id="school" maxlength="50" required spellcheck="true" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="SCLO" class="control-label">School Location</label>
                                <div role="combobox" class="autosuggest-container">
                                    <input type="text" class="form-control autosuggest" placeholder="(i.e). Lahore city, Pakistan" name="SCLO" id="SCLO" maxlength="50" autosuggesttype="googleplaces" spellcheck="true" required value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Degree</label>
                                {{-- <input list="degree", name="degree", id="degree"> --}}
                                <select name="DEGREE" class="form-select">
                                    <option selected>Not Selected</option>
                                    <option value="High School Diploma">High School Diploma</option>
                                    <option value="Inter">Inter</option>
                                    <option value="GED">GED</option>
                                    <option value="Associate of Arts">Associate of Arts</option>
                                    <option value="Associate of Science">Associate of Science</option>
                                    <option value="Associate of Applied Science">Associate of Applied Science</option>
                                    <option value="Bachelor of Arts">Bachelor of Arts</option>
                                    <option value="Bachelor of Science">Bachelor of Science</option>
                                    <option value="Master of Arts">Mater of Arts</option>
                                    <option value="Master of Science">Mater of Science</option>
                                    <option value="MBA">MBA</option>
                                    <option value="J.D.">J.D.</option>
                                    <option value="M.D.">M.D.</option>
                                    <option value="No Degree">No Degree</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="STUY" class="control-label">Field of Study</label>
                                <div role="combobox" class="autosuggest-container">
                                    <input type="text" class="form-control autosuggest" placeholder="(i.e). Computer Science" name="STUY" id="STUY" maxlength="50" autosuggesttype="fieldofstudy" spellcheck="true" required value="">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label " for="fromCal">Graduation Start Date</label>
                                        <input type="text" name="GRST" placeholder="(i.e). 2019-02" class="form-control" id="fromCal" maxlength="7" required value="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label " for="toCal">Graduation End Date</label>
                                        <input type="text" name="GRED" placeholder="(i.e). 2023-02" class="form-control" id="toCal" maxlength="7" required value="">
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox checkbox-sm checkbox-alignment-right">
                                    <input name="currentlyAttending" id="currentlyAttending" class="custom-control-input" tabindex="9" type="checkbox" value="">
                                    <label for="currentlyAttending" class="custom-control-label">I currently attend here</label>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="d-flex mb-3 justify-content-end">
                <input type="submit" class="btn primary-btn" value="Next">
            </div>

        </form>
    </section>
@endsection

