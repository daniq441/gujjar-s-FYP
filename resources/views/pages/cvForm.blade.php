@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        <div class="text-primary fs-3 fw-light py-5">
            Enter personal information for amazing Cv
        </div>
        <div class="mb-5">
            <form action="/">
                <div class="">
                    <div class="row ">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label" for="textFNAM">First Name</label>
                                <input type="text" name="FNAM" placeholder="(i.e). Haider" maxlength="35" class="form-control" id="textFNAM" autocomplete="given-name" value="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label " for="textLNAM">Surname</label>
                                <input type="text" name="LNAM" placeholder="(i.e). Saeed" maxlength="35" class="form-control" id="textLNAM" autocomplete="family-name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="textDCTL">Address</label>
                                <input type="text" name="DCTL" placeholder="(i.e). 90 D Rizwan Block Awan Town" class="form-control" id="textDCTL" autocomplete="additional-name" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 field-1">
                            <div class="form-group">
                                <label class="control-label " for="city">City</label>
                                <input type="city" name="CITY" placeholder="(i.e). Lahore" maxlength="100" class="form-control" id="city" autocomplete="address-level2" value="">
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
                                <input type="zip" name="ZIPC" placeholder="(i.e). 5400" maxlength="10" class="form-control" id="zip" autocomplete="shipping postal-code" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label" for="HPHN">Phone
                                </label><input type="tel" name="HPHN" placeholder="(i.e). +923056989967" maxlength="20" class="form-control" id="HPHN" autocomplete="tel" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-email">
                            <div class="form-group">
                                <label class="control-label" for="EMAI">Email</label>
                                <input type="email" name="EMAI" placeholder="(i.e). abc123@gmail.com" maxlength="50" class="form-control" id="EMAI" autocomplete="email" value="">
                                <i class="icon-error" aria-hidden="true"></i>
                                <label class="invalid-feedback" id="invalid-email">Please enter your email address.</label>
                            </div>
                        </div>
                    </div>

                    {{-- Work History --}}
                    <div class="row">
                        <div class="col-9">
                            <h1 class="text-primary fs-3 fw-light py-5">Tell us about your most recent job</h1>
                        </div>
                    </div>


                    <div class="experience-section">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="position" class="control-label">Job Title</label>
                                    <div role="combobox" class="autosuggest-container">
                                        <input type="text" class="form-control autosuggest" placeholder="(i.e). Software Engineer" id="position" maxlength="50" autosuggesttype="jobtitle" spellcheck="true" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="company">Company Name</label>
                                    <input type="text" name="COMP" placeholder="(i.e). Macro Mobile Solutions" maxlength="100" class="form-control" id="company" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-city col-sm-6">
                                <div class="form-group ">
                                    <label class="control-label " for="jobcity">City</label>
                                    <input type="text" name="JCIT" placeholder="(i.e). Lahore" maxlength="100" class="form-control" id="jobcity" autocomplete="address-level2" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="jobcountry">Country</label>
                                    <input type="text" name="JCNT" placeholder="(i.e). Pakistan" maxlength="50" class="form-control" id="jobcountry" autocomplete="shipping country" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row w-50">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="fromCal">Start Date</label>
                                    <input type="text" name="JSTD" placeholder="(i.e). 2022-02" maxlength="7" class="form-control" id="fromCal" autocomplete="off" value="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="toCal">End Date</label>
                                    <input type="text" name="EDDT" placeholder="(i.e). 2023-02" maxlength="7" class="form-control" id="toCal" autocomplete="off" value="">
                                </div>
                                <div class="custom-control custom-checkbox checkbox-sm">
                                    <input type="checkbox" class="custom-control-input" id="currentJob" value="">
                                    <label class="custom-control-label" for="currentJob"> I currently work here</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Education --}}

                    <div class="row">
                        <div class="col-9">
                            <h1 class="text-primary fs-3 fw-light py-5">Tell us about your education</h1>
                        </div>
                    </div>


                    <div class="">
                        <div class="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="school" class="control-label">School Name</label>
                                        <div role="combobox" class="autosuggest-container">
                                            <input type="text" class="form-control autosuggest" placeholder="(i.e). University Of Lahore" name="SCHO" id="school" maxlength="50" autosuggesttype="googleplaces" spellcheck="true" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="SCLO" class="control-label">School Location</label>
                                        <div role="combobox" class="autosuggest-container">
                                            <input type="text" class="form-control autosuggest" placeholder="(i.e). Lahore city, Pakistan" name="SCLO" id="SCLO" maxlength="50" autosuggesttype="googleplaces" spellcheck="true" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Degree</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select</option>
                                            <option value="High School Diploma">High School Diploma</option>
                                            <option value="GED">GED</option>
                                            <option value="Associate of Arts">Associate of Arts</option>
                                            <option value="Associate of Science">Associate of Science</option>
                                            <option value="Associate of Applied Science">Associate of Applied Science</option>
                                            <option value="Bachelor of Arts">Bachelor of Arts</option>
                                            <option value="Bachelor of Science">Bachelor of Science</option>
                                            <option value="Mater of Arts">Mater of Arts</option>
                                            <option value="Mater of Science">Mater of Science</option>
                                            <option value="MBA">MBA</option>
                                            <option value="J.D.">J.D.</option>
                                            <option value="M.D.">M.D.</option>
                                            <option value="No Degree">No Degree</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-sm-6">
                                    <div class="form-group ">
                                        <label for="STUY" class="control-label">Field of Study</label>
                                        <div role="combobox" class="autosuggest-container">
                                            <input type="text" class="form-control autosuggest" placeholder="(i.e). Computer Science" name="STUY" id="STUY" maxlength="50" autosuggesttype="fieldofstudy" spellcheck="true" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="control-label " for="fromCal">Graduation Start Date</label>
                                                <input type="text" name="GRST" placeholder="(i.e). 2019-02" class="form-control" id="fromCal" maxlength="7" value="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="control-label " for="toCal">Graduation End Date</label>
                                                <input type="text" name="GRED" placeholder="(i.e). 2023-02" class="form-control" id="toCal" maxlength="7" value="">
                                            </div>
                                        </div>
                                        <div class="custom-control custom-checkbox checkbox-sm checkbox-alignment-right">
                                            <input name="currentlyAttending" id="currentlyAttending" class="custom-control-input" tabindex="9" type="checkbox" value="">
                                            <label for="currentlyAttending" class="custom-control-label">I currently attend here</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
