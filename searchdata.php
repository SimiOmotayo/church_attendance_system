<html>
    <head>
    <title>Register</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    

    </head>

    <body>
        <h1>Search By Phone Number</h1>
        <div class = "container">
        <form action = "" method="POST">
            <input type = "text" name = "search" value = "<?php if (isset($_POST['search'])) {echo $_POST['search'];}?>" placeholder="Enter Phone Number" required>
            <input type = "submit" name = "search" value="SEARCH">
        </form>
        <form>
            <label for "date">Date</label>
            <input type= "date" id = "date" name = "date" disabled> 
            <input type="checkbox" id="present" name="present" value="attendance" disabled>
            <label for="present"> Present</label><br>
            
        </form>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>House Address</th>
            <th>State of Residence</th>
            <th>LG of Residence</th>

        </tr><br>
        <?php
    $conn = mysqli_connect("localhost", "root", "", "register_db");
    //$db = mysqli_select_db($connection, 'register_db');

    if (isset($_POST['search']))
    {
            $search = $_POST['search'];
            $query = "SELECT * FROM 'register' where phone = '$search'";
            $query_run = mysqli_query($conn, $query,);

            while($row = mysqli_fetch_array($query_run))
            if (mysqli_num_rows($query_run) > 0)
                {
                foreach($query_run as $row) 
                
                {
                    ?>
                        <tr>
                            <td><?php echo $row ['fname'] ?></td>
                            <td><?php echo $row ['lname'] ?></td>
                            <td><?php echo $row ['dob'] ?></td>
                            <td><?php echo $row ['gender'] ?></td>
                            <td><?php echo $row ['phone'] ?></td>
                            <td><?php echo $row ['email'] ?></td>
                            <td><?php echo $row ['address'] ?></td>
                            <td><?php echo $row ['state'] ?></td>
                            <td><?php echo $row ['lg'] ?></td>
                        </tr>
                    <?php
                }
        }
            else
            {
                echo "No Records Found";
            }
    }
    ?>
    </table>
    

        </div>
        <div>
        <input type = "submit" name = "search" value="BACK" href="index.html" onclick="history.back()">
        <input type = "submit" name = "search" value="SUBMIT">
        </div>
    </body>

</html>