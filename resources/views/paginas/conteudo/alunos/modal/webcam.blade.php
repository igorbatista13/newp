<button class="btn btn-icon btn-outline-dark ms-2 export" data-bs-toggle="modal" data-bs-target="#Foto{{ $aluno->id }}"
    type="button">
    <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
    <span class="btn-inner--text"> Tirar Foto </span>
</button>

<style>
    #canvas {
        display: none;
    }
</style>

<div class="modal fade" id="Foto{{ $aluno->id }}" tabindex="-1" aria-labelledby="Foto{{ $aluno->id }}"
    aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="" id="EditUsuariosLabel"> Tirar Foto:  <b> {{$aluno->Nome_Completo}}  </b>
                    </b> </h5>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close">Fechar
                    (X)</button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="container-fluid py-2">



                 
                        <h1>Editar Aluno</h1>

                        <form id="uploadForm" method="POST" action="{{ route('alunos.update', $aluno->id) }}">
                            @csrf
                            @method('PUT')
                 
                
                 
                    
                            <video id="video" width="840" height="480" autoplay></video>
                            <button type="button" id="snap">Capturar</button>
                            <canvas id="canvas" width="640" height="480"></canvas>
                    
                            <input type="hidden" name="image" id="imageInput">
                    
                            <button type="submit">Atualizar Aluno</button>
                        </form>


                        @if (session('success'))


                            <div>
                                <p>{{ session('success') }}</p>
                                <img src="{{ asset('uploads/' . session('path')) }}" alt="Uploaded Image">
                            </div>
                        @endif
                       


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const snapButton = document.getElementById('snap');
    const imageInput = document.getElementById('imageInput');

    // Solicitar acesso à câmera
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(stream => {
            video.srcObject = stream;
        })
        .catch(error => {
            console.error('Erro ao acessar a câmera:', error);
        });

    // Capturar a imagem quando o botão for clicado
    snapButton.addEventListener('click', () => {
        const context = canvas.getContext('2d');
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        const dataURL = canvas.toDataURL('image/png');
        imageInput.value = dataURL;
        canvas.style.display = 'block';
    });
</script>