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
        <div class="text-primary fs-3 fw-light pt-5">
            Update your skill
        </div>
        @if(@isset($bg_color))
        <form class="" id="skill-form" onsubmit="return skillValidation()" action="/skill-update/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $skill_data->id }}" method="POST">
        @else
        <form class="" id="skill-form" onsubmit="return skillValidation()" action="/skill-update/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $skill_data->id }}" method="POST">
        @endif
            @csrf
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="skillname" class="control-label">Name</label>
                        <input type="text" name="SKNAME" class="form-control" placeholder="(i.e). Android developer" id="skillname" maxlength="50" spellcheck="true" value="{{ $skill_data->skillName }}" oninput="skName()">
                        <div id="name-error" class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="skillrating" class="control-label">Rating</label>
                        <select id="rating" name="RATING" class="form-select" oninput="skRating()">
                            <option value="{{ $skill_data->skillRating }}" selected>{{ $skill_data->skillRating }}</option>
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
                        <input type="submit" class="btn primary-btn" value="Next">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <img src="{{ url('images/skills_update.jpg')}}" alt="" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
