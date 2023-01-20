# Write a check for asserting the value of a given option

One of the check types included in `wp doctor` is `Option_Value`, or the ability to assert that a given option is a specific value. The check type is in use by a couple of the [default diagnostic checks](https://make.wordpress.org/cli/handbook/references/doctor/doctor-default-checks/), and you can use the `Option_Value` check type in your [custom `doctor.yml` configuration file](https://make.wordpress.org/cli/handbook/references/doctor/doctor-customize-config/).

As an example, here are two checks using `Option_Value`, one which ensures the blog is public and the other which ensures users can't register:

    option-blog-public:
      check: Option_Value
      options:
        option: blog_public
        value: 1
    option-users-can-register:
      check: Option_Value
      options:
        option: users_can_register
        value: 0


Run together, you might see:

    $ wp doctor check --config=option-value.yml --all
    +---------------------------+---------+-------------------------------------------------+
    | name                      | status  | message                                         |
    +---------------------------+---------+-------------------------------------------------+
    | option-blog-public        | error   | Site is private but expected to be public.      |
    | option-users-can-register | success | Option 'users_can_register' is '0' as expected. |
    +---------------------------+---------+-------------------------------------------------+


The `Option_Value` check type accepts the following options:

* 'option': Name of the option.
* 'value': Option is expected to be a specific value.
