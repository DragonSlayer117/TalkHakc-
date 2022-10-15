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
                                <tr>
                                    <td>ASOCIACIÓN INDÍGENA DEL CAUCA</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                </tr>
                                <tr>
                                    <td>ASOCIACIÓN INDÍGENA DEL CAUCA</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>COMFENALCO  VALLE  E.P.S.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                </tr>
                                <tr>
                                    <td>COMPENSAR   E.P.S.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">Vanessa Tucker</td>
                                </tr>
                                <tr>
                                    <td>COOPERATIVA DE SALUD Y DESARROLLO INTEGRAL ZONA SUR ORIENTAL DE CARTAGENA</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>E.P.S.  FAMISANAR  LTDA.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Sharon Lessman</td>
                                </tr>
                                <tr>
                                    <td>E.P.S.  SANITAS  S.A.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-success">Done</span></td>
                                    <td class="d-none d-md-table-cell">Christina Mason</td>
                                </tr>
                                <tr>
                                    <td>EPS SERVICIO OCCIDENTAL DE SALUD  S.A.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>EPS Y MEDICINA PREPAGADA SURAMERICANA S.A.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>MALLAMAS.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>FUNDACIÓN SALUD MIA EPS.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>NUEVA EPS S.A.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>SALUD  TOTAL  S.A.  E.P.S.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                                <tr>
                                    <td>SALUDVIDA S.A .E.P.S.</td>
                                    <td class="d-none d-xl-table-cell">01/01/2022</td>
                                    <td class="d-none d-xl-table-cell">31/06/2022</td>
                                    <td><span class="badge bg-warning">In progress</span></td>
                                    <td class="d-none d-md-table-cell">William Harris</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
    
        </div>
    </main>

@endsection
