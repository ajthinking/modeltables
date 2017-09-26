# ModelTables for Laravel
I found myself constantly going back to tinker or some db tool to check the data in my tables. This package detects any models on the fly and put the data into neat tables.

## Quickstart
```
composer require ajthinking/modeltables
```
That's it. Now you can visit any route like 
```
/models/{model-slug}
```

## Notes
- If your using Laravel < 5.5 you need to manually add the serviceprovider
- By default the package scans /app/ and /app/Models/ and assumes all files there are models
- You might not want this package running in production exposing all your users etc. Then just install with composer require --dev
- Having other files side by side with your Models will propblably crash this package
- Model pages need to be migrated before accessed

## Todo
- Move model folder paths to a config
- Add path prefix to config
- Check if model has been migrated
- Catch exceptions
- Put links in the table to any related models.


## Contributing
- Pull requests welcome.

## Licence
- MIT