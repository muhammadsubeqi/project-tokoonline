@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product
@endsection

@section('content')
 <!-- Section Content -->
<div
class="section-content section-dashboard-home"
data-aos="fade-up"
>
<div class="container-fluid">
    <div class="dashboard-heading">
    <h2 class="dashboard-title">Transactions</h2>
    <p class="dashboard-subtitle">
        Big result start from the small one
    </p>
    </div>
    <div class="dashboard-content">
    <div class="row">
        <div class="col-12 mt-2">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a
                class="nav-link active"
                id="nav-home-tab"
                data-toggle="tab"
                data-target="#nav-home"
                type="button"
                role="tab"
                aria-controls="nav-home"
                aria-selected="true"
            >
                Home
            </a>
            <a
                class="nav-link"
                id="nav-profile-tab"
                data-toggle="tab"
                data-target="#nav-profile"
                type="button"
                role="tab"
                aria-controls="nav-profile"
                aria-selected="false"
            >
                Buy Product
            </a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div
            class="tab-pane fade show active"
            id="nav-home"
            role="tabpanel"
            aria-labelledby="nav-home-tab"
            >
            <a
                href="/dashboard-transaction-detail.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="images/dashboard-icon-product-1.png"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">Shirup aja</div>
                    <div class="col-md-3">Msubeqi</div>
                    <div class="col-md-3">12 Mei 2022</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>
            <a
                href="/dashboard-transaction-detail.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="images/dashboard-icon-product-1.png"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">Shirup aja</div>
                    <div class="col-md-3">Msubeqi</div>
                    <div class="col-md-3">12 Mei 2022</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>
            <a
                href="/dashboard-transaction-detail.html"
                class="card card-list d-block"
            >
                <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                    <img
                        src="images/dashboard-icon-product-1.png"
                        alt=""
                    />
                    </div>
                    <div class="col-md-4">Shirup aja</div>
                    <div class="col-md-3">Msubeqi</div>
                    <div class="col-md-3">12 Mei 2022</div>
                    <div class="col-md-1 d-none d-md-block">
                    <img
                        src="images/dashboard-arrow-right.svg"
                        alt=""
                    />
                    </div>
                </div>
                </div>
            </a>
            </div>
            <div
            class="tab-pane fade"
            id="nav-profile"
            role="tabpanel"
            aria-labelledby="nav-profile-tab"
            >
            ...
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection