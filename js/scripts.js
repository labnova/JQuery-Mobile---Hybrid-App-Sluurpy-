$(document).ready(function() {
	$(document).on("pageshow", "[data-role='page']", function() {
		if( $($(this)).hasClass("header_default")) {
			
			$('<header data-role="header" data-position="fixed" data-theme="a"><a href="#" data-rel="back" class="ui-btn-left ui-btn-icon-left  ui-arrow-icon-l">Indietro</a><a href="#mydialog" class="ui-btn-right ui-icon-info ui-btn-icon-right">Info</a><h1>La(B)App</h1></header>')
				.prependTo( $(this) ) 
				.toolbar({position:'fixed'});

			$('[data-role="header"] h1').text($(this).jqmData('title'))
			

		} //if header

		if($($(this)).hasClass('footer_default')) {
			$('<footer data-role="footer" data-position="fixed" data-theme="b">'+
		'<div  data-role="controlgroup" style="text-align:center; "data-type="horizontal">'+
		'<a href="#lavori" class="ui-btn"><i style="margin-right:10px;" class="fa fa-git"></i>Lavori</a>'+
		'<a href="#blog" class="ui-btn"><i style="margin-right:10px;" class="fa fa-calendar-o"></i>Notizie</a>'+
		'<a href="#libri" class="ui-btn"><i style="margin-right:10px;" class="fa fa-university"></i>Libri</a>'+
		'<a href="#frammenti" class="ui-btn"><i style="margin-right:10px;" class="fa fa-file-video-o"></i>Frammenti</a>'+
		'</div>'+


	'</footer>').appendTo($(this))
			.toolbar({position:'fixed'});
		}

		var current= $('.ui-page-active').attr('id');

		$('[data-role="footer"] a.ui-btn-active').removeClass('ui-btn-active');
		$('[data-role="footer"] a').each(function() {
			if($(this).attr('href')==='#'+current) {
				$(this).addClass('ui-btn-active');
			}
		});

	});  //mostra pagina

}); //document.ready






















$(document).ready(function() {
	$(document).on("pageshow", "[data-role='page']", function() {
		if( $($(this)).hasClass("header_default")) {
			
			$('<header data-role="header" data-position="fixed" data-theme="a"><a href="#" data-rel="back" class="ui-btn-left ui-btn-icon-left  ui-arrow-icon-l">Indietro</a><a href="#mydialog" class="ui-btn-right ui-icon-info ui-btn-icon-right">Info</a><h1>Sluurpy</h1></header>')
				.prependTo( $(this) ) 
				.toolbar({position:'fixed'});

			$('[data-role="header"] h1').text($(this).jqmData('title'))
			

		} //if header

		if($($(this)).hasClass('footer_default')) {
			$('<footer data-role="footer" data-position="fixed" data-theme="b">'+
		'<div  data-role="controlgroup" style="text-align:center; "data-type="horizontal">'+
		'<a href="#intro" class="ui-btn"><i style="margin-right:10px;" class="fa fa-globe"></i>Geo</a>'+
		'<a href="#filtra"  class="ui-btn"><i style="margin-right:10px;" class="fa fa-location-arrow"></i>Filtra</a>'+
		'<a href="#ricerca" class="ui-btn"><i style="margin-right:10px;" class="fa fa-search"></i>Ricerca</a>'+
		'<a href="#preferiti" class="ui-btn"><i style="margin-right:10px;" class="fa fa-check"></i>Preferiti</a>'+
		'</div>'+


	'</footer>').appendTo($(this))
			.toolbar({position:'fixed'});
		}

		var current= $('.ui-page-active').attr('id');

		$('[data-role="footer"] a.ui-btn-active').removeClass('ui-btn-active');
		$('[data-role="footer"] a').each(function() {
			if($(this).attr('href')==='#'+current) {
				$(this).addClass('ui-btn-active');
			}
		});

	});  //mostra pagina

}); //document.ready



	
	/*
	var output = '<form class="ui-filterable"><input id="searchposts" data-type="search"></form>';


	 output += '<ul data-role="listview" data-filter="true" data-input="#searchposts">';


	$.each(data.posts, function(key,val) {

		var tempDiv= document.createElement('tempDiv');
		tempDiv.innerHTML= val.excerpt;
		$('a', tempDiv).remove();
		var excerpt= tempDiv.innerHTML;

		output += '<li>';
		output += '<a href="#blogpost" onclick="showPost(' +val.core_content_id+ ')">';
		output += (val.thumbnail) ? '<img src="'+val.thumbnail+'" alt="'+val.core_title+'" />' : '<img src="http://www.labnova.it/wp-content/uploads/2014/04/logo_lab.jpg" alt="La(B)Nova">';
		output += '<h3>' +val.core_title+ '</h3>';
		output += '<p>' +excerpt+'</p>';
		output += '</a>';
		output += '</li>';


	}); //andare attraverso ogni post


	output += '</ul>';

	$("#postList").html(output);

	} //listPosts

	*/
