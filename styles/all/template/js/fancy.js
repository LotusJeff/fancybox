	$(document).ready(function() {
	$(function() {
		var $targetImage = $('.postimage')
		$targetImage = $targetImage.not(function() {
			return $(this).closest('.signature').length > 0;
		});		
		setTimeout(function() {
			$targetImage.one('load', function() {
				if ($(this).closest('.postlink').length > 0) return;
				if ($(this).parent('a').length > 0) {
						$(this).parent('a').attr({
							'class' :'fancybox',
							'rel' :'gallery1',
							'title': $(this).attr('alt')
						})
				} 
				else if (lotusjeffFancybox.small > 0) {
					$(this).wrap(function() {
						var url = $(this).attr('src');
						return $('<a/>').attr({
							'href': url,
							'class' :'fancybox',
							'rel' :'gallery1',
							'title': (url.indexOf('download/file.php') !== -1) ? $(this).attr('alt') : url.split('/').pop()
						});
					})
				}
			}).each(function() {
				if (this.complete) $(this).load();
			});
		}, 0);
	});
	});
	$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none',
		helpers	: {
			title	: {
				type: 'inside'
			}

			,buttons : {}
			
			,thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
	});
