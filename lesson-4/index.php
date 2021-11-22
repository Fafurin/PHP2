<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4-th homework is done</title>
</head>
<body>
    <div id="products" style="display: flex; justify-content: space-between; flex-wrap: wrap">

    </div>
    <button id="button" style="display: block; margin-left: auto; margin-right: 50%;">Show more</button>
</body>
</html>

<script>
    button.addEventListener('click', function(){
        fetch('/getproducts.php').then(
            response => {
                return response.text();
            }
        ).then(
            text => {
                products.insertAdjacentHTML('afterbegin', text);
            }
        )
    });
</script>
