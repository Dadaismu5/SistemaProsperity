@extends('layouts.logged')

@section('title')
  MiChuper - Clientes
@stop

@section('header')
    @parent
    <style type="text/css">
        .panel-heading {
             height: 80px;
        }
        .content-document {
            height: 130px;
        }
    </style>
@stop

@section('navegation')
  <li><a href="/dashboard">Inicio</a></li>
  <li><a href="/customers">Clientes</a></li>
  <li class="active">Documentación</li>
@stop

@section('content')
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        <div class="row">
            <div class="col-md-12">
                
                <form class="form-horizontal" name="form" id="form" method="post" action="">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Documentación de {{ $customer->name }}</strong></h3>
                    </div>
                    <div class="panel-body">
                        <p>Ingrese la documentación solicitada.</p>
                    </div>
                    <div class="panel-body">                                                                        
                        
                        <!-- START SIMPLE PANELS -->                
                    <div class="row">                    
                        <div class="col-md-4">

                            <!-- START PRIMARY PANEL -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Solicitud de Crédito (Llena y firmada)</h4>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_request_credit">
                                                @if (isset($documentation->request_credit))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->request_credit}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->request_credit}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="request_credit" id="request_credit" onChange="load_image({{ $customer->idCustomer }}, 'request_credit')"></p>
                                    <p id="upload_request_credit" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>
                            </div>
                            <!-- END PRIMARY PANEL -->

                            <!-- START COLORFUL PANEL -->
                            <div class="panel panel-colorful">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Comprobante de domicilio (2 meses del mismo servicio)</h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_address">
                                                @if (isset($documentation->address))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->address}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->address}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="address" id="address" onChange="load_image({{ $customer->idCustomer }}, 'address')"></p>
                                    <p id="upload_address" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>
                            </div>
                            <!-- END COLORFUL PANEL -->
                        </div>

                        <div class="col-md-4">  

                            <!-- START SUCCESS PANEL -->
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Formato de Consulta de Buró de crédito firmada</h4>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_format_credit">
                                                @if (isset($documentation->format_credit))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->format_credit}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->format_credit}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="format_credit" id="format_credit" onChange="load_image({{ $customer->idCustomer }}, 'format_credit')"></p>
                                    <p id="upload_format_credit" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>      
                            </div>            
                            <!-- END SUCCESS PANEL -->

                            <!-- START INFO PANEL -->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Edo de Cta bancario (carátula)</h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_status_bank">
                                                @if (isset($documentation->status_bank))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->status_bank}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->status_bank}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="status_bank" id="status_bank" onChange="load_image({{ $customer->idCustomer }}, 'status_bank')"></p>
                                    <p id="upload_status_bank" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>                            
                            </div>
                            <!-- END INFO PANEL -->

                        </div>
                        <div class="col-md-4">      

                            <!-- START WARNING PANEL -->
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Identificación Oficial vigente</h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_identification">
                                                @if (isset($documentation->identification))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->identification}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->identification}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="identification" id="identification" onChange="load_image({{ $customer->idCustomer }}, 'identification')"></p>
                                    <p id="upload_identification" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>     
                            </div>                        
                            <!-- END DEFAULT PANEL -->

                            <!-- START DANGER PANEL -->
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Acta de Nacimiento</h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_birth">
                                                @if (isset($documentation->birth))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->birth}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->birth}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="birth" id="birth" onChange="load_image({{ $customer->idCustomer }}, 'birth')"></p>
                                    <p id="upload_birth" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>     
                            </div>   
                            <!-- END DEFAULT PANEL -->

                        </div>
                    </div>  
                    <!-- END SIMPLE PANELS -->                


                    <div class="row">                    
                        <div class="col-md-4">

                            <!-- START PRIMARY PANEL -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Acta de Matrimonio (Divorcio o de Defunción)</h4>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_proceedings">
                                                @if (isset($documentation->proceedings))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->proceedings}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->proceedings}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="proceedings" id="proceedings" onChange="load_image({{ $customer->idCustomer }}, 'proceedings')"></p>
                                    <p id="upload_proceedings" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>
                            </div>
                            <!-- END PRIMARY PANEL -->

                            <!-- START COLORFUL PANEL -->
                            <div class="panel panel-colorful">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Copia de la escritura del Inmueble </h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_property_copy">
                                                @if (isset($documentation->property_copy))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->property_copy}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->property_copy}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="property_copy" id="property_copy" onChange="load_image({{ $customer->idCustomer }}, 'property_copy')"></p>
                                    <p id="upload_property_copy" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>
                            </div>
                            <!-- END COLORFUL PANEL -->
                        </div>

                        <div class="col-md-4">  

                            <!-- START SUCCESS PANEL -->
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Boleta Predial </h4>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_property_taxes">
                                                @if (isset($documentation->property_taxes))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->property_taxes}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->property_taxes}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="property_taxes" id="property_taxes" onChange="load_image({{ $customer->idCustomer }}, 'property_taxes')"></p>
                                    <p id="upload_property_taxes" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>      
                            </div>            
                            <!-- END SUCCESS PANEL -->

                            <!-- START INFO PANEL -->
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Al menos 8 fotos del Inmueble</h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_photos">
                                                @if (isset($documentation->photos))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->photos}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->photos}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="photos" id="photos" onChange="load_image({{ $customer->idCustomer }}, 'photos')"></p>
                                    <p id="upload_photos" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>                            
                            </div>
                            <!-- END INFO PANEL -->

                        </div>
                        <div class="col-md-4">      

                            <!-- START WARNING PANEL -->
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Boleta de Agua</h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_ticket_water">
                                                @if (isset($documentation->ticket_water))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->ticket_water}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->ticket_water}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="ticket_water" id="ticket_water" onChange="load_image({{ $customer->idCustomer }}, 'ticket_water')"></p>
                                    <p id="upload_ticket_water" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>     
                            </div>                        
                            <!-- END DEFAULT PANEL -->

                            <!-- START DANGER PANEL -->
                            <div class="panel panel-danger">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Mapa de Ubicación exacta</h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_map">
                                                @if (isset($documentation->map))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->map}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->map}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="map" id="map" onChange="load_image({{ $customer->idCustomer }}, 'map')"></p>
                                    <p id="upload_map" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>     
                            </div>   
                            <!-- END DEFAULT PANEL -->

                        </div>
                    </div>  
                    <!-- END SIMPLE PANELS -->                




                    <div class="row">                    
                        <div class="col-md-4">

                            <!-- START PRIMARY PANEL -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Comprobante de pago de Avalúo</h4>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_pay_of_appraisal">
                                                @if (isset($documentation->pay_of_appraisal))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->pay_of_appraisal}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->pay_of_appraisal}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="pay_of_appraisal" id="pay_of_appraisal" onChange="load_image({{ $customer->idCustomer }}, 'pay_of_appraisal')"></p>
                                    <p id="upload_pay_of_appraisal" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>
                            </div>
                            <!-- END PRIMARY PANEL -->

                            <!-- START COLORFUL PANEL -->
                            <div class="panel panel-colorful">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Certificado de Libertad de Gravamen</h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_certificate_assessment">
                                                @if (isset($documentation->certificate_assessment))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->certificate_assessment}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->certificate_assessment}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="certificate_assessment" id="certificate_assessment" onChange="load_image({{ $customer->idCustomer }}, 'certificate_assessment')"></p>
                                    <p id="upload_certificate_assessment" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>
                            </div>
                            <!-- END COLORFUL PANEL -->
                        </div>

                        <div class="col-md-4">  

                            <!-- START SUCCESS PANEL -->
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Avalúo</h4>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_appraisal">
                                                @if (isset($documentation->certificate_assessment))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->appraisal}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->appraisal}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="appraisal" id="appraisal" onChange="load_image({{ $customer->idCustomer }}, 'appraisal')"></p>
                                    <p id="upload_appraisal" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>      
                            </div>            
                            <!-- END SUCCESS PANEL -->

                        </div>
                        <div class="col-md-4">      

                            <!-- START WARNING PANEL -->
                            <div class="panel panel-warning">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Pago del Certificado de Libertad de Gravamen</h3>
                                </div>
                                <div class="panel-body content-document">
                                    <p><center>
                                            <span id="check_pay_of_assessment">
                                                @if (isset($documentation->pay_of_assessment))
                                                    <a href='/documentations/{{$customer->idCustomer}}/{{$documentation->pay_of_assessment}}' download='/documentations/{{$customer->idCustomer}}/{{$documentation->pay_of_assessment}}'><i class='fa fa-file-text fa-2x'></i></a>
                                                @else
                                                    Pendiente de ingresar
                                                @endif
                                            </span>
                                        </center>
                                    </p>
                                    <p><input type="file" name="pay_of_assessment" id="pay_of_assessment" onChange="load_image({{ $customer->idCustomer }}, 'pay_of_assessment')"></p>
                                    <p id="upload_pay_of_assessment" style="display:none">Subiendo... <i class="fa fa-refresh fa-spin fa-2x"></i></p>
                                </div>     
                            </div>                        
                            <!-- END DEFAULT PANEL -->

                        </div>
                    </div>  
                    <!-- END SIMPLE PANELS -->
                    
                    <div class="panel-footer">
                        <button class="btn btn-primary pull-right">Siguiente</button>
                    </div>
                </div>
                </form>
            </div>
        </div>                    
        
    </div>
    <!-- END PAGE CONTENT WRAPPER -->                                                
@stop

@section('scripts')
  @parent
  <script type="text/javascript" src="/js/plugins/jquery-validation/jquery.validate.js"></script>
  <script type="text/javascript" src="/js/customer.js"></script>
@stop
