<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/sb-admin-2.min.css'); ?>">
    <style>
        body {
            background: url('<?= base_url('assets/img/kopispasi.jpg'); ?>') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 350px;
        }
        h2 {
            margin-bottom: 20px;
            font-weight: bold;
            color: #333;
        }
        .input-group {
            position: relative;
            width: 100%;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .input-group i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #888;
        }
        button {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .error {
            color: red;
            font-weight: bold;
            font-size: 1rem;
            margin-left: 40px;
        }
    </style>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var toggleIcon = document.getElementById("toggleIcon");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.classList.remove("fa-eye");
                toggleIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                toggleIcon.classList.remove("fa-eye-slash");
                toggleIcon.classList.add("fa-eye");
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        <?php if ($this->session->flashdata('error')): ?>
            <p class="error"><?php echo $this->session->flashdata('error'); ?></p>
        <?php endif; ?>
        
        <form action="<?php echo base_url('login_admin/proses'); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <i class="fa fa-eye" id="toggleIcon" onclick="togglePassword()"></i>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
