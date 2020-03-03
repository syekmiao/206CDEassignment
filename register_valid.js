/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validateReg() {
    var email = document.forms["registerform"]["email_reg"].value;
    var name = document.forms["registerform"]["name_reg"].value;
    var password = document.forms["registerform"]["passwd_reg"].value;
    var conf_password = document.forms["registerform"]["password_conf"].value;
    
    if (email.length < 7 || email.length > 50){
        alert("Email length must be between 8 and 50 characters.");
        return false;
    }
    else if (name.length > 50){
        alert("Username length must not exceed 50 characters.");
        return false;
    }
    else if (password.length < 8 || password.length > 25){
        alert("Password length must be between 8 and 25 characters.");
        return false;
    }
    else if (conf_password != password){
        alert("Password and confirmation password does not match.");
        return false;
    }
    else 
        return true;
    
    
}


