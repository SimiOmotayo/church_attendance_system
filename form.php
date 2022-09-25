<html>
    <head>
    <title>Register</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    

    </head>

    <body>
        <!-- Form Data Collection -->
        <h1>Register A New Member</h1>
        <form action = "process-form.php" method="post">
            <label for "fname">First Name</label>
            <input type = "text" id = "fname" name = "fname" required>
            <label for "lname">Last Name</label>
            <input type = "text" id = "lname" name = "lname" required>
            <label for "oname">Other Name</label>
            <input type = "text" id = "oname" name = "oname">
            <fieldset>
                <legend>Gender</legend>
    
                <label>
                    <input type="radio" name="gender" value="Male" required>
                    Male
                </label>
    
                <br>
    
                <label>
                    <input type="radio" name="gender" value="Female">
                    Female
                </label>
            </fieldset>
            <label for="designation">Designation</label>
            <select class="form-control" id="designation" value = "designation" required>
            <option value="designation">Select Designation</option>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "register_db");
            $result = mysqli_query($conn,"SELECT * FROM designation");
            while($row = mysqli_fetch_array($result)) {
            ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
            <?php
            }
            ?>
            </select>

            <label for="designation">Department</label>
            <select class="form-control" id="department" value = "department" required>
            <option value="department">Select Department</option>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "register_db");
            $result = mysqli_query($conn,"SELECT * FROM department");
            while($row = mysqli_fetch_array($result)) {
            ?>
            <option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
            <?php
            }
            ?>
            </select>
            <label for "dependent">Number of Dependent </label>
            <input type="number" id = "dependent" value = "dependent" required>         
            <label for "phone">Phone Number</label>
            <input type = "text" id = "phone" name = "phone" required>
            <label for "email">Email Address</label>
            <input type = "text" id = "email" name = "email">
            <label for "address">House Address</label>
            <textarea id = "address" name = "address" placeholder=" Please include the closest landmark to your house" required></textarea>
            <label for="state">State of Residence</label>
        <select id="state" name="state" required>
            <option value="FCT">FCT</option>
            <!--<option value="2">Abia</option>
            <option value="3">Adamawa</option>-->
        </select>
        <label for="lg">Area Council of Residence</label>
        <select id="lg" name="lg" required>
            <option value="Abaji">Abaji</option>
            <option value="AMAC">AMAC</option>
            <option value="Bwari">Bwari</option>
            <option value="Gwagwalada">Gwagwalada</option>
            <option value="Kuje">Kuje</option>
            <option value="Kwali">Kwali</option>
            
        </select>

        <fieldset>
            <!--<label for "state">State of Residence</label>
            <input type = "menu" id = "state"><br>
            <label for "lg">LG of Residence</label>
            <input type = "text" id = "lg"><br>-->
            <button onclick="history.back()">Back</button>
            <button>Submit</button>
            <button input type = "reset" value="reset">Clear</button>
        
            

        </form>

    </body>
</html>