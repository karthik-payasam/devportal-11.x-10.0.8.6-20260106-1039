<?php 
/**
 * @file
 * Configuration file for Drupal's multi-site directory aliasing feature.
 *
 * Drupal searches for an appropriate configuration directory based on the
 * website's hostname and pathname. A detailed description of the rules for
 * discovering the configuration directory can be found in the comment
 * documentation in 'sites/default/default.settings.php'.
 *
 * This file allows you to define a set of aliases that map hostnames and
 * pathnames to configuration directories. These aliases are loaded prior to
 * scanning for directories, and they are exempt from the normal discovery
 * rules. The aliases are defined in an associative array named $sites, which
 * should look similar to the following:
 *
 * $sites = array(
 *   'devexample.com' => 'example.com',
 *   'localhost.example' => 'example.com',
 * );
 *
 * The above array will cause Drupal to look for a directory named
 * "example.com" in the sites directory whenever a request comes from
 * "example.com", "devexample.com", or "localhost/example". That is useful
 * on development servers, where the domain name may not be the same as the
 * domain of the live server. Since Drupal stores file paths into the database
 * (files, system table, etc.) this will ensure the paths are correct while
 * accessed on development servers.
 *
 * To use this file, copy and rename it such that its path plus filename is
 * 'sites/sites.php'. If you don't need to use multi-site directory aliasing,
 * then you can safely ignore this file, and Drupal will ignore it too.
 */

/**
 * Multi-site directory aliasing:
 *
 * Edit the lines below to define directory aliases. Remove the leading hash
 * signs to enable.
 */
$sites = array (
  'developer.demo.in.external-dlb.sidbi-demo' => 'external-dlb.sidbi-demo.developer.demo.in',
  'developer.demo.in.external-dlb.spcbl-demo' => 'external-dlb.spcbl-demo.developer.demo.in',
  'developer.demo.in.idbi-demo' => 'idbi-demo.developer.demo.in',
  'developer.demo.in.apic-demo.partners' => 'apic-demo.partners.developer.demo.in',
  'developer.demo.in.apic-demo.sandbox' => 'apic-demo.sandbox.developer.demo.in',
  'developer.demo.in.devcustportal.test' => 'devcustportal.test.developer.demo.in',
  'developer.pronteff.com.devcustportal.tt' => 'devcustportal.tt.developer.pronteff.com',
  'developer.pronteff.com.devcustportal.portal' => 'devcustportal.portal.developer.pronteff.com',
  'developer.demo.in.devcustportal.sandbox' => 'devcustportal.sandbox.developer.demo.in',
  'developer.demo.in.devcustportal.csb-portal' => 'devcustportal.csb-portal.developer.demo.in',
  'developer.demo.in.csb-test-1' => 'csb-test-1.developer.demo.in',
  'developer.demo.in.csb-test-2' => 'csb-test-2.developer.demo.in',
);
