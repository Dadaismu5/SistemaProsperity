@extends('layouts.logged')

@section('title')
  MiChuper - Clientes
@stop

@section('navegation')
  <li>Inicio</li>
  <li><a href="/customers">Clientes</a></li>
  <li class="active">Nuevo</li>
@stop

@section('content')
	<!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        <div class="row">
            <div class="col-md-12">
                
                <form class="form-horizontal" name="form" id="form" method="post" action="/customers">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><strong>Nuevo Cliente</strong></h3>
                    </div>
                    <div class="panel-body">
                        <p>Complete los campos del formulario.</p>
                    </div>
                    <div class="panel-body">                                                                        
                        
                        <div class="row">
                            
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Nombre:</label>
                                    <div class="col-md-9">                                            
                                        <input type="text" name="customer[name]" id="name" required class="form-control"/>
                                    </div>
                                </div>
                                
                                <div class="form-group">                                        
                                    <label class="col-md-3 control-label">Email:</label>
                                    <div class="col-md-9 col-xs-12">
                                    	<input type="text" name="customer[email]" id="mail" required class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">                                        
                                    <label class="col-md-3 control-label">Compañia:</label>
                                    <div class="col-md-9 col-xs-12">
                                    	<input type="text" name="customer[company]" id="company" class="form-control"/>
                                    </div>
                                </div>
                                <div class="form-group">                                        
                                    <label class="col-md-3 control-label">Domicilio:</label>
                                    <div class="col-md-9 col-xs-12">
                                    	<input type="text" name="customer[address]" required id="address" class="form-control"/>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group">                                        
                                    <label class="col-md-3 control-label">Teléfono:</label>
                                    <div class="col-md-9">
                                        <input type="text" name="customer[phone]" id="phone" required class="form-control">                                            
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Celular:</label>
                                    <div class="col-md-9">
                                        <input type="text" name="customer[cell_phone]" id="cell_phone" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Ocupación:</label>
                                    <div class="col-md-9">
                                        <input type="text" name="customer[ocupation]" id="ocupation" class="form-control">
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-default" type="reset">Limpiar</button>                                    
                        <button class="btn btn-primary pull-right">Guardar</button>
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
