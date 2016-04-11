/**
* Plugin for easy form submissions via ajax
* Author @ahmedali5530
***/
(function ( $ ) {
    $.fn.submit = function(o, sc, fc ,cc, pc ) {
		
		//merge the default options with given options
        var ss = $.extend({
            placement: 'top',
			redirect : false,
			reset 	 : false,
			refresh  : false,
			datatype : 'html',
			method : 'POST',
			cache : false
        }, o );
		
		//get the current form
		//var form = document.forms[this.selector];
		//console.log($(this));
		if(typeof $(this)[0] === 'undefined'){
			var form = $(this).context;
			var form_data = form;
			var btn = $(this).context.elements.submit;
		}else{
			var form = $(this)[0];
			var form_data = form.elements;
			var btn = $(this)[0].elements.submit;
			
		}
		
		//disable the submit button to stop double submitting
		
		var btn_text = $(btn).html();
		$(btn).attr('disabled','disabled');
		//$(btn).html('<i class="fa fa-spinner fa-spin fa-lg"></i>');
		
		//get the url of the form
		var url = form.action;
		
		
		//determine the enctype of form
		var enctype = form.enctype;
		
		//check if multipart is set to true
		if(enctype == 'multipart/form-data'){
		
			$.ajaxSetup({
				contentType : false,
				processData : false
			});
			
			//prepare the files data
			var data = new FormData(form_data);
			
			/* $.each(form,function(k,v){
			
				if(v.type == 'file'){
					
					$.each(form.elements[k]['files'],function(ck,cv){
						
						if(form.elements[k]['files'].length == 1){
						
							data.append(v['name'],cv);
						
						}else{
						
							data.append(v['name']+'['+ck+']',cv);
						
						}
					
					});
					
				}
				
			}); */
			
			//prepares the post data
			
			$.each($(form).serializeArray(),function(k,v){
			
				data.append(v.name,v.value);
			
			});
		
		}else{
			$.ajaxSetup({
				contentType : 'application/x-www-form-urlencoded',
				processData : true
			});
			//set the data if upload is not present
			//method 1
			/*var data = new Array();
			$.each(form,function(k,v){
				data[v.name] = v.value;
			});*/
			//method 2
			var data = $(form).serializeArray();
		}
		
		//send the request with $.ajax from now to onward
		
		$.ajax({
			//set the options here
			url:url,
			dataType : ss.datatype,
			method: ss.method,
			data:data,
			success:function(res,textStatus){
				//shows off the progress of request
				if('function' == typeof sc){
					sc(res,form);
				}
				
				//change the button state to normal
				$(btn).removeAttr('disabled');
				
				//$(btn).html(btn_text);
				
				if(ss.reset == true){
					form.reset();
				}
				
				if(ss.refresh == true){
					window.location.reload(true);
				}
				
				if(ss.redirect !== false){
					window.location.href = ss.redirect;
				}
				
			},
			error:function(xhr, textStatus, errorThrown){
				if('function' == typeof fc){
					fc(url + ' ' + xhr.status + ' ' + errorThrown);
				}
				
				$(btn).removeAttr('disabled');
				
				$(btn).html(btn_text);
			},
			statusCode: {
				404: function() {
					alert( "page not found" );
				},
				0 : function(){
					alert('No Network Available.');
				}
			},
			traditional : true,
			complete : function(){
				if('function' == typeof cc){
					cc();
				}
			}
		});
	};
}( jQuery ));

/****************plugin Ends***************/	