# Restrict Login or Role Access by IP Address

This module restricts Drupal features to certain IP addresses or IP address
ranges. It can restrict logins and/or role acccess.

For a full description of the module, visit the [project
page](https://www.drupal.org/project/restrict_by_ip).

Submit bug reports and feature suggestions, or track changes in the [issue
queue](https://www.drupal.org/project/issues/restrict_by_ip).


## Requirements

This module requires no modules outside of Drupal core.


## Installation

Install as you would normally install a contributed Drupal module. For further
information, see [Installing Drupal
Modules](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules).


## Configuration

1. Enable the module at Administration > Extend.
1. All configuration can be managed from administration pages located at
   Administration > Configuration > People > Restrict by IP.
1. Individual user IP restrictions may also be set in the 'Restrict by IP'
   fieldset located on the user add/edit form.
1. To remove an IP restriction, delete its value, and submit the
   configuration form.


## Troubleshooting

IP address ranges must be entered in CIDR notation separated with semi-colons
and no trailing semi-colon (e.g., 10.20.30.0/24;192.168.199.1/32;1.0.0.0/8). For
more information on CIDR notation, see
http://www.brassy.net/2007/mar/cidr_basic_subnetting.

IP restrictions are checked on every page load. If a user restriction is
triggered, then the user will be logged out and sent to the specified 'error
page'. If a role restriction is triggered, then a user's session will be
unaffected; however, the restricted role will no longer be available to the
user.


## Maintainers

Visit the [project page](https://www.drupal.org/project/restrict_by_ip) for
active maintainers.

A big thank you to previous maintainers:

- Matt Rice - [ymmatt](https://www.drupal.org/user/92457)
- Bobby Kramer - [panthar](https://www.drupal.org/u/panthar)
- James Wilson - [james.wilson](https://www.drupal.org/u/jameswilson)   
