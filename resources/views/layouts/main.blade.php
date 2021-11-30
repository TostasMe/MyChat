<!DOCTYPE html>
<html>
 <head>
   <title>@yield("title")</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1561/1561746.png">


    <style>
        .bd-placeholder-img 
        {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) 
        {
            .bd-placeholder-img-lg 
            {
                font-size: 3.5rem;
            }
        }
        .form-signin input[type="password"] 
        {
          margin-top: 10px;
        }


    </style>
    <link href="https://getbootstrap.com/docs/5.1/examples/sign-in/signin.css" rel="stylesheet">
</head>
<body class="text-center">
     @yield("content")
 </body> 
</html>

<style>
body
{
    background-color: #1a202c;
}

.form-signin input[type="email"] 
{
  background-color: #17212b;
  border: 1px solid #696969;
  border-radius: 20px;
  color: #e4ecf2;
}

.form-signin input[type="password"] 
{
  background-color: #17212b;
  border: 1px solid #696969;
  border-radius: 20px;
  color: #e4ecf2;
}

[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled)
{
  margin-top: 20px;
  background-color: #17212b;
  border: 2px solid #696969;
  border-radius: 30px;
}

h1
{
    color: #e4ecf2;
}

label
{
  color: #e4ecf2;
}

</style>