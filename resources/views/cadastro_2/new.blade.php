@extends('layouts.main')

@section('title', 'Cadastro[2] - Novo')

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
        <form action="{{route('cad2RegNew')}}" method="POST">
            @csrf
            <div class="row form-group col-12">
                <label>Nome do responsável</label>
                <select name="cadastro_id" class="mb-3 form-control">
                    @foreach ($items as $item)
                        <option value="{{$item->id}}" @if (old('cadastro_id') == $item->id) {{ 'selected' }} @endif>{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            @if ($errors->has('cadastro_id'))
            <p>
                <div class="alert alert-danger">
                    {{ $errors->first('cadastro_id') }}
                </div>
            </p>
            @endif

            <div class="row form-group">
                <div class="form-group col-md-6">
                    <label for="parent1">Parente [1]</label>
                    <input type="text" class="form-control" id="parent1" name="parent1" placeholder="Parente [1]" value="{{old('parent1')}}">
                </div>
                @if ($errors->has('parent1'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('parent1') }}
                    </div>
                </p>
                @endif
                <div class="form-group col-md-6">
                    <label>Grau de parentesco</label>
                    <select name="part_parent1" class="mb-3 form-control">
                        <option value="" ></option>
                        <option value="Pai" @if (old('part_parent1') == "Pai") {{ 'selected' }} @endif>Pai</option>
                        <option value="Mãe" @if (old('part_parent1') == "Mãe") {{ 'selected' }} @endif>Mãe</option>
                        <option value="Irmão" @if (old('part_parent1') == "Irmão") {{ 'selected' }} @endif>Irmão</option>
                        <option value="Filho" @if (old('part_parent1') == "Filho") {{ 'selected' }} @endif>Filho</option>
                        <option value="Primo" @if (old('part_parent1') == "Primo") {{ 'selected' }} @endif>Primo</option>
                        <option value="Tio" @if (old('part_parent1') == "Tio") {{ 'selected' }} @endif>Tio</option>
                    </select>
                </div>
                @if ($errors->has('part_parent1'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('part_parent1') }}
                    </div>
                </p>
                @endif
            </div>

            <div class="row form-group">
                <div class="form-group col-md-6">
                    <label for="parent2">Parente [2]</label>
                    <input type="text" class="form-control" id="parent2" name="parent2" placeholder="Parente [2]" value="{{old('parent2')}}">
                </div>
                @if ($errors->has('parent2'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('parent2') }}
                    </div>
                </p>
                @endif
                <div class="form-group col-md-6">
                    <label>Grau de parentesco</label>
                    <select name="part_parent2" class="mb-3 form-control">
                        <option value="" ></option>
                        <option value="Pai" @if (old('part_parent2') == "Pai") {{ 'selected' }} @endif>Pai</option>
                        <option value="Mãe" @if (old('part_parent2') == "Mãe") {{ 'selected' }} @endif>Mãe</option>
                        <option value="Irmão" @if (old('part_parent2') == "Irmão") {{ 'selected' }} @endif>Irmão</option>
                        <option value="Filho" @if (old('part_parent2') == "Filho") {{ 'selected' }} @endif>Filho</option>
                        <option value="Primo" @if (old('part_parent2') == "Primo") {{ 'selected' }} @endif>Primo</option>
                        <option value="Tio" @if (old('part_parent2') == "Tio") {{ 'selected' }} @endif>Tio</option>
                    </select>
                </div>
                @if ($errors->has('part_parent2'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('part_parent2') }}
                    </div>
                </p>
                @endif
            </div>

            <div class="row form-group">
                <div class="form-group col-md-6">
                    <label for="parent3">Parente [3]</label>
                    <input type="text" class="form-control" id="parent3" name="parent3" placeholder="Parente [3]" value="{{old('parent3')}}">
                </div>
                @if ($errors->has('parent3'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('parent3') }}
                    </div>
                </p>
                @endif
                <div class="form-group col-md-6">
                    <label>Grau de parentesco</label>
                    <select name="part_parent3" class="mb-3 form-control">
                        <option value="" ></option>
                        <option value="Pai" @if (old('part_parent3') == "Pai") {{ 'selected' }} @endif>Pai</option>
                        <option value="Mãe" @if (old('part_parent3') == "Mãe") {{ 'selected' }} @endif>Mãe</option>
                        <option value="Irmão" @if (old('part_parent3') == "Irmão") {{ 'selected' }} @endif>Irmão</option>
                        <option value="Filho" @if (old('part_parent3') == "Filho") {{ 'selected' }} @endif>Filho</option>
                        <option value="Primo" @if (old('part_parent3') == "Primo") {{ 'selected' }} @endif>Primo</option>
                        <option value="Tio" @if (old('part_parent3') == "Tio") {{ 'selected' }} @endif>Tio</option>
                    </select>
                </div>
                @if ($errors->has('part_parent3'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('part_parent3') }}
                    </div>
                </p>
                @endif
            </div>

            <div class="row form-group">
                <div class="form-group col-md-6">
                    <label for="parent4">Parente [4]</label>
                    <input type="text" class="form-control" id="parent4" name="parent4" placeholder="Parente [4]" value="{{old('parent4')}}">
                </div>
                @if ($errors->has('parent4'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('parent4') }}
                    </div>
                </p>
                @endif
                <div class="form-group col-md-6">
                    <label>Grau de parentesco</label>
                    <select name="part_parent4" class="mb-3 form-control">
                        <option value="" ></option>
                        <option value="Pai" @if (old('part_parent4') == "Pai") {{ 'selected' }} @endif>Pai</option>
                        <option value="Mãe" @if (old('part_parent4') == "Mãe") {{ 'selected' }} @endif>Mãe</option>
                        <option value="Irmão" @if (old('part_parent4') == "Irmão") {{ 'selected' }} @endif>Irmão</option>
                        <option value="Filho" @if (old('part_parent4') == "Filho") {{ 'selected' }} @endif>Filho</option>
                        <option value="Primo" @if (old('part_parent4') == "Primo") {{ 'selected' }} @endif>Primo</option>
                        <option value="Tio" @if (old('part_parent4') == "Tio") {{ 'selected' }} @endif>Tio</option>
                    </select>
                </div>
                @if ($errors->has('part_parent4'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('part_parent4') }}
                    </div>
                </p>
                @endif
            </div>

            <div class="row form-group">
                <div class="form-group col-md-6">
                    <label for="parent5">Parente [5]</label>
                    <input type="text" class="form-control" id="parent5" name="parent5" placeholder="Parente [5]" value="{{old('parent5')}}">
                </div>
                @if ($errors->has('parent5'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('parent5') }}
                    </div>
                </p>
                @endif
                <div class="form-group col-md-6">
                    <label>Grau de parentesco</label>
                    <select name="part_parent5" class="mb-3 form-control">
                        <option value="" ></option>
                        <option value="Pai" @if (old('part_parent5') == "Pai") {{ 'selected' }} @endif>Pai</option>
                        <option value="Mãe" @if (old('part_parent5') == "Mãe") {{ 'selected' }} @endif>Mãe</option>
                        <option value="Irmão" @if (old('part_parent5') == "Irmão") {{ 'selected' }} @endif>Irmão</option>
                        <option value="Filho" @if (old('part_parent5') == "Filho") {{ 'selected' }} @endif>Filho</option>
                        <option value="Primo" @if (old('part_parent5') == "Primo") {{ 'selected' }} @endif>Primo</option>
                        <option value="Tio" @if (old('part_parent5') == "Tio") {{ 'selected' }} @endif>Tio</option>
                    </select>
                </div>
                @if ($errors->has('part_parent5'))
                <p>
                    <div class="alert alert-danger">
                        {{ $errors->first('part_parent5') }}
                    </div>
                </p>
                @endif
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
