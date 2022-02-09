@extends('admin.layouts.master')
@section('title','Sosyal Medya Ayarları')
@section('content')

<div class="page-heading">
    <h3>Sosyal Medya Ayarları</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Sosyal Medya Hesap Bağlantıları</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.socialmedia.update',$socialmedia->id)}}" method="POST" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Facebook</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="facebook" autocomplete="off"
                                        placeholder="Facebook URL" value="{{$socialmedia->facebook}}" >
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical">Twitter</label>
                                    <input type="text" id="contact-info-vertical"
                                        class="form-control" name="twitter" autocomplete="off"
                                        placeholder="Twitter URL" value="{{$socialmedia->twitter}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password-vertical">Instagram</label>
                                    <input type="text" id="password-vertical"
                                        class="form-control" name="instagram" autocomplete="off"
                                        placeholder="Instagram URL" value="{{$socialmedia->instagram}}">
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