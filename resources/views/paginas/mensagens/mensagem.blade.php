<div class="card-body">
    @if ($message = Session::get('success'))

    <div class="toast-container" style="position: absolute; top: 60px; right: 60px;">
      <div class="toast bg-success text-white fade show">
          <div class="toast-header bg-success text-white">
              <strong class="me-auto"><i class="bi-globe"></i>Sucesso!</strong>
              <small>{{date("h:i a")}}</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
          </div>
          <div class="toast-body">
            {{$message}}
          </div>
      </div>
  </div>
  
    @elseif ($message = Session::get('edit'))
 
    <div class="toast-container" style="position: absolute; top: 60px; right: 60px;">
      <div class="toast bg-warning text-white fade show">
          <div class="toast-header bg-warning text-white">
              <strong class="me-auto"><i class="bi-globe"></i>Sucesso!</strong>
              <small>{{date("h:i a")}}</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
          </div>
          <div class="toast-body">
            {{$message}}
          </div>
      </div>
  </div>

  
    @elseif ($message = Session::get('delete'))
    <div class="toast-container" style="position: absolute; top: 60px; right: 60px;"  data-delay="500">
      <div class="toast bg-danger text-white fade show"  data-delay="500">
          <div class="toast-header bg-danger text-white" data-delay="500">
              <strong class="me-auto"><i class="bi-globe"></i>Sucesso!</strong>
              <small>{{date("h:i a")}}</small>
              <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
          </div>
          <div class="toast-body">
            {{$message}}
          </div>
      </div>
  </div>
    </div>
  
    @endif
  </div>