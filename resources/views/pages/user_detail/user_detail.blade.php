@extends('layouts.post')

@section('content')
    <section class="container mb-3">
        <div class="text-primary fs-3 fw-light pb-3 pt-3 ">
            User Detail
        </div>
        {{-- @foreach ($user_detail as $user) --}}
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between">
                <div class="text-success fw-bold">
                    {{-- {{$loop->index + 1}} --}}
                </div>
                @if (@isset($user_detail))
                <div>
                    <div class="">
                        @if(@isset($bg_color))
                            <a href="/user-edit/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $user_detail->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                            <a href="/user-delete/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $user_detail->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                        @else
                            <a href="/user-edit/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $user_detail->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                            <a href="/user-delete/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $user_detail->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                        @endisset
                    </div>
                </div>
                @endif
            </div>
            @if (@isset($user_detail))
                <div class="card-body">
                    <div class="row">
                        @if ($user_detail->picture != NULL)
                            <div class="col-md-4 text-center order-md-2">
                                <img src="/storage/images/{{ $user_detail->picture}}" alt="" class="rounded-circle" height="200" width="200">
                            </div>
                        @endif
                        <div class="col-md-8 order-md-1">
                            <h2 class="text-primary card-text fw-light"><b>Name: </b>{{ $user_detail->firstname }} {{ $user_detail->surname }}</h2>
                            <p class="card-text fw-light"><b>Email: </b>{{ $user_detail->email }}</p>
                            <p class="card-text fw-light"><b>Phone: </b>{{ $user_detail->phone }}</p>
                            <p class="card-text fw-light"><b>Address: </b>{{ $user_detail->address }}</p>
                            <p class="card-text fw-light"><b>City: </b>{{ $user_detail->city }}</p>
                            <p class="card-text fw-light"><b>Country: </b>{{ $user_detail->country }}</p>
                            <p class="card-text fw-light"><b>Postal Code: </b>{{ $user_detail->postalcode }}</p>
                        </div>

                    </div>
                    <p class="card-text fw-light"><b>Summary: </b>{{ $user_detail->summary }}</p>
                </div>
            @else
                <div>No User Detail exist
                    @if(@isset($bg_color))
                            <div class="py-2 text-center">
                                <a href="/form-page/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn primary-btn">Add New Detail</a>
                            </div>
                        @else
                            <div class="py-2 text-center">
                                <a href="/form-page/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn primary-btn">Add New Detail</a>
                            </div>
                        @endif
                </div>
            @endif
        </div>
        {{-- @endforeach --}}
        <div class="d-flex mb-3 justify-content-end pt-2">
            {{-- @if(@isset($bg_color))
                <a href="/education-create/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @else
                <a href="/education-create/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @endif --}}
            @if(@isset($bg_color))
                <a href="/education-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @else
                <a href="/education-description/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @endif
        </div>
    </section>
@endsection
