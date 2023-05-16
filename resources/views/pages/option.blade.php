@extends('layouts.post')

@section('content')
    <section class="container">
        <div class="text-primary fs-3 fw-light py-5 text-center">
            How do you want to make CV
        </div>
        <div class="row row-col-2 justify-content-center pb-5">
            <div class=" col-lg-4 card border m-5" style="width: 18rem;">
                <i class="fa-solid fa-file-pen card-img-top text-center py-4 text-warning"></i>
                <div class="card-body fw-normal">
                    <h5 class="card-title text-center text-uppercase fw-normal">create new cv</h5>
                    <p class="card-text text-center fw-normal">Create your Cv with professional Template</p>
                    {{-- Two type tamplates some have bg_color then check which template selected and next go with this template --}}
                    {{-- @if(@isset($bg_color))
                        <div class="py-2 text-center">
                            <a href="/form-page/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn primary-btn">Go with New</a>
                        </div>
                    @else
                        <div class="py-2 text-center">
                            <a href="/form-page/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn primary-btn">Go with New</a>
                        </div>
                    @endif --}}
                    @if(@isset($bg_color))
                        <div class="py-2 text-center">
                            <a href="/user-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn primary-btn">Go with New</a>
                        </div>
                    @else
                        <div class="py-2 text-center">
                            <a href="/user-description/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn primary-btn">Go with New</a>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 card border m-5" style="width: 18rem;">
                <i class="fa-sharp fa-solid fa-upload card-img-top text-center py-4 text-success"></i>
                <div class="card-body">
                    <h5 class="card-title text-center text-uppercase fw-normal">Update old cv</h5>
                    <p class="card-text text-center fw-normal">ReFormat Old cv and fill in with information</p>
                    @if(@isset($bg_color))
                        <div class="py-2 text-center">
                            <a href="#" class="btn primary-btn">Go with Old</a>
                        </div>
                    @else
                        <div class="py-2 text-center">
                            <a href="#" class="btn primary-btn ">Go with Old</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
