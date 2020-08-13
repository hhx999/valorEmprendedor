@extends('adminlte::page')

@section('title', 'Artículos')

@section('content_header')
    <h1>Artículos</h1>
@stop

@section('content')
<!--<script src="{{ asset('/vendors/ckeditor/src/ckeditor.js') }}"></script>-->
 <script src="https://cdn.ckeditor.com/4.14.0/standard-all/ckeditor.js"></script>
</head>
<div class="row">
  @if (\Session::has('success'))
  <div class="col-md-12">
       <p> {!! \Session::get('success') !!}</p>
  </div>
  @endif
          <div class="col-md-12">
          <form method="post" name="agregarArticulo" action="{{route('agregarArticulo')}}" enctype="multipart/form-data">
                @csrf
             <div class="card-body">
                  <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingresar título del artículo..." value="{{$articulo->titulo}}">
                  </div>
                  <div class="form-group">
                    <label for="subtitulo">Subtitulo</label>
                    <input type="text" name="subtitulo" class="form-control" id="subtitulo" placeholder="Ingresar subtitulo del artículo..." value="{{$articulo->subtitulo}}">
                  </div>
                  <div class="form-group">
                    <label for="copete">Copete</label>
                    <input type="text" name="copete" class="form-control" id="copete" placeholder="Ingresar copete..." value="{{$articulo->copete}}">
                  </div>
                  <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Portada</h3>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="descripcionPortada">Descripción de la portada</label>
                          <input type="text" name="descripcionPortada" class="form-control" id="descripcionPortada" placeholder="Ingresar de descripcion portada..." value="{{$articulo->descripcionPortada}}">
                          <label for="portada">Imagen de portada</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input name="imagen" type="file" class="custom-file-input" id="portada" value="{{$articulo->imagen}}">
                              <label class="custom-file-label" for="portada">Elegir imagen</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text" id="">Subir</span>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                        <label>Categoría</label>
                        <select class="custom-select" name="categoria">
                          <option selected disabled>Elegir categoría...</option>
                          @foreach($categorias as $categoria)
                        		@if($articulo->categoria_id == $categoria->id)
                        			<option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
                        		@else
                          			<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                          		@endif
                          @endforeach
                        </select>
                  </div>
            </div>
          <!-- EDITOR -->
            <!-- /.card-header -->
            <div class="panel-body">
                            <textarea class="ckeditor"  name="cuerpo" id="editor1">{{$articulo->descripcion}}</textarea>
            </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-primary">Editar artículo</button>
          </div>
        </form>

@stop

@section('css')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script> console.log('Hi!'); </script>
 <script>
    // Don't forget to add CSS for your custom styles.
    CKEDITOR.addCss('figure[class*=easyimage-gradient]::before { content: ""; position: absolute; top: 0; bottom: 0; left: 0; right: 0; }' +
      'figure[class*=easyimage-gradient] figcaption { position: relative; z-index: 2; }' +
      '.easyimage-gradient-1::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 66, 174, 234, .72 ) 100% ); }' +
      '.easyimage-gradient-2::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 228, 66, 234, .72 ) 100% ); }');

    CKEDITOR.replace('editor1', {
      extraPlugins: 'easyimage',
      removePlugins: 'image',
      removeDialogTabs: 'link:advanced',
      toolbar: [{
          name: 'document',
          items: ['Undo', 'Redo']
        },
        {
          name: 'align',
          items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
        },
        {
          name: 'styles',
          items: ['Format']
        },
        {
          name: 'basicstyles',
          items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']
        },
        {
          name: 'paragraph',
          items: ['NumberedList', 'BulletedList']
        },
        {
          name: 'links',
          items: ['Link', 'Unlink']
        },
        {
          name: 'insert',
          items: ['EasyImageUpload']
        }
      ],
      height: 630,
      cloudServices_uploadUrl: 'https://33333.cke-cs.com/easyimage/upload/',
      // Note: this is a token endpoint to be used for CKEditor 4 samples only. Images uploaded using this token may be deleted automatically at any moment.
      // To create your own token URL please visit https://ckeditor.com/ckeditor-cloud-services/.
      cloudServices_tokenUrl: 'https://33333.cke-cs.com/token/dev/ijrDsqFix838Gh3wGO3F77FSW94BwcLXprJ4APSp3XQ26xsUHTi0jcb1hoBt',
      easyimage_styles: {
        gradient1: {
          group: 'easyimage-gradients',
          attributes: {
            'class': 'easyimage-gradient-1'
          },
          label: 'Blue Gradient',
          icon: 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/easyimage/icons/gradient1.png',
          iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/easyimage/icons/hidpi/gradient1.png'
        },
        gradient2: {
          group: 'easyimage-gradients',
          attributes: {
            'class': 'easyimage-gradient-2'
          },
          label: 'Pink Gradient',
          icon: 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/easyimage/icons/gradient2.png',
          iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/easyimage/icons/hidpi/gradient2.png'
        },
        noGradient: {
          group: 'easyimage-gradients',
          attributes: {
            'class': 'easyimage-no-gradient'
          },
          label: 'No Gradient',
          icon: 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/easyimage/icons/nogradient.png',
          iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.14.0/examples/assets/easyimage/icons/hidpi/nogradient.png'
        }
      },
      easyimage_toolbar: [
        'EasyImageFull',
        'EasyImageSide',
        'EasyImageGradient1',
        'EasyImageGradient2',
        'EasyImageNoGradient',
        'EasyImageAlt'
      ]
    });
  </script>
@stop