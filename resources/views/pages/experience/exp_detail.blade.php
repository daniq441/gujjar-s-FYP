@extends('layouts.post')

@section('content')
    <section class="container mb-3">
        <div class="text-primary fs-3 fw-light pb-3 pt-3 ">
            Experience Detail
        </div>
        @foreach ($experience as $exp_data)
            <div class="card mb-3">
                <div class="card-header d-flex justify-content-between">
                    <div class="text-success fw-bold">
                        {{$loop->index + 1}}
                    </div>
                    <div>
                        <div class="">
                            @if(@isset($bg_color))
                                <a href="/experience-edit/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $exp_data->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                                <a href="/experience-delete/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}/{{ $exp_data->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                            @else
                                <a href="/experience-edit/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $exp_data->id }}"><i class="fa-solid fa-pen pe-2 text-primary"></i></a>
                                <a href="/experience-delete/{{ $image}}/{{$color}}/{{ $templatePath }}/{{ $exp_data->id }}"><i class="fa-solid fa-trash-can text-primary"></i></a>
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <h5 class="card-title text-primary">{{ $exp_data->job_title }}</h5>
                <p class="card-text fw-light"><b>Organization Name: </b>{{ $exp_data->company_name }}</p>
                <p class="card-text fw-light"><b>Location: </b>{{ $exp_data->city }}, {{ $exp_data->country }}</p>
                @if($exp_data->end_year == 'Current')
                <p class="card-text fw-light"><b>Duration: </b>{{ $exp_data->start_year }}-{{ $exp_data->start_month }} -- {{ $exp_data->end_year }}</p>
                @else
                <p class="card-text fw-light"><b>Duration: </b>{{ $exp_data->start_year }}-{{ $exp_data->start_month }} -- {{ $exp_data->end_year }}-{{ $exp_data->end_month }}</p>
                @endif
                <p class="card-text fw-light"><b>Description: </b>{{ $exp_data->description }}</p>
                </div>
            </div>
        @endforeach
        <div class="border border-primary">
            @if(@isset($bg_color))
                <a href="/experience-create/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn btn-block text-primary"><i class="fas fa-plus-circle icon-add pe-2"></i>ADD ANOTHER EXPERIENCE</a>
            @else
                <a href="/experience-create/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn btn-block text-primary"><i class="fas fa-plus-circle icon-add pe-2"></i>ADD ANOTHER EXPERIENCE</a>
            @endif
        </div>
        <div class="d-flex mb-3 justify-content-end pt-2">
            @if(@isset($bg_color))
                <a href="/skill-create/{{ $image}}/{{$color}}/{{ $bg_color }}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @else
                <a href="/skill-create/{{ $image}}/{{$color}}/{{ $templatePath }}" class="btn primary-btn">Next <i class="fa-solid fa-chevron-right"></i></a>
            @endif
        </div>
    </section>
@endsection
