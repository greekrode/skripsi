@extends('layouts.default')

@section('title', 'Contact Us')

@section('content')
    <div class="stunning-header bg-primary-opacity">

        @include('include.header-menu')

        <div class="header-spacer--standard"></div>

        <div class="stunning-header-content">
            <h1 class="stunning-header-title">Contacts</h1>
            <ul class="breadcrumbs">
                <li class="breadcrumbs-item">
                    <a href="#">Contacts</a>
                    <span class="icon breadcrumbs-custom">/</span>
                </li>
                <li class="breadcrumbs-item active">
                    <span>Contacts</span>
                </li>
            </ul>
        </div>

        <div class="content-bg-wrap stunning-header-bg1"></div>
    </div>


    <!-- End Stunning header -->


    <section class="mt-0">
        <div class="section">
            <div id="map" style="height: 480px"></div>
            <script>
                var map;

                function initMap() {

                    var myLatLng = {lat: -6.228380, lng: 106.609685};

                    map = new google.maps.Map(document.getElementById('map'), {
                        center: myLatLng,
                        zoom: 15,
                        scrollwheel: true//set to true to enable mouse scrolling while inside the map area
                    });

                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        icon: {
                            url: "{{ asset('img/map-marker.png') }}",
                            scaledSize: new google.maps.Size(36, 54)
                        }

                    });

                }


            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP2tkYqugmTlku4o8-VYqZNQzv48FAx4E&callback=initMap"
                    async defer>
            </script>
        </div>
    </section>


    <section class="medium-padding120">
        <div class="container">
            <div class="row">
                <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">


                    <!-- Contact Item -->

                    <div class="contact-item-wrap">
                        <h3 class="contact-title">UPH Medan</h3>
                        <div class="contact-item">
                            <a href="#">Lippo Plaza Medan, Lantai 5 - 7, Jl. Imam Bonjol No.6, Petisah Tengah, Medan Petisah, Medan, Sumatera Utara 20112</a>
                        </div>
                        <div class="contact-item">
                            <h6 class="sub-title">General Inquiries:</h6>
                            <a href="mailto:">admin@uph.medan.edu</a>
                        </div>
                    </div>

                    <!-- ... end Contact Item -->
                </div>

                <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">


                    <!-- Contact Item -->

                    <div class="contact-item-wrap">
                        <h3 class="contact-title">UPH Surabaya</h3>
                        <div class="contact-item">
                            <a href="#">Jl. MH. Thamrin Boulevard 1100, Klp. Dua, Karawaci, Tangerang, Banten 15811</a>
                        </div>
                        <div class="contact-item">
                            <h6 class="sub-title">General Inquiries:</h6>
                            <a href="mailto:">admin@uph.karawaci.edu</a>
                        </div>
                    </div>

                    <!-- ... end Contact Item -->

                </div>
                <div class="col col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">


                    <!-- Contact Item -->

                    <div class="contact-item-wrap">
                        <h3 class="contact-title">UPH Karawaci</h3>
                        <div class="contact-item">
                            <a href="#">Jl. Ahmad Yani, Dukuh Menanggal, Surabaya, Kota SBY, Jawa Timur 60234</a>
                        </div>
                        <div class="contact-item">
                            <h6 class="sub-title">General Inquiries:</h6>
                            <a href="mailto:">admin@uph.surabaya.edu</a>
                        </div>
                    </div>

                    <!-- ... end Contact Item -->

                </div>
            </div>
        </div>
    </section>



    <section class="medium-padding120 bg-body contact-form-animation scrollme">
        <div class="container">
            <div class="row">
                <div class="col col-xl-10 col-lg-10 col-md-12 col-sm-12  m-auto">


                    <!-- Contacts Form -->

                    <div class="contact-form-wrap">
                        <div class="contact-form-thumb">
                            <h2 class="title">SEND US <span>A RAVEN</span></h2>
                            <p>Do you have general questions about AlumniUPH? Send us a raven and we’ll answer you as fast as we can!</p>
                            <img src="{{ asset('img/crew.png') }}" alt="crew" class="crew">
                        </div>
                        <form class="contact-form">
                            <div class="row">
                                <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">First Name</label>
                                        <input class="form-control" placeholder="" type="text" value="">
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Last Name</label>
                                        <input class="form-control" placeholder="" type="text" value="">
                                    </div>
                                </div>
                                <div class="col col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Your Email</label>
                                        <input class="form-control" placeholder="" type="email" value="">
                                    </div>

                                    <div class="form-group label-floating">
                                        <label class="control-label">Inquiry Subject</label>
                                        <input class="form-control" placeholder="" type="text" value="">
                                    </div>

                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Your Message</label>
                                        <textarea class="form-control" placeholder=""></textarea>
                                    </div>

                                    <button class="btn btn-purple btn-lg full-width">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- ... end Contacts Form -->

                </div>
            </div>
        </div>

        <div class="half-height-bg bg-white"></div>
    </section>

@include('include.footer')
@endsection
