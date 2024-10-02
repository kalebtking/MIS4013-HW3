<h1>Instructors</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      </tr>
    </thead>
    <tbody>
<?php 
while ($instructor = $instructors->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $instructor['Instructor_ID']; ?></td>
    <td><?php echo $instructor['Instructor_Name']; ?></td>
    <td><?php echo $instructor['email']; ?></td>
  </tr>     
<?php 
}
?>
    </tbody>
  </table>
</div>
