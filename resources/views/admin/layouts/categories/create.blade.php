@extends('admin.layouts.master')
@section('title','Kategori Ekle')
@section('content')
    
<div class="page-heading">
    <h3>Kategoriler</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Kategori Ekleme</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.created.categories')}}" method="POST" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Kategori Adı</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="title" autocomplete="off"
                                        placeholder="Kategori Adı" >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Kategori Açıklama</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="content" autocomplete="off"
                                        placeholder="Kategori Açıklama" >
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success me-1 mb-1">Ekle</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection