$(function () {
    
    $(".btn-submit-booking").click(event => {
        event.preventDefault();
        
        $(".loader").show();
        
        $.post("includes/insert.php", $(".bookingForm").serialize(), data => {
             $(".loader").hide();
             $(".bookingForm").html(data);
        });

    });

});