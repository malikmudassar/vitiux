@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to the Dashboard, Please choose from the Left side menu. 
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Models
                </div>
                <div class="card-body" style="height:300px">
                    <div style="width:100%; height:100%; background:url('storage/videos/3-medium.png'); background-size: cover; ">

                    </div>
                </div>
                <div class="card-footer">
                    <h2>Total: <b>26</b></h2>
                </div>
            </div>      
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Packs
                </div>
                <div class="card-body" style="height:300px">
                    <div style="width:100%; height:100%; background:url('storage/videos/9-small.png'); background-size: cover; ">

                    </div>
                </div>
                <div class="card-footer">
                    <h2>Total: <b>45</b></h2>
                </div>
            </div>      
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Videos
                </div>
                <div class="card-body" style="height:300px">
                    <div style="width:100%; height:100%; background:url('storage/videos/4-medium.png'); background-size: cover;">

                    </div>
                </div>
                <div class="card-footer">
                    <h2>Total: <b>1019</b></h2>
                </div>
            </div>      
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection