@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-md-4 px-3 pb-0 h-100">
        <x-title-view title="Edição de post" titleIcon="blog" buttonColor="bg-dark" buttonIcon="arrow-left" buttonLabel="Voltar" route="posts.index"></x-title-view>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row pt-3">
                <div class="col-12 col-md-6">
                    <div class="card p-4">
                        <div class="pb-3">
                            <h5>Dados básicos</h5>
                            <p class="0text-muted">Preecha os dados abaixo para cadastrar o post.</p>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="file-upload-wrapper">
                                    <input type="file" id="input-file-now" class="file-upload" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row pt-5">
                            <div class="col-12">
                                <div class="md-form mt-0">
                                    <input id="title-post" name="title" type="text" value="{{$post->title}}" ength="30" class="form-control" required>
                                    <label for="title-post">Título do post</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row pt-3">
                            <div class="col-12">
                                <div class="md-form mt-0">
                                    <input id="summary-post" name="summary" value="{{$post->summary}}" type="text" length="100" class="form-control" required>
                                    <label for="summary-post-post">Resumo do post</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="md-form mt-0">
                                    <select class="mdb-select md-form colorful-select dropdown-primary" multiple searchable="Pesquise..">
                                        <option value="" disabled selected>Escolha as opções</option>
                                        <option value="1">USA</option>
                                    </select>
                                    <label class="mdb-main-label">Tags do post</label>
                                    <button class="btn-save btn primary-bg btn-sm text-white">Atribuir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pt-3 pt-md-0">
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
                                        {{$post->description}}
                                    </textarea>
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
