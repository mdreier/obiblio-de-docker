# OpenBiblio German Docker Images

Docker images for [OpenBiblio-de](https://openbiblio.de/). Published on [DockerHub](https://hub.docker.com/r/mdreier3/openbiblio-de).

## Runtime configuration

| Environment variable | Mandatory | Description |
| -------------------- | --------- | ----------- |
| OBIB_HOST            | yes       | Database hostname                                                                            |
| OBIB_DATABASE        | yes       | Database name                                                                                |
| OBIB_USERNAME        | yes       | Database user name                                                                           |
| OBIB_PWD             | yes       | Database password                                                                            |
| MAIN_LOCALE          | no        | Default locale, `en` or `de` (default)                                                       |
| OBIB_CHARSET         | no        | Used [charset](https://www.php.net/manual/de/function.htmlspecialchars.php), default `utf-8` |

# Build configuration

| Build Argument | Allowed values                        | Description                                  |
| -------------- | ------------------------------------- | -------------------------------------------- |
| PHP_CONFIG     | `development`, `production` (default) | Use development or production config for PHP |