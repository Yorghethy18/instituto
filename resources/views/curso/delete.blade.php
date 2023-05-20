<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$curso->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{route('curso.destroy',$curso->id)}}" method="post">
      @csrf <!-- Ejecuta sin ningún incoveniente (SOLO SE USA EN FORMULARIOS) -->
      @method('DELETE')
     <!--input type="submit" class="btn btn-danger" value="Eliminar">-->
      

    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminación de Registros</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        ¿Deseas eliminar el registro de {{$curso->nombre_curso." ".$curso->nombre_docente}} ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-danger" value="Eliminar">
      </div>
    </div>
    </form>
  </div>
</div>