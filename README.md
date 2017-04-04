# Academic Diligence Task

https://angeladuckworth.com/research/academic-diligence-task/

## Application Data

Per the [installation instructions][4], you will need to create the
`logs` folder and make it writable.

    cd DTMathShared
    mkdir logs
    chmod 777 logs

## Exposing Docker Service

Learn about [docker][3] and [docker-compose][2] for the benefits of containerization.

    docker-compose up -d

It's preferrable to setup a reverse proxy to your docker services
so that any middlware, such as SSL/TLS and Authorization/Access Control,
can be easily applied independent of the application configuration.

e.g. for [Apache][1]

```xml
ProxyRequests Off
<Location "/">
    ProxyPass "http://172.16.20.10/"
    ProxyPassReverse "http://172.16.20.10/"
</Location>
```

Alternatively, you may expose the host port directly by defining
`ports` within the nginx service inside `docker-compose.yml`

```yml
services:
    nginx:
        ports:
            # ---- Format: ----
            # [HOST-ADDR : ] HOST-PORT : DOCKER-PORT
            - "80:80"
```

[1]:https://httpd.apache.org/docs/2.4/mod/mod_proxy.html#proxypassreverse
[2]:https://docs.docker.com/compose/
[3]:https://docs.docker.com/
[4]:https://docs.google.com/document/d/1feaCN6wP_0NTt8ijQpoxu-8oGgKqT4vzAetHIuPTtL4/edit
