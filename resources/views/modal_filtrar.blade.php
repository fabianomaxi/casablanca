<div id="filtrar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Filtrar</h4>
      </div>
      <div class="modal-body">
        <table class="table table-bordered table-responsive-md table-striped text-center">
          <thead>
            <form action="">
              <div class="form-row">
                <div class="col">
                  <label for="serie">Serie</label>
                  <input type="text" class="form-control" required placeholder="Serie" name="serie"></input>
                </div>
              </div>
            </form>
          </thead>
          <tbody>
            <div class="form-row">
              <div class="col">
                <label for="email"></label>
                <div id="dataFiltrar"></div>
              </div>
            </div>
          </tbody>
        </table>

        <div class="form-row">
          <div class="col">
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          </div>
          
        </div>

      </div>
    </div>
  </div>
</div>