# About

Some ideas/concepts grabbed from the [Roots theme](http://roots.io). 

WordPress development is often hard to manage. The idea with this structure is:

* To enable new devs to easily setup a dev env (`bin/setup`)
* Optimized development loop with `bin/watch`
* Dependency management with Composer
* Reduce git churn by including WordPress + Plugins as depdendencies that are not commited to the repository
* Easily update production envoirnment via `bin/update`

# Installation

Make sure you have the following installed.

* brew
* git
* composer
* wp-cli
* npm
* grunt

These are all installed for you if you use this [dotfile config](https://github.com/iloveitaly/dotfiles).

## SSH Key Installation on Remote Server

```bash
cat ~/.ssh/id_rsa.pub | ssh user@domain.com 'mkdir ~/.ssh; touch ~/.ssh/authorized_keys; cat >> ~/.ssh/authorized_keys'
```

# Tools / References

* https://github.com/fancyguy/webroot-installer
* http://wpackagist.org
* http://roots.io/wordpress-plugins-with-composer/
* http://composer.rarst.net
* http://76design.com/bootstrapping-wordpress-with-composer/
* https://github.com/Tarendai/composerpress - create a composer.json from an existing wordpress install
* http://wordpress.tv/2013/12/13/andrey-rarst-savchenko-better-site-stacks-with-composer/

# Database

You might have issues connecting to MySQL:

http://surgeworks.com/blog/general/changing-mysql-socket-to-fix-error-establishing-a-database-connection-error-in-wordpress

# Installation

Run `bin/setup`. You'll get a WP installation with the following credentials:

Email: admin@domain.com  
Username: admin  
Password: password  

# Pushing Updates

You'll need customize `bin/update` with credentials specific to your site. After you've done that, running:

```bash
bin/update
```

Will push site changes to staging and running:

```bash
bin/update production
```

Will push changes to production.
