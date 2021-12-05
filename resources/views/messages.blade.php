<?php 
    foreach($messages as $m)
    {
?>
    @if(Illuminate\Support\Facades\Auth::user()->email === $m->email)
    <li class="message-view self-message">
    @else
    <li class="message-view">
    @endif
            <span style="color:pink">{{Illuminate\Support\Facades\Auth::user()->name}} (<?=$m->email?>)</span><br>
            <span style="color:#e4ecf2"><?=$m->message?></span><br>
            <span class="date-align"><?=$m->date?></span>
        </li>
<?php
    }
?>