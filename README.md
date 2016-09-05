# mconsole-currency

## Demo data

Create new currency record:

```sql
INSERT INTO `mconsole_currencies` (`id`, `name`, `prefix`, `suffix`, `basic`, `decimals`, `delimiter`, `names`, `system`, `created_at`, `updated_at`) VALUES (1,'USA Dollar','$','',100,2,'.','["cent", "dollar"]',0,'2016-09-05 03:15:35','2016-09-05 03:15:38');
```

## Methods

### format (int amount, bool withName)

Returns formatted currency number

```php
$currency->format(10050); // 100.50
$curremcy->format(10050, true) // $100.50
```