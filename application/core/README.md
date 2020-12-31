## how to extend MY_Model:

```php
class User_model extends MY_Model
{
	public $table = 'users';      // Set the name of the table for this model.
	public $primary_key = 'id';   // Set the primary key
	public $fillable = array();   // You can set an array with the fields that can be filled by insert/update
	public $protected = array();  // ...Or you can set an array with the fields that cannot be filled by insert/update

	public function __construct()
	{
		// $this->_database_connection  = group_name or array() | OPTIONAL
		// 	Sets the connection preferences (group name) set up in the database.php. If not trset, it will use the
		// 	'default' (the $active_group) database connection.

		// $this->timestamps = TRUE | array('made_at','modified_at','removed_at')
		// 	If set to TRUE tells MY_Model that the table has 'created_at','updated_at' (and 'deleted_at' if $this->soft_delete is set to TRUE)
		// 	If given an array as parameter, it tells MY_Model, that the first element is a created_at field type, the second element is a updated_at field type (and the third element is a deleted_at field type)

		// $this->soft_deletes = FALSE;
		// 	Enables (TRUE) or disables (FALSE) the "soft delete" on records. Default is FALSE

		// $this->timestamps_format = 'Y-m-d H:i:s'
		// 	You can at any time change the way the timestamp is created (the default is the MySQL standard datetime format) by modifying this variable. You can choose between whatever format is acceptable by the php function date() (default is 'Y-m-d H:i:s'), or 'timestamp' (UNIX timestamp)

		// $this->return_as = 'object' | 'array'
		// 	Allows the model to return the results as object or as array

		// $this->has_one['phone'] = 'Phone_model' or $this->has_one['phone'] = array('Phone_model','foreign_key','local_key');
		// $this->has_one['address'] = 'Address_model' or $this->has_one['address'] = array('Address_model','foreign_key','another_local_key');
		// 	Allows establishing ONE TO ONE or more ONE TO ONE relationship(s) between models/tables

		// $this->has_many['posts'] = 'Post_model' or $this->has_many['posts'] = array('Posts_model','foreign_key','another_local_key');
		// 	Allows establishing ONE TO MANY or more ONE TO MANY relationship(s) between models/tables

		// $this->has_many_pivot['posts'] = 'Post_model' or $this->has_many_pivot['posts'] = array('Posts_model','foreign_primary_key','local_primary_key');
		// 	Allows establishing MANY TO MANY or more MANY TO MANY relationship(s) between models/tables with the use of a PIVOT TABLE
		// 	!ATTENTION: The pivot table name must be composed of the two table names separated by "_" the table names having to to be alphabetically ordered (NOT users_posts, but posts_users).
		// 		Also the pivot table must contain as identifying columns the columns named by convention as follows: table_name_singular + _ + foreign_table_primary_key.
		// 		For example: considering that a post can have multiple authors, a pivot table that connects two tables (users and posts) must be named posts_users and must have post_id and user_id as identifying columns for the posts.id and users.id tables.
		// $this->cache_driver = 'file'
		// $this->cache_prefix = 'mm'
		// 	If you know you will do some caching of results without the native caching solution, you can at any time use the MY_Model's caching.
		// 	By default, MY_Model uses the files to cache result.
		// 	If you want to change the way it stores the cache, you can change the $cache_driver property to whatever CodeIgniter cache driver you want to use.
		// 	Also, with $cache_prefix, you can prefix the name of the caches. by default any cache made by MY_Model starts with 'mm' + _ + "name chosen for cache"
		// $this->delete_cache_on_save = FALSE
		// 	If you use caching often and you don't want to be forced to delete cache manually, you can enable $this->delete_cache_on_save by setting it to TRUE. If set to TRUE the model will auto-delete all cache related to the model's table whenever you write/update/delete data from that table.
		// $this->pagination_delimiters = array('<span>','</span>');
		// 	If you know you will use the paginate() method, you can change the delimiters between the pages links
		// $this->pagination_arrows = array('&lt;','&gt;');
		// 	You can also change the way the previous and next arrows look like.

		parent::__construct();
	}
}
 ```
