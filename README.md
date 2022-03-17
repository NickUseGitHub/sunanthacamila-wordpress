## Get started
> Ref: https://hub.docker.com/_/wordpress?tab=description

## Backup and restore wordpress

### Backup and restore database

#### Via docker container
```
cat <YOUR_PATH_FILE> | docker exec -i <CONTAINER_ID> /usr/bin/mysql -u root --default-character-set=utf8mb4 --user="<DB_USERNAME>" --password="<DB_PASSWORD>" -f <DB_NAME>
```

# Bugs

### wordpress home url redirects to localhost 

![https://imgur.com/GLMjeSj](https://imgur.com/GLMjeSj.jpg)

> Ref: [https://wordpress.org/support/topic/wordpress-home-url-redirects-to-localhost/](https://wordpress.org/support/topic/wordpress-home-url-redirects-to-localhost/)
