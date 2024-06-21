jQuery(document).ready(function($){
  $(".eos-dp-save-eos_dp_ecff_" + fdp_flatsome.page).on("click", function () {
    $('.eos-dp-opts-msg').addClass('eos-hidden');
    var chk,str = '';
    $('.eos-dp-flatsome').each(function(){
      chk = $(this);
      str += !chk.is(':checked') ? ',' + $(this).attr('data-path') : ',';
    });
    eos_dp_send_ajax($(this),{
      "nonce" : $("#eos_dp_flatsome_" + fdp_flatsome.page + "_setts").val(),
      "eos_dp_flatsome_data" : str,
      "page" : fdp_flatsome.page,
      "action" : 'eos_dp_save_flatsome_' + fdp_flatsome.page + '_settings'
    });
    return false;
  });
});
