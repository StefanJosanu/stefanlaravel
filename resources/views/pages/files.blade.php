@extends('layouts.app')
@section('content')
@section('title')
    Files
@endsection
<div class="container">
    <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <ul class="mb-0 p-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-12 py-5">
            <div class="card my-5">
                <div class="card-header">
                   <h3>Laravel File Uploader</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('files.store')  }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="mb-3">
                            <label for="formFileLg" class="form-label">File input example</label>
                            <input name="file" class="form-control form-control-lg" id="formFileLg"
                                   type="file">
                        </div>
                        <div class="mb-3">
                            <button type="submit" value="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
