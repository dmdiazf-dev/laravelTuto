@extends("template.layout")

@section("content")

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Upload Controller</h1>
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

    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-primary" style="color: #fff; font-weight: bolder;">
                        Upload File
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <select class="form-select" id="selectOne" name="selectOne" aria-label="Default select example" aria-describedby="emailHelp">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <select class="form-select" id="selectTwo" name="selectTwo" aria-label="Default select example" aria-describedby="emailHelp">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control" type="file" id="formFile" name="formFile">
                            </div>
                            <button type="reset" class="btn btn-primary" style="float: right; margin: 0 0 0 5px;">Cancel</button>
                            <button type="submit" class="btn btn-primary" style="float: right; margin: 0 0 0 5px;">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6 text-center mb-6">
                <img src="{{ asset('img/ajax-loader.gif') }}" alt="loading">
            </div>
        </div>
    </div>

@endsection
