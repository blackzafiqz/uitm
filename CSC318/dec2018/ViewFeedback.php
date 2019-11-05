<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consumer Feedback</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, td, th {
            border: 1px solid black;
        }
    </style>
  </head>
  
  <body>
    <table style="width: 100%">
      <tr>
        <th>id</th>
        <th>experience</th>
        <th>branch</th>
        <th>date</th>
        <th>Feedback comment</th>
        <th>name</th>
        <th>email</th>
        <th>phoneno</th>
        <th> </th>
        <th> </th>
      </tr>
      <?php
      include 'dbconnect.php';

      $sql = "SELECT id,experience,branch,feeddate,feedrespond,salutation,name,email,phoneno FROM feedback";
      $result = $conn->query( $sql );

      if ( $result->num_rows > 0 ) {
          $counter = 1;
          while ( $row = $result->fetch_assoc() ) {
              echo "<tr>";
              echo "<td>" . $counter . "</td>";
              echo "<td>" . $row[ 'experience' ] . "</td>";
              echo "<td>" . $row[ 'branch' ] . "</td>";
              echo "<td>" . $row[ 'feeddate' ] . "</td>";
              echo "<td>" . $row[ 'feedrespond' ] . "</td>";
              echo "<td>" . $row[ 'salutation' ] . ' ' . $row[ 'name' ] . "</td>";
              echo "<td>" . $row[ 'email' ] . "</td>";
              echo "<td>" . $row[ 'phoneno' ] . "</td>";
              echo "<td>" . "<a href='editfeedback.php?id=" . $row[ 'id' ] . "'>Edit</a>" . "</td>";
              echo "<td>" . "<a href='deletefeedback.php?id=" . $row[ 'id' ] . "'>Delete</a>" . "</td>";

              echo "</tr>";

              $counter++;
          }
      } else {
          echo "0 results";
      }
        $conn->close();
      ?>
    </table>
  </body>
</html>