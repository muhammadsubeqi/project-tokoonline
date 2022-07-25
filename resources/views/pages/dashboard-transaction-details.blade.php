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
    <h2 class="dashboard-title">#Store07372</h2>
    <p class="dashboard-subtitle">Transactions Details</p>
    </div>
    <div class="dashboard-content" id="transactionDetails">
    <div class="row">
        <div class="row-12">
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-4">
                <img
                    src="/images/product-details-dashboard.png"
                    alt=""
                    class="w-100 mb-3"
                />
                </div>
                <div class="col-12 col-md-8">
                <div class="row">
                    <div class="col-12 col-md-6">
                    <div class="product-title">Customer Name</div>
                    <div class="product-subtitle">
                        Muhammad Subeqi
                    </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Product Name</div>
                    <div class="product-subtitle">Sirup</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">
                        Date of Transaction
                    </div>
                    <div class="product-subtitle">22 Juli 2022</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Payment Status</div>
                    <div class="product-subtitle text-danger">
                        pending
                    </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Total Amount</div>
                    <div class="product-subtitle text-danger">
                        Rp. 25.000
                    </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Mobile</div>
                    <div class="product-subtitle text-danger">
                        085735621003
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                <h5>Shipping Information</h5>
                </div>
                <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                    <div class="product-title">Address 1</div>
                    <div class="product-subtitle">Dsn Kemloko</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Address 2</div>
                    <div class="product-subtitle">Blok C9</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Province</div>
                    <div class="product-subtitle">Jawa Timur</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">City</div>
                    <div class="product-subtitle">Bandung</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Postal Code</div>
                    <div class="product-subtitle">972747</div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div class="product-title">Country</div>
                    <div class="product-subtitle">Indonesia</div>
                    </div>
                    <div class="col-12 col-md-3">
                    <div class="product-title">Shipping Status</div>
                    <select
                        name="status"
                        id="status"
                        class="form-control"
                        v-model="status"
                    >
                        <option value="PENDING">PENDING</option>
                        <option value="SHIPPING">SHIPPING</option>
                        <option value="SUCCESS">SUKSES</option>
                    </select>
                    </div>
                    <template v-if="status == 'SHIPPING'">
                    <div class="col-md-3">
                        <div class="product-title">Input Resi</div>
                        <input
                        type="text"
                        class="form-control"
                        name="resi"
                        v-model="resi"
                        />
                    </div>
                    <div class="co-md-2">
                        <button
                        type="submit"
                        class="btn btn-success btn-block mt-4"
                        >
                        Update Resi
                        </button>
                    </div>
                    </template>
                </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 text-right">
                <button
                    type="submit"
                    class="btn btn-lg btn-success mt-4"
                >
                    Save Now
                </button>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</div>
@endsection
@push('addon-script')
<script>
    $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });
</script>
<script src="/vendor/vue/vue.js"></script>
<script>
    var transactionDetails = new Vue({
    el: "#transactionDetails",
    data: {
        status: "SHIPPING",
        resi: "BDV124455Cjs",
    },
    });
</script>    
@endpush