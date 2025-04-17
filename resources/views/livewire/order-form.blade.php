<div>
    <!-- Header -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Nueva Orden de Trabajo</h3>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <label class="form-label">Fecha de ingreso de orden</label>
                    <input type="datetime-local" class="form-control">
                </div>
                <div class="col-md-3 mb-4">
                    <label class="form-label">Receta</label>
                    <input type="file" class="form-control">
                </div>

            </div>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <label class="form-label">Responsable de Ingreso</label>
                    <select class="form-select">
                        <option>Seleccione responsable</option>
                    </select>
                </div>
                <div class="col-md-3 mb-4">
                    <label class="form-label">Cliente</label>
                    <select class="form-select">
                        <option>Seleccione Cliente</option>
                    </select>
                </div>
                <div class="col-md-3 mb-4">
                    <label class="form-label">Servicio</label>
                    <select class="form-select">
                        <option>Seleccione Servicio</option>
                    </select>
                </div>
                <div class="col-md-3 mb-4">
                    <label class="form-label">Aeronave</label>
                    <select class="form-select">
                        <option>Seleccione Aeronave</option>
                    </select>
                </div>
                <div class="col-md-3 mb-4">
                    <label class="form-label">Piloto</label>
                    <select class="form-select">
                        <option>Seleccione Piloto</option>
                    </select>
                </div>
                <div class="col-md-3 mb-4">
                    <label class="form-label">Apoyo en Tierra</label>
                    <select class="form-select">
                        <option>Seleccione Apoyo</option>
                    </select>
                </div>

            </div>
        </div>
    </div>

    <!-- Lotes -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Lotes</h3>
            <div class="block-options">
                <button type="button" class="btn btn-sm btn-alt-primary">
                    <i class="fa fa-plus"></i> Agregar Lote
                </button>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-vcenter">
                <thead>
                <tr>
                    <th>Lote</th>
                    <th>Hectáreas</th>
                    <th>Ubicación</th>
                    <th>Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <select class="form-select">
                            <option>Seleccione Lote</option>
                        </select>
                    </td>
                    <td>
                        <input type="number" class="form-control">
                    </td>
                    <td>
                        <input type="text" class="form-control-alt form-control" readonly>
                    </td>
                    <td>
                        <select class="form-select">
                            <option>Estado</option>
                        </select>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-alt-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="input-group">
                        <span class="input-group-text input-group-text-alt">Total Hectareas</span>
                        <input class="form-control form-control-alt" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Productos -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Productos</h3>
            <div class="block-options">
                <button type="button" class="btn btn-sm btn-alt-primary">
                    <i class="fa fa-plus"></i> Agregar Producto
                </button>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>¿Lo dejo el cliente?</th>
                        <th>Dosis/HA</th>
                        <th>¿Dosis manual?</th>
                        <th>Cantidad Total a Utilizar</th>
                        <th>Sobra/Falta</th>
                        <th>Observación</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select class="form-select">
                                <option>Seleccione Producto</option>
                            </select>
                        </td>
                        <td>
                            <input type="number" class="form-control-alt form-control">
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value=""  checked="">
                            </div>
                        </td>
                        <td>
                            <input type="number" class="form-control">
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value=""  checked="">
                            </div>
                        </td>
                        <td>
                            <input type="number" class="form-control-alt form-control" readonly>
                        </td>
                        <td>
                            <input type="number" class="form-control-alt form-control" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control">
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-alt-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-select">
                                <option>Seleccione Producto</option>
                            </select>
                        </td>
                        <td>
                            <input type="number" class="form-control-alt form-control">
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value=""  checked="">
                            </div>
                        </td>
                        <td>
                            <input type="number" class="form-control">
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value=""  checked="">
                            </div>
                        </td>
                        <td>
                            <input type="number" class="form-control-alt form-control" readonly>
                        </td>
                        <td>
                            <input type="number" class="form-control-alt form-control is-valid" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control">
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-alt-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-select">
                                <option>Seleccione Producto</option>
                            </select>
                        </td>
                        <td>
                            <input type="number" class="form-control-alt form-control">
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value=""  checked="">
                            </div>
                        </td>
                        <td>
                            <input type="number" class="form-control">
                        </td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" value=""  checked="">
                            </div>
                        </td>
                        <td>
                            <input type="number" class="form-control-alt form-control" readonly>
                        </td>
                        <td>
                            <input type="number" class="form-control-alt form-control is-invalid" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control">
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-alt-danger">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Vuelos -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Vuelos</h3>
        </div>
        <div class="block-content">
            <!-- Configuración de cantidad de vuelos -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <label class="form-label">Cantidad de Vuelos</label>
                    <input type="number" class="form-control" min="1">
                </div>
            </div>

            <!-- Tabla de vuelos -->
            <table class="table table-vcenter">
                <thead>
                <tr>
                    <th>N° Vuelo</th>
                    <th>Has. a Realizar</th>
                    <th colspan="2">Lotes a Aplicar</th>
                    <th colspan="3">Productos</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><input type="number" class="form-control"></td>
                    <td colspan="2">
                        <!-- Sub-tabla de lotes -->
                        <table class="table table-sm">
                            <tr>
                                <td>Lote 1</td>
                                <td>Has. Total: 50</td>
                                <td>Has. a Aplicar: <input type="number" class="form-control form-control-sm"></td>
                            </tr>
                        </table>
                    </td>
                    <td colspan="3">
                        <!-- Sub-tabla de productos -->
                        <table class="table table-sm">
                            <tr>
                                <td>Producto 1</td>
                                <td>Cantidad: <input type="number" class="form-control form-control-sm" readonly></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Botones de acción -->
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-12 text-end">
                    <button type="button" class="btn btn-alt-secondary me-1">
                        Cancelar
                    </button>
                    <button type="button" class="btn btn-primary">
                        Guardar Orden
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
