<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?= $title ?? "Website Rico" ?></title>

        <style>
            body {
                background: url("./img/bg.png");
                background-attachment: fixed;
            }
            header nav {
                display: flex;
                justify-content: space-between;
                padding: 1em 4em;
            }
            header nav ul li {
                list-style-type: none;
                float: left;
            }
            header nav ul li a {
                padding: 0.5em 1em;
                text-decoration: none;
                transition: all 0.2s;
            }
            header nav ul li a:hover {
                font-size: larger;
            }
            main {
                padding: 1em 4em;
                display: flex;
                justify-content: space-between;
            }
            section {
                width: 70%;
                margin-right: 1em;
                background-color: #cecece;
                box-shadow: 0.5em 0.5em 1em rgba(0, 0, 0, 0.8);
                border-radius: 2em;
                padding: 2em;
            }
            .comment {
                background-color: #fff;
                padding: 1em;
                margin: 1em 0em;
                border-radius: 1em;
            }
            .comment-head .username {
                font-weight: bold;
                margin-right: 1em;
            }
            .comment-head .comment-date {
                color: #777777;
            }
            footer {
                text-align: center;
                font-weight: bold;
                font-style: 24px;
                margin: 4em 2em;
            }
            aside {
                padding: 2em;
                background-color: #ece;
                box-shadow: 0.5em 0.5em 1em rgba(0, 0, 0, 0.8);
                border-radius: 2em;
            }
            .like-button {
                background-color: #fff;
                outline: none;
                border: none;
                padding: 0.5em 1em;
                border-radius: 1em;
                font-size: 18px;
                margin-bottom: 1em;
                display: flex;
                align-items: center;
                gap: 0.5em;
                transition: all 0.3s;
            }
            .like-button:hover {
                background-color: #d7d8ff;
                transform: scale(1.2);
                cursor: pointer;
            }
            .thumbnail {
                width: 100%;
            }
            form {
                display: flex;
                flex-direction: column; 
                gap: 2em;
                
            }
            input, textarea {
                padding: .5em 1em;
                font-size: 12pt;
                border-radius: .5em;
                border: 1px solid gray;
            }
            button {
                padding: .5em 1em;
                font-size: 12pt;
                border-radius: .5em;
                border: none;
                background-color: #a29bff;
                cursor: pointer;
                transition: 200ms;
            }
            button:hover {
                background-color: #827af3;
            }
        </style>
    </head>
<body>
<header>
  <nav>
    <h1>Websiteku</h1>
    <ul>
      <li><a href="./index.php">Home</a></li>
    </ul>
  </nav>
</header>