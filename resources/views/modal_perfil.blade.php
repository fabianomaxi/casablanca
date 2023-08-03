<div id="modulos_permitidos" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Módulos de acesso permitidos</h4>
      </div>
      <form name="frm_permissions" id="frm_permissions" method="post" action="/save-permissions">
        @csrf
        <div class="modal-body">
            <div class="iq-card-body" id="dataPerfil"></div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
              <button type="button" onclick="javascript:$('#modulos_permitidos').modal('hide')" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
      </form>

  </div>
</div>