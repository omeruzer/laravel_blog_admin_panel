@extends('admin.layouts.master')
@section('title','Yazarlar')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-6 col-md-6 order-md-1 order-last">
                <h3>Yazarlar</h3>
                <p class="text-subtitle text-muted">Yazarları Yönetebilirsiniz</p>
            </div>
        </div>
        @include('admin.layouts.partials.alert')

    </div>
    <section class="section">

        <div class="card">
            <div style="text-align: right" class="card-header">
                <a href="{{route('admin.create.authors') }}"><button class="btn btn-success">Yazar Ekle</button></a>
            </div>
            <div class="card-header">
                Yazar Listesi
            </div>

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ad Soyad</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $author)
                            <tr>
                                <td>{{$author->id}}</td>
                                <td>{{$author->name}}</td>
                                <td>
                                    <a href="{{route('admin.edit.authors',$author->id)}}"><button class="btn btn-info"><i class="fa fa-edit" ></i></button></a>
                                    <a href="{{route('admin.delete.authors',$author->id)}}"><button onclick="return confirm('Emin Misiniz?')" class="btn btn-danger"><i class="fa fa-trash" ></i></button></a>

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