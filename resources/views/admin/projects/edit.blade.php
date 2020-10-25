@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid pt-md-4 px-3 pb-0 h-100">
        <x-title-view title="Edição de projeto" titleIcon="project-diagram" buttonColor="bg-dark"
                      buttonIcon="arrow-left"
                      buttonLabel="Voltar" route="projects.index"></x-title-view>
        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row pt-3">
                <div class="col-12 col-md-6">
                    <div class="card p-4">
                        <div class="pb-3">
                            <h5>Dados básicos</h5>
                            <p class="0text-muted">Preecha os dados abaixo para salvar um projeto.</p>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <div class="file-upload-wrapper">
                                    <input name="file" type="file" id="input-file-now"
                                           value="{{$project->getImage()}}"
                                           data-default-file="{{$project->getImage()}}"
                                           class="file-upload"/>
                                    @error('file')
                                    <label class="text-danger pt-2">{{ $errors->first('file') }}</label>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="md-form mt-0">
                                    <select name="type_id" id="typeSelect"
                                            class="mdb-select md-form colorful-select dropdown-primary">
                                        <option value="" disabled>Escolha</option>
                                        @foreach($types as $type)
                                            <option @if($project->type_id === $type->id) selected @endif
                                                value="{{$type->id}}">{{$type->title}}</option>
                                        @endforeach
                                    </select>
                                    <label class="mdb-main-label" for="typeSelect">Tipo</label>
                                    @if($errors->has('type_id'))
                                        <span class="pt-2 text-danger d-flex">{{ $errors->first('type_id') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="md-form">
                                    <textarea id="resume-project" class="md-textarea form-control" rows="3"
                                              maxlength="200" name="resume">{{ $project->resume }}</textarea>
                                    <label for="resume-project">Resumo do projeto</label>
                                    @if($errors->has('resume'))
                                        <span class="pt-2 text-danger d-flex">{{ $errors->first('resume') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pt-md-0">
                    <div class="card p-4">
                        <div class="pb-3">
                            <h5>Dados do projeto</h5>
                        </div>
                        <div class="form-row">
                            <div class="col-12 mb-2">
                                <div class="md-form mt-0">
                                    <input value="{{ $project->client }}" id="client-project" name="client" type="text"
                                           maxlength="80"
                                           class="form-control {{$errors->has('client') ? 'is-invalid' : ''}}">
                                    <label for="client-project">Cliente</label>
                                    @if($errors->has('client'))
                                        <div class="invalid-feedback">
                                            <span>{{ $errors->first('client') }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="md-form mt-0">
                                    <input value="{{ $project->power_system }}" id="power-project" name="power_system"
                                           type="text" maxlength="40"
                                           class="form-control {{$errors->has('power_system') ? 'is-invalid' : ''}}">
                                    <label for="power-project">Potência do sistema</label>
                                    @if($errors->has('power_system'))
                                        <div class="invalid-feedback">
                                            <span>{{ $errors->first('power_system') }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="md-form mt-0">
                                    <input value="{{ $project->economy_money }}" id="economy-money-project"
                                           name="economy_money"
                                           type="text" maxlength="20"
                                           class="form-control {{$errors->has('economy_money') ? 'is-invalid' : ''}}">
                                    <label for="economy-money-project">Economia gerada (R$)</label>
                                    @if($errors->has('economy_money'))
                                        <div class="invalid-feedback">
                                            <span>{{ $errors->first('economy_money') }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="md-form mt-0">
                                    <input value="{{ $project->economy_co2 }}" id="economy-co-project"
                                           name="economy_co2" type="text" maxlength="25"
                                           class="form-control {{$errors->has('economy_co2') ? 'is-invalid' : ''}}">
                                    <label for="economy-co-project">Economia gerada (CO²)</label>
                                    @if($errors->has('economy_co2'))
                                        <div class="invalid-feedback">
                                            <span>{{ $errors->first('economy_co2') }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb- pt-5">
                <div class="col-12">
                    <div class="bg-white p-3 d-flex justify-content-end"
                         style="border-top: 4px solid #f9c200 !important;">
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
