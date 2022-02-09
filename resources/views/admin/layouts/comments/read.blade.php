@extends('admin.layouts.master')
@section('title','Yorumlar')
@section('content')
    
<div class="page-heading">
    <h3>Yorumlar</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{$comments->id}} Numaralı Yorum</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Gönderim Tarihi:</label>
                                    <p>
                                        {{$comments->updated_at}}
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Yazı Resim:</label>
                                    <p style="width: 30%">
                                        <img style="width: 80%" src="/assets/images/articles/{{$comments->getArticle->picture}}">
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Yazı:</label>
                                    <p>
                                        {{$comments->getArticle->title}}
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Ad Soyad:</label> 
                                    <p>
                                        {{$comments->name}}
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Yorum:</label>
                                    <p>
                                        {{$comments->comment}}
                                    </p>
                                </div>
                            </div> <br>
                            <div class="col-12 d-flex justify-content-end">
                                <a href="{{route('admin.comments')}}"><button type="submit" class="btn btn-primary me-1 mb-1">Geri</button></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection