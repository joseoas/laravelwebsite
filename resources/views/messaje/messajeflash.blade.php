   @if(session('messaje'))
	    <div class="alert alert-{{session('messaje')['alert']}}">
	    <strong>{{session('messaje')['text']}}</strong>
	       
	    </div>
   @endif