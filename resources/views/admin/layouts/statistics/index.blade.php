@extends('admin.layouts.master')
@section('title','İstatistikler')
@section('content')
    
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>İstatistikler</h3>
                <p class="text-subtitle text-muted">Web Sitesinin İstatistikleri</p>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">En Çok Okunan Yazılar</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="bestpost"></canvas>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</div>
@endsection

@section('footer')
<script src="/assets/vendors/chartjs/Chart.min.js"></script>
<script src="/assets/js/pages/ui-chartjs.js"></script>
@php
    $labels = "";
    $data = "";
    foreach ($bestpost as $post) {
        $labels .= "\"$post->title\",";
        $data   .=  "$post->hit,"; 
    }
@endphp
<script>

    // En Çok Okunanlar
    var ctxBar = document.getElementById("bestpost").getContext("2d");
    var bestpost = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: [{!!$labels!!}],
            datasets: [{
                label: 'Okunma Sayısı',
                backgroundColor: chartColors.blue,
                data: [{!!$data!!}]

            }]
        },
    });

</script>

@endsection