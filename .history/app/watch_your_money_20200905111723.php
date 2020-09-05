<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Your Money</title>
</head>
<body>
    <h1>Watch Your Money</h1>
    <hr>
    <div id='function' style='display: flex;justify-content: space-around;'>
        <div id='bookkeeping-button'>
            <button disabled="disabled">Bookkeeping</button>
        </div>
        <div id='check-records-button'>
            <button>Check My Records</button>
        </div>
    </div>
    <hr>
    <div id='main-content'>
        <div id='bookkeeping'>x
        <form name='bookkeeping-table-form' action="post">
            <table id='bookkeeping-table' style="border:2px solid">
                    <tr>
                        <th>Item</th>
                        <th>Category</th>
                        <th>Amount</th>
                    </tr>

                
                </table>
            </form>
        </div>
    </div>
</body>
</html>