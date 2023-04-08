<?php include 'database.php'; ?>
<?php
    // Run if data is sent
    if(isset($_POST['submit']))
    {
        // Check if data exists
        if(isset($_POST['name']) && isset($_POST['message']))
        {
            $name = $_POST['name'];
            $message = $_POST['message'];
            $date = date_format(date_create('now'),'jS F Y');
            if(empty($name) || empty($message)) {
              header('Location: ../../#guest-book');
              exit;
            }
            $sql = "INSERT INTO guest_book (Name, Message, Date) VALUES ('$name', '$message', '$date')";
            // Run validation, if doesnt pass validation output error
            // if passes validation add it to DB
            // if is inserted into db output success message, else output error
            if (mysqli_query($conn, $sql)) {
                // success
                header('Location: ../../#guest-book');
              } else {
                // error
                echo 'Error: ' . mysqli_error($conn);
              }
        }
    }
?>