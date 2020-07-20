(function($){
  
$('.addwish').click(function(event){
		event.preventDefault();
        
		$.get($(this).attr('href'),{},function(data){
			
			if(data.type == "ajout")
			{
				$(data.reference).addClass('selected');
			}
			else if(data.type == "supression")
			{
				$(data.reference).removeClass('selected');
			}
				    
		},'json')
		return false;

	})

})(jQuery);