@extends('layouts.main')

@section('title', 'Cadastro[1] - Novo')

@section('content')
<div class="card shadow-none">
    <div class="card-body shadow border-0">
        <form>
            <div class="form-group">
                <label>Customer</label>
                <select class="mb-3 form-control">
                    <option>Default select</option>
                </select>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="mb-3 form-control">
                    <option>Default select</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Subject</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea id="tinymce-editor">
                      <p>hello..</p>
                </textarea>
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">


    $(window).on('load', function() {
        tinymce.init({
            selector: '#tinymce-editor',
            height: 200,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
            ],
            toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
            image_advtab: true
        });
    });
</script>
@endpush