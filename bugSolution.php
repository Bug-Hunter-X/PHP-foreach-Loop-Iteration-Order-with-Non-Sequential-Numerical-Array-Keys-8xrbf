To ensure predictable iteration, you can sort the array by keys before iterating:
```php
$myArray = [2 => 'apple', 0 => 'banana', 1 => 'cherry'];

krsort($myArray); // Sort the array in descending order of keys

foreach ($myArray as $key => $value) {
  echo "Key: " . $key . ", Value: " . $value . "\n";
}
```
This will output:
```
Key: 2, Value: apple
Key: 1, Value: cherry
Key: 0, Value: banana
```
Alternatively, you could use a `for` loop to iterate through the keys in the desired order if you know the range of keys:
```php
$myArray = [2 => 'apple', 0 => 'banana', 1 => 'cherry'];

for ($i = 0; $i < count($myArray); $i++) {
    if(isset($myArray[$i])) {
        echo "Key: " . $i . ", Value: " . $myArray[$i] . "\n";
    }
}
```
This provides more control over the iteration order.  Choose the solution that best fits your specific needs and coding style.