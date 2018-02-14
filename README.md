# Zen 

highly opinionated php application framework

## Commands

To install composer

[How to specify Composer install path](https://stackoverflow.com/questions/11883374/how-to-specify-composer-install-path)

[Running composer in a different directory than current](https://stackoverflow.com/questions/33080068/running-composer-in-a-different-directory-than-current)

```
composer install -d=./conf
or
composer update -d=./conf
```

To build javascript app

```
npm --prefix ./conf run build
```

To install npm

[npm - install dependencies for a package in a different folder](https://stackoverflow.com/questions/13498403/npm-install-dependencies-for-a-package-in-a-different-folder)

```
npm --prefix ./conf install
or
npm --prefix ./conf update
```

## Testing

To run unit tests

```
npm --prefix ./conf run unit-test
```

## Folder naming options

### core domain

- business-logic
- business-rules
- core-logic
- wisdom
- brain
- bi [short for business intelligence]

### external libs

- external-libraries
- external-libs
- libs

### additional folders

- analytics
- logs
- app/services

### tests 

- tests
- tests/unit
- tests/e2e
- tests/status [test status of different services to make sure they are live]
- tests/integration
- tests/connections [test db connections]
- tests/gateway [check online status or ability to connect]


### architecture design decisions

- zen/http/{request, response, controller, upload}
- zen/router
- zen/dispatcher
- zen/session
- zen/filesystem
- zen/gateway/{google[gmail, gcp, bigquery],aws[s3, sns]}
- zen/storage/{mysql, oracle}
- zen/migration
- zen/log, syslog
- zen/kvs/{redis}
- zen/email
- zen/sampledata{also called test data generator}
- zen/random{token, id, string, int etc generation}
- zen/cache/{memcashed}
- zen/primitives{nonemptystring, money, entityID, positiveinteger, emailaddress, validemailaddress, validDate, validDateTime, validTimeStamp, pastDate, futureDate,  }
- zen/view

## re-order suggest

- core-logic
  - services
- apps
  - services
  - cli
  - web
    - controllers
    - routes
    - ui 
      - views
      - html
      - pages
      - public
    - public
      - index.php
      - libs
      - assets
        - js
        - css
        - img  
        
        
core, seed , essence, kernel, root, nucleus, soul, heart
        