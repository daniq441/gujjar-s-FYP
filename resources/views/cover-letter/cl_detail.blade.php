@extends('layouts.post')

@section('content')
<section class="container mb-3 min-height-400">
        <div class="row cover-letter-link">
            <div class="col-lg-9 col-md-12 mx-auto ">
                <div class="text-primary fs-3 fw-light pb-3 pt-3 d-flex justify-content-between">
                    <span>Information For Cover Letter</span>
                    <span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn primary-btn px-2" data-toggle="modal" data-target="#clModelId">
                            Preview
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="clModelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Preview Cover Letter</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="{{ route($templatePath) }}" width="100%" height="600px"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Dawnload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
                </div>
                {{-- @foreach ($user_detail as $user) --}}
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <div class="text-success fw-bold">
                            {{-- {{$loop->index + 1}} --}}
                        </div>
                        @if (@isset($clUserData) && @isset($clRecipientData))
                            <div>
                                <div class="">
                                    <a href="{{ route('deleteCoverletter' , [$templatePath, $clUserData->id, $clRecipientData->id ]) }}"><i class="fa-solid fa-trash-can text-primary fs-6"></i></a>
                                </div>
                            </div>
                        @endif
                    </div>
                    @if (@isset($clUserData) && @isset($clRecipientData))
                        <div class="card-body">
                            {{-- <div class="text-primary fs-3 fw-light pb-3 pt-1 ">
                                Personal Detail
                            </div> --}}
                            <a href="{{ route('userEditCoverletter',[$templatePath, $clUserData->id]) }}">
                                <div class="designing">
                                    <span class="fw-bold fs-4">{{ $clUserData->firstName }} {{ $clUserData->lastName }}
                                    </span><br>
                                    <span class="fw-bold">{{ $clUserData->profession }}
                                    </span><br>
                                    <span>{{ $clUserData->phone }}</span><br>
                                    <span>{{ $clUserData->email }}</span><br>
                                    <span>{{ $clUserData->city }}, {{ $clUserData->country }} {{ $clUserData->zipCode }}</span><br>
                                </div>
                            </a>
                            {{-- <div class="text-primary fs-3 fw-light pb-3 pt-3 ">
                                Recipient Detail
                            </div> --}}
                            <a href="{{ route('clRecipientEdit',[$templatePath, $clRecipientData->id]) }}">
                                <div class="mt-3 designing">
                                    @if($clRecipientData->firstName != null && $clRecipientData->lastName != null)
                                        <span class="fw-bold fs-4"> {{ $clRecipientData->firstName }} {{ $clRecipientData->lastName }} </span><br>
                                        <span class="fw-bold">{{ $clRecipientData->position }}</span><br>
                                    @endif
                                    <span>{{ $clRecipientData->companyName }}</span><br>
                                    @if($clRecipientData->city != null && $clRecipientData->country != null && $clRecipientData->zipCode != null )
                                        <span>{{ $clRecipientData->city }}, {{ $clRecipientData->country }}, {{ $clRecipientData->zipCode }}</span><br>
                                    @endif
                                </div>
                            </a>
                            <div class="py-3">
                                RE: {{ $clUserData->jobTitle }}
                            </div>
                            <div class="mt-3">
                                @if(@isset($clRecipientData->firstName) && @isset($clRecipientData->lastName))
                                Dear {{ $clRecipientData->firstName }},
                                @else
                                Dear Sir,
                                @endif
                            </div>
                            <a href="{{ route('clOpeningEdit',[$templatePath,$clUserData->id]) }}">
                                <div class="opening mt-3 designing">
                                    <p align="justify">{{ $clUserData->opening }}</p>
                                </div>
                            </a>
                            <a href="{{ route('clBodyEdit',[$templatePath,$clUserData->id]) }}">
                                <div class="body mt-3 designing">
                                    <p align="justify">{{ $clUserData->body }}</p>
                                </div>
                            </a>
                            <a href="{{ route('clClosingEdit',[$templatePath,$clUserData->id]) }}">
                                <div class="closing mt-3 designing">
                                    <p align="justify">{{ $clUserData->closing }}</p>
                                </div>
                            </a>
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
                <div class="d-flex mb-3 justify-content-end pt-2">
                    <a href="{{ route($templatePath) }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
    </section>
@endsection
