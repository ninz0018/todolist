<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="icon/x-icon" href="13.png">
    <title>TodoList</title>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center" >
        <div class="col-8 mt-4">
            <div class="d-flex justify-content-center align-items-center fa" >
                <h1>TODOLIST</h1>
            </div><br>
            <div>
                <form action="" method="post" class="d-flex justify-content-center align-items-center">
                    <label for="todo" class="fa me-2" >TODO:</label>
                    <input name="todo" type="text" id="todo" class="rounded col-5 me-2" placeholder="What do you want to do?">
                    <label for="oras" class="fa me-2" >TIME:</label>
                    <input name="oras" type="text" id="oras" class="rounded col-2 me-2" placeholder="INPUT TIME">
                    <button name="add" class="hov btn btn-warning fa" >Enter</button>
                </form><br>
                    <div>
                        <table class="table" >
                            <thead>
                                <td class="fa col-7" >Todo</td>
                                <td class="fa col-3" >Date</td>
                                <td class="fa" >Action</td>
                            </thead>
                            <tbody>
                                <tr>
                                 
                                </tr>                         
                                <tr></tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>