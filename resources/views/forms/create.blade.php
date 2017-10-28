
<div class="modal-body">

    {!! Form::open(
            array(
            'url' => 'home',
            'method' => 'post',
            'class' => 'form',  
            'files' => true)) 
    !!}
        <div class="row">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-md-6">
            <label>Fill the form</label>        
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
            <input type="text" name="title" class="form-control" placeholder="Titre (Required)" required="required">
            </div>
            <div class="col-md-6">
                
                <input type="file" name="media_url" class="form-control" >
                <!--{!! Form::file('media', ['class' => 'form-control', 'id'=>'article_img', 'required']) !!}
                
                <input type="file" name="img" class="form-control" onchange="readURL(this);">
                <img id="media_url" src="#" alt="Selected image" />-->
            </div>
            <div class="col-md-6">
                <select name="type" class="form-control" required>
                  <option value="1">Evagelisation</option>
                  <option value="2">Repas du Lundi</option>
                  <option value="3">Pain du jour</option>
                </select>
            </div>
            <div class="col-md-6">
                <input type="date" name="published_at" class="form-control" >
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <textarea name="article" ></textarea>
            </div>
        </div>
</div>
 
<div class="modal-footer">
    <button type="button" class="btn btn-default inverted" data-dismiss="modal">Fermer</button>

    {!! Form::submit('Valider', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form:: close() !!} 

<script type="text/javascript">
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#media_url')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>