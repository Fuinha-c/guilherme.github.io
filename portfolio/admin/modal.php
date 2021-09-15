<div class="modal fade" id="modal-exclusao-<?php echo $curso['id_curso']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
        <h4 class="modal-title text-center">Exclusão de Curso</h4>
      </div>
      <div class="modal-body text-left">
        Confirma exclusão do curso : <?php echo $curso['nome']; ?> ?
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-default " data-dismiss="modal">Fechar</button>
        <a href="excluir-curso.php?id_curso=<?php echo $curso['id_curso']; ?>" class="btn btn-danger glyphicon glyphicon-trash"> Excluir</a>
      </div>
    </div>
  </div>
</div>