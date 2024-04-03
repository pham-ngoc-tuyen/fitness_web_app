(function($){
    "user strict";
    var Uc = {};

    Uc.getLocation = () =>{
       $(document).on('change', 'location' ,'.province',
       function(){
                let _this = $(this)
                let option = {
                    'data' :{
                        'location_id': _this.val()
                    },
                    'taget' : _this.attr('data-target') 
                }
                Uc.sendDataLocation(option)
            }
       )
    }
    Uc.sendDataLocation = (option) => {
        $.ajax(
            {
                url:'ajax/location/getLocation',
                type: 'GET',
                data: option,
                dataType: 'json',
                success: function(res){
                    $('.'+option.target).html(res.html)
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log('Lỗi' + textStatus + ' ' + errorThrown);
                }
            }
        )
    }
    $(document).ready(function(){
        Uc.getLocation();
    })
})(jQuery);