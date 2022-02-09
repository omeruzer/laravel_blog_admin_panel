@extends('admin.layouts.master')
@section('title','İletişim Ayarları')
@section('content')

<div class="page-heading">
    <h3>İletişim Ayarları</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-12 col-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">İletişim Ayarları</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.contacts.update',$contacts->id)}}" method="POST" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical">Telefon</label>
                                    <input type="text" id="first-name-vertical"
                                        class="form-control" name="phone" autocomplete="off"
                                        placeholder="Telefon" value="{{$contacts->phone}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">E-mail</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="email" autocomplete="off"
                                        placeholder="E-mail" value="{{$contacts->email}}" >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical">Adres</label>
                                    <input type="text" id="contact-info-vertical"
                                        class="form-control" name="address" autocomplete="off"
                                        placeholder="Adres" value="{{$contacts->address}}">
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