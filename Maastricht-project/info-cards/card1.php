<?php include_once('./includes/function.php');?>
<div class="popup-container">
    <input type="checkbox" id="click">
    <label for="click" class="Meer-Lezen">Meer Lezen</label>

    <div class="popup-content">
        <div class="popup-Title">
             <h2>De Vierde musketier</h2>
            <label for="click" class="fas fa-times"></label>
        </div>
       
        <p class="card-input">
           <?php echo(HistoryInfo(0));?>
        </p>
        <div class="close-content">
            <label for="click" class="close-btn">Close</label>
        </div>
        
    </div>
</div>
