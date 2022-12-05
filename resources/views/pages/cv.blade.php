@extends('layouts.post')

@section('content')
    <section class="container py-5">
        <div>
            <div>
                <h1 class="text-center">Select a Template for Your CV</h1>
            </div>
            <div class="row pt-3 text-center justify-content-center">
                <div class="col-md-6">Choose a CV template, fill it out, and download in seconds. Create a professional curriculum vitae in a few clicks. Just pick one of 18+ CV templates below, add ready-to-use suggestions, and get the job.</div>
            </div>
        </div>
        {{-- Blue templates --}}
        <div class="pt-5">
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'no'}}/{{'blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp1.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp Blue</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'no'}}/{{'blue'}}/{{'bg-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp2.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade Blue</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'no'}}/{{'blue'}}/{{'bg-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp3.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic Blue</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'yes'}}/{{'blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp1-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp Blue with Image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'yes'}}/{{'blue'}}/{{'bg-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp2-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade Blue with image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'yes'}}/{{'blue'}}/{{'bg-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp3-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic Blue with Image</h1>
                </div>
            </div>
            {{-- Gray Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'no'}}/{{'gray'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp1.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp Gray</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'no'}}/{{'gray'}}/{{'bg-gray'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp2.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade Gray</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'no'}}/{{'gray'}}/{{'bg-gray'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp3.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic Gray</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'yes'}}/{{'gray'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp1-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp Gray with Image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'yes'}}/{{'gray'}}/{{'bg-gray'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp2-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade Gray with image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'yes'}}/{{'gray'}}/{{'bg-gray'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp3-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic Gray with Image</h1>
                </div>
            </div>
            {{-- Light-Green Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'no'}}/{{'light-green'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp1.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp light-green</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'no'}}/{{'light-green'}}/{{'bg-light-green'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp2.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade light-green</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'no'}}/{{'light-green'}}/{{'bg-light-green'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp3.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic light-green</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'yes'}}/{{'light-green'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp1-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp light-green with Image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'yes'}}/{{'light-green'}}/{{'bg-light-green'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp2-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade light-green with image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'yes'}}/{{'light-green'}}/{{'bg-light-green'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp3-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic light-green with Image</h1>
                </div>
            </div>
            {{-- Red Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'no'}}/{{'red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/red/temp1.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp Red</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'no'}}/{{'red'}}/{{'bg-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/red/temp2.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade Red</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'no'}}/{{'red'}}/{{'bg-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/red/temp3.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic Red</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'yes'}}/{{'red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/red/temp1-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp red with Image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'yes'}}/{{'red'}}/{{'bg-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/red/temp2-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade Red with image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'yes'}}/{{'red'}}/{{'bg-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/red/temp3-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic Red with Image</h1>
                </div>
            </div>
            {{-- Light-brown Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'no'}}/{{'light-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-brown/temp1.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp light-brown</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'no'}}/{{'light-yellow'}}/{{'bg-light-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-brown/temp2.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade light-brown</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'no'}}/{{'light-yellow'}}/{{'bg-light-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-brown/temp3.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic light-brown</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'yes'}}/{{'light-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-brown/temp1-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp light-brown with Image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'yes'}}/{{'light-yellow'}}/{{'bg-light-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-brown/temp2-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade light-brown with image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'yes'}}/{{'light-yellow'}}/{{'bg-light-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-brown/temp3-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic light-brown with Image</h1>
                </div>
            </div>
            {{-- light-blue Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'no'}}/{{'light-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-blue/temp1.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp light-blue</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'no'}}/{{'light-blue'}}/{{'bg-light-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-blue/temp2.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade light-blue</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'no'}}/{{'light-blue'}}/{{'bg-light-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-blue/temp3.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic light-blue</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'yes'}}/{{'light-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-blue/temp1-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp light-blue with Image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'yes'}}/{{'light-blue'}}/{{'bg-light-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-blue/temp2-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade light-blue with image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'yes'}}/{{'light-blue'}}/{{'bg-light-blue'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-blue/temp3-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic light-blue with Image</h1>
                </div>
            </div>
            {{-- light-red templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'no'}}/{{'light-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp1.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp light-red</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'no'}}/{{'light-red'}}/{{'bg-light-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp2.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade light-red</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'no'}}/{{'light-red'}}/{{'bg-light-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp3.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic light-red</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'yes'}}/{{'light-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp1-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp light-red with Image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'yes'}}/{{'light-red'}}/{{'bg-light-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp2-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade light-red with image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'yes'}}/{{'light-red'}}/{{'bg-light-red'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp3-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic light-red with Image</h1>
                </div>
            </div>
            {{-- Yellow Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'no'}}/{{'yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp1.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp yellow</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'no'}}/{{'yellow'}}/{{'bg-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp2.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade yellow</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'no'}}/{{'yellow'}}/{{'bg-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp3.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic yellow</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp1/{{'yes'}}/{{'yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp1-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Crisp yellow with Image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp2/{{'yes'}}/{{'yellow'}}/{{'bg-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp2-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cascade yellow with image</h1>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/cvtemp3/{{'yes'}}/{{'yellow'}}/{{'bg-yellow'}}"><img class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp3-img.png')}}"></a>
                    <h1 class="py-4 fs-6">Cubic yellow with Image</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
