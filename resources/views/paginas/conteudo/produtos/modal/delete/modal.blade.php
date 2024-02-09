<button type="button" class="btn btn-link text-danger text-gradient px-3 mb-0"
data-bs-toggle="modal" data-bs-target="#Deletar{{ $produtos->id }}"><i
    class="fas fa-pencil-alt text-dark me-2"
    aria-hidden="true"></i>Deletar</button>

    <div class="modal fade" id="Deletar{{ $produtos->id }}" tabindex="-1" role="dialog" aria-labelledby="Deletar{{ $produtos->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="py-3 text-center">
            <img
              src="{{asset('/images/produtos/')}}/{{$produtos->image}}"
              class="avatar avatar-xxl  me-3">
            <!-- <i class="ni ni-bell-55 ni-3x"></i> -->
            <h4 class="text-gradient text-danger mt-4">Deseja excluir este produto?</h4>
          </div>
          <div class="card-body">

            <div class="text-center">
              {!! Form::open(['method' => 'DELETE','route' => ['produtos.destroy', $produtos->id],'style'=>'display:inline']) !!}

              {!! Form::submit('Deletar', ['class' => 'btn btn-round bg-gradient-danger btn-lg w-100 mt-4 mb-0']) !!}
  
              {!! Form::close() !!}
            </div>
       
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>