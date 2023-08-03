<div id="movimentacoes" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
      <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Usuário</th>
                        <th>Locais de saida</th>
                        <th>Locais de recebimento</th>
                    </tr>
                </thead>
                <tbody id="dataMov"></tbody>
            </table>
      </div>
      <div class="modal-footer">
        <button onclick="javascript:$('#movimentacoes').modal('hide')" type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>
</div>