<style>
    .author
    {
        color: pink;
    }
    .text
    {
        color: #e4ecf2;
    }
    .time
    {
        color: #707e88;
        margin-top: 10px;
    }
</style>

<?php 
    foreach($messages as $m)
    {
?>
    @if(Illuminate\Support\Facades\Auth::user()->email === $m->email)
    <li class="message-view self-message">
    @else
    <li class="message-view">
    @endif
            <span class="author">{{Illuminate\Support\Facades\Auth::user()->name}} (<?=$m->email?>)</span><br>
            <span class="text"><?=$m->message?></span><br>
            <span class="time"><?=$m->date?></span>
        </li>
<?php
    }
?>