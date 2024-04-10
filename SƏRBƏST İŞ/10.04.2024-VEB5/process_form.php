<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $age = htmlspecialchars($_POST['age']);
        $group = htmlspecialchars($_POST['group']);
        $faculty = htmlspecialchars($_POST['faculty']);

        if (!empty($name) && !empty($email) && !empty($age) && !empty($group) && !empty($number) && !empty($faculty)) {
            echo "<p>Ad,Soyad: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Yaş: $age</p>";
            echo "<p>Qrup: $group</p>";
            echo "<p>Fakültə: $faculty</p>";
        } else {
            echo "Boş xana saxlamayin.";
        }
    }
    ?>
</body>
</html>