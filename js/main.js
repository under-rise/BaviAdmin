//Main SP Btn
$(function(){
    $('#spMainBtn').on('click',function(){
        $('header .nav').addClass('open');
        $('#overlay').fadeIn();
        $('html').addClass('overlay');
    });

    $('header .close').click(function(e) {
      $('header .nav').removeClass('open');
      $('#overlay').fadeOut();
      $('html').removeClass('overlay');
    });

    $('#overlay').click(function(e) {
      if(!$(e.target).closest('header .btn').length) {
        $('#overlay').fadeOut();
        $('header .nav').removeClass('open');
        $('html').removeClass('overlay');
      }
    });

    $('.sub_nav').click(function(e) {
      if(!$(e.target).closest('a').length) {
        //
      }
      $(this).children('ul').slideToggle();
    });
});

//検索モーダル
$(function(){
	$('.modal_btn').click(function(e) {
		$('html').addClass('overlay');
	  	var obj = $(this).data('name');
		  $(obj).fadeIn();
    
      if($(this).data('filekey')){
        let filekey = $(this).data('filekey');
        fileRead(filekey,obj);
      }
      
	});

	$('.modal_sec .close').click(function(e) {
		$('.modal_sec').fadeOut();
		$('html').removeClass('overlay');
	});

	 $('.modal_sec').click(function(e) {
		if(!$(e.target).closest('.modal_sec .inr').length) {
			$(this).fadeOut();
			$('html').removeClass('overlay');
		}
	});

  //-------------------
  //例文用（会場登録フォーム）
  function fileRead(filekey,obj){
    $.get("/js/example.json?1.2").done(function(data){

      let setData = '<ul>';
      $.each(data[filekey],function(index,val){
        setData += '<li>';
        setData += '<textarea rows="5">'+ val +'</textarea>';
        setData += '<button class="example_'+index+' copy btn type03">コピーする</button>';
        setData += '</li>';
      });
      setData += '</ul>';
      $(obj).find('.data').html(setData);
    });
  }
  
  //コピー
  $(document).on('click','.copy',function(){
    alert('コピーしました');
    $(this).prev().select();
    document.execCommand('copy');
    $('.modal_sec').fadeOut();
		$('html').removeClass('overlay');
  });

  
});



//検索クリア
$(function(){
	$('.search_sec .clear,.form .clear').click(function(e) {	
    if(!confirm('検索条件をクリアします。\n宜しいですか？')){
      return false;
    }
		$(this).parent().find("input, select, textarea")
    .val("")
    .prop("checked", false)
    .prop("selected", false);
    return false;
  });
});

//delete
$(function(){
	$('.form .delete').click(function(e) {	
    let title = $(this).data('title');
    let id = $(this).data('id');
    if(!confirm(title+'を削除しましす。宜しいですか？')){
      return false;
    }
    $('#delete').submit();
  });
});

//file Upload
$('body').on('change', 'input[type="file"]',function (e) {
  var pos = $(this).data('pos');
 
  var reader = new FileReader();
  reader.onload = function (e) {
      $(pos + ".up_imagePreview_sec").show();
      $(pos + " .up_imagePreview").attr('src', e.target.result);
  }
  reader.readAsDataURL(e.target.files[0]);
});

//地域選択
$('.area_select_radio input[type="radio"]').click(function(){
  let area = $(this).next('span').text();
  $('#area_select').val(area);
  $('.modal_sec').fadeOut();
  $('html').removeClass('overlay');
});

$(function(){
  $('.nextToggleBtn').click(function(){
    $(this).nextAll('.box:first').stop().fadeToggle().css('display','table');
    $(this).toggleClass('open');
  });
});