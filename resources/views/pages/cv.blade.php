@extends('layouts.post')

@section('content')
    <section class="container py-5">
        <div>
            <div>
                <h1 class="text-center">Select a Template for Your CV</h1>
            </div>
            <div class="row pt-3 text-center justify-content-center">
                <div class="col-md-6">Choose a CV template, fill it out, and download in seconds. Create a professional
                    curriculum vitae in a few clicks. Just pick one of 40+ CV templates below, add ready-to-use suggestions,
                    and get the job.</div>
            </div>
        </div>
        {{-- Blue templates --}}
        <div class="pt-5">
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'no' }}/{{ 'blue' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp1.png') }}"></a>
                    <p class="py-4">Crisp Blue</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'no' }}/{{ 'blue' }}/{{ 'bg-blue' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp2.png') }}"></a>
                    <p class="py-4">Cascade Blue</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'blue' }}/{{ 'bg-blue' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp3.png') }}"></a>
                    <p class="py-4">Cubic Blue</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'yes' }}/{{ 'blue' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp1-img.png') }}"></a>
                    <p class="py-4">Crisp Blue-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'blue' }}/{{ 'bg-blue' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp2-img.png') }}"></a>
                    <p class="py-4">Cascade Blue-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'blue' }}/{{ 'bg-blue' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/blue/temp3-img.png') }}"></a>
                    <p class="py-4">Cubic Blue-Image</p>
                </div>
            </div>
            {{-- Gray Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'no' }}/{{ 'gray' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp1.png') }}"></a>
                    <p class="py-4">Crisp Gray</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'gray' }}/{{ 'bg-gray' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp2.png') }}"></a>
                    <p class="py-4">Cascade Gray</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'gray' }}/{{ 'bg-gray' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp3.png') }}"></a>
                    <p class="py-4">Cubic Gray</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'yes' }}/{{ 'gray' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp1-img.png') }}"></a>
                    <p class="py-4">Crisp Gray-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'gray' }}/{{ 'bg-gray' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp2-img.png') }}"></a>
                    <p class="py-4">Cascade Gray-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'gray' }}/{{ 'bg-gray' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/gray/temp3-img.png') }}"></a>
                    <p class="py-4">Cubic Gray-Image</p>
                </div>
            </div>
            {{-- Light-Green Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'no' }}/{{ 'light-green' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp1.png') }}"></a>
                    <p class="py-4">Crisp light-green</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'light-green' }}/{{ 'bg-light-green' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp2.png') }}"></a>
                    <p class="py-4">Cascade light-green</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'light-green' }}/{{ 'bg-light-green' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp3.png') }}"></a>
                    <p class="py-4">Cubic light-green</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'yes' }}/{{ 'light-green' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp1-img.png') }}"></a>
                    <p class="py-4">Crisp light-green-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'light-green' }}/{{ 'bg-light-green' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp2-img.png') }}"></a>
                    <p class="py-4">Cascade light-green-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'light-green' }}/{{ 'bg-light-green' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-green/temp3-img.png') }}"></a>
                    <p class="py-4">Cubic light-green-Image</p>
                </div>
            </div>
            {{-- Red Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'no' }}/{{ 'red' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/red/temp1.png') }}"></a>
                    <p class="py-4">Crisp Red</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'red' }}/{{ 'bg-red' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/red/temp2.png') }}"></a>
                    <p class="py-4">Cascade Red</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'red' }}/{{ 'bg-red' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/red/temp3.png') }}"></a>
                    <p class="py-4">Cubic Red</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'yes' }}/{{ 'red' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/red/temp1-img.png') }}"></a>
                    <p class="py-4">Crisp red-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'red' }}/{{ 'bg-red' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/red/temp2-img.png') }}"></a>
                    <p class="py-4">Cascade Red-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'red' }}/{{ 'bg-red' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/red/temp3-img.png') }}"></a>
                    <p class="py-4">Cubic Red-Image</p>
                </div>
            </div>
            {{-- Light-brown Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'no' }}/{{ 'light-yellow' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-brown/temp1.png') }}"></a>
                    <p class="py-4">Crisp light-brown</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'light-yellow' }}/{{ 'bg-light-yellow' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-brown/temp2.png') }}"></a>
                    <p class="py-4">Cascade light-brown</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'light-yellow' }}/{{ 'bg-light-yellow' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-brown/temp3.png') }}"></a>
                    <p class="py-4">Cubic light-brown</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'yes' }}/{{ 'light-yellow' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border"
                            src="{{ url('images/cvPageImages/light-brown/temp1-img.png') }}"></a>
                    <p class="py-4">Crisp light-brown-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'light-yellow' }}/{{ 'bg-light-yellow' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border"
                            src="{{ url('images/cvPageImages/light-brown/temp2-img.png') }}"></a>
                    <p class="py-4">Cascade light-brown-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'light-yellow' }}/{{ 'bglight-yellow' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border"
                            src="{{ url('images/cvPageImages/light-brown/temp3-img.png') }}"></a>
                    <p class="py-4">Cubic light-brown-Image</p>
                </div>
            </div>
            {{-- light-blue Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'no' }}/{{ 'light-blue' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-blue/temp1.png') }}"></a>
                    <p class="py-4">Crisp light-blue</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'light-blue' }}/{{ 'bg-light-blue' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-blue/temp2.png') }}"></a>
                    <p class="py-4">Cascade light-blue</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'light-blue' }}/{{ 'bg-light-blue' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-blue/temp3.png') }}"></a>
                    <p class="py-4">Cubic light-blue</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'yes' }}/{{ 'light-blue' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border"
                            src="{{ url('images/cvPageImages/light-blue/temp1-img.png') }}"></a>
                    <p class="py-4">Crisp light-blue-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'light-blue' }}/{{ 'bg-light-blue' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border"
                            src="{{ url('images/cvPageImages/light-blue/temp2-img.png') }}"></a>
                    <p class="py-4">Cascade light-blue-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'light-blue' }}/{{ 'bg-light-blue' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border"
                            src="{{ url('images/cvPageImages/light-blue/temp3-img.png') }}"></a>
                    <p class="py-4">Cubic light-blue-Image</p>
                </div>
            </div>
            {{-- light-red templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'no' }}/{{ 'light-red' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp1.png') }}"></a>
                    <p class="py-4">Crisp light-red</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'light-red' }}/{{ 'bg-light-red' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp2.png') }}"></a>
                    <p class="py-4">Cascade light-red</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'light-red' }}/{{ 'bg-light-red' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp3.png') }}"></a>
                    <p class="py-4">Cubic light-red</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'yes' }}/{{ 'light-red' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp1-img.png') }}"></a>
                    <p class="py-4">Crisp light-red-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'light-red' }}/{{ 'bg-light-red' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp2-img.png') }}"></a>
                    <p class="py-4">Cascade light-red-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'light-red' }}/{{ 'bg-light-red' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/light-red/temp3-img.png') }}"></a>
                    <p class="py-4">Cubic light-red-Image</p>
                </div>
            </div>
            {{-- Yellow Templates --}}
            <div class="row row-cols-lg-3">
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'no' }}/{{ 'yellow' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp1.png') }}"></a>
                    <p class="py-4">Crisp yellow</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'yellow' }}/{{ 'bg-yellow' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp2.png') }}"></a>
                    <p class="py-4">Cascade yellow</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'no' }}/{{ 'yellow' }}/{{ 'bg-yellow' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp3.png') }}"></a>
                    <p class="py-4">Cubic yellow</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a href="/option-page/{{ 'yes' }}/{{ 'yellow' }}/{{ 'cvtemp1' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp1-img.png') }}"></a>
                    <p class="py-4">Crisp yellow-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'yellow' }}/{{ 'bg-yellow' }}/{{ 'cvtemp2' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp2-img.png') }}"></a>
                    <p class="py-4">Cascade yellow-Image</p>
                </div>
                <div class="col-md-6 px-3 pt-2 pb-4">
                    <a
                        href="/option-page/{{ 'yes' }}/{{ 'yellow' }}/{{ 'bg-yellow' }}/{{ 'cvtemp3' }}"><img
                            class="img-fluid border" src="{{ url('images/cvPageImages/yellow/temp3-img.png') }}"></a>
                    <p class="py-4">Cubic yellow-Image</p>
                </div>
            </div>
        </div>
    </section>
@endsection
