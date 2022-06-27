/* scroll function */
$("body").on('click', 'a.go_to', function(e){
    var fixed_offset = 0;
    $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
    e.preventDefault();
});
/* lang change list */
$('.lang-block span.lang-link').click(function(){
	$(this).toggleClass('active');
	$(this).siblings('ul').slideToggle();
});
/* add file functions */
$('#filelnk').click(function(){
	$('#fileic_file_input').click();
});
$('form #fileic_file_input').on('change', function() {
	let file = $(this)[0].files[0]; 
	$('label[for="fileic_file_input"]').text(file.name);
});

/* add row function */
$('#addlnk').click(function(){	
	var row_count = parseInt($('.data-block .inline-group').last().attr('data-row')) + 1;
	var row_tpl = '<div class="inline-group" data-row="'+ row_count +'"><div class="input-group"><input type="text" name="data_number_'+ row_count +'" placeholder="000-0000"></div><div class="input-group"><input type="number" name="data_count_'+ row_count +'" value="1"></div><div class="input-group"><a href="javascript:void(0);" class="delete-link"><i class="fa fa-trash-o"></i></a></div></div>';
	$('.data-block').append(row_tpl);
	$('.delete-link').click(function(){
		$(this).parents('.inline-group').remove();
	});
});
/* del row function */
$('.delete-link').click(function(){
	$(this).parents('.inline-group').remove();
});
/* select code function */
$('#calc_contry').change(function(){
	let code = $('#calc_contry :selected').attr('data-code');
	$('#calc_code').val('('+ code + ')');
});

/* send mail function with file */
function send_withfile(id) {
    var formData = new FormData($('#'+id+'')[0]);
    var validateCheck = true;
    $('#'+id+'').find('input.required').each(function(){
        if($(this).val() && $(this).val() != ''){
            $(this).removeClass('validate');
        } else {
            $(this).addClass('validate');
            validateCheck = false;
        }
    });
    if (validateCheck) {
        $.ajax({
            type: "POST",
            processData: false,
            contentType: false,
            url: "include/sendfile.php",
            data:  formData,
            success: function(formData) {
                $('#'+id+'').find('input').not('.d-none').removeClass('error-input');
                var magnificPopup = $.magnificPopup.instance;
                magnificPopup.close();
                setTimeout(function() {
                    $.magnificPopup.open({
                        items: {src: '#thanks_modal'},
                        type: 'inline',
                        fixedContentPos: true,
                        fixedBgPos: true,
                        closeBtnInside: true,
                        midClick: true,
                        tClose: 'Закрыть',
                        mainClass: 'my-mfp-zoom-in'
                    });
                }, 500);
            },
            error: function(formData, c) {
                alert("Error: Ошибка отправки");
            }
        });
    } else
    {
        $('#'+id+'').find('input').not('.d-none').removeClass('error-input');
        $('#'+id+'').find('.validate').addClass('error-input');
    }
};