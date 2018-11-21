$("#btnSaveUser").click(saveUser);

function saveUser() {
    $("#action").val("save");
    var ajaxConfig={
        method:"POST",
        url:"phpController/manageUser.php",
        async:true,
        dataType:"json",
        data:$("#formCreateUser").serialize(),
    };

    $.ajax(ajaxConfig).done(function (responce) {
        if(responce==true){
            alert("User save successfully");
        }else {
            alert("User save faill");
        }
    })
}