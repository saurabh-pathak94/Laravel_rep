Eloquent correctly assumes is that your table name is the plural form of your model.
For example, your User model will reference the users table.
As this might not always be the standard for some, Laravel provides a way to override this:
 simply use the $table flag:

class User extends Eloquent {
    public static $table = 'my_users';
}
This will instruct Laravel not to use the convention and instead use the specified table.

refer: http://code.tutsplus.com/tutorials/build-web-apps-from-scratch-with-laravel-the-eloquent-orm--net-25631