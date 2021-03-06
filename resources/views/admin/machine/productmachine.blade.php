@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> اللغات </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> اللغات
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">all product in this  machine </h3>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                          <td>id</td>
                                          <td>name</td>
                                         <td colspan = '3'>action</td>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($vendingMachines->products)
                                                @foreach($vendingMachines->products as $product)
                                                    <tr>
                                                        <td>{{$product -> id}}</td>
                                                        <td>{{$product -> name}}</td>


                                                        <td><div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href=""
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">view</a>
                                                            </div></td>

                                                        <td><div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href=""
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">assign products </a>
                                                            </div></td>
                                                        <td>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
