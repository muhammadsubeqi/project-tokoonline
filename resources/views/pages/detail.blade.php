@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection

@section('content')
<div class="page-content page-details">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                Product Details
                </li>
            </ol>
            </nav>
        </div>
        </div>
    </div>
    </section>

    <section class="store-gallery" id="gallery">
    <div class="container">
        <div class="row">
        <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image" alt="">
            </transition>
        </div>
            <div class="col-lg-2">
            <div class="row">
            <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                <a href="#" @click="changeActive(index)">
                <img :src="photo.url" class="w-100 thumbnail-image" :class="{active: index == activePhoto}" alt="">
                </a>
            </div>
            </div>
            </div>
        </div>
    </div>
    </section>

    <div class="store-details-container" data-aos="fade-up">
    <section class="store-heading">
        <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <h1>Sofa Ternyaman</h1>
            <div class="owner">By Muhammad SUbeqi</div>
            <div class="price">Rp. 100000</div>
            </div>
            <div class="col-lg-2" data-aos="zoom-in">
            <a href="/cart.html" class="btn btn-success px-4 text-white btn-block mb-3">
                Add to Cart
            </a>
            </div>
        </div>
        </div>
    </section>
    <div class="section store-description">
        <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, quos dolorem saepe veritatis repellat quae laborum voluptatibus assumenda quisquam laboriosam.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi rem nobis, mollitia cumque beatae, exercitationem ex ullam odio, perferendis impedit repudiandae dicta. Sunt autem impedit odit quisquam, eum, facilis minus in sapiente repellat quaerat numquam obcaecati ea error fugiat, praesentium sint deleniti exercitationem ducimus voluptate? Dolor at nisi beatae voluptas!
            </p>
            </div>
        </div>
        </div>
    </div>
    <section class="store-review">
        <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mt-3 mb-5">
            <h5>Customer Review (3)</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
            <ul class="list-unstyled">
                <li class="media">
                <img src="images/icon-testimonial-1.png" class="mr-3 rounded-circle" alt="">
                <div class="media-body">
                    <h5 class="mt-2 mb-1">Muhammad Subeqi</h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque libero adipisci maxime illum aliquid laborum sit. Expedita saepe nulla pariatur?
                </div>
                </li>
                <li class="media">
                <img src="images/icon-testimonial-1.png" class="mr-3 rounded-circle" alt="">
                <div class="media-body">
                    <h5 class="mt-2 mb-1">Muhammad Subeqi</h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque libero adipisci maxime illum aliquid laborum sit. Expedita saepe nulla pariatur?
                </div>
                </li>
                <li class="media">
                <img src="images/icon-testimonial-1.png" class="mr-3 rounded-circle" alt="">
                <div class="media-body">
                    <h5 class="mt-2 mb-1">Muhammad Subeqi</h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque libero adipisci maxime illum aliquid laborum sit. Expedita saepe nulla pariatur?
                </div>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </section>
    </div>
</div>    
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script>
    var gallery = new Vue({
    el: "#gallery",
    mounted(){
        AOS.init();
    },
    data: {
        activePhoto: 1,
        photos: [
        {
            id: 1,
            url: "/images/product-details-1.jpg"
        },
        {
            id: 2,
            url: "/images/product-details-2.jpg"
        },
        {
            id: 3,
            url: "/images/product-details-3.jpg"
        },
        {
            id: 4,
            url: "/images/product-details-4.jpg"
        },
        
        ],
    },
    methods: {
        changeActive(id){
        this.activePhoto = id;
        }
    }
    });
</script>
@endpush