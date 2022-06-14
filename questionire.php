



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>
    <link rel="stylesheet" href="questinire.css">
<body>

<span style="  color: azure;  font-size: larger;  " ><?php    if(isset($_GET['message'])){ $message=$_GET['message']; if($message) { echo "<div align='center'>$message</div>";   } }?></span>
     <!-- Home Button -->
     <span class="btn1">
        <a href="login.php">
            <input class="btn" type="button" name="" value="Home"><br>
        </a>
    </span>
     
    <div class="wrapper">
        <div class="title">
            <P>Please Enter Details</P>
        </div>
        <!-- form start here -->
        <form action="resultdietscreen.html" method="GET">
        <div class="form">
        <div class="input_field">
            <label >
                Name
            </label>
            <input id="name" type="text" class="input">
        </div>
        <div class="input_field">
            <label >
              Age
            </label>
            <input id="age" type="text" class="input">
        </div>
        <div class="input_field">
            <label >
                Sex
            </label>
            <div class="custom_selection">
                <select id="language" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

    <div class="boxing">
        <div class="wet">
            <label for="">Weight</label>
        </div>
    
   
    <input id="weight" type="text" name="" placeholder="kg" class="input1" required>
    <div class="het">
        <label for="">Height</label>
    </div>
  
    <input id="height" type="text" placeholder=" ft" class="input2" required>
                   
        </div>
























       
   
    
        <div class="input_field">
            <label >
                Life Style
            </label>
            <div class="custom_selection">
                <select>
            <option value="">Select</option>
                    <option value="Sedentary">Sedentary</option>
                    <option value="Moderate">Moderate</option>
                    <option value="Active">Active</option>
                </select>
            </div>
        </div>
        <div class="input_field">
            <label >
                Any Food Allergies
            </label>
            <div class="custom_selection">
                <select>
                    <option value="">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
        <div class="input_field">
            <label >
              Fluid Intake/Day
            </label>
            <input type="text" class="input">
        </div>
        <div class="input_field">
            <label >
                Medical Condition
            </label>
            <input type="text" class="input">
        </div>
        <div class="input_field">
            <label >
              Other Details
            </label>
            <textarea name="" id="" cols="30" rows="5"></textarea>
        </div>
    </div>

    <ul class="list">
        <li class="li"> <button class="btn" type="submit" onclick="passvalue()">Generate Report</button></li>
        <li class="li">
             <a href="login.html">
                <input class="btn" type="button" name="" value="Back"><br>
            </a>
        </li>
    </ul>

      </form>
    



<!-- To assign the value Dynamicall using Js  -->
<li style="display: inline-block;">
      <span id="calculated-bmi"> </span>
      <span id="mybmi"> </span>
</li>

</ul>
</div>




    
   
   
    </div>

</div>

    <script src="js/page2.js"></script>
</body>

</html>