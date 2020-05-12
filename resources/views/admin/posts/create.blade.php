@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-md-4 px-3 pb-0 h-100">
        <x-title-view title="Cadastro de post" titleIcon="blog" buttonColor="bg-dark" buttonIcon="arrow-left" buttonLabel="Voltar" route="posts.index"></x-title-view>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
             <div class="row pt-3">
                 <div class="col-12 col-md-6">
                    <div class="card p-4">
                        <div class="pb-3">
                            <h5>Dados básicos</h5>
                            <p class="0text-muted">Preecha os dados abaixo para cadastrar o post.</p>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <div class="file-upload-wrapper">
                                    <input name="file" type="file" id="input-file-now" class="file-upload" />
                                    @error('file')
                                        <label class="text-danger pt-2">{{ $errors->first('file') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="md-form mt-0">
                                    <input value="{{ old('title') }}" id="title-post" name="title" type="text" length="30" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" >
                                    <label for="title-post">Título do post</label>
                                    @if($errors->has('title'))
                                        <div class="invalid-feedback">
                                            <span>{{ $errors->first('title') }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="md-form mt-0">
                                    <input value="{{ old('summary') }}" id="summary-post" name="summary" type="text" length="100" class="form-control {{$errors->has('summary') ? 'is-invalid' : ''}}">
                                    <label for="summary-post-post">Resumo do post</label>
                                    @if($errors->has('summary'))
                                        <div class="invalid-feedback">
                                            <span>{{ $errors->first('summary') }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-12 col-md-6 pt-md-0">
                     <div class="card p-4">
                         <div class="pb-3">
                             <h5>Descrição do post</h5>
                             <p class="0text-muted">
                                 Capriche na descrição da postagem para que ela seja interessante para
                                 os seus clientes.
                             </p>
                         </div>
                         <div class="form-row">
                             <div class="col-12">
                                 <div class="md-form mt-0">
                                    <textarea id="post-description" cols="80" rows="10" name="description">
                                        {{ old('description') }}
                                    </textarea>
                                     @if($errors->has('description'))
                                         <span class="pt-2 text-danger d-flex">{{ $errors->first('description') }}</span>
                                     @endif
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>
            <div class="row pb- pt-5">
                <div class="col-12">
                    <div class="bg-white p-3 d-flex justify-content-end" style="border-top: 4px solid #f9c200 !important;">
                        <div class="">
                            <button type="reset" class="btn bg-light btn-md waves-effect text-dark">Limpar</button>
                            <button type="submit" class="btn primary-bg btn-md waves-effect text-white">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('pageScripts')
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="{{asset('js/addons/mdb-file-upload.min.js')}}"></script>
@stop

