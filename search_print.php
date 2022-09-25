<html>
    <head>
    <title>Search</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    

    </head>

    <body>
        <h1>Print Attendance</h1>
        <div class = "container">
        <form action = "" method="post">
        <label for="search">Select Search Parameter</label>
        <select id="search" name="search">
            <option value="1">Present</option>
            <option value="2">Absent</option>    
        </select>
            <label for "date">Date</label>
            <input type= "date" id = "date" name = "date"> 
            <input type = "submit" name = "search" value="SEARCH">
        </form>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Other Name</th>
            <th>Gender</th>
            <th>Designation</th>
            <th>Department</th>
            <th>No of Dependent</th>
            <th>Phone Number</th>
            <th>Email Address</th>
            <th>House Address</th>
            <th>State of Residence</th>
            <th>LG of Residence</th>

        </tr><br>
        <?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'register_db');

    if (isset($_POST['search']))
    {
        $phone = $_POST['phone'];
        $query = "SELECT * FROM 'register' where phone = '$phone' ";
        $query_run = mysqli_query($phone, $query,);

        while($row = mysqli_fetch_array($query_run))
        {
            ?>
                <tr>
                    <td><?php echo $row ['fname'] ?></td>
                    <td><?php echo $row ['lname'] ?></td>
                    <td><?php echo $row ['oname'] ?></td>
                    <td><?php echo $row ['gender'] ?></td>
                    <td><?php echo $row ['designation'] ?></td>
                    <td><?php echo $row ['department'] ?></td>
                    <td><?php echo $row ['dependent'] ?></td>
                    <td><?php echo $row ['phone'] ?></td>
                    <td><?php echo $row ['email'] ?></td>
                    <td><?php echo $row ['address'] ?></td>
                    <td><?php echo $row ['state'] ?></td>
                    <td><?php echo $row ['lg'] ?></td>
                </tr>
            <?php
        }


    }
    ?>
    </table>
    

        </div>
        <div>
        <input type = "submit" name = "search" value="PRINT" extension= php_printer.dll>
        <input type = "submit" name = "search" value="BACK" href="index.html" onclick="history.back()">
        </div>
    </body>

</html>