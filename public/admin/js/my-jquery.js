// Jquery
//iCheck for checkbox and radio inputs
$('.ichack-input input[type="checkbox"].minimal, .ichack-input input[type="radio"].minimal').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
});
//Red color scheme for iCheck
$('.ichack-input input[type="checkbox"].minimal-red, .ichack-input input[type="radio"].minimal-red').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass   : 'iradio_minimal-red'
});
//Flat red color scheme for iCheck
$('.ichack-input input[type="checkbox"].flat-red, .ichack-input input[type="radio"].flat-red').iCheck({
    checkboxClass: 'icheckbox_flat-green',
    radioClass   : 'iradio_flat-green'
});

$(document).ready(function(){
    $('.select2').select2();
    $('form').on('click','.checked_radio_tab',function(){
        $(this).parents('.tab_ckeditor_f_right').find('input[type="hidden"].hidden_tab_status').val($(this).val());
    });
});
$(".content").on('mouseover','.image_toggle_hover',function( event ) {
    var src = $(this).parents('.form-group.row').find('input[name="images[]"]').val();
    if(src.length>0)
    {
        // var X = event.pageX;
        // var Y = event.pageY;
        var X = $(this).position().left + $(this).width() + 4;
		var Y = $(this).position().top - 4;
        if($('.box_images_hover').length>0)
        {
            $('.box_images_hover').find('img').attr('src',src);
        }else{
            var content      =  '<div class="box_images_hover">';
            content     +=      '<img src="'+src+'" />';
            content     +=  '</div>';
            $(this).append(content); 
        }
        // $('.box_images_hover').css({'left':X,'top':Y});

    }
}).on('mouseout','.image_toggle_hover',function() {
    $('.box_images_hover').remove();
});

$('.icon_slide_hidden').click(function(){
    $(this).parent().find('.group_slide').slideToggle();
    $(this).toggleClass('rotate'); 
});
$('.modal_custom').on('hidden.bs.modal', function (e) {
    $(this).find('.group_slide').hide();
})
$('.modal_custom').on('show.bs.modal', function (e) {
    $(this).find('.rotate').removeClass('rotate');
})
// $('.').mousemove(function( event ){

//     var src = $(this).parents('.form-group.row').find('input[name="images[]"]').val();
//     // if(src.length>0)
//     // {
//     //     var X = event.pageX;
//     //     var Y = event.pageY;
//     //     var content      =  '<div class="box_images_hover">';
//     //         content     +=      '<img src="'+src+'" />';
//     //         content     +=  '</div>';
//     //     $('body').append(content); 
//     //     // $('.box_images_hover').css({'left':X,'right':Y});
//     // }
// });​ 
// Function
// Sweetaret
    // Confirm Tab Delete
    function comfirm_delete_tab(sw_title,sw_message,element){
        swal({   
            title: sw_title,   
            text: sw_message,   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Đồng ý",   
            cancelButtonText: "Hủy bỏ",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }, function(isConfirm){   
            if (isConfirm) {     
                swal("Thành công", "Xóa thành công !", "success");
                delete_tab(element);      
            } else {     
                swal("Hủy", "Thao tác đã được hủy", "error");    
            } 
        });
    }
// Tabs
    // ___Refresh
        function refresh_tab(){
            $('#tab_element').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'tab_element', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            }); 
        }
    // ___ Add
        function add_tab(i){
            var content  = '<div data-li="option_tab_'+i+'">';
            content     +=      '<div class="box-body">';
            content     +=          '<div class="form-group row">';
            content     +=              '<label for="tab_header[]" class="col-sm-2 col-form-label">Tên Tab:</label>';
            content     +=              '<div class="col-sm-5">';
            content     +=                  '<input class="form-control tab_header" type="text" placeholder="Tên Tabs" value="Nội dung '+(i+1)+'" name="tab_header[]">';
            content     +=              '</div>';
            content     +=              '<button type="button" class="btn_remove_tabs btn btn-lg bg-maroon"> Xóa Tab <i class="fa fa-close"></i></button>';
            content     +=              '<div class="ichack-input col-sm-3 tab_ckeditor_f_right">';
            content     +=                  '<label for="tab_status[]" class="col-form-label">Hiển thị : </label>';            
            content     +=                  '<label class="radio-tab"><input type="radio" name="tab_temp['+i+']" value="1" class="checked_radio_tab" checked> Có </label>';
            content     +=                  '<label class="radio-tab"><input type="radio" name="tab_temp['+i+']" value="0" class="checked_radio_tab"> Không </label>';
            content     +=                  '<input type="hidden"  class="hidden_tab_status"  name="tab_status[]" value="1"/>';
            content     +=              '</div>';
            content     +=          '</div>';
            content     +=          '<div class="form-group row">';
            content     +=              '<label for="tab_title[]" class="col-sm-2 col-form-label">Tiêu đề:</label>';
            content     +=              '<div class="col-sm-10">';
            content     +=                  '<input class="form-control" type="text" id="name" placeholder="Tiêu đề" value="" name="tab_title[]">';
            content     +=              '</div>';
            content     +=          '</div>';
            content     +=          '<div class="form-group">';
            content     +=              '<textarea name="option_tab[]" id="ck_option_tab_'+i+'" class="ckeditor_textarea form-control" ></textarea>';
            content     +=          '</div>';
            content     +=      '</div>';
            content     += '</div>';
         
            var li = '<li class="option_tab_li" id="option_tab_'+(i)+'" > Nội dung '+(i+1)+'</li>';
            $('#tab_element').find('#add_tab').before(li);
            $('#tab_element').find('.resp-tabs-container').append(content);

            CKEDITOR.replace('ck_option_tab_'+i);    
            refresh_tab();
        }
    // __ Delete
        function delete_tab(element){
            var id = element.parent().parent().parent().attr('data-li'); 
            element.parent().parent().parent().remove();
            $('li#'+id).remove();
            refresh_tab();
        }
// Ckeditor
    // __Set File
        function Set_Finder(element) {   
            var input = element.parent().parent().find('input[type="text"]');
            CKFinder.modal( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                var file = evt.data.files.first();
                input.val(file.getUrl());
                } );			
            }
            });
        }
    // Add Input
        function Add_Input_Finder(limit){
            if(($('input[name="images[]"]').length-1)<limit)
            {
                $('#form_file').append($('#__temp_file').html());
            }else{
                $.toast({
                    heading: 'Lỗi',
                    text: 'Upload giới hạn tối đa '+ limit + " file",
                    position: 'top-right',
                    loaderBg: '#ff6849',
                    icon: 'error',
                    hideAfter: 3500
                });
            }
        }
    // Add Input
    function Add_Input_Properties(limit){
        if(($('input[name="properties_title[]"]').length-1)<limit)
        {
            $('#form_properties').append($('#__temp_properties').html());
        }else{
            $.toast({
                heading: 'Lỗi',
                text: ' Thuộc tính bị giới hạn tối đa    '+ limit + " ",
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'error',
                hideAfter: 3500
            });
        }
    }
    // Sort
        // File Upload
            // Up
            function sort_up_finder(element){
                var index = element.parent().parent().parent().index();
                if(index>0)
                {
                var temp_first = $('input[name="images[]"]').eq(index-1).val();
                var temp_last = $('input[name="images[]"]').eq(index).val();
                $('input[name="images[]"]').eq(index-1).val(temp_last);
                $('input[name="images[]"]').eq(index).val(temp_first);
                }
            }
            // Down
            function sort_down_finder(element){
                var index = element.parent().parent().parent().index();
                if(index < ($('input[name="images[]"]').length-2))
                {
                var temp_first = $('input[name="images[]"]').eq(index+1).val();
                var temp_last = $('input[name="images[]"]').eq(index).val();
                $('input[name="images[]"]').eq(index+1).val(temp_last);
                $('input[name="images[]"]').eq(index).val(temp_first);
                }
            }
        // Properties
            // Up
            function sort_up_properties(element){
                var index = element.parent().parent().parent().index();
                if(index>0)
                {
                    // Title
                    var temp_first = $('input[name="properties_title[]"]').eq(index-1).val();
                    var temp_last = $('input[name="properties_title[]"]').eq(index).val();
                    $('input[name="properties_title[]"]').eq(index-1).val(temp_last);
                    $('input[name="properties_title[]"]').eq(index).val(temp_first);
                    
                    // Value
                    var temp_first = $('input[name="properties_values[]"]').eq(index-1).val();
                    var temp_last = $('input[name="properties_values[]"]').eq(index).val();
                    $('input[name="properties_values[]"]').eq(index-1).val(temp_last);
                    $('input[name="properties_values[]"]').eq(index).val(temp_first);
                }
            }
            // Down
            function sort_down_properties(element){
                var index = element.parent().parent().parent().index();
                if(index < ($('input[name="properties_title[]"]').length-2))
                {
                    // Title
                    var temp_first_value = $('input[name="properties_title[]"]').eq(index+1).val();
                    var temp_last_title = $('input[name="properties_title[]"]').eq(index).val();
                    $('input[name="properties_title[]"]').eq(index+1).val(temp_last_title);
                    $('input[name="properties_title[]"]').eq(index).val(temp_first_value);
                   
                    // Value
                    var temp_first_value = $('input[name="properties_values[]"]').eq(index+1).val();
                    var temp_last_value = $('input[name="properties_values[]"]').eq(index).val();
                    $('input[name="properties_values[]"]').eq(index+1).val(temp_last_value);
                    $('input[name="properties_values[]"]').eq(index).val(temp_first_value);
                }
            }