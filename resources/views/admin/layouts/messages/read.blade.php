@extends('admin.layouts.master')
@section('title','Mesajlar')
@section('content')
    
<div class="page-heading">
    <h3>Mesajlar</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{$messages->id}} Numaralı Mesaj</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Gönderim Tarihi:</label>
                                    <p>
                                        {{$messages->updated_at}}
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Ad Soyad:</label>
                                    <p>
                                        {{$messages->name}}
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">E-mail:</label>
                                    <p>
                                        {{$messages->email}}
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Konu:</label>
                                    <p>
                                        {{$messages->subject}}
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Mesaj:</label>
                                    <p>
                                        {{$messages->content}}
                                    </p>
                                </div>
                            </div> 
                            <div class="col-12 d-flex justify-content-end">
                                <a href="{{route('admin.messages')}}"><button type="submit" class="btn btn-primary me-1 mb-1">Geri</button></a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection