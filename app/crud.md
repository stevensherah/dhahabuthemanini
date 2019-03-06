## Usage

### CRUD Command

```
php artisan crud:generate Posts --fields='title#string; content#text; category#select#options={"technology": "Technology", "tips": "Tips", "health": "Health"}' --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html
```

#### CRUD fields from a JSON file:

```json
{
    "fields": [
        {
            "name": "title",
            "type": "string"
        },
        {
            "name": "content",
            "type": "text"
        },
        {
            "name": "category",
            "type": "select",
            "options": {
                "technology": "Technology",
                "tips": "Tips",
                "health": "Health"
            }
        },
        {
            "name": "user_id",
            "type": "integer#unsigned"
        }
    ],
    "foreign_keys": [
        {
            "column": "user_id",
            "references": "id",
            "on": "users",
            "onDelete": "cascade"
        }
    ],
    "relationships": [
        {
            "name": "user",
            "type": "belongsTo",
            "class": "App\\User"
        }
    ],
    "validations": [
        {
            "field": "title",
            "rules": "required|max:10"
        }
    ]
}
```

```
php artisan crud:generate Posts --fields_from_file="/path/to/fields.json" --view-path=admin --controller-namespace=Admin --route-group=admin --form-helper=html
```

### Other Commands

For controller:

```
php artisan crud:controller PostsController --crud-name=posts --model-name=Post --view-path="directory" --route-group=admin
```

For model:

```
php artisan crud:model Post --fillable="['title', 'body']"
```

For migration:

```
php artisan crud:migration posts --schema="title#string; body#text"
```

For view:

```
php artisan crud:view posts --fields="title#string; body#text" --view-path="directory" --route-group=admin --form-helper=html
```

By default, the generator will attempt to append the crud route to your ```Route``` file. If you don't want the route added, you can use this option ```--route=no```.

After creating all resources, run migrate command. *If necessary, include the route for your crud as well.*

```
php artisan migrate
```

If you chose not to add the crud route in automatically (see above), you will need to include the route manually.
```php
Route::resource('posts', 'PostsController');
```

### API Commands

For api crud:

```
php artisan crud:api Posts --fields='title#string; content#text' --controller-namespace=Api
```

For api controller:

```
php artisan crud:api-controller Api\\PostsController --crud-name=posts --model-name=Post
```

[&larr; Back to index](README.md)


## Options

### CRUD Options:

| Option    | Description |
| ---       | ---     |
| `--fields` | The field names for the form. e.g. ```--fields='title#string; content#text; category#select#options={"technology": "Technology", "tips": "Tips", "health": "Health"}; user_id#integer#unsigned'``` |
| `--fields_from_file` | Fields from a JSON file. e.g. `--fields_from_file="/path/to/fields.json"` |
| `--validations` | Validation rules for the fields "col_name#rules_set" e.g. ` "title#min:10|max:30|required" ` - See https://laravel.com/docs/master/validation#available-validation-rules |
| `--controller-namespace` | The namespace of the controller - sub directories will be created |
| `--model-namespace` | The namespace that the model will be placed in - directories will be created |
| `--pk` | The name of the primary key |
| `--pagination` | The amount of models per page for index pages |
| `--indexes` | The fields to add an index to. append "#unique" to a field name to add a unique index. Create composite fields by separating fieldnames with a pipe (` --indexes="title,field1|field2#unique" ` will create normal index on title, and unique composite on fld1 and fld2) |
| `--foreign-keys` | Any foreign keys for the table. e.g. `--foreign-keys="user_id#id#users#cascade"` where user_id is the column name, id is the name of the field on the foreign table, users is the name of the foreign table, and cascade is the operation 'ON DELETE' together with 'ON UPDATE' |
| `--relationships` | The relationships for the model. e.g. `--relationships="comments#hasMany#App\Comment"` in the format |
| `--route` | Include Crud route to routes.php? yes or no |
| `--route-group` | Prefix of the route group |
| `--view-path` | The name of the view path |
| `--form-helper` | Helper for the form. eg. `--form-helper=html`, `--form-helper=laravelcollective` |
| `--localize` | Allow to localize. e.g. localize=yes  |
| `--locales`  | Locales language type. e.g. locals=en |
| `--soft-deletes` | Include soft deletes fields. eg. `--soft-deletes=yes` |


### Controller Options:

| Option    | Description |
| ---       | ---     |
| `--crud-name` | The name of the crud. e.g. ```--crud-name="post"``` |
| `--model-name` | The name of the model. e.g. ```--model-name="Post"``` |
| `--model-namespace` | The namespace of the model. e.g. ```--model-namespace="Custom\Namespace\Post"``` |
| `--controller-namespace` | The namespace of the controller. e.g. ```--controller-namespace="Http\Controllers\Client"``` |
| `--view-path` | The name of the view path |
| `--fields` | The field names for the form. e.g. ```--fields='title#string; content#text; category#select#options={"technology": "Technology", "tips": "Tips", "health": "Health"}; user_id#integer#unsigned'``` |
| `--validations` | Validation rules for the fields "col_name#rules_set" e.g. ``` "title#min:10|max:30|required" ``` - See https://laravel.com/docs/master/validation#available-validation-rules |
| `--route-group` | Prefix of the route group |
| `--pagination` | The amount of models per page for index pages |
| `--force` | Overwrite already existing controller. |

### View Options:

| Option    | Description |
| ---       | ---     |
| `--fields` | The field names for the form. e.g. ```--fields='title#string; content#text; category#select#options={"technology": "Technology", "tips": "Tips", "health": "Health"}; user_id#integer#unsigned'``` |
| `--view-path` | The name of the view path |
| `--route-group` | Prefix of the route group |
| `--pk` | The name of the primary key |
| `--validations` | Validation rules for the form "col_name#rules_set" e.g. ``` "title#min:10|max:30|required" ``` - See https://laravel.com/docs/master/validation#available-validation-rules |
| `--form-helper` | Helper for the form. eg. `--form-helper=html`, `--form-helper=laravelcollective` |
| `--custom-data` | Some additional values to use in the crud. |
| `--localize` | Allow to localize. e.g. localize=yes  |

### Model Options:

| Option    | Description |
| ---       | ---     |
| `--table` | The name of the table |
| `--fillable` | The name of the view path |
| `--relationships` | The relationships for the model. e.g. `--relationships="comments#hasMany#App\Comment"` in the format |
| `--pk` | The name of the primary key |
| `--soft-deletes` | Include soft deletes fields. eg. `--soft-deletes=yes` |

### Migration Options:

| Option    | Description |
| ---       | ---     |
| `--schema` | The name of the schema |
| `--indexes` | The fields to add an index to. append "#unique" to a field name to add a unique index. Create composite fields by separating fieldnames with a pipe (` --indexes="title,field1|field2#unique" ` will create normal index on title, and unique composite on fld1 and fld2) |
| `--foreign-keys` | Any foreign keys for the table. e.g. `--foreign-keys="user_id#id#users#cascade"` where user_id is the column name, id is the name of the field on the foreign table, users is the name of the foreign table, and cascade is the operation 'ON DELETE' together with 'ON UPDATE' |
| `--pk` | The name of the primary key |
| `--soft-deletes` | Include soft deletes fields. eg. `--soft-deletes=yes` |

### Lang Options:

| Option    | Description |
| ---       | ---     |
| `--fields` | The field names for the form. e.g. ```--fields='title#string; content#text``` |
| `--locales`  | Locales language type. e.g. locals=en |

### API CRUD Options:

| Option    | Description |
| ---       | ---     |
| `--fields` | The field names for the form. e.g. ```--fields='title#string; content#text; category#select#options={"technology": "Technology", "tips": "Tips", "health": "Health"}; user_id#integer#unsigned'``` |
| `--fields_from_file` | Fields from a JSON file. e.g. `--fields_from_file="/path/to/fields.json"` |
| `--validations` | Validation rules for the fields "col_name#rules_set" e.g. ` "title#min:10|max:30|required" ` - See https://laravel.com/docs/master/validation#available-validation-rules |
| `--controller-namespace` | The namespace of the controller - sub directories will be created |
| `--model-namespace` | The namespace that the model will be placed in - directories will be created |
| `--pk` | The name of the primary key |
| `--pagination` | The amount of models per page for index pages |
| `--indexes` | The fields to add an index to. append "#unique" to a field name to add a unique index. Create composite fields by separating fieldnames with a pipe (` --indexes="title,field1|field2#unique" ` will create normal index on title, and unique composite on fld1 and fld2) |
| `--foreign-keys` | Any foreign keys for the table. e.g. `--foreign-keys="user_id#id#users#cascade"` where user_id is the column name, id is the name of the field on the foreign table, users is the name of the foreign table, and cascade is the operation 'ON DELETE' together with 'ON UPDATE' |
| `--relationships` | The relationships for the model. e.g. `--relationships="comments#hasMany#App\Comment"` in the format |
| `--route` | Include Crud route to routes.php? yes or no |
| `--route-group` | Prefix of the route group |
| `--soft-deletes` | Include soft deletes fields. eg. `--soft-deletes=yes` |

### API Controller Options:

| Option    | Description |
| ---       | ---     |
| `--crud-name` | The name of the crud. e.g. ```--crud-name="post"``` |
| `--model-name` | The name of the model. e.g. ```--model-name="Post"``` |
| `--model-namespace` | The namespace of the model. e.g. ```--model-namespace="Custom\Namespace\Post"``` |
| `--controller-namespace` | The namespace of the controller. e.g. ```--controller-namespace="Http\Controllers\Client"``` |
| `--validations` | Validation rules for the fields "col_name#rules_set" e.g. ``` "title#min:10|max:30|required" ``` - See https://laravel.com/docs/master/validation#available-validation-rules |
| `--pagination` | The amount of models per page for index pages |
| `--force` | Overwrite already existing controller. |

[&larr; Back to index](README.md)
