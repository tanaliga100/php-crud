<?php
require('./read.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #ffffff;
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        }
        .main{
            display: grid;
        
        }
        form{
    
            justify-items: center;
            align-items: center;

        }
        .form-inputs{
            padding: 20px
        }

        h3{
            text-align: center;
            margin-top: 20px;
            padding-top:20px;

        }
        .forms{
            display: flex;
        }
</style>
<body>
<div class="container">
        <div class="main">
            <h3 class="h3">Create User</h3>
                <form action="/php-crud/create.php" class="form-control-sm" method="post" autocomplete="off">
                    <div class="form-inputs">
                        <label for="exampleFormControlInput1" class="form-label">Username :</label>
                        <input type="text" class="form-control sm" name= "username" id="exampleFormControlInput1" placeholder="user123" autocomplete="off">
                        <label for="exampleFormControlInput1" class="form-label">Password :</label>
                        <input type="password" class="form-control sm" name="password" id="exampleFormControlInput1" placeholder="*****" autocomplete="off">
                        <input class="btn btn-outline-success  mt-4" type="submit" value="CREATE" name="create">
                    </div>
                </form>
        </div>
        <table class="table">
                <thead>
                    <tr class="headers">
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($results = mysqli_fetch_array($sqlAccounts)){?>
                        <tr>
                   
                        <td><?php echo $results['id']?></td>
                        <td><?php echo $results['username']?></td>
                        <td><?php echo $results['password']?></td>
                        <td>          
                        <div class="forms">
                        <form action="#" class="btn" method="post">
                            <input class="btn btn-outline-primary" type="submit" value="Edit" name="edit"> 
                        </form>
                        <form action="/php-crud/delete.php" class="btn" method="post">
                            <input  class="btn btn-outline-danger" type="submit" value="Delete" name="delete"> 
                            <input  class="btn btn-outline-danger" type="hidden" value="<?php echo $results['id']?>" name="deleteID"> 
                        </form>
                        </div> 
                        </td>
                        </tr>
                    <?php } ?>     

                </tbody>
        </table>

</div>

</body>
</html>