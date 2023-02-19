@extends('layouts.post')

@section('content')
    <section class="container mb-3">
        <div class="text-primary fs-3 fw-light py-5">
            Education description
        </div>
        @foreach ($education as $edu)
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <div class="text-success fw-bold">
                        {{$loop->index + 1}}
                    </div>
                    <div>
                        <div class="">
                            @if(@isset($bg_color))
                                <a href="/education-edit/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $edu->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                                <a href="/education-delete/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $edu->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                            @else
                                <a href="/education-edit/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $edu->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                                <a href="/education-delete/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $edu->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <h5 class="card-title text-primary">{{ $edu->degree }} ({{ $edu->field_of_study }})</h5>
                <p class="card-text">{{ $edu->school_name }}</p>
                <p class="card-text">{{ $edu->school_location }}</p>
                </div>
            </div>
        @endforeach
        <div class="border border-primary border p.dotted">
            @if(@isset($bg_color))
            <a href="/education-create/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn btn-block text-primary"><i class="fas fa-plus-circle icon-add pe-2"></i>ADD ANOTHER DEGREE</a>
            @else
                <a href="/education-create/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn btn-block text-primary"><i class="fas fa-plus-circle icon-add pe-2"></i>ADD ANOTHER DEGREE</a>
            @endif
        </div>

    </section>
@endsection
