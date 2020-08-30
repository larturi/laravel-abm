@csrf

<div class="form-group">
    <label for="title">Titulo</label>
    <input class="form-control bg-light shadow-sm border-0" type="text" name="title" value="{{ old('title', $project->title) }}">
</div>

<div class="form-group">
    <label for="title">Descripción</label>
    <input class="form-control bg-light shadow-sm border-0" type="textarea" name="description" value="{{ old('description', $project->description) }}">
</div>

<div class="form-group">
    <label for="title">URL</label>
    <input class="form-control bg-light shadow-sm border-0" type="text" name="url" value="{{ old('url', $project->url) }}">
</div>


<button class="btn btn-primary btn-block">{{ $btnText }}</button>

<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>
