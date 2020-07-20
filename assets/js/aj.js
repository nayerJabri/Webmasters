(function($){
  
	$('.addpanier').click(function(event){
		event.preventDefault();
		$.get($(this).attr('href'),{},function(data){
		$('#total').empty().append(data.total);
		},'json')
		return false;

	})

})(jQuery);

