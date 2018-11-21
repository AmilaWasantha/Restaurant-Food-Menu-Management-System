$(document).ready(function () {
    $('#btn').click(function () {
        var languages =[];
        $('.get_value').each(function () {
           if($(this).is(":checked")){
               languages.push($(this).val());
           }
        });

        languages=languages.toString();

        $.ajax({
            url:"test.php",
            method:"POST",
            data:{languages:languages},
        })
        
    })
})