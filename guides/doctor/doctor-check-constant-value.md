# Write a check for asserting the value of a given constant

One of the check types included in `wp doctor` is `Constant_Definition`, or the ability to assert that a given constant is either defined, a specific value, or falsy. The check type is in use by a couple of the [default diagnostic checks](https://make.wordpress.org/cli/handbook/guides/doctor/doctor-default-checks/), and you can use the `Constant_Definition` check type in your [custom `doctor.yml` configuration file](https://make.wordpress.org/cli/handbook/guides/doctor/doctor-customize-config/). As an example, here are two checks using `Constant_Definition`, one which ensures `SAVEQUERIES` isn't defined and the other which ensures `DISALLOW_FILE_MODS` is true:

    constant-savequeries-falsy:
      check: Constant_Definition
      options:
        constant: SAVEQUERIES
        falsy: true
    constant-disallow-file-mods-true:
      check: Constant_Definition
      options:
        constant: DISALLOW_FILE_MODS
        value: true


Run together, you might see:

    $ wp doctor check --config=constant-definition.yml --all
    +----------------------------------+---------+--------------------------------------------------+
    | name                             | status  | message                                          |
    +----------------------------------+---------+--------------------------------------------------+
    | constant-savequeries-falsy       | success | Constant 'SAVEQUERIES' is undefined.             |
    | constant-disallow-file-mods-true | success | Constant 'DISALLOW_FILE_MODS' is defined 'true'. |
    +----------------------------------+---------+--------------------------------------------------+


The `Constant_Definition` check type accepts the following options:

* 'constant': Name of the constant.
* 'defined': Constant is expected to be defined.
* 'value': Constant is expected to be a specific value.
* 'falsy': Constant is expected to be undefined or falsy.
