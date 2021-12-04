<?php 
    foreach($messages as $m)
    {
?>
    <div class="personal-message">
        <li>
            <div class="message-view">
                <span style="color:pink"><?=$m->email?></span><br>
                <span style="color:#e4ecf2"><?=$m->message?></span><br>
                <span class="date-align"><?=$m->date?></span>
            </div>
        </li>
    </div>
<?php
    }
?>