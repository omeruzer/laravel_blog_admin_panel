@extends('admin.layouts.master')
@section('title','Genel Ayarlar')
@section('content')

<div class="page-heading">
    <h3>Genel Ayarlar</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-12 col-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Genel Ayarlar</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.settings.update',$settings->id)}}" method="POST" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Title</label>
                                    <input type="text" id="first-name-vertical"
                                        class="form-control" name="title" autocomplete="off"
                                        placeholder="Title" value="{{$settings->title}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Açıklama</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="desc" autocomplete="off"
                                        placeholder="Açıklama" value="{{$settings->desc}}" >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical">Anahtar Kelimeler</label>
                                    <input type="text" id="contact-info-vertical"
                                        class="form-control" name="keywords" autocomplete="off"
                                        placeholder="Anahtar Kelimeler (Arasına virgül ',' koyarak yazın)" value="{{$settings->keywords}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password-vertical">Yazar</label>
                                    <input type="text" id="password-vertical"
                                        class="form-control" name="author" autocomplete="off"
                                        placeholder="Yazar" value="{{$settings->author}}">
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