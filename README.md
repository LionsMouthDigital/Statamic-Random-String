# Random String
Generate random-ish strings in your templates. The string will consist of the current Unix timestamp
followed by a hyphen and a UUID.

It'll look something like this: `1461301129-706d8f6e-e110-4f2c-bb4e-709f3da15d2a`.


## Usage
**Template:**  
```html
{{ random_string }}<br>
{{ random_string }}
```

**Result:**  
```
1461301654-4e1998bb-d338-434c-ae79-6111108f0623
1461301654-9618b009-b0fe-473f-9fa2-99a39728efa1
```

If you need the same random string in multiple places, pass an identical `key`. Each request will
always result in new random strings.

**Template:**  
```html
{{ random_string key="blackstar" }}<br>
{{ random_string key="blackstar" }}
```

**Result:**  
```
1461301750-c51e0abc-4e60-49dc-97f9-d4aa95ede588
1461301750-c51e0abc-4e60-49dc-97f9-d4aa95ede588
```
