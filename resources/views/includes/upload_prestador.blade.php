<div class="modal fade" id="upload_prestador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload de Comprovantes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:$('#upload_prestador').modal('hide')">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Comprovante:</label>
            <input type="file" name="foto" accept="image/*" capture multiple>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Observação:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="javascript:$('#upload_prestador').modal('hide')">Fechar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>