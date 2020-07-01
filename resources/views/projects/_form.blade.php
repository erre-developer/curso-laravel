@csrf 

<div class="from-group">
    <label for="title">Titulo proyecto</label><br>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="title" value="{{ old('title' , $project->title)}}">
</div>
<br>
<div class="from-group">
    <label for="url">Url</label><br>
    <input class="form-control border-0 bg-light shadow-sm" type="text" name="url" value="{{ old('url' , $project->url)}}">
</div>
<br>
<div class="from-group">
    <label for="description">Descripción</label><br>
    <textarea class="form-control border-0 bg-light shadow-sm" name="description" id="" cols="30" rows="4">{{ old('description',$project->description)}}</textarea>
</div>
<br>
<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}"> Cancelar</a>