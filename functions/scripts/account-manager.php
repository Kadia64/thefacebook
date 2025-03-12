<?php 

const USER_KEYS = array('first-name', 'last-name', 'birthday', 'sex', 'home-address', 'home-town', 'high-school', 'mobile', 'college', 'website', 'looking-for', 'interested-in', 'relationship-status', 'political-views', 'interests', 'favorite-music', 'favorite-movies', 'about-me');
const LISTED_SCHOOLS = array("Tennessee","Creighton","Houston","Duke","Marquette","NC State","Gonzaga","Purdue","Illinois","Iowa State","UNC","Alabama","Arizona","Clemson","Uconn","San Diego St","Texas A&M","Yale","Northwestern","Grand Canyon","Baylor","Utah State","Florida","Colorado","Oregon","Texas","Duquesne","Oakland","Kansas","Wisconsin","TCU","Nebraska","Vermont","Stetson","Colgate","Texas Tech","MS State","Kentucky","South Carolina","MI State","Montana State","Auburn","Princeton","Hawaii","Charlotte","Arkon","LSU","North Carolina","Penn State","Arkansas");


class AccountManager {
    public static function Login() {
        // logs in the user
    }
    public static function CreateAccount() {
        // creates a new user account
    }
    public static function UpdateAccount() {
        // updates the user's account information
    }
    public static function CheckExistingAccount() {
        // check if email or username already exists
    }

    public static function getUserKeys() {
        return USER_KEYS;
    }
}




?>