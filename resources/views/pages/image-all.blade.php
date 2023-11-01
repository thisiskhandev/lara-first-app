@extends('layout.masterlayout')

@section('pageTitle', 'Images')

@section('content')
<h1>Images</h1>

<section>
    <form action="{{route('imagestore')}}" method="POST" id="uploadFiles" class="my-4" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image[]" id="uploadFileField" multiple>
            {{-- <label class="input-group-text" for="uploadFileField">Upload</label> --}}
            <button type="submit" class="btn btn-outline-success">Upload</button>
        </div>
    </form>
</section>

@endsection
