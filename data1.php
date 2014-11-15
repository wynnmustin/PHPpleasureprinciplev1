<?php
require_once('config.php'); ?>

    <form action="actionscript1.php" method="post">
        <div class="form1 offset-by-five">
       <!--  <input type="hidden" name="formID" value="pleasure_principle1" /> -->
        <input type="hidden" name="redirect_to" value ="http://ambreenshussain.squarespace.com" />
            <h2>BASELINE</h2>
            <h4>I. select a habit to track and analyze</h4>
        <label>tobacco <input type="radio" name="category" value="tobacco"></label>
        <label>alcohol <input type="radio" name="category" value="alcohol"></label>
        <label>snacks <input type="radio" name="category" value="snacks"></label>
        <label>other <input type="radio" name="category" value="other"></label>
        
            <h4>II. one unit of this item costs you<label>$<input type="text" name="weeklycost"></label></h4>
        
            <h4>III. in a typical week you buy this item<label>$<input type="text" name="frequency"></label>times</h4>

            <h4>IV. this purchasing habit became problematic on approximately<label><input type="date" name="date"></label></h4>

            <h4>V. this money could also buy<label><input type="text" name="targetdesc"></label>for<label>$<input type="text" name="targetamt"></label></h4>
       
       <input class="submit" type="submit" name="submit" value="SUBMIT">
        </div>

       
                                    
        </form>
    </div>

  
