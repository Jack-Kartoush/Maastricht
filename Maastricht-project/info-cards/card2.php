<?php include_once("./includes/function.php");?>
<div class="popup-container">
    <input type="checkbox" id="click2">
    <label for="click2" class="Meer-Lezen">Meer Lezen</label>
    <div class="popup-content">
        <div class="popup-Title">
            <h2>De Brug</h2>
            <label for="click2" class="fas fa-times"></label>
        </div>
       
       <p class="card-input">
       <?php echo(HistoryInfo(1));?>
    
           
        </p>
        <div class="close-content">
            <label for="click2" class="close-btn">Close</label>
        </div>
        
    </div>
</div>