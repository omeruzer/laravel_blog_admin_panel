@extends('admin.layouts.master')
@section('title','Yazar Ekle')
@section('content')
    
<div class="page-heading">
    <h3>Yazarlar</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Yazar Ekleme</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.create.authors')}}" method="POST" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Ad Soyad</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="name"
                                        placeholder="Ad Soyad" autocomplete="off">
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