<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job Registration</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="container">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th class="update">id</th>
                        <th>name</th>
                        <th>degree</th>
                        <th>mobile</th>
                        <th>email</th>
                        <th>refer</th>
                        <th>post</th>
                        <th colspan="2">operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'connection.php';

                        $selectquery= "select * from jobapplication";

                        $query= mysqli_query($con,$selectquery);

                        while($res=mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td class="id"><?php echo $res['id'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['degree'] ?></td>
                                <td><?php echo $res['mobile'] ?></td>
                                <td><?php echo $res['email'] ?></td>
                                <td><?php echo $res['refer'] ?></td>
                                <td><?php echo $res['jobPost'] ?></td>
                                <td><ion-icon name="create-outline" class="update"></ion-icon></td>
                                <td><ion-icon name="trash-outline" class="delete"></ion-icon></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>   
    <script src="./script.js"></script>
    <script>
        $(document).on("click",function(){
            if(this.className="update md hydrated")
                console.log("hello");
            }
        });
    </script>
    </body>
</html>