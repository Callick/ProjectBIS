$( document ).ready(function() {

$("body").on("click",".edit-item",function(){

    var id = $(this).parent("td").data('id');
    var cname = $(this).parent("td").prev("td").prev("td").text();
    var description = $(this).parent("td").prev("td").text();
    var date = $(this).parent("td").prev("td").text();
    var paid = $(this).parent("td").prev("td").text();
    var dues = $(this).parent("td").prev("td").text();

    $("#edit").find("input[name='cname']").val(cname);
    $("#edit").find("textarea[name='description']").val(description);
    $("#edit").find("input[name='date']").val(date);
    $("#edit").find("input[name='paid']").val(paid);
    $("#edit").find("input[name='dues']").val(dues);
    $("#edit").find(".edit-id").val(id);

});
$(".crud-submit-edit").click(function(e){

    e.preventDefault();
    var form_action = $("#edit").find("form").attr("action");
    var Cname = $("#edit").find("input[name='cname']").val();
    var Description = $("#edit").find("textarea[name='description']").val();
    var Date = $("#edit").find("input[name='date']").val();
    var Paid = $("#edit").find("input[name='paid']").val();
    var Dues = $("#edit").find("input[name='dues']").val();
    var id = $("#edit").find(".edit-id").val();

    if(title != '' && description != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url:'/edit.php',
            data:{Cname:cname, Description:description,Date:date,Paid:paid,Dues:dues}
        }).done(function(data){
            getPageData();
            $(".modal").modal('hide');
            toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
        });
    }else{
        alert('You are missing title or description.')
    }

});
});