/**
 * Handle click events
 */
$("button[polar\\:click]").click(function() {
    var id = $(this).attr("id");
    var functionName = templateElements[id];

    $.ajax({
        type: "POST",
        url: "component.php",
        elmId: id,
        data: {
            function: functionName
        },
        success: function(result) {
            console.log(result);
            console.log(this.elmId);

            if(result) {
                $("#" + this.elmId).html(result);
            }
        }
    });
});