<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My page</title>
    </head>
    <body>
        <button polar:click="swap">
            click to swap!
        </button>

        <button polar:click="anotherSwap">
            Click to swap another!
        </button>

        <footer>
            <script 
                src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous">
            </script>

            <script id="templateElms">
                
            </script>

            <script>
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

                            $("#" + this.elmId).html(result);
                        }
                    });
                });
            </script>
        </footer>
    </body>
</html>