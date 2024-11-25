<!DOCTYPE html>
<html lang="en">
<head>
  <title>Title of the document</title>
</head>
<body>
    <div>
        <table border="1">
            <tr>
                <td>Data 1</td>
            </tr>
        </table>
    </div>
    <script src="{{ asset('build/assets/app-BvIEi1XO.js') }}"></script>
    <script>
        window.Echo.channel('posts')
            .listen('.create', (data) => {
                console.log(data);
                alert(data.message);

                // Create a new row and cell
                var table = document.querySelector('table');
                var newRow = table.insertRow();
                var newCell = newRow.insertCell(0);

                // Add the message to the new cell
                newCell.textContent = data.message;
            });
    </script>
</body>
</html>
