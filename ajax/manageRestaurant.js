$("#btn").click(createRestaurant);

function createRestaurant() {
 $("#action").val("save");
 var ajaxConfig={
     method:"POST",
     url:"phpController/manageRestaurant.php",
     async:true,
     dataType:"json",
     data:$("#formRestaurant").serialize(),
 };

 $.ajax(ajaxConfig).done(function (responce) {
     if(responce==true){
         alert("Restaurant save successfully");
     }else {
         alert("Restaurant save faill");
     }
 })

}

$("#btnUpdate").click(updateRestaurant);

function updateRestaurant() {
    $("#action").val("update");

    var ajaxConfig={
        method:"POST",
        url:"phpController/manageRestaurant.php",
        async:true,
        dataType:"json",
        data:$("#formModifyRestaurant").serialize(),
    };

    $.ajax(ajaxConfig).done(function (responce) {
        if(responce==true){
            alert("Restaurant update successfully");
        }else {
            alert("Restaurant update faill");
        }
    })
}