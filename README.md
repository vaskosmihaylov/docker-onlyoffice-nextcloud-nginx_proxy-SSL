## Install NextCloud Hub + OnlyOffice + MariaDB + Nginx Proxy + Acme-companion Ubuntu 22.04 with Docker Compose

This repository provides a complete setup for integrating OnlyOffice Document Server with Nextcloud configured to use MariaDB using Nginx proxy and Docker's Let's Encrypt Nginx Proxy Companion containers.

## Requirements

* The latest version of Docker (can be downloaded here: [https://docs.docker.com/engine/installation/](https://docs.docker.com/engine/installation/))
* Docker compose (can be downloaded here: [https://docs.docker.com/compose/install/](https://docs.docker.com/compose/install/))


## Installation

1. Get the latest version of this repository running the command:

    ```
    git clone https://github.com/ONLYOFFICE/docker-onlyoffice-nextcloud
    cd docker-onlyoffice-nextcloud
    ```

2. Edit the configuration varaibles and Run Docker Compose:

    Edit NEXTCLOUD_TRUSTED_DOMAINS, JWT_SECRET, MYSQL_ROOT_PASSWORD, VIRTUAL_HOST, LETSENCRYPT_HOST, LETSENCRYPT_EMAIL in `docker-compose.yml`

    Edit MYSQL_PASSWORD in the `db.env`

    **Please note**: the action must be performed with **root** rights.

    ```
    docker-compose up -d
    ```

    **Please note**: you might need to wait a couple of minutes when all the containers are up and running after the above command.

3. Now launch the browser and enter the webserver address. The Nextcloud wizard webpage will be opened. Enter all the necessary data to complete the wizard.

4. Go to the project folder and run the `set_configuration.sh` script:

    **Please note**: the action must be performed with **root** rights.

    ```
    bash set_configuration.sh
    ```

Now you can enter Nextcloud and create a new document. It will be opened in ONLYOFFICE Document Server.

**Automated setup:**

The fully automated setup using a reverse proxy, a container for Let's Encrypt certificate handling, database, and Nextcloud is taken from the [Nextcloud Docker Examples](https://github.com/nextcloud/docker/tree/master/.examples/docker-compose/with-nginx-proxy/mariadb) and modified accordingly
## ONLYOFFICE Docs editions

Here we offer you to deploy Nextcloud with preconfigured free version of ONLYOFFICE Docs (Document Server). Note that there're commercial versions of it. 

**ONLYOFFICE Docs:**

* Community Edition (`onlyoffice-documentserver` package)

* Enterprise Edition (`onlyoffice-documentserver-ee` package)

The table below will help you make the right choice.

| Pricing and licensing | Community Edition | Enterprise Edition |
| ------------- | ------------- | ------------- |
| | [Get it now](https://www.onlyoffice.com/download.aspx?utm_source=github&utm_medium=cpc&utm_campaign=GitHubDockerNC)  | [Start Free Trial](https://www.onlyoffice.com/enterprise-edition-free.aspx?utm_source=github&utm_medium=cpc&utm_campaign=GitHubDockerNC)  |
| Cost  | FREE  | [Go to the pricing page](https://www.onlyoffice.com/enterprise-edition.aspx?utm_source=github&utm_medium=cpc&utm_campaign=GitHubDockerNC)  |
| Simultaneous connections | up to 20 maximum  | As in chosen pricing plan |
| Number of users | up to 20 recommended | As in chosen pricing plan |
| License | GNU AGPL v.3 | Proprietary |
| **Support** | **Community Edition** | **Enterprise Edition** | 
| Documentation | [Help Center](https://helpcenter.onlyoffice.com/server/docker/opensource/index.aspx) | [Help Center](https://helpcenter.onlyoffice.com/server/integration-edition/index.aspx) |
| Standard support | [GitHub](https://github.com/ONLYOFFICE/DocumentServer/issues) or paid | One year support included |
| Premium support | [Buy Now](https://www.onlyoffice.com/support.aspx?utm_source=github&utm_medium=cpc&utm_campaign=GitHubDockerNC) | [Buy Now](https://www.onlyoffice.com/support.aspx?utm_source=github&utm_medium=cpc&utm_campaign=GitHubDockerNC) |
| **Services** | **Community Edition** | **Enterprise Edition** |
| Conversion Service                | + | + |
| Document Builder Service          | + | + |
| **Interface** | **Community Edition** | **Enterprise Edition** |
| Tabbed interface                       | + | + |
| White Label                            | - | - |
| Integrated test example (node.js)*     | - | + |
| Mobile web editors | - | + |
| Access to pro features via desktop     | - | + |
| **Plugins & Macros** | **Community Edition** | **Enterprise Edition** |
| Plugins                           | + | + |
| Macros                            | + | + |
| **Collaborative capabilities** | **Community Edition** | **Enterprise Edition** |
| Two co-editing modes              | + | + |
| Comments                          | + | + |
| Built-in chat                     | + | + |
| Review and tracking changes       | + | + |
| Display modes of tracking changes | + | + |
| Version history                   | + | + |
| **Document Editor features** | **Community Edition** | **Enterprise Edition** |
| Font and paragraph formatting   | + | + |
| Object insertion                | + | + |
| Adding Content control          | - | + | 
| Editing Content control         | + | + | 
| Layout tools                    | + | + |
| Table of contents               | + | + |
| Navigation panel                | + | + |
| Mail Merge                      | + | + |
| Comparing Documents             | - | +* |
| **Spreadsheet Editor features** | **Community Edition** | **Enterprise Edition** |
| Font and paragraph formatting   | + | + |
| Object insertion                | + | + |
| Functions, formulas, equations  | + | + |
| Table templates                 | + | + |
| Pivot tables                    | + | + |
| Conditional formatting  for viewing | +** | +** |
| **Presentation Editor features** | **Community Edition** | **Enterprise Edition** |
| Font and paragraph formatting   | + | + |
| Object insertion                | + | + |
| Animations                      | + | + |
| Presenter mode                  | + | + |
| Notes                           | + | + |
| | [Get it now](https://www.onlyoffice.com/download.aspx?utm_source=github&utm_medium=cpc&utm_campaign=GitHubDockerNC)  | [Start Free Trial](https://www.onlyoffice.com/enterprise-edition-free.aspx?utm_source=github&utm_medium=cpc&utm_campaign=GitHubDockerNC)  |

\*  It's possible to add documents for comparison from your local drive, from URL and from Nextcloud storage.

\** Support for all conditions and gradient. Adding/Editing capabilities are coming soon

## Project Information

Official website: [https://www.onlyoffice.com/](https://www.onlyoffice.com/?utm_source=github&utm_medium=cpc&utm_campaign=GitHubDockerNC)

Code repository: [https://github.com/ONLYOFFICE/docker-onlyoffice-nextcloud](https://github.com/ONLYOFFICE/docker-onlyoffice-nextcloud "https://github.com/ONLYOFFICE/docker-onlyoffice-nextcloud")


## User Feedback and Support

If you have any problems with or questions about [ONLYOFFICE Document Server][2], please visit our official forum to find answers to your questions: [dev.onlyoffice.org][1] or you can ask and answer ONLYOFFICE development questions on [Stack Overflow][3].

[1]: http://dev.onlyoffice.org
[2]: https://github.com/ONLYOFFICE/DocumentServer
[3]: http://stackoverflow.com/questions/tagged/onlyoffice