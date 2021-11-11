<?php include_once("./includes/function.php");?>
<div class="popup-container">
    <input type="checkbox" id="click3">
    <label for="click3" class="Meer-Lezen">Meer Lezen</label>
    <div class="popup-content">
        <div class="popup-Title">
            <h2>Lorem ipsum</h2>
            <label for="click3" class="fas fa-times"></label>
        </div>
       
       <p class="card-input">
       <?php echo(HistoryInfo(3));?>
   
        </p>
        <div class="close-content">
            <label for="click3" class="close-btn">Close</label>
        </div>
        
    </div>
</div>