@extends('admin.layouts.master')
@section('title','Kategoriler')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Kategoriler</h3>
                <p class="text-subtitle text-muted">Kategorileri Yönetebilirsiniz</p>
            </div>
        </div>
        @include('admin.layouts.partials.error')
        @include('admin.layouts.partials.alert')

    </div>
    <section class="section">

        <div class="card">
            <div style="text-align: right" class="card-header">
                <a href="{{route('admin.create.categories') }}"><button class="btn btn-success">Kategori Ekle</button></a>
            </div>
            <div class="card-header">
                Kategori Listesi
            </div>

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>Açıklama</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td>{{$category->content}}</td>
                                <td>
                                    <a href="{{route('admin.edit.categories',$category->id)}}"><button class="btn btn-info"><i class="fa fa-edit" ></i></button></a>
                                    <a href="{{route('admin.delete.categories',$category->id)}}"><button onclick="return confirm('Emin Misiniz?')" class="btn btn-danger"><i class="fa fa-trash" ></i></button></a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection

@section('footer')
<script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>

<script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="/assets/js/main.js"></script>
@endsection

@section('head')
<link rel="stylesheet" href="/assets/vendors/simple-datatables/style.css">

@endsection