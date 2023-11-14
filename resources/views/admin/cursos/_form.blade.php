<div class='input-field'>
    <label>Titulo</label>
    <input type="text" name='titulo' value="{{isset($r->titulo) ? $r->titulo : ''}}">
</div>

<div class='input-field'>
    <label>Descricao</label>
    <input type="text" name='descricao' value="{{isset($r->descricao) ? $r->descricao : ''}}">
</div>

<div class='input-field'>
    <label>Valor</label>
    <input type="number" name='valor' value="{{isset($r->valor) ? $r->valor : ''}}">
</div>

<div class='file-field input-field'>
    <div class='btn blue'>
        <input type="file" name='imagem'>
        <span>Imagem</span>
    </div>

    <div class='file-path-wrapper'>
        <input class='file-path validate' type="text">
    </div>
</div>

@if(isset($r->imagem))
<div class='intput-field'>
    <img width='150' src="{{asset($r->imagem)}}" />
</div>
@endif

<div class='input-field'>
    <p>
        <label>
            <input type="checkbox" class="filled-in" name='publicar' value='true' {{isset($r->publicar) && $r->publicar == 'sim' ? 'checked' : ''}}/>
            <span>Publicar?</span>
        </label>
    </p>
    <br>
</div>