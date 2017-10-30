<form action="DataManagementResult.php" method="post">
  <ol>
  <?php foreach($rows as $row): ?> 
     <li>
     <label><?php echo ($row['description']); ?></label>
     <div class="radio">
      <label>
       <input type="radio" name="optionsRadios<?php echo htmlentities($row['questionid']); ?>" value="Yes">
         Yes
      </label>
     </div>
     <div class="radio">
      <label>
       <input type="radio" name="optionsRadios<?php echo htmlentities($row['questionid']); ?>" value="No">
         No
      </label>
     </div>
     <div class="radio">
       <label>
         <input type="radio" name="optionsRadios<?php echo htmlentities($row['questionid']); ?>" value="Dont Know">
            Don't Know
       </label>
      </div>
      </li>
      <?php endforeach; ?>
  </ol>
<button type="submit" class="btn btn-default">Submit</button>
</form>