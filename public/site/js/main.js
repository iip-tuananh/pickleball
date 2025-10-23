window.awe = window.awe || {};
awe.init = function () {
	awe.showPopup();
	awe.hidePopup();	
};
$(document).ready(function ($) {
	"use strict";
	awe_backtotop();
	awe_tab();
	awe_category();
});

$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.close-pop').click(function() {
	$('#popup-cart').removeClass('opencart');
	$('body').removeClass('opacitycart');
});
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	hidePopup('.awe-popup'); 	
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})

function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;
awe.hidePopup = function (selector) {
	$(selector).removeClass('active');
}
$(document).on('click','.overlay, .close-window, .btn-continue, .fancybox-close', function() {   
	awe.hidePopup('.awe-popup'); 
	setTimeout(function(){
		$('.loading').removeClass('loaded-content');
	},500);
	return false;
})
var wDWs = $(window).width();

//Menu mobile click
$('#btn-menu-mobile').on('click', function(){
	var section = $('.header-menu');
	var template = $('script[data-template="header_nav"]').html();
	if(template) {
		$('div[data-section="header_nav"]').html(template);
		awe_lazyloadImage();
		$('#nav-col li > a .open_mnu').click(function(e){
			e.preventDefault();
			e.stopPropagation();
			$(this).closest('li').find('> .dropdown-menu').slideToggle("fast");
			$(this).closest('li').toggleClass("current");
			$(this).closest('li').find('> .dropdown-menu').toggleClass("current");
			$(this).toggleClass('current');
			return false;  
		});
		$('#nav li > a .open_mnu').click(function(e){
			e.preventDefault();
			e.stopPropagation();
			$(this).closest('li').find('> .dropdown-menu').slideToggle("fast");
			$(this).closest('li').toggleClass("current");
			$(this).closest('li').find('> .dropdown-menu').toggleClass("current");
			$(this).toggleClass('current');
			return false;  
		});
	}
	$(this).addClass('open');
	$('.header-menu').addClass('current');
	$('.mobile-nav-overflow').toggleClass('open');
});
$('.header-menu .close-menu').on('click', function(){
	$(this).closest('.header-menu').removeClass('current');
	$('.mobile-nav-overflow').toggleClass('open');
});
$('.mobile-nav-overflow').on('click', function(){
	$('.header-menu').removeClass('current');
	$(this).toggleClass('open');
	$('#btn-menu-mobile').toggleClass('open');
});

$('.menu-bar').on('click', function(){
	$('.opacity_menu').addClass('current');
})
$('#nav-col li > a .open_mnu').click(function(e){
	e.preventDefault();
	e.stopPropagation();
	$(this).closest('li').find('> .dropdown-menu').slideToggle("fast");
	$(this).closest('li').toggleClass("current");
	$(this).closest('li').find('> .dropdown-menu').toggleClass("current");
	$(this).toggleClass('current');
	return false;  
});
$('#nav li > a .open_mnu').click(function(e){
	e.preventDefault();
	e.stopPropagation();
	$(this).closest('li').find('> .dropdown-menu').slideToggle("fast");
	$(this).closest('li').toggleClass("current");
	$(this).closest('li').find('> .dropdown-menu').toggleClass("current");
	$(this).toggleClass('current');
	return false;  
});
$('.opacity_menu').on('click', function(){
	$('.opacity_menu').removeClass('current');
})
$('.header-action-item.search-mobile').click(function(e){
	e.preventDefault();
	$('.search-mobile.search_form').toggleClass('open');
});
$('.input-group-btn .search-close').click(function(e){
	e.preventDefault();
	$('.search-mobile.search_form').toggleClass('open');
});

if (wDWs < 767) {
	$('.footer-click h4').click(function(e){
		$(this).toggleClass('cls_mn').next().slideToggle();
		$(this).next('ul').toggleClass("current");
	});
}
//Variant color in product-item
$(document).ready(function(){
	$('.product-action .swatches .swatch-elementes').click(function(e){
		$(this).parents('.product-action').find('.swatches .swatch-elementes').removeClass('active');
		$(this).addClass('active');
		var img = $(this).attr('data-image');
		$(this).parents('.product-action').find('.image_thumb .image1').attr('src',img);
	});
});
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();
	str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
	str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
	str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
	str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
	str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
	str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
	str= str.replace(/đ/g,"d"); 
	str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
	str= str.replace(/-+-/g,"-");
	str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;
function awe_category(){
	$('.nav-category .fa-angle-right').click(function(e){
		$(this).toggleClass('fa-angle-down fa-angle-right');
		$(this).parent().toggleClass('active');
	});
	$('.nav-category .fa-angle-down').click(function(e){
		$(this).toggleClass('fa-angle-right');
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;

function awe_backtotop() { 
	$(window).scroll(function() {
		$(this).scrollTop() > 200 ? $('.backtop').addClass('show') : $('.backtop').removeClass('show')
	});
	$('.backtop').click(function() {
		return $("body,html").animate({
			scrollTop: 0
		}, 800), !1
	});
} window.awe_backtotop=awe_backtotop;
function awe_tab() {
	$(".e-tabs:not(.not-dqtab)").each( function(){
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');
		$(this).find('.tabs-title li').click(function(e){
			var tab_id = $(this).attr('data-tab');
			var url = $(this).attr('data-url');
			$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);
			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			$(this).addClass('current');
			$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');

		});    
	});
} window.awe_tab=awe_tab;
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$(document).on('keydown','#qty, .number-sidebar',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
$(document).on('click','.qtyplus',function(e){
	e.preventDefault();   
	fieldName = $(this).attr('data-field'); 
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal)) { 
		$('input[data-field='+fieldName+']').val(currentVal + 1);
	} else {
		$('input[data-field='+fieldName+']').val(0);
	}
});
$(document).on('click','.qtyminus',function(e){
	e.preventDefault(); 
	fieldName = $(this).attr('data-field');
	var currentVal = parseInt($('input[data-field='+fieldName+']').val());
	if (!isNaN(currentVal) && currentVal > 1) {          
		$('input[data-field='+fieldName+']').val(currentVal - 1);
	} else {
		$('input[data-field='+fieldName+']').val(1);
	}
});
$('.open-filters').click(function(e){
	e.stopPropagation();
	$(this).toggleClass('openf');
	$('.dqdt-sidebar').toggleClass('openf');
	$('.opacity_sidebar').toggleClass('openf');
});
$('.opacity_sidebar').click(function(e){
	$('.opacity_sidebar').removeClass('openf');
	$('.dqdt-sidebar, .open-filters').removeClass('openf')
});
$('.menubutton').click(function(e){
	e.stopPropagation();
	$('.wrapmenu_right').toggleClass('open_sidebar_menu');
	$('.opacity_menu').toggleClass('open_opacity');
});
$('.opacity_menu').click(function(e){
	$('.wrapmenu_right').removeClass('open_sidebar_menu');
	$('.opacity_menu').removeClass('open_opacity');
});
$(".menubar_pc").click(function(){ 
	$('.wrapmenu_full').slideToggle('fast');
	$('.wrapmenu_full, .cloed').toggleClass('open_menu');
	$('.dqdt-sidebar, .open-filters').removeClass('openf')
});
$(".cloed").click(function(){ 
	$(this).toggleClass('open_menu');
	$('.wrapmenu_full').slideToggle('fast');
});
$(".opacity_menu").click(function(){ 
	$('.opacity_menu').removeClass('open_opacity');
});
if ($('.dqdt-sidebar').hasClass('openf')) {
	$('.wrapmenu_full').removeClass('open_menu');
} 
$('.ul_collections li > svg').click(function(){
	$(this).parent().toggleClass('current');
	$(this).toggleClass('fa-angle-down fa-angle-right');
	$(this).next('ul').slideToggle("fast");
	$(this).next('div').slideToggle("fast");
});
$('.searchion').mouseover(function() {
	$('.searchmini input').focus();                    
})
$('.quenmk').on('click', function() {
	$('#login').toggleClass('hidden');
	$('.h_recover').slideToggle();
});
$('a[data-toggle="collapse"]').click(function(e){
	if ($(window).width() >= 767) { 
		e.preventDefault();
		e.stopPropagation();
	}    
});

$('body').click(function(event) {
	if (!$(event.target).closest('.collection-selector').length) {
		$('.list_search').css('display','none');
	};
});


/* top search */

$('.search_text').click(function(){
	$(this).next().slideToggle(200);
	$('.list_search').show();
})

$('.list_search .search_item').on('click', function (e) {
	$('.list_search').hide();
	var optionSelected = $(this);
	var title = optionSelected.text();
	$('.search_text').text(title);
	$(".search-text").focus();
	optionSelected.addClass('active').siblings().removeClass('active');

});



$('.header_search form button').click(function(e) {
	e.preventDefault();
	var textmm = $('.search-text').val();
	if (textmm != '') {
		searchCollection();
		setSearchStorage('.header_search form');
	} else {
		alert('bạn chưa nhập nội dung tìm kiếm');
	}

});

$('#mb_search').click(function(){
	$('.mb_header_search').slideToggle('fast');
});

$('.fi-title.drop-down').click(function(){
	$(this).toggleClass('opentab');
});

function searchCollection() {
	var collectionId = $('.list_search .search_item.active').attr('data-coll-id');
	var vl = $('.header form input').val();
	var searchVal = $('.header_search input[type="search"]').val();
	var url = '';
	if(collectionId == 0 || vl == '') {
		url = '/search?q='+ searchVal;
	}
	else {
		url = '/search?q=collections:'+ collectionId +' AND name:' + searchVal;

	}
	window.location=url;
}

function setSearchStorage(form_id) {
	var seach_input = $(form_id).find('.search-text').val();
	var search_collection = $(form_id).find('.list_search .search_item.active').attr('data-coll-id');
	sessionStorage.setItem('search_input', seach_input);
	sessionStorage.setItem('search_collection', search_collection);
}
function getSearchStorage(form_id) {
	var search_input_st = ''; // sessionStorage.getItem('search_input');
	var search_collection_st = ''; // sessionStorage.getItem('search_collection');
	if(sessionStorage.search_input != '') {
		search_input_st = sessionStorage.search_input;
	}
	if(sessionStorage.search_collection != '') {
		search_collection_st = sessionStorage.search_collection;
	}
	$(form_id).find('.search-text').val(search_input_st);
	$(form_id).find('.search_item[data-coll-id="'+search_collection_st+'"]').addClass('active').siblings().removeClass('active');
	var search_key = $(form_id).find('.search_item[data-coll-id="'+search_collection_st+'"]').text();
	if(search_key != ''){
		var searchVal = $('.header_search input[type="search"]').val();
		$(form_id).find('.collection-selector .search_text').text(search_key);
		$('.search_item_name').text(searchVal + " thuộc danh mục " + search_key);
	}
}
function resetSearchStorage() {
	sessionStorage.removeItem('search_input');
	sessionStorage.removeItem('search_collection');
}
$(window).load(function() {
	getSearchStorage('.header_search form');
	resetSearchStorage();
});


/*JS XEM THÊM MENU DANH MỤC SP*/
$('.xemthem').click(function(e){
	e.preventDefault();
	$('ul.ul_menu>li').css('display','block');
	$(this).hide();
	$('.thugon').show();
})
$('.thugon').click(function(e){
	e.preventDefault();
	$('ul.ul_menu>li').css('display','none');
	$(this).hide();
	$('.xemthem').show();
})
$('.ul_menu .lev-1').click(function(e){
	var lil = $('.ul_menu .lev-1').length;
	var divHeight = $('.list_menu_header').height();
	if(lil = 2){
		$('.ul_menu .ul_content_right_1').css('min-height', divHeight);
	}
});
window.onload = function(e){ 
	var lil = $('.ul_menu .lev-1').length;
	var vw = $(window).width();
	if(lil < 9 && vw < 1500 && vw > 1200){
		$('li.hidden-lgg').remove();
	}
}

/*click bộ lọc*/
$('.bolocs').click(function(e){
	e.stopPropagation();
	$('.aside-filter').slideToggle();
});
$('.aside-filter').click(function(e){
	e.stopPropagation();
});
$(document).click(function(){
	$('.aside-filter').slideUp();
});

function callback_toggle() {
	$('.bolocs').click(function(e) {
		e.stopPropagation();
		$('.aside-filter').toggleClass('show');
	});
	$('.aside-filter').click(function(e) {
		e.stopPropagation();
	});
}
if (wDWs > 992) {
	function horizontalNav() {
		return {
			wrapper: $('.navigation-horizontal'),
			navigation: $('.navigation-horizontal .nav'),
			item: $('.navigation-horizontal .nav .nav-item'),
			totalStep: 0,
			onCalcNavOverView: function(){
				let itemHeight = this.item.eq(0).outerWidth(),
					lilength = this.item.length,
					total = 0;
				for (var i = 0; i < lilength; i++) {
					itemHeight = this.item.eq(i).outerWidth();
					total += itemHeight;
				}
				return Math.ceil(total)
			},
			onCalcTotal: function(){
				let  navHeight = this.navigation.width();
				return Math.ceil(navHeight)
			},
			init:function(){
				this.totalStep = this.onCalcNavOverView();
				this.totalTo = this.onCalcTotal();
				if(this.totalStep > this.totalTo){
					this.wrapper.addClass('overflow')
				} 
			}
		}	
	}
}


/*Header promotion*/

var index = 0,
	stop = false,
	num =  $('.js-promo >li').length,
	liEls = $('.js-promo >li');

function shippingflipInX(){
	if(stop) return false;
	if(index > (num-2)){
		liEls.addClass('see-none');
		liEls.removeClass('animated flipInX see-block');
		index = 0;
		liEls.eq(0).addClass('animated flipInX see-block').removeClass('see-none');
		return;
	}

	liEls.addClass('see-none');
	liEls.removeClass('animated flipInX see-block');
	liEls.eq(index+1).removeClass('see-none').addClass('animated flipInX see-block');
	index ++ ;
}
var hdtimer = setInterval(function(){
	shippingflipInX();
},4000);
$('.js-promo').hover(function(){
	stop = true;
},function(){
	stop = false;
})



$(document).ready(function(){
	$('.header_tim_kiem .search-bar input.input-group-field, .search-mobile .search-bar input.input-group-field').focus(function(eventClick) {
		eventClick.stopPropagation();
		$('.search-suggest').addClass('open');
	});
	$(document).click( function(eventClick){
		if ( !$(eventClick.target).closest('.header_tim_kiem .search-bar, .search-mobile .search-bar').length ) {
			$('.search-suggest').removeClass('open');
		}
	});
});



$(document).ready(function(){
	function getItemSearch(name, smartjson){
		return fetch(`https://${window.location.hostname}/search?q=${name}&view=${smartjson}&type=product`)
			.then(res => res.json())
			.catch(err => console.error(err))
	}
	var $searchRecent = $('.search-suggest .search-recent');
	var searchRecentList = localStorage.getItem('search_recent_list');
	var recentList = searchRecentList ? JSON.parse(searchRecentList) : [];
	
	
	if (recentList.length > 0) {
		$searchRecent.removeClass('d-none');
		var $searchList = $searchRecent.find('.search-list');
		recentList.forEach(function (item) {
			var $link = $('<a>', {
				href: `/search?query=${encodeURIComponent(item)}&type=product`,
				text: item,
				title: `Tìm kiếm ${item}`,
				class: 'search-item',
			});
			
			var $closeSpan = $('<span>', {
				text: 'Đóng',
				title: 'Đóng',
				class: 'close',
			});

			$closeSpan.on('click', function (e) {
				e.preventDefault();
				e.stopPropagation();
				var index = recentList.indexOf(item);
				if (index !== -1) {
					recentList.splice(index, 1);
					localStorage.setItem('search_recent_list', JSON.stringify(recentList));
					$link.remove();
					if (recentList.length == 0) {
						$searchRecent.toggleClass('d-none');	
					}
				}
			});

			$link.append($closeSpan);

			$searchList.append($link);
		});
	}
	
	
	$('.header_tim_kiem input[type="text"], .search-mobile input[type="text"]').bind('keyup change', function(e){
		let term = $(this).val().trim();
		let data = '';
		var resultbox = '';
		if(term.length > 1) {
			$searchRecent.addClass('d-none');
			async function goawaySearch() {
				data = await getItemSearch(term, 'smartjson');
				setTimeout(function(){
					var sizeData = Object.keys(data).length;
					if(sizeData > 0) {
						Object.keys(data).forEach(function(key) {
							if (data[key].compare_price != 0 ) {
								resultbox += `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span><span class="compare-price">${data[key].compare_price}</span></div></div></a>`
							} else {
								resultbox += `<a class="product-smart" href="${data[key].url}" title="${data[key].name}"><div class="image_thumb"><img width="58" height="58" class="lazyload loaded" src="${data[key].image}" data-src="${data[key].image}" alt="${data[key].name}" data-was-processed="true"></div><div class="product-info"><h3 class="product-name"><span>${data[key].name}</span></h3><div class="price-box"><span class="price">${data[key].price}</span></div></div></a>`
							}
						});
						resultbox +=`<a href="/search?query=${term}&type=product" class="see-all-search" title="Xem tất cả">Xem tất cả kết quả »</a>`
						$('.list-search').html(resultbox);
					} else {
						$('.list-search').html('<div class="not-pro">Không có thấy kết quả tìm kiếm</div>');
					}
				}, 200);
			}
			goawaySearch();
		}else {
			if(recentList.length > 0) {
				$searchRecent.removeClass('d-none');
			}
			$('.list-search').html('');
		}
	});
});

$('.show-all-col .view-all-col').click(function(e){
	$(this).toggleClass('d-none');
	$('.show-all-col .aside-content-all').slideToggle();
	$('.aside-content-sub').slideToggle();
	$('.show-all-col .less-all-col').toggleClass('d-none');
});
$('.show-all-col .less-all-col').click(function(e){
	$(this).toggleClass('d-none');
	$('.aside-content-sub').slideToggle();
	$('.show-all-col .aside-content-all').slideToggle();
	$('.show-all-col .view-all-col').toggleClass('d-none');
});

theme.alert = (function() {
	var $alert = $('#js-global-alert'),
		$title = $('#js-global-alert .alert-heading'),
		$content = $('#js-global-alert .alert-content'),
		close = '#js-global-alert .close';
	var timeoutID = null;
	$(document).on('click', close, function() {
		$alert.removeClass('active');
	});

	function createAlert(title, mess, time, type) {
		var alertTitle = title || '',
			showTime = time || 3000,
			alertClass = type;

		$alert.removeClass('alert-success').removeClass('alert-danger').removeClass('alert-warning').removeClass('alert-primary');
		$alert.addClass(alertClass);
		$title.html(title);
		$content.html(mess);
		$alert.addClass('active');
		if (timeoutID) {
			clearTimeout(timeoutID);
		}

		timeoutID = setTimeout(function() {
			$alert.removeClass('active');
		}, showTime);
	}

	return {
		new: createAlert
	};
})();