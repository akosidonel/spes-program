

$(document).ready(function () {
      //check all/uncheck all function
      $('#checkAll').change(function(){
        if($(this).is(':checked')){
            $('input[name="checkBoxId[]"]').prop('checked',true);
        }else{
            $('input[name="checkBoxId[]"]').each(function(){
                $(this).prop('checked',false);
            }); 
          }
      });
      // checkbox click function
      $('input[name="checkBoxId[]"]').click(function(){
          var total_checkboxes = $('input[name="checkBoxId[]"]').length;
          var total_checkboxes_checked = $('input[name="checkBoxId[]"]:checked').length;
          if(total_checkboxes_checked == total_checkboxes){
              $('#checkAll').prop('checked',true);
          }else{
              $('#checkAll').prop('checked',false);
          }
      });
      //spes deployment-dynamic search function
      $('#search').keyup(function(event){
        event.preventDefault();
        var action = 'searchRecord';
        var search = $('#search').val();
        if(search !=''){
          $.ajax({
              url: "../view/view.php",
              method: "POST",
              data: {action:action, search:search},
              success: function(data){
                $('#deploymentTable').html(data);
                    }
                });
            }
        });

  })