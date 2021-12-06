<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #1a202c;
  font-family: "Calibri", "Roboto", sans-serif;
}

.chat_window {
  position: absolute;
  width: calc(100% - 20px);
  max-width: 1100px;
  height: 800px;
  border-radius: 20px;
  background-color: #fff;
  left: 50%;
  top: 50%;
  transform: translateX(-50%) translateY(-50%);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
  background-color: #f8f8f8;
  overflow: hidden;
  border: 1px solid #636363;
}

.top_menu {
  background-color: #17212b;
  width: 100%;
  padding: 20px 0 15px;
  box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}
.top_menu .buttons {
  margin: 3px 0 0 20px;
  position: absolute;
}
.top_menu .buttons .button {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  display: inline-block;
  margin-right: 10px;
  position: relative;
}
.top_menu .buttons .button.close {
  background-color: #f5886e;
}
.top_menu .buttons .button.minimize {
  background-color: #fdbf68;
}
.top_menu .buttons .button.maximize {
  background-color: #a3d063;
}
.top_menu .title {
  text-align: center;
  color: #bcbdc0;
  font-size: 30px;
}

.bottom_wrapper {
  position: relative;
  width: 100%;
  background-color: #17212b;
  padding: 21px 20px;
  position: absolute;
  bottom: 0;
}
.bottom_wrapper .message_input_wrapper {
  display: inline-block;
  height: 50px;
  width: calc(100% - 160px);
  position: relative;
  padding: 0 20px;
}
.bottom_wrapper .message_input_wrapper .message_input {
  height: 100%;
  border: 2px solid #636363;
  border-radius: 20px;
  box-sizing: border-box;
  width: calc(100% - 40px);
  position: absolute;
  outline-width: 0;
  color: #CFD2E4;
  background-color: #17212b;
  padding-left: 15px;
  padding-right: 15px;
  font-size: 18px;
}
.bottom_wrapper .send_message {
  width: 140px;
  height: 50px;
  display: inline-block;
  border-radius: 50px;
  background-color: #17212b;
  border: 2px solid #636363;
  color: #fff;
  cursor: pointer;
  transition: all 0.2s linear;
  text-align: center;
  float: right;
}
.bottom_wrapper .send_message:hover {
  color: #fff;
  background-color: #4c9ce2;
}
.bottom_wrapper .send_message .text {
  font-size: 18px;
  font-weight: 300;
  display: inline-block;
  line-height: 48px;
}

.messages {
  position: relative;
  list-style: none;
  padding: 20px 10px 0 10px;
  margin: 0;
  height: 634px;
  overflow-y: auto;
  background-color: #0e1621;
}
.messages .message {
  clear: both;
  overflow: hidden;
  margin-bottom: 20px;
  transition: all 0.5s linear;
  opacity: 0;
}
.messages .message.left .avatar {
  background-color: #f5886e;
  float: left;
}
.messages .message.left .text_wrapper {
  background-color: #ffe6cb;
  margin-left: 20px;
}
.messages .message.left .text_wrapper::after, .messages .message.left .text_wrapper::before {
  right: 100%;
  border-right-color: #ffe6cb;
}
.messages .message.left .text {
  color: #c48843;
}
.messages .message.right .avatar {
  background-color: #fdbf68;
  float: right;
}
.messages .message.right .text_wrapper {
  background-color: #c7eafc;
  margin-right: 20px;
  float: right;
}
.messages .message.right .text_wrapper::after, .messages .message.right .text_wrapper::before {
  left: 100%;
  border-left-color: #c7eafc;
}
.messages .message.right .text {
  color: #45829b;
}
.messages .message.appeared {
  opacity: 1;
}
.messages .message .avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: inline-block;
}
.messages .message .text_wrapper {
  display: inline-block;
  padding: 20px;
  border-radius: 6px;
  width: calc(100% - 85px);
  min-width: 100px;
  position: relative;
}
.messages .message .text_wrapper::after, .messages .message .text_wrapper:before {
  top: 18px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.messages .message .text_wrapper::after {
  border-width: 13px;
  margin-top: 0px;
}
.messages .message .text_wrapper::before {
  border-width: 15px;
  margin-top: -2px;
}
.messages .message .text_wrapper .text {
  font-size: 18px;
  font-weight: 300;
}

.message-view{
    padding: 10px;
    border: 1px solid #636363;
    border-radius: 20px;
    margin-bottom: 10px;
    background-color: #182533;
    width: fit-content;
    font-size: 18px;
}

.message_template {
  display: none;
}

.message-view
{
    padding: 10px;
    border: 1px solid #636363;
    border-radius: 20px;
    margin-bottom: 10px;
    background-color: #182533;
    width: fit-content;
    font-size: 18px;
    margin-left: 0; 
    margin-right: auto;
}

.self-message{
    background-color: #2b5278;
    margin-left: auto; 
    margin-right: 0;
}

.user-profile
{
  float: right;
  margin-right: 30px;
  border: 1px solid #696969;
  border-radius: 20px;
  cursor: pointer;
}
.user-name
{
  margin-right: 10px;
  float: right;
}
.sub-menu
{
  position: absolute;
  z-index: 100;
  background-color: #182533;
  color: #e4ecf2;
  left: 83%;
  width: 180px;
  list-style:none;
  padding-right: 40px;
  margin-bottom: 10px;
  border: 2px solid #696969;
  cursor: pointer;
  display: none;
}

a{
  text-decoration: none;
  color: #e4ecf2;
}

.main-item:focus ~.sub-menu,
.main-item:active ~.sub-menu,
.sub-menu:hover
{
  display: block;
}

::-webkit-scrollbar {
  width: 10px;
}
/* Track */
::-webkit-scrollbar-track {
  background: #182533;
}
/* Handle */
::-webkit-scrollbar-thumb {
  background: #636363;
}
/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #2b5278;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chat</title>
</head>

<body>
    <div class="chat_window">
        <div class="top_menu">
            <div class="title">
              <span>Chat v1.2.0</span>
              <a href="#" class="main-item" tabindex="1"><img class="user-profile" src="{{Illuminate\Support\Facades\Auth::user()->image}}" width="40px" height="40px" alt="#"></a>
              <span class="user-name">{{Illuminate\Support\Facades\Auth::user()->name}}</span>
              <ul class="sub-menu">
                <a href="/settings"><li>Settings</li></a>
                <a href="/logout"><li>Logout</li></a>
              </ul>
            </div>
        </div>
        <ul id="table" class="messages personal-message">

        </ul>
        <form action="/" id="f">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
          <div class="bottom_wrapper clearfix">
              <div class="message_input_wrapper">
                  <input name="mess" id="message" class="message_input" placeholder="Type your message here..." />
              </div>

              <button onclick="loadFromServer()" class="send_message" type="submit">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5
                 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0
                  .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1
                   .154.154l.215.338 7.494-7.494Z"/>
              </svg>
              </button>
          </div>
      </div>

      <div class="message_template">
          <li class="message">
              <div class="avatar"></div>
              <div class="text_wrapper">
                  <div class="text"></div>
              </div>
          </li>
      </div>
    </form>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  let elem
    function loadFromServer() {
        $.get( "/messages", function( data ) {
            elem.html( data )
        });
    }
    function refreshTicker() {
        loadFromServer()
    }
    $( document ).ready(function() {
        elem = $( "#table" )
        setInterval(loadFromServer, 500)
        loadFromServer();
    });
 

    $( "#f" ).submit(function( event ) {
 
     event.preventDefault();
     
     $.post( "/", $( "#f" ).serialize() );
     document.getElementById("message").value = "";
     refreshTicker()
    });

</script>
