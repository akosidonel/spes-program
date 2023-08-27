$(document).ready(function () {
    //check all/uncheck all
    $('#checkAll').change(function(){
        if($(this).is(':checked')){
            $('input[name="checkBoxId[]"]').prop('checked',true);
        }else{
            $('input[name="checkBoxId[]"]').each(function(){
                $(this).prop('checked',false);
            }); 
          }
      });
      // checkbox click
      $('input[name="checkBoxId[]"]').click(function(){
          var total_checkboxes = $('input[name="checkBoxId[]"]').length;
          var total_checkboxes_checked = $('input[name="checkBoxId[]"]:checked').length;

          if(total_checkboxes_checked == total_checkboxes){
              $('#checkAll').prop('checked',true);
          }else{
              $('#checkAll').prop('checked',false);
          }
      });
  })