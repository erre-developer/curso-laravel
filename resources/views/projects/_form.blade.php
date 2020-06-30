@csrf 

<label for="">Titulo proyecto
    <br>
    <input type="text" name="title" value="{{ old('title' , $project->title)}}">
</label>
<br>
<label for="">Url proyecto
    <br>
    <input type="text" name="url"  value="{{ old('url',$project->url)}}">
</label>
<br>
<label for="">Descripción
    <br>
    <textarea name="description" id="" cols="30" rows="4">{{ old('description',$project->description)}}</textarea>
</label>
<br>
<button>{{$btnText}}</button>