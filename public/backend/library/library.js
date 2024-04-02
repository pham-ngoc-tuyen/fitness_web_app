(function($){
    "user strict";
    var Uc = {};
    var document = $(document)

    Uc.switchery = () =>{
        $('.js-switch').each(function(){
            var switchery = new Switchery(this, { color: '#1AB394' });
        })
    }

    Uc.select2 = () =>{
        $('.setupSelect2').select2();
    }
    document.ready(function(){
        Uc.switchery();
        Uc.select2();
    })
})(jQuery);