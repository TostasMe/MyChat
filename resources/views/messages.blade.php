<style>
    .author
    {
        color: pink;
        margin-top: 5px;
    }
    .text
    {
        color: #e4ecf2;
    }
    .time
    {
        color: #707e88;
        margin-top: 15px;
        margin-bottom: 0;
        text-align: right;
    }
    .img{
        float: right;
        padding-top: 0;
        padding-right: 5px;
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
        <div class="img">
            <img style="border-radius:30px" src="<?=$m->image?>" width="40px" height="40px" alt="#"> 
        </div>
        <p class="author"><?=$m->name?> (<?=$m->email?>)</p>
        <span class="text"><?=$m->message?></span><br>
        <p class="time">send at <?=$m->date?></p>
    </li>
<?php
    }
?>
