@extends("template.layout")

@section("content")

<style>

    .row {
        margin-top: 10px;
    }

</style>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Contacto</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div>
</div>

<div class="container-fluid">
    <form method="POST" action="{{ route('enviar') }}">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="txtNombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="txtNombres" name="txtNombres" value="{{ old('txtNombres') }}" aria-describedby="errNombres">
                <div id="errNombres" class="form-text text-danger">{{ $errors->first('txtNombres') }}</div>
            </div>
            <div class="col-6">
                <label for="txtApellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="txtApellidos" name="txtApellidos" value="{{ old('txtApellidos') }}" aria-describedby="errApellidos">
                <div id="errApellidos" class="form-text text-danger">{{ $errors->first('txtApellidos') }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="txtDireccion" class="form-label">Direcci&oacute;n</label>
                <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" value="{{ old('txtDireccion') }}" aria-describedby="errDireccion">
                <div id="errDireccion" class="form-text text-danger">{{ $errors->first('txtDireccion') }}</div>
            </div>
            <div class="col-2">
                <label for="txtTelefono" class="form-label">Tel&eacute;fono</label>
                <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" value="{{ old('txtTelefono') }}" aria-describedby="errTelefono">
                <div id="errTelefono" class="form-text text-danger">{{ $errors->first('txtTelefono') }}</div>
            </div>
            <div class="col-4">
                <label for="txtEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="txtEmail" name="txtEmail" value="{{ old('txtEmail') }}" aria-describedby="errEmail">
                <div id="errEmail" class="form-text text-danger">{{ $errors->first('txtEmail') }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="txtAsunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="txtAsunto" name="txtAsunto" value="{{ old('txtAsunto') }}" aria-describedby="errAsunto">
                <div id="errAsunto" class="form-text text-danger">{{ $errors->first('txtAsunto') }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="txtMensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="txtMensaje" name="txtMensaje" value="{{ old('txtMensaje') }}" rows="5"></textarea>
                <div id="errMensaje" class="form-text text-danger">{{ $errors->first('txtMensaje') }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button type="reset" class="btn btn-primary" style="float:right; margin-left: 5px;">Cancelar</button>
                <button type="submit" class="btn btn-primary" style="float:right; margin-left: 5px;">Enviar</button>
            </div>
        </div>
    </form>
</div>

@endsection
