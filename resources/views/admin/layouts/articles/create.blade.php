@extends('admin.layouts.master')
@section('title','Yazı Ekle')
@section('content')
    
<div class="page-heading">
    <h3>Yazı Ekle</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 style="text-align: center" class="card-title">Yazı Ekleme</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.created.articles')}}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Yazı Resmi</label>
                                    <input type="file" id="email-id-vertical"
                                        class="form-control" name="picture"
                                        placeholder="Yazı Resim" >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Yazı Başlık</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="title"
                                        placeholder="Yazı Başlık" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Kategori</label>
                                    <select name="category" class="form-control">
                                        <option>Kategori Seçiniz</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Yazar</label>
                                    <select name="author" class="form-control">
                                        <option>Yazar Seçiniz</option>
                                        @foreach ($authors as $author)
                                            <option value="{{$author->id}}">{{$author->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Anahtar Kelimeler</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="keywords"
                                        placeholder="Anahtar Kelimeler (Kelimeler arasına virgül ',' koyarak yazınız)" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Açıklama</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="desc"
                                        placeholder="Açıklama" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-body">
                                    <label>İçerik</label>
                                    <textarea class="ckeditor" name="content" id="ckeditor1"></textarea>
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
