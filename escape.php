<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        /* Base styles for the form */
form {
  max-width: 300px;
  margin: 20px auto;
  padding: 20px;
  background: #f3f3f3;
  border-radius: 8px;
}

/* Styles for the textarea */
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical; /* Allows the user to resize the textarea vertically */
}

/* Styles for the submit button */
input[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 4px;
  background-color: #007bff;
  color: white;
  transition: background-color 0.3s ease;
}

/* Hover and focus styles for the submit button */
input[type="submit"]:hover,
input[type="submit"]:focus {
  background-color: #0056b3;
  cursor: pointer;
}

/* Placeholder color */
::placeholder {
  color: #888;
}

    </style>



<!-- Escape function to hide specific letter or word -->

    <form method="POST">
        <textarea name="mainField" id="" cols="30" rows="3"><?php if(isset($_POST['mainField'])){ echo $_POST['mainField'];}?></textarea>
        <input type="submit" value="Go!">
    </form>

    <?php
        if(isset($_POST['mainField'])){
            $counta=0;
            $mainString  = $_POST['mainField'];
            for($i=0; $i<strlen($mainString);$i++){
                if($mainString[$i]=='A' OR $mainString[$i]=='a'){
                    continue;
                }else{
                    echo $mainString[$i];
                }
            }
        }
    ?>
</body>
</html>