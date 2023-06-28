@extends('layouts.post')

@section('content')
    <section class="container mb-3 min-height-400 justify-content-center">
        <div class="text-primary fs-3 fw-light pb-3 pt-3 w-75 mx-auto">
            Cover Letter
        </div>
        {{-- @foreach ($user_detail as $user) --}}
        <div class="card mb-3 w-75 align-center mx-auto">
            <div class="card-header d-flex justify-content-between">
                <div class="text-success fw-bold">
                    {{-- {{$loop->index + 1}} --}}
                </div>
                @if (@isset($clUserData) && @isset($clRecipientData))
                <div>
                    <div class="">
                        {{-- <a href="/user-edit/{{ $clUserData->id }}/{{ $clRecipientData->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a> --}}
                        <a href="{{ route('deleteCoverletter' , [$templatePath, $clUserData->id, $clRecipientData->id ]) }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                    </div>
                </div>
                @endif
            </div>
            @if (@isset($clUserData) && @isset($clRecipientData))
                <div class="card-body">
                    {{-- <div class="text-primary fs-3 fw-light pb-3 pt-1 ">
                        Personal Detail
                    </div> --}}
                    <div class="">
                        <span class="fw-bold fs-4">{{ $clUserData->firstName }} {{ $clUserData->lastName }}
                        </span><br>
                        <span class="fw-bold">{{ $clUserData->profession }}
                        </span><br>
                        <span><span class="fw-bold">Phone: </span>{{ $clUserData->phone }}</span><br>
                        <span><span class="fw-bold">Email: </span>{{ $clUserData->email }}</span><br>
                        <span><span class="fw-bold">Address:</span> {{ $clUserData->address }}</span><br>
                    </div>
                    {{-- <div class="text-primary fs-3 fw-light pb-3 pt-3 ">
                        Recipient Detail
                    </div> --}}
                    <div class="mt-3">
                        <span class="fw-bold fs-4"> {{ $clRecipientData->firstName }} {{ $clRecipientData->lastName }} </span><br>
                        <span class="fw-bold">{{ $clRecipientData->position }}</span><br>
                        <span class="">{{ $clRecipientData->companyName }}</span><br>
                        <span class="">{{ $clRecipientData->address }}</span><br>
                    </div>
                    <div class="mt-3">
                        @if(@isset($clRecipientData->firstName) && @isset($clRecipientData->lastName))
                            Dear {{ $clRecipientData->firstName }} {{ $clRecipientData->lastName }},
                        @else
                            Dear Sir,
                        @endif
                    </div>

                    <div class="opening mt-3">
                        <p align="justify">{{ $clUserData->opening }}</p>
                    </div>
                    <div class="body mt-3">
                        <p align="justify">{{ $clUserData->body }}</p>
                    </div>
                    <div class="closing mt-3">
                        <p align="justify">{{ $clUserData->closing }}</p>
                    </div>
                    <div class="mt-3">
                        <span>Sincerely,</span><br>
                        <span>{{ $clUserData->firstName }} {{ $clUserData->lastName }}</span><br>
                    </div>
                </div>
            @else
                <div class="text-center">
                    <p class="p-5 text-danger">No Information Found for Cover Letter</p>
                    <div class="py-2 text-center">
                        <a href="{{ route('clUserDetail',[$templatePath]) }}" class="btn primary-btn">Add New Info</a>
                    </div>
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
            <a href="/experience-description" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
        </div>
    </section>
@endsection
