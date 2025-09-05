<?php
// include("db_connect.php");

if(isset($_POST['add_notice'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = date("Y-m-d");
    $file_path = "";

    // file upload
    if(isset($_FILES['notice_file']) && $_FILES['notice_file']['error'] == 0){
        $target_dir = "uploads/";
        if(!is_dir($target_dir)){
            mkdir($target_dir, 0777, true); // folder create if not exists
        }
        $file_name = time() . "_" . basename($_FILES['notice_file']['name']);
        $target_file = $target_dir . $file_name;

        // only pdf allowed
        $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if($file_type == "pdf"){
            if(move_uploaded_file($_FILES['notice_file']['tmp_name'], $target_file)){
                $file_path = $target_file;
            }
        }
    }

    // insert query example
    // $sql = "INSERT INTO notice (title, description, file_path, date, created_by) 
    //         VALUES ('$title', '$description', '$file_path', '$date', 1)";
    // mysqli_query($conn, $sql);
}

// delete notice
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    // first file delete korte hobe jodi thake
    // $res = mysqli_query($conn, "SELECT file_path FROM notice WHERE notice_id=$id");
    // $row = mysqli_fetch_assoc($res);
    // if($row['file_path'] && file_exists($row['file_path'])){
    //     unlink($row['file_path']);
    // }
    // mysqli_query($conn, "DELETE FROM notice WHERE notice_id=$id");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Manage Notice</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Manage Notices</h4>
    </div>
    <div class="card-body">

      <!-- Add Notice Form -->
      <form method="POST" enctype="multipart/form-data" class="mb-4">
        <div class="mb-3">
          <label class="form-label">Notice Title</label>
          <input type="text" name="title" class="form-control" placeholder="Enter notice title" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea name="description" class="form-control" rows="3" placeholder="Enter notice description" required></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Attach PDF</label>
          <input type="file" name="notice_file" class="form-control" accept="application/pdf">
        </div>
        <button type="submit" name="add_notice" class="btn btn-success">Add Notice</button>
      </form>

      <!-- Notice Table -->
      <h5>All Notices</h5>
      <table class="table table-bordered">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>File</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          // Example static data
          $notices = [
              ["id"=>1,"title"=>"Exam Routine","description"=>"Mid-term exam from next week.","date"=>"2025-09-05","file"=>"uploads/exam.pdf"],
              ["id"=>2,"title"=>"Holiday Notice","description"=>"College closed tomorrow.","date"=>"2025-09-06","file"=>""],
          ];
          foreach($notices as $row){
            echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['title']}</td>
              <td>{$row['description']}</td>
              <td>{$row['date']}</td>
              <td>";
            if($row['file']){
              echo "<a href='{$row['file']}' target='_blank' class='btn btn-sm btn-info'>View PDF</a>";
            } else {
              echo "No File";
            }
            echo "</td>
              <td>
                <a href='?delete={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
              </td>
            </tr>";
          }
          ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
