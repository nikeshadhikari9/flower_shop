<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:login.php');
};

if (isset($_GET['delete'])) {
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_users.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

   <!-- Optional: Add some custom styling for the table -->
   <style>
      table {
         width: 100%;
         border-collapse: collapse;
      }

      table,
      th,
      td {
         border: 1px solid black;
         font-size: large;
      }

      th,
      td {
         padding: 10px;
         text-align: left;
      }

      th {
         background-color: #f2f2f2;
      }
   </style>

</head>

<body>

   <?php @include 'admin_header.php'; ?>

   <section class="users">

      <h1 class="title">Users Account</h1>

      <table>
         <thead>
            <tr>
               <th>User ID</th>
               <th>Username</th>
               <th>Email</th>
               <th>User Type</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php
            $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
            if (mysqli_num_rows($select_users) > 0) {
               while ($fetch_users = mysqli_fetch_assoc($select_users)) {
            ?>
                  <tr>
                     <td><?php echo $fetch_users['id']; ?></td>
                     <td><?php echo $fetch_users['name']; ?></td>
                     <td><?php echo $fetch_users['email']; ?></td>
                     <td style="color:<?php if ($fetch_users['user_type'] == 'admin') {
                                          echo 'var(--orange)';
                                       }; ?>">
                        <?php echo $fetch_users['user_type']; ?>
                     </td>
                     <td>
                        <a href="admin_users.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">Delete</a>
                     </td>
                  </tr>
            <?php
               }
            }
            ?>
         </tbody>
      </table>

   </section>

   <script src="js/admin_script.js"></script>

</body>

</html>