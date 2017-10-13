
<div class="modal-body">
    
    <!-- Modal content-->
        {!! Form::model($article[0], 
        ['method'    => 'PATCH', 
        'route' => ['home.update', $article[0]->slug], 
        'class'      => 'form', 
        'novalidate' => 'novalidate', 
        'files'      =>  true
        ])!!}
        <div class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-md-6">
            <label>Edit the form</label>        
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                {!! Form::text('title', null, ['placeholder'=>'title', 'class' => 'form-control',  'required']) !!}            
            </div>
            <div class="col-md-6">
                <input type="file" name="img" class="form-control" onchange="readURL(this);">
                <img id="media_url" src="#" alt="Selected image" />
            </div>
            <div class="col-md-6">
                <select name="type" class="form-control">
                  <option value="1">Evagelisation</option>
                  <option value="2">Repas du Lundi</option>
                  <option value="3">Over 30</option>
                </select>
            </div>
            <div class="col-md-6">

                {!! Form::date('published_at', null, ['placeholder'=>'Plublished_at', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                {!! Form::textarea('body', null, ['placeholder'=>'Description', 'class' => 'form-control']) !!}
            </div>
        </div>
</div>
 
<div class="modal-footer">
    <button type="button" class="btn btn-default inverted" data-dismiss="modal">Fermer</button>

    {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form:: close() !!}  
