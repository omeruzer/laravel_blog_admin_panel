@extends('admin.layouts.master')
@section('title','Logo Ayarları')
@section('content')

<div class="page-heading">
    <h3>Logo ve Favicon Ayarları</h3>
</div>
@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')


<div class="col-md-12 col-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Logo ve Favicon</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.logo.update',$logo->id)}}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <img width="10%" src="/assets/images/logo/{{$logo->favicon}}"><br><br>
                                    <label for="first-name-vertical">Favicon</label>
                                    <input type="file" id="first-name-vertical"
                                        class="form-control" name="favicon"
                                        placeholder="Favicon">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <br><br>
                                    <img width="10%" src="/assets/images/logo/{{$logo->logo}}"><br><br>
                                    <label for="first-name-vertical">Logo</label>
                                    <input type="file" id="first-name-vertical"
                                        class="form-control" name="logo"
                                        placeholder="Logo">
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection