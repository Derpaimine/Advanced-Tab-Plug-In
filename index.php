<?php 

/** 
*Plugin Name: Advanced tabs
*Description: Creates an advanced animated tab sorting plug in
*Version: 1.0.0
*Author: Jordan Dawson & Dale De Kock
*Text Domain:
*License: GPLv2 or later
*/

/*
Copyright by Jordan Dawson & Dale De Kock
*/

include (plugin_dir_path( __FILE__) . 'script.js')
include (plugin_dir_path( __FILE__) . 'style.css')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <title>HTML/CSS/JS for Advanced Tabs Plugin</title>
</head>
<body>
    <div class="navigation">
        <ul>
            <li class="list active" data-tab-target="#home">
                <a href="#">
                    <span class="icon" >
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="list" data-tab-target="#profile">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <span class="title">Profile</span>
                </a>
            </li>
            <li class="list" data-tab-target="#photos">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="images-outline"></ion-icon>
                    </span>
                    <span class="title">Photos</span>
                </a>
            </li>
            <li class="list" data-tab-target="#messaging">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="mail-open-outline"></ion-icon>
                    </span>
                    <span class="title">Messaging</span>
                </a>
            </li>
            <li class="list" data-tab-target="#settings">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Settings</span>
                </a>
            </li>
            <div class="indicator">

            </div>
        </ul>
    </div>
    <div class="tab-content active">
        <div id="home" data-tab-content class="active">
            <h1>Home</h1>
            <p>Home Tings</p>
        </div>
        <div id="profile" data-tab-content>
            <h1>Profile</h1>
            <p>Profile Tings</p>
        </div>
        <div id="photos" data-tab-content>
            <h1>Photo</h1>
            <p>Photo Tings</p>
        </div>
        <div id="messaging" data-tab-content>
            <h1>Messaging</h1>
            <p>Messaging Tings</p>
        </div>
        <div id="settings" data-tab-content>
            <h1>Settings</h1>
            <p>Settings Tings</p>
        </div>
    </div>

    <script>
        const list = document.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item)=>
        item.addEventListener('click', activeLink))
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>