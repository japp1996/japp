@extends('layouts.public')
@section('title', 'Contacto')
@section('content')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contáctame</h2>
                    <div class="page_link">
                        <a href="{{url('/')}}">Sobre mí</a>
                        <a href="{{url('/contact')}}">Contácto</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    
    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Aragua, Venezuela</h6>
                            <p>Maracay</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">(+58) 412 467 4136</a></h6>
                            <p>Lun a Vie 8am to 5 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#"><span class="__cf_email__">japp19961996@gmail.com</span></a></h6>
                            <p>Envíeme sus consultas e inquietudes en cualquier momento!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" id="contactForm">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su dirección de correo eléctronico">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Ingrese su Asunto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Escriba su mensaje"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary_btn">
                                <span>Enviar Mensaje</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="mapBox" class="mapBox"
                data-lat="40.701083" 
                data-lon="-74.1522848" 
                data-zoom="13" 
                data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                data-mlat="40.701083"
                data-mlon="-74.1522848">
            </div>
        </div>
    </section>
@endsection()