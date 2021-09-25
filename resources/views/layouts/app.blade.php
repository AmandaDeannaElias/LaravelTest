<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Test</title>
</head>
<body>
<div id="response">
    API response here
</div>
<script>
    fetch('/tests')
    .then(function(response) {
        response.text().then(function(data) {
            document.getElementById('response').innerHTML = data;
        });
    })
    .catch(function(err) {
        console.log('Error: ' +  err);
    });
</script>
</body>
</html>