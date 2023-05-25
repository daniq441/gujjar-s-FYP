@extends('layouts.post')

@section('content')
    <nav aria-label="breadcrumb" class="mt-3">
        <div class="container">
            <ol class="breadcrumb">
                @if(@isset($bg_color))
                    <li class="breadcrumb-item"><a href="/user-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}">Heading</a></li>
                    <li class="breadcrumb-item"><a href="/education-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}">Education</a></li>
                    <li class="breadcrumb-item"><a href="/experience-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}">Work History</a></li>
                    <li class="breadcrumb-item active"><a href="/skill-description/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}">Skills</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#" class="btn primary-btn py-0 px-2">Preview</a></li> --}}
                @else
                    <li class="breadcrumb-item"><a href="/user-description/{{$image}}/{{$color}}/{{ $templatePath }}">Heading</a></li>
                    <li class="breadcrumb-item"><a href="/education-description/{{$image}}/{{$color}}/{{ $templatePath }}">Education</a></li>
                    <li class="breadcrumb-item"><a href="/experience-description/{{$image}}/{{$color}}/{{ $templatePath }}">Work History</a></li>
                    <li class="breadcrumb-item active"><a href="/skill-description/{{$image}}/{{$color}}/{{ $templatePath }}">Skills</a></li>
                    {{-- <li class="breadcrumb-item"><a href="#" class="btn primary-btn py-0 px-2">Preview</a></li> --}}
                    <li class="breadcrumb-item active">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn primary-btn py-0 px-2" data-toggle="modal" data-target="#modelId">
                            Preview
                        </button>

                        <!-- Modal -->
                        <div class="modal" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
    <section class="container mb-3">
        <div class="text-primary fs-3 fw-light pb-4 pt-2">
            Skills description
        </div>
        @foreach ($skill as $skill_data)
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between">
                <div class="text-success fw-bold">
                    {{$loop->index + 1}}
                </div>
                <div>
                    <div class="">
                        @if(@isset($bg_color))
                            <a href="/skill-edit/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $skill_data->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                            <a href="/skill-delete/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $skill_data->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                        @else
                            <a href="/skill-edit/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $skill_data->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                            <a href="/skill-delete/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $skill_data->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{-- <h5 class="card-title text-primary">Yours Skills</h5> --}}
                <p class="card-text fw-light"><b>Title: </b>{{ $skill_data->skillName }}</p>
                <p class="card-text fw-light"><b>Rating: </b>{{ $skill_data->skillRating }}</p>
            </div>
        </div>
        @endforeach
        <div class="border border-primary">
            @if(@isset($bg_color))
                <a href="/skill-create/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn btn-block text-primary"><i class="fas fa-plus-circle icon-add pe-2"></i>ADD ANOTHER SKILL</a>
            @else
                <a href="/skill-create/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn btn-block text-primary"><i class="fas fa-plus-circle icon-add pe-2"></i>ADD ANOTHER SKILL</a>
            @endif
        </div>
        <div class="d-flex mb-3 justify-content-end pt-2">
            @if(@isset($bg_color))
                <a href="/{{ $templatePath }}/{{ $image}}/{{$color}}/{{ $bg_color }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @else
                <a href="/{{ $templatePath }}/{{ $image}}/{{$color}}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @endif
        </div>
    </section>

@endsection
