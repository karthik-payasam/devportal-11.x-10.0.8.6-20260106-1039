# Drupal Perimeter Defence

Basic perimeter defence for a Drupal site. This module bans the IPs who send
suspicious requests to the site. The concept is: If you have no business here,
go away.

Use the Perimeter module if you get a lot of requests to `wp-admin` or to
`.aspx` urls on a Linux server, or other similar requests.

The module is optimized for performance and designed to be activated when
a Drupal site is targeted by hackers or bots.

For a full description of the module, visit the
[project page](https://www.drupal.org/project/perimeter).

Submit bug reports and feature suggestions, or track changes in the
[issue queue](https://www.drupal.org/project/issues/perimeter).


## Table of contents

- Requirements
- Installation
- Configuration
- FAQ
- Maintainers


## Requirements

This module requires no modules outside of Drupal core.


## Installation

Install as you would normally install a contributed Drupal module. For further
information, see [Installing Drupal Modules](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules).


## Configuration

Install the module and check your site logs after a while.
Use the Drupal core Ban module to manage banned IPs.

Note: Before testing this module from your own IP, make sure you can delete
your IP from the `ban_ip` table in your Drupal site's database.

You can add new rules under `/admin/config/system/perimeter` by adding a new
Regular Expression (RegEx) pattern on a separate line.


## FAQ

**Q: I got myself banned while testing, how do I unban my IP?**

**A:** Remove your IP with Drush:

```
drush sql:query "DELETE FROM ban_ip WHERE ip='YOUR.OWN.IP.ADDR';
```


## Maintainers

- Al-Ayham Saleh - [alayham](https://www.drupal.org/u/alayham)
- Julian Pustkuchen - [Anybody](https://www.drupal.org/u/anybody)
- John - [CiviFirst John](https://www.drupal.org/u/civifirst-john)
- Jordan Thompson - [nord102](https://www.drupal.org/u/nord102)
- Thomas Frobieter - [thomas.frobieter](https://www.drupal.org/u/thomasfrobieter)
- Joshua Sedler - [Grevil](https://www.drupal.org/u/grevil)
