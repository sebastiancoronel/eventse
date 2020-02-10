@extends('layouts.base_registro')

@section('formulario_cuenta')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <span class="mt-4 text-uppercase" style="text-align:center; color:#3B4AFC;">Completá los datos de tu cuenta para empezar a publicar</span>

                  <div class="card-body">
                      <form method="POST" action="">
                          @csrf
                        <!-- DNI -->
                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">DNI</label>
                            <input class="form-control col-md-6" type="number" name="dni" value="">
                        </div>
                        <!-- Provincia -->
                          <div class="form-group row">
                              <label for="provincia" class="col-md-4 col-form-label text-md-right">Provincia</label>
                              <div class="col-md-6">
                                  <select class="form-control" name="provincia">
                                    <option value="">Santaigo del Estero</option>
                                    <option value="">Córdoba</option>
                                    <option value="">Tucumán</option>
                                  </select>
                              </div>
                          </div>
                          <!-- Ciudad -->
                          <div class="form-group row">
                              <label for="ciudad" class="col-md-4 col-form-label text-md-right">Ciudad</label>
                              <div class="col-md-6">
                                  <select class="form-control" name="localidad">
                                    <option value="">Santaigo del Estero</option>
                                    <option value="">La Banda</option>
                                    <option value="">Fernandez</option>
                                  </select>
                              </div>
                          </div>
                          <!-- Teléfono -->
                          <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>
                            <input class="form-control col-md-6" type="number" name="telefono" value="">
                          </div>
                          <div class="text-center">
                            <button class="btn btn-primary" style="background:#3B4AFC" type="button" name="button">Finalizar</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
