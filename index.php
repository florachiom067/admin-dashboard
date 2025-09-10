<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Admin Dashboard</title>
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="icon" type="image/svg" href="./public/icons/favicon.svg" />
</head>

<body>
  <?php include_once "./components/header.php" ?>

  <?php
  require_once "./app/controller/students/students.php";

  echo "<script>console.log(".json_encode($students).")</script>";
  ?>

  <!-- desktop records -->
  <div id="records">
    <div id="records-heading">
      <h2>Student Records</h2>
      <p>Manage students information efficiently</p>
    </div>


    <?php if(!(mysqli_num_rows($students) > 0)): ?>
      <div id="search-records">
        <div id="search">
          <img src="public/icons/search.svg" alt="search"/>
          <input placeholder="Search by name or department" />
        </div>
      </div>

      <div id="table-wrapper">
        <div id="table">
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Department</th>
                <th>Actions</th>
              </tr>
            </thead>

            <tbody>
              <!-- map over data -->
              <tr>
                <td>Name</td>
                <td>Age</td>
                <td>Department</td>
                <td>
                  <a href="edit.php">edit</a> |
                  <a href="delete.php">delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div id="records-mobile">
        <!-- map over data -->
        <div class="record-row">
          <div class="record-row-info">
            <h3>Name</h3>
            <p>Age: <span>20</span></p>
            <p>Department: <span>Computer science</span></p>
          </div>

          <div class="action-icons-wrapper">
            <img src="public/icons/edit.svg" />
            <img src="public/icons/trash.svg" />
          </div>
        </div>
      </div>

      <div id="add-student">
        <button>
          <img src="/admin-dashboard/public/icons/plus.svg" alt="add"/>
        </button>
      </div>
    <?php else: ?>
      <div>
        No student records found
      </div>
    <?php endif; ?>
  </div>

  </div>


</body>
</html>