<html lang="en">
    <head>
        <title>Accessories</title>
        <link rel="stylesheet" href="CSS\product.css">
    </head>
<body>
    <script>
        function analyze(input) {
                if (input == "Fish") {
                    window.open('Fish.php', '_self');
                }
                else
                {
                    window.open('Product.php', '_self');
                }
        }

        </script>

        <table style="width: 50%;" align ="center" class="table1"> 

        <tr><td><h3>Please select option:</h3></td></tr>
        <tr><td><label>
            <input type="radio" value="Fish" onclick="analyze(this.value);">Fish </label></td>
        <td><label>
            <input type="radio" value="Product" onclick="analyze(this.value);">Product </tr></td></label>
            <td colspan="2" value="submit"><button><b>Continue</b></button></td>
            </table>
        </body>
</html> 