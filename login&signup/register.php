<?php

//Load Composer's autoloader
require 'vendor/autoload.php';

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    session_start();
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        header("Location: register.php");
        die();
    }

    

    include 'config.php';
    $msg = "";

     // Function to validate input
     function validateInput($data)
     {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
     }
 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Registration form submitted
    
       
        $name = validateInput($_POST['name']);
        $email = validateInput($_POST['email']);
        $password = validateInput($_POST['password']);
        $confirmPassword = validateInput($_POST['confirm_password']);
    
        // Additional validation checks
        if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
            $msg = "<div class='alert alert-danger'>All fields are required.</div>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg = "<div class='alert alert-danger'>Invalid email format.</div>";
        } elseif ($password !== $confirmPassword) {
            $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match.</div>";
        } elseif (strlen($password) < 6) {
            $msg = "<div class='alert alert-danger'>Password must be at least 6 characters.</div>";
        } elseif (!preg_match("/[a-zA-Z]/", $password)) {
            $msg = "<div class='alert alert-danger'>Password must contain at least one letter.</div>";
        } elseif (!preg_match("/[0-9]/", $password)) {
            $msg = "<div class='alert alert-danger'>Password must contain at least one number.</div>";
        } else {
            // Password hashing
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
            $code = md5(rand());
    
            // Check if email already exists
            // $checkEmailQuery = "SELECT * FROM users WHERE email='{$email}'";
            // $result = mysqli_query($conn, $checkEmailQuery);
            $checkEmailQuery = "SELECT * FROM users WHERE email=?";
            $checkEmailStmt = mysqli_prepare($conn, $checkEmailQuery);
            mysqli_stmt_bind_param($checkEmailStmt, "s", $email);
            mysqli_stmt_execute($checkEmailStmt);
            $result = mysqli_stmt_get_result($checkEmailStmt);
    
            if (mysqli_num_rows($result) > 0) {
                $msg = "<div class='alert alert-danger'>This email address is invalid or already exists.</div>";
            } else {
                // Insert user data into the database
                // $insertUserQuery = "INSERT INTO users (full_name, email, password, code) VALUES ('$name', '$email', '$hashedPassword', '$code')";
                $insertUserQuery = "INSERT INTO users (full_name, email, password, code,user_type,user_status) VALUES (?, ?, ?, ?,'user','Active')";
                
                $insertUserStmt = mysqli_prepare($conn, $insertUserQuery);
                mysqli_stmt_bind_param($insertUserStmt, "ssss", $name, $email, $hashedPassword, $code);
                $insertResult = mysqli_stmt_execute($insertUserStmt);
                // $insertResult = mysqli_query($conn, $insertUserQuery);
    
                if ($insertResult) {
                    // Send verification email
                    $mail = new PHPMailer(true);
    
                    try {
                         //Server settings
                         $mail->SMTPDebug = 0 ;                      //Enable verbose debug output
                         $mail->isSMTP();                                            //Send using SMTP
                         $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                         $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                         $mail->Username   = 'prepbroszz@gmail.com';                     //SMTP username
                         $mail->Password   = 'hqlykprmembzmcfa';                               //SMTP password
                         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                         $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
 
                         //Recipients
                         $mail->setFrom('prepbroszz@gmail.com');
                         $mail->addAddress($email);
                        
                        // Content
                        $mail->isHTML(true);
                        $mail->Subject = 'No Reply';
                        // $mail->Body = 'Here is the verification link <b><a href="http://localhost/PrepPros/login&signup/login.php?verification='.$code.'">http://localhost/login/?verification='.$code.'</a></b>';
                        $mail->Body = 'Here is the verification link <b><a href="http://localhost/PrepPros/login&signup/login.php?verification='.$code.'">http://localhost/PrepPros/login&signup/login.php?verification='.$code.'</a></b>';
    
    
                        $mail->send();
                        $msg = "<div class='alert alert-info'>We have sent a verification link to your email address.</div>";
                    } catch (Exception $e) {
                        // $msg = "<div class='alert alert-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
                        $msg = "<div class='alert alert-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";

                    }
                } else {
                    // $msg = "<div class='alert alert-danger'>Something went wrong.</div>";
                    $msg = "<div class='alert alert-danger'>Something went wrong.</div>";

                }
            }
        }
    }

   


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<?php
include  dirname(__DIR__).'/includes/head1.php';


?>  <!-- Meta tag Keywords -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <meta charset="UTF-8" /> -->
    <meta name="keywords" content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form" style="background: linear-gradient(to bottom, #dfb7f6 0%, rgb(194, 32, 194) 100%);">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/signup.jpg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Register Now</h2>
                        <p>Welcome to PrepPros </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="text" class="name" name="name" placeholder="Enter Your Name"
                                value="<?php if (isset($_POST['submit'])) { echo $name; } ?>" required>
                            <input type="email" class="email" name="email" placeholder="Enter Your Email"
                                value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password"
                                required>
                            <input type="password" class="confirm_password" name="confirm_password"
                                placeholder="Enter Your Confirm Password" required>
                           
                            <button name="submit" class="btn" style="background-color: purple;"
                                type="submit">Register</button>
                                
                        </form>
                        <div class="social-icons">
                            <p>Have an account! <a href="login.php">Login</a>.</p>
                        </div>
                        <!-- <div class="social-icons">
                            <p>Register with:
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-google"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

    <script src="js/jquery.min.js"></script>
    <script>
    $(document).ready(function (c) {
        $('.alert-close').on('click', function (c) {
            $('.main-mockup').fadeOut(100, function (c) {
                $('.main-mockup').remove();
            });
        });
    });
</script>

</body>

</html>







<!-- 


if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm_password']));
        $code = mysqli_real_escape_string($conn, md5(rand()));

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
            $msg = "<div class='alert alert-danger'>{$email} - This email address is invalid or already exists.</div>";
        } else {
            if ($password === $confirm_password) {
                $sql = "INSERT INTO users (full_name, email, password, code) VALUES ('{$name}', '{$email}', '{$password}', '{$code}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "<div style='display: none;'>";
                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

                    try {
                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'prepbroszz@gmail.com';                     //SMTP username
                        $mail->Password   = 'hqlykprmembzmcfa';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                        //Recipients
                        $mail->setFrom('prepbroszz@gmail.com');
                        $mail->addAddress($email);

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'no reply';
                        $mail->Body    = 'Here is the verification link <b><a href="http://localhost/PrepPros/login&signup/login.php?verification='.$code.'">http://localhost/login/?verification='.$code.'</a></b>';

                        $mail->send();
                        echo 'Message has been sent';
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                    echo "</div>";
                    $msg = "<div class='alert alert-info'>We have send a verification link on your email address.</div>";
                } else {
                    $msg = "<div class='alert alert-danger'>Something went wrong.</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
            }
        }
    }

    
    
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);
        $confirm_password = validate($_POST['confirm_password']);
        $name = validate($_POST['full_name']);
        $email = validate($_POST['email']);
        // $phone = validate($_POST['phone']);
        // $usertype = ($_POST['usertype']);
        //$otp = ($_POST['otp']);
        $status = ($_POST['status']);
        // var_dump($_POST); die;
    
        $user_data = 'uname=' . $uname . '&name=' . $name;
    
    
        // if (!preg_match("/^[0-9]{10}$/", ($phone))) {
        //     header("Location: signup.php?error=Please enter a 10-digit phone number&$user_data");
        //     exit();
        // }
        // else if(!preg_match("/[a-z]/i", $uname) || !preg_match("/^[a-zA-Z0-9_]+$/", $uname) || strpos($uname, '@') !== false || strpos($uname, '#') !== false || strpos($uname, '$') !== false || strpos($uname, '*') !== false) {
        //     header("Location: signup.php?error=Enter a valid username special character are not allowed&$user_data");
        //     exit();
        // } else 
        if (!preg_match("/[a-z]/i", ($pass))) {
            // header("Location: signup.php?error=Password must contain at least one letter&$user_data");
            $msg = "<div class='alert alert-danger'>Password must contain at least one letter&$user_data.</div>";
            exit();
        } else if (!preg_match("/[0-9]/", ($pass))) {
            // header("Location: signup.php?error=Password must contain at least one number&$user_data");
            $msg = "<div class='alert alert-danger'>Password must contain at least one number&$user_data.</div>";
            exit();
        } else if (strlen($pass) < 6) {
            header("Location: signup.php?error=Password must be at least 6 characters&$user_data");
            $msg = "<div class='alert alert-danger'>Password must be at least 6 characters&$user_data.</div>";
            exit();
        }
        /*else if(empty($usertype)){
               header("Location: signup.php?error=User Type  is required&$user_data");
               exit();
           }*/ else if ($pass !== $re_pass) {
            // header("Location: signup.php?error=The confirmation password  does not match&$user_data");
            $msg = "<div class='alert alert-danger'>The confirmation password  does not match&$user_data.</div>";
            exit();
        } else {
    
            // hashing the password
            $pass = md5($pass);
    
            $sql = "SELECT * FROM users WHERE email='{$email}' ";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0) {
                $selectrow = mysqli_fetch_assoc($result);
                $status = $selectrow['id'];
                // header("Location: signup.php?error=The username is taken try another username&$user_data");
            $msg = "<div class='alert alert-danger'>The Email ID is taken try another Email Id&$user_data.</div>";
                exit();
            } else {
    
                $sql2 = "INSERT INTO users( password, full_name,email,user_status) VALUES('$password', '$name','$email','Active')";
                $result2 = mysqli_query($conn, $sql2);
                // var_dump($result2); die;
                if ($result2) {
                    // header("Location: signup.php?success=Your account has been created successfully"); 
            $msg = "<div class='alert alert-danger'>Your account has been created successfully.</div>";

                  
                } else {
                    header("Location: signup.php?error=unknown error occurred&$user_data");
                    exit();
                }
            }
        }
     else {
        header("Location: login.php");
        exit();
    }



 -->











