(function($){
    "user strict";
    var Uc = {};

    Uc.getLocation = () =>{
       $(document).on('change', '.location' ,'.province',
       function(){

                let _this = $(this)
                let option = {
                    'data' :{
                        'location_id': _this.val()
                    },
                    'target' : _this.attr('data-target') 
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
                    if(district_id != '' && option.target == 'districts'){
                        $('.districts').val(district_id).trigger('change')
                    }
                    if(wards_id != '' && option.target == 'wards'){
                        $('.wards').val(wards_id).trigger('change')
                    }
                },
                error: function(jqXHR, textStatus, errorThrown){
                    console.log('Lỗi' + textStatus + ' ' + errorThrown);
                }
            }
        )
    }
    Uc.loadCity = () => {
        if (province_id != ''){
            $(".province").val(province_id).trigger('change');
        }
    }
    $(document).ready(function(){
        Uc.getLocation();
        Uc.loadCity();
    })
})(jQuery);