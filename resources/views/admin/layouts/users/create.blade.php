@extends('admin.layouts.master')
@section('title','Kullanıcı Ekle')
@section('content')
    
<div class="page-heading">
    <h3>Kullanıcılar</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Kullanıcı Ekleme</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.create.users')}}" method="POST" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Ad Soyad</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="name" autocomplete="off"
                                        placeholder="Ad Soyad" value="{{old('name')}}" >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password-vertical">E-mail</label>
                                    <input type="text" id="password-vertical"
                                        class="form-control" name="email" autocomplete="off"
                                        placeholder="E-mail" value="{{old('email')}}">
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password-vertical">Şifre</label>
                                    <input type="password" id="password-vertical"
                                        class="form-control" name="password" autocomplete="off"
                                        placeholder="Şifre" >
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password-vertical">Şifre (Tekrar)</label>
                                    <input type="password" id="password-vertical" autocomplete="off"
                                        class="form-control" name="password_confirmation"
                                        placeholder="Şifre" >
                                </div>
                            </div> 
                            <div class="col-12">
                                <div class="form-check form-switch">
                                    <br>
                                    <input name="manager" class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Yönetici Yetkisi</label>
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