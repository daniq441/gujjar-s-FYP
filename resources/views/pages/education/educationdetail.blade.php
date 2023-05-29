@extends('layouts.post')

@section('content')
    <nav aria-label="breadcrumb" class="mt-3">
        <div class="container">
            <ol class="breadcrumb">
                @if(@isset($bg_color))
                    <li class="breadcrumb-item"><a href="/user-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}">Heading</a></li>
                    <li class="breadcrumb-item"><a href="/experience-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}">Work History</a></li>
                    <li class="breadcrumb-item active"><a href="/education-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}">Education</a></li>
                    <li class="breadcrumb-item"><a href="/skill-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}">Skills</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#" class="btn primary-btn py-0 px-2">Preview</a></li> --}}
                    <li class="breadcrumb-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn primary-btn py-0 px-2" data-toggle="modal" data-target="#modelId">
                            Preview
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Preview CV</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/{{ $templatePath }}/{{ $image}}/{{$color}}/{{ $bg_color }}" width="100%" height="600px"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Dawnload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @else
                    <li class="breadcrumb-item"><a href="/user-description/{{$image}}/{{$color}}/{{ $templatePath }}">Heading</a></li>
                    <li class="breadcrumb-item"><a href="/experience-description/{{$image}}/{{$color}}/{{ $templatePath }}">Work History</a></li>
                    <li class="breadcrumb-item active"><a href="/education-description/{{$image}}/{{$color}}/{{ $templatePath }}">Education</a></li>
                    <li class="breadcrumb-item "><a href="/skill-description/{{$image}}/{{$color}}/{{ $templatePath }}">Skills</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#" class="btn primary-btn py-0 px-2">Preview</a></li> --}}
                    <li class="breadcrumb-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn primary-btn py-0 px-2" data-toggle="modal" data-target="#modelId">
                            Preview
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Preview CV</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="/{{ $templatePath }}/{{ $image}}/{{$color}}" width="100%" height="600px"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Dawnload</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif
            </ol>
        </div>
    </nav>
    <section class="container mb-3 min-height-320">
        <div class="text-primary fs-3 fw-light py-3">
            Education description
        </div>
        <div class="">

            @foreach ($education as $edu_data)
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <div class="text-success fw-bold">
                        {{$loop->index + 1}}
                    </div>
                    <div>
                        <div class="">
                            @if(@isset($bg_color))
                                <a href="/education-edit/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $edu_data->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                                <a href="/education-delete/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $edu_data->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                            @else
                                <a href="/education-edit/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $edu_data->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                                <a href="/education-delete/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $edu_data->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                                @endisset
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $edu_data->degree }}: {{ $edu_data->field_of_study }}</h5>
                        <p class="card-text fw-light"><b>School: </b>{{ $edu_data->school_name }}</p>
                        <p class="card-text fw-light"><b>Location: </b>{{ $edu_data->school_location }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="border border-primary">
            @if(@isset($bg_color))
                <a href="/education-create/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn btn-block text-primary"><i class="fas fa-plus-circle icon-add pe-2"></i>ADD ANOTHER DEGREE</a>
            @else
                <a href="/education-create/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn btn-block text-primary"><i class="fas fa-plus-circle icon-add pe-2"></i>ADD ANOTHER DEGREE</a>
            @endif
        </div>
        <div class="d-flex mb-3 justify-content-end pt-2">
            {{-- @if(@isset($bg_color))
                <a href="/experience-create/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @else
                <a href="/experience-create/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @endif --}}
            @if(@isset($bg_color))
                <a href="/skill-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @else
                <a href="/skill-description/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @endif
        </div>
    </section>
@endsection
