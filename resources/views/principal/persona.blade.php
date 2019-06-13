 @extends('principal') @section('persona')
<main class="main">
  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">Inicio</li>
    <li class="breadcrumb-item active">Persona</li>
  </ol>
  <div class="container-fluid">
    <!-- Ejemplo de tabla Listado -->
    <div class="card">
      <div class="card-header">
        <i class="fa fa-align-justify"></i> Personas
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalNuevo">
                            <i class="icon-plus"></i>&nbsp;Nueva persona
                        </button>
      </div>
      <div class="card-body">
        <div class="form-group row">
          <div class="col-md-6">
            <div class="input-group">
              <select class="form-control col-md-3" id="opcion" name="opcion">
                                      <option value="nombre">Nombre</option>
                                      <option value="descripcion">Descripción</option>
                                      <option value="tipo_documento">Tipo de documento</option>
                                      <option value="num_documento">Número de documento</option>
                                      <option value="direccion">Dirección</option>
                                      <option value="telefono">Teléfono</option>
                                      <option value="email">Email</option>
                                    </select>
              <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
            </div>
          </div>
        </div>
        <table class="table table-bordered table-striped table-sm">
          <thead>
            <tr>
              <th>Opciones</th>
              <th>Nombre</th>
              <th>Tipo de documento</th>
              <th>Número de documento</th>
              <th>Dirección</th>
              <th>Teléfono</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
              </td>
              <td>Juan de la Barrera</td>
              <td>Comprobante</td>
              <td>001</td>
              <td>Av. Niños Héroes</td>
              <td>(81) 2 027 1819</td>
              <td>juan_bar@yahoo.com</td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
              </td>
              <td>Juan Escutia</td>
              <td>Comprobante</td>
              <td>002</td>
              <td>Av. Niños Héroes</td>
              <td>(834) 155 2921</td>
              <td>juan_esc@yahoo.com</td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
              </td>
              <td>Agustín Melgar</td>
              <td>Comprobante</td>
              <td>003</td>
              <td>Av. Niños Héroes</td>
              <td>(81) 5 245 2181</td>
              <td>agustin_mel@yahoo.com</td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
              </td>
              <td>Vicente Suárez</td>
              <td>Comprobante</td>
              <td>004</td>
              <td>Av. Niños Héroes</td>
              <td>(834) 185 3260</td>
              <td>vicente_sua@yahoo.com</td>
            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button>&nbsp;
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
              </td>
              <td>Fernando Montes de Oca</td>
              <td>Comprobante</td>
              <td>005</td>
              <td>Av. Niños Héroes</td>
              <td>(81) 8 027 1410</td>
              <td>fernando_mon@yahoo.com</td>
            </tr>
          </tbody>
        </table>
        <nav>
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#">Ant</a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">Sig</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Fin ejemplo de tabla Listado -->
  </div>
  <!--Inicio del modal agregar/actualizar-->
  <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Agregar Persona</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
        </div>
        <div class="modal-body">
          <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
              <div class="col-md-9">
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de la persona" required>
                
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="text-input">Tipo de documento</label>
              <div class="col-md-9">
                <input type="text" id="tipo_documento" name="tipo_documento" class="form-control" placeholder="Ingrese el tipo del documento">
                
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="text-input">Número de documento</label>
              <div class="col-md-9">
                <select id="num_documento" name="num_documento" class="form-control" placeholder="Ingrese el tipo del documento">
                  <option value="001">001</option>
                  <option value="002">002</option>
                  <option value="003">003</option>
                  <option value="004">004</option>
                  <option value="005">005</option>
                  <option value="006">006</option>
                  <option value="007">007</option>
                </select>
                
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="text-input">Dirección</label>
              <div class="col-md-9">
                <input type="text" id="dirección" name="dirección" class="form-control" placeholder="Dirección de la persona">
                
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="text-input">Teléfono</label>
              <div class="col-md-9">
                <input type="number" id="telefono" name="telefono" class="form-control" placeholder="Número telefonico de la persona">
                
              </div>
            </div>
            
            <div class="form-group row">
              <label class="col-md-3 form-control-label" for="email-input">Email</label>
              <div class="col-md-9">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email de la persona">
              </div>
            </div>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!--Fin del modal-->
  <!-- Inicio del modal Eliminar -->
  <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-danger" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Persona</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
        </div>
        <div class="modal-body">
          <p>Estas seguro de eliminar la persona?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-danger">Eliminar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- Fin del modal Eliminar -->
</main>
@endsection