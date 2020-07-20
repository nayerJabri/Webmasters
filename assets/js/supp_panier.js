(function($){
  
	$('.supp_panier').click(function(event){
		event.preventDefault();
		$.get($(this).attr('href'),{},function(data){
			var selector ='';
			var select ='';

 			selector= selector.concat("#q",data.ref);
			select = select.concat("#tps",data.ref);
  			if(data.type == 'refresh') {
 				location.reload();

 			} 
			else {     
				    $(selector).empty().append(data.q);
					$(select).empty().append(data.tp);  
					$('#total').empty().append(data.total);
				 } 
		
		},'json')
		return false;

	})
	$('.plus_panier').click(function(event){
		event.preventDefault();
		$.get($(this).attr('href'),{},function(data){
 			var selector ='';
 			var select ='';
 			selector= selector.concat("#q",data.ref);
 			select = select.concat("#tps",data.ref);
			$(select).empty().append(data.tp);  			
			$(selector).empty().append(data.q); 	
			$('#total').empty().append(data.total);

		
		},'json')
		return false;

	})

})(jQuery);