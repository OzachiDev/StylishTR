# StylishTR
Tiny and stylish lib for multilingual websites in PHP

# How
## How to use it?
You just have to download `StylishTR.php` and import it with a require:
```php
require('StylishTR.php');
```
And just before the beggining of the HTML code:
```php
read();
```

## How does it work?
StylishTR will read your HTML code and replace the variables called {variable} by their translation provided in translations.db

## What about the user?
StylishTR will detect automatically the language of your visitors. If you want to use another language, you can provide ?l=fr/en/es/.. as GET arguments on your page.

# What does the repository contains?
The repository is provided with 6 files:

File | Utility
--- | ---
```StylishTR.php``` | The beautiful lib! You just have to import it in your PHP files.
```example.php``` | Basic example to use StylishTR. You should read it to know how it works.
```translation_add.php``` | This file allows you to create variables with their translations. You should secure it.
```translation_edit.php``` | This file allows you to edit translations of the variables already created. You should secure it.
```translation_del.php``` | This file allows you to delete variables with their translations. You should secure it.
```translations.db``` | This file contains all the variables and their translations. It already contains default translations for example.php that you can delete to start adding your own translations!

You can contact me on Twitter if you have any question: @Ozachi_ or on Discord: Loïc#6237
