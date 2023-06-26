@extends('layouts.post')

@section('content')
    <section class="container py-5">
        <div>
            <div>
                <h1 class="text-center">Cover Letter Templates</h1>
            </div>
            <div class="row pt-3 text-center justify-content-center">
                <div class="col-md-6">Click on a cover letter template, fill it online, and download in seconds. Build a
                    professional cover letter in a few clicks. Just pick one of 4 cover letter templates below, add
                    ready-made content, and get the job.</div>
            </div>
        </div>
        <div class="pt-5">
            <div class="row row-cols-md-2">
                <div class="col-sm-12 px-3 pt-2 pb-4">
                    <a href="{{ route('detailCoverletter',['cascade-template']) }}"><img class="img-fluid border" src="{{ url('images/clPageImages/tem-image-1.png')}}"></a>
                    <h1 class="py-4 fs-2">Cascade</h1>
                    <p>Professional cover letter template with a column for contact information</p>
                </div>
                <div class="col-sm-12 px-3 pt-2 pb-4">
                    <a href="{{ route('detailCoverletter',['crisp-template']) }}"><img class="img-fluid border" src="{{ url('images/clPageImages/tem-image-2.png')}}"></a>
                    <h1 class="py-4 fs-2">Crisp</h1>
                    <p>Creative cover letter template with graphic elements and two columns</p>
                </div>
                <div class="col-sm-12 px-3 pt-2 pb-4">
                    <a href="{{ route('detailCoverletter',['influx-template']) }}"><img class="img-fluid border" src="{{ url('images/clPageImages/tem-image-3.png')}}"></a>
                    <h1 class="py-4 fs-2">Influx</h1>
                    <p>Elegant cover letter template with a single column classic feel</p>
                </div>
                <div class="col-sm-12 px-3 pt-2 pb-4">
                    <a href="{{ route('detailCoverletter',['iconic-Template']) }}"><img class="img-fluid border" src="{{ url('images/clPageImages/tem-image-4.png')}}"></a>
                    <h1 class="py-4 fs-2">Iconic</h1>
                    <p>Clean cover letter template with plenty of whitespace and a layout that feels complete</p>
                </div>
                <div class="col p-2"></div>
            </div>
        </div>
    </section>
@endsection
