<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="title">
            <div class="title-body">
            <form id="formRol" name="formRol">
                <div class="card-body">
                    <input type="hidden" id="idRol" name="idRol" value="">

                  <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del Rol">
                  </div>

                  <div class="form-group">
                        <label class="control-label">Descripcion</label>
                        <textarea class="form-control" name="txtDescripcion" id="txtDescripcion" placeholder="Descripción del Rol"  rows="2"></textarea>
                 </div>

                 <div class="form-group">
                  <label>Estado</label>
                  <select class="form-control select2 select2-hidden-accessible" name="listStatus" id="listStatus" >
                    <option value="1">Activo</option>
                    <option value="2">Inactivo</option>
                  </select>
                </div>                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button id="btn" type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i><span id="btnText">Guardar</span></button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Cerrar</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>