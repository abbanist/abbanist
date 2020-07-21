<div class="offs">
      

       <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=269153363622508&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>


		@foreach ($frontsetup as $element)
			{{-- expr --}}
		<div class="fb-page" data-href="{{$element->facebook_page}}" data-tabs="timeline" data-width="350" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
			<blockquote cite="{{$element->facebook_page}}" class="fb-xfbml-parse-ignore">
				<a href="{{$element->facebook_page}}"></a>
			</blockquote>
		</div>

	

		@endforeach


		@foreach ($frontsetup as $element)

			<div>
				{!!$element->banner_sidebar!!}
			</div>

		@endforeach


        
</div> 
