@extends('layouts.post')

@section('content')
    <section class="container bg-white border my-2">
        <div class="text-primary fs-3 fw-light pb-5">
            Update body of Cover Letter
        </div>

        <form action="{{ route('clBodyUpdate',[$templatePath, $userData->id]) }}" method="POST">
            @csrf
            <div class="mb-5">
                <div class="">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label" for="body">Cover Letter body <span class="text-danger fw-bold">*</span></label>
                                {{-- <div class="input-group"> --}}
                                    <textarea class="form-control mb-3" name="body" aria-label="With textarea" id="body" rows="6">{{ $userData->body }}</textarea>
                                {{-- </div> --}}
                                @error('body')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mb-3 justify-content-end">
                <input type="submit" class="btn primary-btn" value="Save">
            </div>
        </form>
    </section>
@endsection

