@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="row">
    <!-- [ file-upload ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>File Upload</h5>
            </div>
            <div class="card-body">
                <form action="{{route('uploadFiles')}}" class="dropzone">
                    @csrf
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- [ file-upload ] end -->
</div>
@endsection

@push('scripts')
<script src="{{asset('assets/plugins/fileupload/js/dropzone-amd-module.min.js')}}"></script>
@endpush
