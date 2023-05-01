/**
 * Handle click events
 */
$("button[polar\\:click]").click(function() {
    var id = $(this).attr("id");
    var functionName = templateElements[id];
    var val = $(this).html();

    $.ajax({
        type: "POST",
        url: "component.php",
        elmId: id,
        data: {
            function: functionName,
            value: val
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