@extends('layouts.admin')

@section('content')

    <main class="content">
        <div class="container-fluid p-0">
    
            <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>
    
            <div class="row">
                <div class="col-xl-6 col-xxl-5 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">EPS</h5>
                                            </div>
    
                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="home"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">44</h1>
                                        <div class="mb-0">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Logged Problems</h5>
                                            </div>
    
                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="x-circle"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">1.212</h1>
                                        <div class="mb-0">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Users</h5>
                                            </div>
    
                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">21.300</h1>
                                        <div class="mb-0">
                                            
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-xl-6 col-xxl-7">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
    
                            <h5 class="card-title mb-0">Recent Movement</h5>
                        </div>
                        <div class="card-body py-3">
                            <div class="chart chart-sm">
                                <canvas id="chartjs-dashboard-line"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row">
                <div class="col-12 col-md-12 col-xxl-12 d-flex order-2 order-xxl-12">
                    <div class="card flex-fill w-100">
                       
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">
                                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                                    <div class="card flex-fill w-100">
                                        <div class="card-header">
                    
                                            <h5 class="card-title mb-0">Specification of Problems</h5>
                                        </div>
                                        <div class="card-body d-flex w-100">
                                            <div class="align-self-center chart chart-lg">
                                                <canvas id="chartjs-dashboard-bar"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                
            </div>
    
            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <h5 class="card-title mb-0">Names and Reports EPS</h5>
                        </div>
                        <table class="table table-hover my-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="d-none d-xl-table-cell">Start Date</th>
                                    <th class="d-none d-xl-table-cell">End Date</th>
                                    <th>Status</th>
                                    <th class="d-none d-md-table-cell">Users</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pqrs as $item)
                                    <tr>
                                        <td>{{ $item->eps->eps }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $item->created_at }}</td>
                                        <td class="d-none d-xl-table-cell">{{ $item->updated_at }}</td>
                                        @if ($item->status == 1)
                                            <td><span class="badge bg-danger">Created</span></td>
                                        @elseif ($item->status == 2)
                                            <td><span class="badge bg-warning">Process</span></td>
                                        @else
                                            <td><span class="badge bg-success">Complet</span></td>
                                        @endif
                                        <td class="d-none d-md-table-cell">{{ $item->user->name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
    
        </div>
    </main>

@endsection
