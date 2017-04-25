# wp user session list

<small>[Commands](/commands/) &raquo; [user](/commands/user/) &raquo; [session](/commands/user/session/) &raquo; list</small>

`wp user session list` - List sessions for the given user.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-session-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;user&gt;
: User ID, user email, or user login.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - yaml
  - count
  - ids
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each session:

* token
* login_time
* expiration_time
* ip
* ua

These fields are optionally available:

* expiration
* login

### EXAMPLES

    # List a user's sessions.
    $ wp user session list admin@example.com --format=csv
    login_time,expiration_time,ip,ua
    "2016-01-01 12:34:56","2016-02-01 12:34:56",127.0.0.1,"Mozilla/5.0..."



