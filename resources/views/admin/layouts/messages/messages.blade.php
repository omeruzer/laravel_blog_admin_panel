@extends('admin.layouts.master')
@section('title','Mesajlar')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Mesajlar</h3>
                <p class="text-subtitle text-muted">Mesajları Yönetebilirsiniz</p>
            </div>
        </div>
        @include('admin.layouts.partials.error')
        @include('admin.layouts.partials.alert')

    </div>
    <section class="section">

        <div class="card">

            <div class="card-header">
                Mesaj Listesi
            </div>

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ad Soyad</th>
                            <th>E-mail</th>
                            <th>Subject</th>
                            <th>Gönderim Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td> 
                                    <div style="{{$message->read == 0 ? 'color:blue' : '' }}" class="id">

                                        <b>{{($message->read == 0) ? $message->id : $message->id }}</b>

                                    </div>
                                </td> 
                                <td>{{$message->name}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->subject}}</td>
                                <td>{{$message->updated_at}}</td>
                                <td>
                                    <a href="{{route('admin.read.messages',$message->id)}}"><button class="btn btn-info"><i class="fa fa-book-open" ></i></button></a>
                                    <a href="{{route('admin.delete.messages',$message->id)}}"><button onclick="return confirm('Emin Misiniz?')" class="btn btn-danger"><i class="fa fa-trash" ></i></button></a>

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