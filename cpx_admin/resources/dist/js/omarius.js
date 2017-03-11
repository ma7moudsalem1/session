
$(document).ready(function(){

    $(document).on('click','.add-img-btn', function() {
        var cont = $(".add-img-cont");
        var count = parseInt(cont.attr('data-count')) + 1;
        //alert(index);
        cont.before(' <div data-index="'+ count +'" class="input-group  margin-v">'+
        '<div class="input-group-btn">'+
        '<label for="img'+ count +'" class="btn btn-success" >Image</label>'+
        '</div>'+
        '<input type="file" id="img'+ count +'" name="image[]" class="form-control">'+
        '</div>'+
        '<div data-count="'+ count +'" class="text-center col-xs-12 add-img-cont" style="margin-bottom: 20px">'+
        '<button type="button" class="btn btn-app add-img-btn btn-success"  style="color:green">'+
        '<i class="fa fa-plus"></i>'+
        'Add image'+
        '</button>'+
        '</div>'
        );
        cont.hide().remove();
    });
    $(document).on('click','.delete-img', function() {
        $(this).parent().hide().remove();
    });

    $('.view-image').each(function(){

    });
});
