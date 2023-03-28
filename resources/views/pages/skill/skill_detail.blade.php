@extends('layouts.post')

@section('content')
    <section class="container mb-3">
        <div class="text-primary fs-3 fw-light py-4">
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
                <p class="card-text fw-light"><b>Name: </b>{{ $skill_data->skillName }}</p>
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
                <a href="/experience-create/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @else
                <a href="/experience-create/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @endif
        </div>
    </section>

@endsection
