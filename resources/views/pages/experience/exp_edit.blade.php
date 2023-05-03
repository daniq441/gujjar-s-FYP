@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        <div class="text-primary fs-3 fw-light py-3">
            Update your experience
        </div>
        @if(@isset($bg_color))
        <form id="exp_form" action="/experience-update/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $exp_data->id }}" method="POST" onsubmit="return experienceValidation()">
        @else
        <form id="exp_form" action="/experience-update/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $exp_data->id }}" method="POST" onsubmit="return experienceValidation()">
        @endif
            @csrf
            <div class="experience-section">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="position" class="control-label">Job Title</label>
                            <input type="text" name="JOB" class="form-control" placeholder="(i.e). Software Engineer" id="position" maxlength="50" spellcheck="true" value="{{ $exp_data->job_title }}" oninput="jobTitle()">
                            <div id="title-error" class="text-danger"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="company">Company Name</label>
                            <input type="text" name="COMP" placeholder="(i.e). Macro Mobile Solutions" maxlength="100" class="form-control" id="company" value="{{ $exp_data->company_name }}" oninput="companyName()">
                            <div id="company-name-error" class="text-danger"></div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-city col-sm-6">
                        <div class="form-group ">
                            <label class="control-label " for="jobcity">City</label>
                            <input type="text" name="CITY" placeholder="(i.e). Lahore" maxlength="100" class="form-control" id="jobcity" autocomplete="address-level2" value="{{ $exp_data->city }}" oninput="companyCity()">
                            <div id="city-name-error" class="text-danger"></div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="jobcountry">Country</label>
                            <input type="text" name="COUNT" placeholder="(i.e). Pakistan" maxlength="50" class="form-control" id="jobcountry" value="{{ $exp_data->country }}" oninput="companyCountry()">
                            <div id="country-name-error" class="text-danger"></div>
                        </div>
                    </div>
                </div>
                <label class="control-label" for="jobdescription">Description</label><br/>
                <div class="input-group">
                    <textarea class="form-control mb-3" name="DESC" aria-label="With textarea" id="jobdescription" rows="5" oninput="jobDescription()">{{ $exp_data->description }}</textarea>
                </div>
                <div id="description-error" class="text-danger control-label"></div>

                {{-- <div class="row w-50">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="fromCal">Start Date</label>
                            <input type="text" name="STDT" placeholder="YYYY-MM" maxlength="7" class="form-control" id="fromCal" autocomplete="off" required value="{{ $exp_data->start_date }}" oninput="startDateFormate()">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="toCal">End Date</label>
                            @if($exp_data->end_date == 'Current')
                            <input type="text" name="EDDT" placeholder="YYYY-MM" maxlength="7" class="form-control" id="toCal" required readonly value="{{ $exp_data->end_date }}" oninput="endDateFormate()">
                            @else
                            <input type="text" name="EDDT" placeholder="(i.e). 2023-02" maxlength="7" class="form-control" id="toCal" required value="{{ $exp_data->end_date }}" oninput="endDateFormate()">
                            @endif
                        </div>
                        <div class="custom-control custom-checkbox checkbox-sm">
                            @if($exp_data->end_date == 'Current')
                            <input type="checkbox" class="custom-control-input" id="currentJob" value="" checked onclick="checkCheckbox()">
                            @else
                            <input type="checkbox" class="custom-control-input" id="currentJob" value="" onclick="checkCheckbox()">
                            @endif
                            <label class="custom-control-label" for="currentJob"> I currently work here</label>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                        <label class="control-label" for="fromCal">Start Date</label>
                            {{-- <input type="text" name="STMONTH" placeholder="Month" maxlength="7" class="form-control data_formate" id="fromCal" required value="" oninput="startDateFormate()"> --}}
                            <select name="STMONTH" id="start-month" class="form-select" onchange="startMonth()">
                                <option value="{{ $exp_data->start_month }}" selected>{{ $exp_data->start_month }}</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <div id="start-month-error" class="text-danger control-label"></div>
                        </div>
                        <div class="form-group">
                            {{-- <input type="text" name="STYEAR" placeholder="Year" maxlength="7" class="form-control data_formate" id="toCal" value="" oninput="endDateFormate()"> --}}
                            <select name="STYEAR" id="start-year" class="form-select" onchange="startYear()">
                                <option value="{{ $exp_data->start_year }}" selected>{{ $exp_data->start_year }}</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                            </select>
                            <div id="start-year-error" class="text-danger control-label"></div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label" for="fromCal">End Date</label>
                            {{-- <input type="text" name="STMONTH" placeholder="Month" maxlength="7" class="form-control data_formate" id="fromCal" required value="" oninput="startDateFormate()"> --}}
                            @if($exp_data->end_year == 'Current')
                            <select hidden name="ENDMONTH" class="form-select" id="endmonth" onchange="endMonth()">
                            @else
                            <select name="ENDMONTH" class="form-select" id="endmonth" onchange="endMonth()">
                            @endif
                                <option value="{{ $exp_data->end_month }}" selected>{{ $exp_data->end_month }}</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <div id="end-month-error" class="text-danger control-label"></div>
                        </div>
                        <div class="form-group">
                            {{-- <input type="text" name="STYEAR" placeholder="Year" maxlength="7" class="form-control data_formate" id="toCal" value="" oninput="endDateFormate()"> --}}
                            @if($exp_data->end_year == 'Current')
                            <select hidden name="ENDYEAR" class="form-select" id="endyear" onchange="endYear()">
                            @else
                            <select name="ENDYEAR" class="form-select" id="endyear" onchange="endYear()">
                            @endif
                                <option value="{{ $exp_data->end_year }}" selected>{{ $exp_data->end_year }}</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                                <option value="1923">1923</option>
                            </select>
                            <div id="end-year-error" class="text-danger control-label"></div>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-sm">
                            @if($exp_data->end_year == 'Current')
                            <input type="checkbox" class="custom-control-input" id="currentJob" checked value="" onclick="checkCheckbox()">
                            @else
                            <input type="checkbox" class="custom-control-input" id="currentJob" value="" onclick="checkCheckbox()">
                            @endif
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

