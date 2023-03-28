@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        {{-- For error --}}
        <div class="mt-3">
            @if(session()->has('errors'))
                @foreach ($errors->all()  as $e)
                    <div class="alert alert-danger" role="atert">
                        <p>{{ $e }}</p>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="text-primary fs-3 fw-light pt-1">
            Write your skill here
        </div>

        @if(@isset($bg_color))
        <form class="" id="skill-form" onsubmit="return skillValidation()" action="/skill-store/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" method="POST">
        @else
        <form class="" id="skill-form" onsubmit="return skillValidation()" action="/skill-store/{{ $image}}/{{$color}}/{{ $templatePath }}" method="POST">
        @endif
            @csrf
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="skillname" class="control-label">Name</label>
                        <input type="text" name="SKNAME" class="form-control" placeholder="(i.e). Android developer" id="skillname" maxlength="50" spellcheck="true" value="" oninput="skName()">
                        <div id="name-error" class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="skillrating" class="control-label">Rating</label>
                        <select id="rating" name="RATING" class="form-select" oninput="skRating()">
                            <option disabled selected hidden value="">out of 10</option>
                            <option value="10/10">10/10</option>
                            <option value="09/10">09/10</option>
                            <option value="08/10">08/10</option>
                            <option value="07/10">07/10</option>
                            <option value="06/10">06/10</option>
                            <option value="05/10">05/10</option>
                            <option value="04/10">04/10</option>
                            <option value="03/10">03/10</option>
                            <option value="02/10">02/10</option>
                            <option value="01/10">01/10</option>
                        </select>
                        <div id="rating-error" class="text-danger"></div>
                    </div>
                    <div class="d-flex mb-3 justify-content-end">
                        <input id="skill-fm-submit" type="submit" class="btn primary-btn" value="Next">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <img src="{{ url('images/skills.jpg')}}" alt="" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
