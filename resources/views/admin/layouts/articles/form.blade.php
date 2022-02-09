@extends('admin.layouts.master')
@section('title','Yazı Düzenle')
@section('content')
    
<div class="page-heading">
    <h3>Yazı Düzenle</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Yazı Düzenleme</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.save.articles',$articles->id)}}" enctype="multipart/form-data" method="POST" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <img style="width: 10%" src="/assets/images/articles/{{$articles->picture}}" alt="">
                                    <br>
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
                                        placeholder="Yazı Başlık" autocomplete="off" value="{{$articles->title}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Kategori</label>
                                    <select name="category" class="form-control">
                                        @foreach ($categories as $category)
                                            <option {{($articles->category==$category->id) ? 'selected' : '' }} value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Yazar</label>
                                    <select name="author" class="form-control">
                                        @foreach ($authors as $author)
                                            <option {{($articles->author==$author->id) ? 'selected' : '' }} value="{{$author->id}}">{{$author->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Anahtar Kelimeler</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="keywords"
                                        placeholder="Anahtar Kelimeler (Kelimeler arasına virgül ',' koyarak yazınız)" autocomplete="off" value="{{$articles->keywords}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Açıklama</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="desc"
                                        placeholder="Açıklama" autocomplete="off" value="{{$articles->desc}}" >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card-body">
                                    <label>İçerik</label>
                                    <textarea class="ckeditor" name="content" id="ckeditor1">{{$articles->content}}</textarea>
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