GW2014-RestAPI-Curl-wrapper for PHP
===================================

Rest-Api Curl Wrapper for PHP to administer [Novell GroupWise 2014](https://www.novell.com/products/groupwise/) aka *Windermere*


## Table of Contents
  1. [Requirements](#req)
  2. [Configuration](#cfg)
  3. [Parameters](#params)
  4. [API-Notes](#notes)


## <a name="req"></a>Requirements

We've tried to make the api-wrapper runnable on a recent SLES-System, `SLES11SP3`, which is the latest Linux host supported ny Novell. 

### Runtime
 * PHP >= 5.3 - latest version on SLES11-SP3: `php53`
 * `php53-openssl` to receice the current wadl-information from https
 * `php53-json` or `php-xml` fitting the API's requirements and personal favor
 * ini-flag `short_open_tags` enabled or PHP>=5.4
 * curl binary accessible from php
 
### Migration-Module
 * `php53-pcntl` for multi-threads; esp. for performance reasons in migration
 * `php53-sysvsem` semaphore-support for multi-threading
 * `php53-sysvshm` shared-memory-support for multi-threading

### SLES11 requirements installation:
```shell
zypper in php53 php53-pcntl php53-sysvsem php53-sysvshm php53-openssl git-core
```

### General
 * Depending on the way you program around the API the default `memory_limit` of php might be unsuitable. Edit `/etc/php/cli/php.ini` matching your needs.
 * Depending on the OS some features might be packaged directly into PHP

## <a name="cfg"></a>Configuration
 1. checkout branch and init submodules
      ```shell
      git clone git@github.com:uni-halle/gw14-shell
      git submodule init
      git submodule update
      ```
        
 2. configure `common/config.local.php` fitting your requirements; see `common/config.default.php` for options
 3. run `api-gen/abstract.php` to abstract your state of admin-api
 4. update `setpath.sh` if required

## Administering GroupWise 2014

There several relevant files and locations:

### application.php
  
Base runtime file to code around using `PHP`

### gw.shell
  
Base file all other shell-files in `actions/` link on. The first argument if run explicitly is the action name to execute; e.g. user.create
  
Running the symlinks do not require this due to their filename is equal to the action to be executed.

### setpath.sh
  
Use for updating path variable in current shell and make the symlinked actions accessible. This enables the bash completion for any parameter as far the api allows it.
```shell
. setpath.sh
```

### actions/
  
Here are the real actions stored that are available by the rest-api.
  
All files in here are created by executing `api-gen/abstract.php` and are symlinks to `gw.shell` .

Shell actions display a documentation, if no argument (one for direct working on `gw.shell`) is passed to them.

## <a name="params"></a>Action-Parameters

There are a few parameter types to keep in mind:

### Query-strings

These are preceded by `?` and could be passed as one by combining each with `&`, which is not recommended.

#### Examples
* `?name=username`
* `?postofficename=testpo&surname=smith`

### Template-parameters

these are preceded by `-` and are applied as template-parameters to generate the url to interact with

#### Examples:
* `-domain=myDomain`
* `-postoffice=myPo`

Template-Parameters may be set in Environment for easier usage eg.: `export postoffice=mypo`

### Data-parameters/payload

These are not preceded. And are usually used to set a new value for a property in `PUT` or `UPDATE` and `POST` requests

#### Examples:
* `name=theName`
* `description="some text i'd like to leave here..."`

You may also write json or xml directly as payload-data; keep in mind to escape esp. quotes!

### RestEffective-parameters

These are preceded by `@` (at) and will be modified as effectiveValues, to make setting these much easier.

#### Examples:
* `@preferredAddressFormat=FIRST_LAST`
* `@internetDomainName=`

By leaving the value empty these values will be reset to inheritance, if a value is provided inheritance would be disabled.


## <a name="notes"></a>Some notes about the GroupWise ReST-API

### Pagination on lists e.g. `list/{type}/{base}`
    
When listings contain more than 1.000 results, only the first 1k will be returned in the response by default. The response then contains a field `nextId` in the `resultInfo`-object which can be added to the url as query-string to receive the next page. By this it's possible to iterate until the list has ended. This can be identified by the attribute `outOf` in the ResultInfo-object.

There is an option to define the number of results using the query-parameter `count` e.g. `count=10` to get only 10 instead of the default 1000 results.

These rules also apply to associated urls like `domains/` or `domains/myDomain/postoffices` as requests on these are transformed into `list/{TYPE}/{BASE-ID}` internally.

### Querying only specific attributes on lists

As the documentation mentions one can *filter results* by defining `?{property}={value}` in the query-string.

Not mentioned is the fact you may *select the attributes to be returned* in the query-string by the variable `attrs`. eg `?attrs=name,internetDomainName,referredEmailId`.

Additionally to the attributes specified the id and the containers of the object will be returned. Omitting or leaving the variable empty will result in the default data set.

Each object in gw has it's unique numeric id this can be queried by the query-string `return=ids`. The result is a list of all object-ids matching the criteria; you may query for specific objects using the query parameter `ids` e.g. `ids=1,2`.

### Advanced filtering in result-lists

The GroupWise 2014 Admin Console provides an quite flexible query system which is available in the ReST API as well.

Use the query-Parameter `filter` to take advantage of it.

The full guide about filtering lists can be found in the [appendix of GroupWise 2014 documentation](https://www.novell.com/documentation/groupwise2014/gw2014_guide_install/data/inst_appndx_filters.html)

### Result-Objects
    
Every gw-object has a property `url` that's the object unique resource-id. On that it's possible to perform a direct `DELETE`, `PUT` or `GET` request on.

### A bulk action...

... is always faster than a set of requests!

Almost every put-operation supports bulk-operation-mode. This can be recognized in the `XSD`-description for the object-type related to the url/operation.

Have a look at the attribute `maxOccurs`, which should be `unbounded` for this.


## Notes for developers

* I recommend *PHPStorm* IDE by *JetBrains* to develop your own modules for the abstraction layer. This IDE is afaik the only one that supports statical magic methods on class-docs which are used very intense.
* The XSD-abstraction classes are helpers for type-hints only; it was not planned to include or load them into the application.
 
## Found a bug?

Feel free to create an issue or a pull request to apply your fixes here.
