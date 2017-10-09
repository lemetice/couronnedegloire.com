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
        <input type="text" name="title" class="form-control" placeholder="Titre (Required)">
        </div>
        <div class="col-md-6">
        <center>
            <img id="mar_cr" class="img-responsive" src="{{ URL::asset('assets/images/livre.png') }}" alt="produit" />
        </center>
        {!! Form::file('photos', ['class' => 'form-control', 'id'=>'marque_c', 'required']) !!}
        <input type="file" name="img" class="form-control" onchange="readURL(this);">
        <img id="#media_url" src="#" alt="Selected image" />

        </div>
        <div class="col-md-6">
        <input type="hidden" name="type" class="form-control" placeholder="evangilisation">
        </div>
        <div class="col-md-6">
        <input type="date" name="published_at" class="form-control" placeholder="Date de publication">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <textarea rows="3" cols="5" class="form-control" name="body" placeholder="Description"></textarea>
        </div>
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