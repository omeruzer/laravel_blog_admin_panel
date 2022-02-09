@extends('admin.layouts.master')
@section('title','Yorumlar')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Yorumlar</h3>
                <p class="text-subtitle text-muted">Yorumları Yönetebilirsiniz</p>
            </div>
        </div>
        @include('admin.layouts.partials.error')
        @include('admin.layouts.partials.alert')

    </div>
    <section class="section">

        <div class="card">

            <div class="card-header">
                Yorumlar Listesi
            </div>

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Yazı Resim</th>
                            <th>Yazı</th>
                            <th>Ad Soyad</th>
                            <th>Yorum</th>
                            <th>Gönderim Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)
                            <tr>
                                <td>{{$comment->id}}</td> 
                                <td style="width: 10%"> 
                                    <img style="width: 80%" src="/assets/images/articles/{{$comment->getArticle->picture}}">
                                </td>
                                <td><b>{{$comment->getArticle->title}}</b></td>
                                <td>{{$comment->name}}</td>
                                <td>{{substr($comment->comment,0,20)}}...</td>
                                <td>{{$comment->updated_at}}</td>
                                <td>
                                    <a href="{{route('admin.read.comments',$comment->id)}}"><button class="btn btn-info"><i class="fa fa-book-open" ></i></button></a>
                                    <a href="{{route('admin.delete.comments',$comment->id)}}"><button onclick="return confirm('Emin Misiniz?')" class="btn btn-danger"><i class="fa fa-trash" ></i></button></a>

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