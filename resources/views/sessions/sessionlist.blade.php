
  <div class="flash-text" style="text-align: center;">
      @if (Session::has('success_message'))
        <div class="alert alert-success">{{ Session::get('success_message') }}</div>
      @elseif (Session::has('error_message'))
        <div class="alert alert-danger">{{ Session::get('error_message') }}</div>
      @elseif (Session::has('info_message'))
        <div class="alert alert-info">{{ Session::get('info_message') }}</div>
      @elseif (Session::has('warning_message'))
        <div class="alert alert-danger">{{ Session::get('warning_message') }}</div>
      @endif
        <script>
        	window.setTimeout(function() {
        	    $(".flash-text").fadeTo(500, 0).slideUp(500, function(){
        	        $(this).remove(); 
        	    });
        	}, 4000);
        </script>
  </div>