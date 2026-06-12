@extends('layouts.app');
@section('content')

{{-- head --}}
@include('layouts.head')

<div class="wrapper">

    <!-- SIDEBAR -->
    @include('layouts.sidebar')

    <!-- MAIN -->
    <main class="main-content">

        <!-- TOP NAVBAR -->
        @include('layouts.header')

        <!-- CARDS -->
        <div class="row g-4 mt-2">

            <div class="col-md-3">
                <div class="dashboard-card">
                    <div>
                        <h6>Total Sales</h6>
                        <h3>$12,450</h3>
                    </div>

                    <div class="card-icon bg-success">
                        <i class="bi bi-currency-dollar"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="dashboard-card">
                    <div>
                        <h6>Products</h6>
                        <h3>150</h3>
                    </div>

                    <div class="card-icon bg-primary">
                        <i class="bi bi-box"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="dashboard-card">
                    <div>
                        <h6>Customers</h6>
                        <h3>80</h3>
                    </div>

                    <div class="card-icon bg-warning">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="dashboard-card">
                    <div>
                        <h6>Orders</h6>
                        <h3>45</h3>
                    </div>

                    <div class="card-icon bg-danger">
                        <i class="bi bi-cart"></i>
                    </div>
                </div>
            </div>

        </div>

        <!-- TABLE -->
        <div class="table-section mt-5">

            <div class="d-flex justify-content-between mb-3">
                <h4>Recent Sales</h4>

                <button class="btn btn-primary">
                    View All
                </button>
            </div>

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>Invoice</th>
                            <th>Customer</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>#INV-1001</td>
                            <td>Ali Ahmad</td>
                            <td>2026-05-19</td>
                            <td>$250</td>
                            <td>
                                <span class="badge bg-success">
                                    Paid
                                </span>
                            </td>
                        </tr>

                        <tr>
                            <td>#INV-1002</td>
                            <td>Mohammad</td>
                            <td>2026-05-19</td>
                            <td>$180</td>
                            <td>
                                <span class="badge bg-warning">
                                    Pending
                                </span>
                            </td>
                        </tr>

                    </tbody>

                </table>

                <!-- CHARTS -->

<div class="row mt-5 g-4">

    <!-- SALES CHART -->

    <div class="col-lg-8">

        <div class="chart-card">

            <div class="d-flex justify-content-between mb-4">
                <h4>Sales Analytics</h4>

                <button class="btn btn-light">
                    Weekly
                </button>
            </div>

            <canvas id="salesChart"></canvas>

        </div>

    </div>

    <!-- QUICK STATS -->

    <div class="col-lg-4">

        <div class="chart-card">

            <h4 class="mb-4">
                Quick Stats
            </h4>

            <div class="stats-item">
                <span>Total Orders</span>
                <strong>1,250</strong>
            </div>

            <div class="stats-item">
                <span>Pending Orders</span>
                <strong>25</strong>
            </div>

            <div class="stats-item">
                <span>Delivered</span>
                <strong>980</strong>
            </div>

            <div class="stats-item">
                <span>Returned</span>
                <strong>12</strong>
            </div>

        </div>

    </div>

</div>

            </div>

        </div>

    </main>

</div>
{{-- script  --}}
@include('layouts.script')

@endsection


