<?php include 'inc/header.php';  // If you use require, when the dir is wrong, the rest of the file will not load 
?>

<?php
$sql = 'Select * from feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<h2>Past Feedback</h2>

<?php if (empty($feedback)): ?>
  <p class="lead mt3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedback as $item): ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
      <div class="text-secondary mt2"></div>
      By <?php echo $item['name']; ?> on <?php echo $item['date']; ?>
    </div>
  </div>
<?php endforeach; ?>

</div>
<?php include 'inc/footer.php'; ?>