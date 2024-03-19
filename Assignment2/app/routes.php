<?php
$this->addRoute('User/register', 'User,register');
$this->addRoute('User/login', 'User,login');
$this->addRoute('User/logout', 'User,logout');
$this->addRoute('Profile/profileCreate', 'Profile,create');
$this->addRoute('Profile/profileView', 'Profile,index');
$this->addRoute('Profile/profileEdit', 'Profile,modify');