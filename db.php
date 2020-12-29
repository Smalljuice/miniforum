<?php

//CREATE TABLE users (
//    user_id BIGINT NOT NULL AUTO_INCREMENT,
//                       user_email TEXT NOT NULL,
//                       user_name TEXT NOT NULL,
//                       user_surname TEXT NOT NULL,
//                       user_password TEXT NOT NULL,
//                       user_type TEXT NOT NULL,
//                       PRIMARY KEY (user_id)
//);
//
//CREATE TABLE themes (
//    theme_id BIGINT NOT NULL AUTO_INCREMENT,
//                       user_id BIGINT NOT NULL,
//                       theme_title TEXT NOT NULL,
//                       theme_text TEXT NOT NULL,
//                       theme_date INT NOT NULL DEFAULT '0',
//                       theme_moder TEXT NOT NULL,
//                       PRIMARY KEY (theme_id),
//                       FOREIGN KEY (user_id) REFERENCES users (user_id)
//);
//
//CREATE TABLE comments (
//    comment_id BIGINT NOT NULL AUTO_INCREMENT,
//                        theme_id BIGINT NOT NULL,
//                        user_id BIGINT NOT NULL,
//                        comment_text TEXT NOT NULL,
//                        comment_date INT NOT NULL DEFAULT '0',
//                        PRIMARY KEY (comment_id),
//                        FOREIGN KEY (theme_id) REFERENCES themes (theme_id),
//                        FOREIGN KEY (user_id) REFERENCES users (user_id)
//);