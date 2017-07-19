# Telefónica OBS PHP Class

## Usage

OO method (e,g; $obs->getObject(...)):

```php
$obs = new OBS($AccessKeyId, $SecretAccessKey);
```

Statically (e,g; OBS::getObject(...)):

```php
OBS::setAuth($AccessKeyId, $SecretAccessKey);
```

### Object Operations

#### Uploading objects

Put an object from a file:

```php
OBS::putObject(OBS::inputFile($file, false), $bucketName, $uploadName, OBS::ACL_PUBLIC_READ)
```

Put an object from a string and set its Content-Type:

```php
OBS::putObject($string, $bucketName, $uploadName, OBS::ACL_PUBLIC_READ, array(), array('Content-Type' => 'text/plain'))
```

Put an object from a resource (buffer/file size is required - note: the resource will be fclose()'d automatically):

```php
OBS::putObject(OBS::inputResource(fopen($file, 'rb'), filesize($file)), $bucketName, $uploadName, OBS::ACL_PUBLIC_READ)
```

#### Retrieving objects

Get an object:

```php
OBS::getObject($bucketName, $uploadName)
```

Save an object to file:

```php
OBS::getObject($bucketName, $uploadName, $saveName)
```

Save an object to a resource of any type:

```php
OBS::getObject($bucketName, $uploadName, fopen('savefile.txt', 'wb'))
```

#### Copying and deleting objects

Copy an object:

```php
OBS::copyObject($srcBucket, $srcName, $bucketName, $saveName, $metaHeaders = array(), $requestHeaders = array())
```

Delete an object:

```php
OBS::deleteObject($bucketName, $uploadName)
```

### Bucket Operations

Get a list of buckets:

```php
OBS::listBuckets()  // Simple bucket list
OBS::listBuckets(true)  // Detailed bucket list
```

Create a bucket:

```php
OBS::putBucket($bucketName)
```

Get the contents of a bucket:

```php
OBS::getBucket($bucketName)
```

Delete an empty bucket:

```php
OBS::deleteBucket($bucketName)
```
