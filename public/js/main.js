/*
	Caminar by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
*/

(function($) {

	skel.breakpoints({
		xlarge: '(max-width: 1680px)',
		large: '(max-width: 1280px)',
		medium: '(max-width: 980px)',
		small: '(max-width: 736px)',
		xsmall: '(max-width: 480px)'
	});

	$(function() {

		var	$window 	= $(window),
			$body 		= $('body'),
			$header 	= $('#header');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

		// Gallery.
			$('.gallery').poptrox();

	});

})(jQuery);

$('.files-label input[type="file"]').on('change', function(e){
	var fileName = [],
		$this = $(this);



	for(var i = 0; i < e.target.files.length; i++){
        $this.siblings('span').append('<span>' + e.target.files[i].name + '<br/></span>');
	}
});
/*
$('.files-label input[type="file"]').on('change', function(input){
    if(input.fales && input.files[0]){
        var reader = new FileReader();

        reader.onload = function (e){
            $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
});
/*
function heandleFileSelect(evt){
	var filesv = evt.target.files;
	for(var i=0, f; f=files[i]; i++){

		if(!f.type.math('image.*')){
			continue;
		}
		var reader = new FileReader();
		reader.onload = (function(theFile){
			return function(e){
				var span = document.createElement('span');
				span.innerHTML = ['<img style="width:300; border-width:3px; border-style:solid; border-color:#000; margin:8px;" src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                document.getElementById('list').insertBefore(span, null);
			};
		})(f);
		reader.readAsDataURL(f);
	}
}
document.getElementById('files').addEventListener('change', handleFileSelect, false);*/