@extends('admin.layouts.master')
@section('title','Yazar Düzenle')
@section('content')
    
<div class="page-heading">
    <h3>Yazarlar</h3>
</div>

@include('admin.layouts.partials.error')
@include('admin.layouts.partials.alert')

<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Yazar Düzenleme</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form action="{{route('admin.save.authors',$authors->id)}}" method="POST" class="form form-vertical">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical">Ad Soyad</label>
                                    <input type="text" id="email-id-vertical"
                                        class="form-control" name="name"
                                        placeholder="Ad Soyad" autocomplete="off" value="{{$authors->name}}" >
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