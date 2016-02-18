@extends('layouts.logged')

@section('title')
  MiChuper - Clientes
@stop

@section('navegation')
  <li>Inicio</li>
  <li class="active">Clientes</li>
@stop

@section('content')
  <div class="row">
      <div class="col-md-12">

          <!-- START DEFAULT DATATABLE -->
          <div class="panel panel-default">
              <div class="panel-heading">
                  <div class="col-xs-12 col-md-10">
                    <h3 class="panel-title">Listado de clientes</h3>
                  </div>
                  <div class="col-xs-12 col-md-2 text-right">
                    <a href="/customers/create">
                      <button class="btn-sm btn-primary" type="button" title="Nuevo servicio">
                          <span class="color-primary" style="margin-right: 0px;"><i class="fa fa-plus"></i> Nuevo cliente</span>
                      </button>
                    </a>
                  </div>
              </div>

              <div class="panel-body">
                  <table class="table datatable" id="datatable">
                      <thead>
                          <tr>
                              <th>Nombre</th>
                              <th>E-mail</th>
                              <th>Teléfono</th>
                              <th>Celular</th>
                              <th>Compañia</th>
                              <th width="5%"></th>
                              <th width="5%"></th>
                              <th width="5%"></th>
                          </tr>
                      </thead>
                      <tbody>
                        @if (count($customers) > 0)
                          @foreach($customers as $customer)
                          <tr>
                              <td>{{ $customer->name }}</td>
                              <td>{{ $customer->email }}</td>
                              <td>{{ $customer->phone }}</td>
                              <td>{{ $customer->cell_phone }}</td>
                              <td>{{ $customer->company }}</td>
                              <td>
                                <a href="customers/{{ $customer->idCustomer }}/documentation">
                                  <button class="btn-sm btn-info" type="button" title="Archivos">
                                    <span class="color-primary" style="margin-right: 0px;"><i class="fa fa-file-text-o"></i></span>
                                  </button>
                                </a>
                              </td>
                              <td>
                                <button class="btn-sm btn-warning" type="button" title="Editar servicio">
                                    <span class="color-primary" style="margin-right: 0px;"><i class="fa fa-pencil"></i></span>
                                </button>
                              </td>
                              <td>
                                <button class="btn-sm btn-danger" type="button" title="Eliminar servicio">
                                    <span class="color-primary" style="margin-right: 0px;"><i class="fa fa-trash-o"></i></span>
                                </button>
                              </td>

                          </tr>
                          @endforeach
                        @else
                          <tr>
                              <td colspan="2">No existen clientes dados de alta en el sistema</td>
                          </tr>
                        @endif
                      </tbody>
                  </table>
              </div>
          </div>
          <!-- END DEFAULT DATATABLE -->
      </div>
  </div>
@stop

@section('scripts')
  @parent
  <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $('#datatable').dataTable( {
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 5,6 ] }
      ]
   });
  </script>
@stop
