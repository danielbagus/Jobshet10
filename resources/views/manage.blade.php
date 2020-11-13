@extends('layouts.Master')
@section('title','add')

@section('content')

<div class="col-lg-8">
    <div class="card">
        <div class="card-header text-center">
            <h3>Daftar Artikel</h3>
        </div>
        </br>
        </br>
        <form action="/create" method="post">
        <a href="/article/cetak_pdf" class="btn btn-primary"
            target="_blank">CETAK PDF</a>

                @csrf
                    <div class="form-group"><br><br>
                        <label for="title">Title</label>
                        <input type="text" class="form-control"required="required" name="title" placeholder="Add Title Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="image">Image Url</label>
                        <input type="text" class="form-control"required="required" name="image" placeholder="Link Image Here"></br>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" class="form-control"required="required" name="content" placeholder="Add Content Here"></br>
                    </div>
                    <button type="submit" class="btn btn-primary float-center2" class="btn btn-primary btn-radiuszan"><i class="fa fa-plus-circle" aria-hidden="true" ></i>  Add Product</button><br><br>
                </form>
</div>
</div>
@endsection