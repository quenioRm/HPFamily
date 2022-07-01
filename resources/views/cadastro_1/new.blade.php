@extends('layouts.main')

@section('title', 'Cadastro[1] - Novo')

@section('content')
<div class="card-body">
    <div class="row align-items-center">
        <div class="col-md-12">
            <h3 class="d-inline-block mb-0">Novo Registro</h3>
        </div>
    </div>
</div>
<div class="card shadow-none">
    <div class="card-body shadow border-0">
        <form action="{{route('cad1RegNew')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label>Status do pagamento</label>
                <select name="status_payment" class="mb-3 form-control">
                    <option value="1">Não Pago</option>
                    <option value="0">Pago</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fantasy">Fantasia</label>
                <input type="text" class="form-control" id="fantasy" name="fantasy" placeholder="Fantasia">
            </div>
            <div class="form-group">
                <label for="observations">Observações</label>
                <input type="text" class="form-control" id="observations" name="observations" placeholder="Observações">
            </div>
            <div class="form-group">
                <div class="file btn btn-outline-primary mt-3 file-btn">
                    <i class="feather icon-paperclip"></i>Add Atachment
                    <input type="file" name="files[]" multiple/>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
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
