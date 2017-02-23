---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Compañía

Representa una compañía registrada en el sistema.
<!-- START_e0e3fd419528e33139aab0cffcfb8f5d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/companias" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/companias",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "total": 2,
    "per_page": 10,
    "current_page": 1,
    "last_page": 1,
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 2,
    "data": [
        {
            "id": 1,
            "nombre": "Repsol YPF",
            "descripcion": null,
            "activo": 1,
            "fecha_creacion": "2016-05-04 14:11:03",
            "fecha_actualizacion": "2016-11-25 22:06:50",
            "creado_por_id": null,
            "actualizado_por_id": 3,
            "acronimo": "isl"
        },
        {
            "id": 2,
            "nombre": "Shell",
            "descripcion": null,
            "activo": 1,
            "fecha_creacion": "2016-05-04 17:20:32",
            "fecha_actualizacion": "2016-07-22 16:44:55",
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "acronimo": "sai"
        }
    ]
}
```

### HTTP Request
`GET api/companias`

`HEAD api/companias`


<!-- END_e0e3fd419528e33139aab0cffcfb8f5d -->

<!-- START_63fde16bb47fbe4e3edd031ba22fa6ae -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/companias/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/companias/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/companias/create`

`HEAD api/companias/create`


<!-- END_63fde16bb47fbe4e3edd031ba22fa6ae -->

<!-- START_f50a776db1580bf0fc3baa76cca52e1a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/companias" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/companias",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/companias`


<!-- END_f50a776db1580bf0fc3baa76cca52e1a -->

<!-- START_275df12ec5c5ea42b9ec8e4aff0395d4 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/companias/{compania}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/companias/{compania}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "nombre": "Repsol YPF",
    "descripcion": null,
    "activo": 1,
    "fecha_creacion": "2016-05-04 14:11:03",
    "fecha_actualizacion": "2016-11-25 22:06:50",
    "creado_por_id": null,
    "actualizado_por_id": 3,
    "acronimo": "isl"
}
```

### HTTP Request
`GET api/companias/{compania}`

`HEAD api/companias/{compania}`


<!-- END_275df12ec5c5ea42b9ec8e4aff0395d4 -->

<!-- START_10cce0c0e2d6025b541f8e0e47b1b048 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/companias/{compania}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/companias/{compania}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/companias/{compania}/edit`

`HEAD api/companias/{compania}/edit`


<!-- END_10cce0c0e2d6025b541f8e0e47b1b048 -->

<!-- START_3a569907f5736ce81ce2e7721affba9f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/companias/{compania}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/companias/{compania}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/companias/{compania}`

`PATCH api/companias/{compania}`


<!-- END_3a569907f5736ce81ce2e7721affba9f -->

<!-- START_6b0a3b8225061acb4766e2a49faed8db -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/companias/{compania}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/companias/{compania}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/companias/{compania}`


<!-- END_6b0a3b8225061acb4766e2a49faed8db -->

#Equipo

Representa un equipo físico que se monitorea mediante el sistema.
<!-- START_3f1255fc6d077a29a19205097e1ae666 -->
## GET Equipos
Se obtiene un listado de todos los equipos registrados en el sistema.

Parametros: asdf asdfas

> Example request:

```bash
curl -X GET "http://localhost/api/equipos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/equipos",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "total": 4,
    "per_page": 10,
    "current_page": 1,
    "last_page": 1,
    "next_page_url": null,
    "prev_page_url": null,
    "from": 1,
    "to": 4,
    "data": [
        {
            "id": 1,
            "nombre": "001",
            "modelo": "xt100",
            "tel": null,
            "email": null,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-10-31 11:01:14.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-11-25 22:06:19.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "personas": [
                {
                    "id": 1,
                    "compania_id": 1,
                    "nombre": "Santiago",
                    "apellido": "Semhan",
                    "telefono_principal": "358904385903845",
                    "telefono_secundario": null,
                    "cargo": "adminer",
                    "fecha_creacion": {
                        "date": "2016-05-03 11:21:36.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "fecha_actualizacion": {
                        "date": "2016-06-30 13:33:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "activo": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 3,
                    "sexo": "M"
                }
            ],
            "compania": {
                "id": 1,
                "nombre": "Repsol YPF",
                "descripcion": null,
                "activo": 1,
                "fecha_creacion": "2016-05-04 14:11:03",
                "fecha_actualizacion": "2016-11-25 22:06:50",
                "creado_por_id": null,
                "actualizado_por_id": 3,
                "acronimo": "isl"
            }
        },
        {
            "id": 2,
            "nombre": "prueba",
            "modelo": "asd1",
            "tel": null,
            "email": null,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-09-29 12:45:18.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-10-26 16:58:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "personas": [
                {
                    "id": 1,
                    "compania_id": 1,
                    "nombre": "Santiago",
                    "apellido": "Semhan",
                    "telefono_principal": "358904385903845",
                    "telefono_secundario": null,
                    "cargo": "adminer",
                    "fecha_creacion": {
                        "date": "2016-05-03 11:21:36.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "fecha_actualizacion": {
                        "date": "2016-06-30 13:33:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "activo": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 3,
                    "sexo": "M"
                },
                {
                    "id": 2,
                    "compania_id": 1,
                    "nombre": "admin",
                    "apellido": "admin",
                    "telefono_principal": "32432",
                    "telefono_secundario": null,
                    "cargo": "admin",
                    "fecha_creacion": {
                        "date": "2016-05-03 11:40:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "fecha_actualizacion": {
                        "date": "2016-05-03 11:40:32.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "activo": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 3,
                    "sexo": "M"
                }
            ],
            "compania": {
                "id": 2,
                "nombre": "Shell",
                "descripcion": null,
                "activo": 1,
                "fecha_creacion": "2016-05-04 17:20:32",
                "fecha_actualizacion": "2016-07-22 16:44:55",
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "acronimo": "sai"
            }
        },
        {
            "id": 3,
            "nombre": "15",
            "modelo": "xt100",
            "tel": null,
            "email": null,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-05-04 23:00:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-12-01 17:18:54.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "personas": [
                {
                    "id": 1,
                    "compania_id": 1,
                    "nombre": "Santiago",
                    "apellido": "Semhan",
                    "telefono_principal": "358904385903845",
                    "telefono_secundario": null,
                    "cargo": "adminer",
                    "fecha_creacion": {
                        "date": "2016-05-03 11:21:36.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "fecha_actualizacion": {
                        "date": "2016-06-30 13:33:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "activo": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 3,
                    "sexo": "M"
                }
            ],
            "compania": {
                "id": 1,
                "nombre": "Repsol YPF",
                "descripcion": null,
                "activo": 1,
                "fecha_creacion": "2016-05-04 14:11:03",
                "fecha_actualizacion": "2016-11-25 22:06:50",
                "creado_por_id": null,
                "actualizado_por_id": 3,
                "acronimo": "isl"
            }
        },
        {
            "id": 6,
            "nombre": "280",
            "modelo": "280",
            "tel": null,
            "email": null,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-05-30 23:45:25.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-07-13 15:08:47.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "creado_por_id": 17,
            "actualizado_por_id": 15,
            "personas": [
                {
                    "id": 1,
                    "compania_id": 1,
                    "nombre": "Santiago",
                    "apellido": "Semhan",
                    "telefono_principal": "358904385903845",
                    "telefono_secundario": null,
                    "cargo": "adminer",
                    "fecha_creacion": {
                        "date": "2016-05-03 11:21:36.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "fecha_actualizacion": {
                        "date": "2016-06-30 13:33:49.000000",
                        "timezone_type": 3,
                        "timezone": "UTC"
                    },
                    "activo": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 3,
                    "sexo": "M"
                }
            ],
            "compania": {
                "id": 2,
                "nombre": "Shell",
                "descripcion": null,
                "activo": 1,
                "fecha_creacion": "2016-05-04 17:20:32",
                "fecha_actualizacion": "2016-07-22 16:44:55",
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "acronimo": "sai"
            }
        }
    ]
}
```

### HTTP Request
`GET api/equipos`

`HEAD api/equipos`


<!-- END_3f1255fc6d077a29a19205097e1ae666 -->

<!-- START_77d88022e88a00e6fc468da21afaf010 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/equipos/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/equipos/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/equipos/create`

`HEAD api/equipos/create`


<!-- END_77d88022e88a00e6fc468da21afaf010 -->

<!-- START_38412664114ccdd37f1bb95919717b41 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/equipos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/equipos",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/equipos`


<!-- END_38412664114ccdd37f1bb95919717b41 -->

<!-- START_5cc36cea433da8f9466ffcca32c31510 -->
## GET Equipo
Obtiene un equipo específico

> Example request:

```bash
curl -X GET "http://localhost/api/equipos/{equipo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/equipos/{equipo}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "nombre": "001",
    "modelo": "xt100",
    "tel": null,
    "email": null,
    "activo": 1,
    "fecha_creacion": {
        "date": "2016-10-31 11:01:14.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "fecha_actualizacion": {
        "date": "2016-11-25 22:06:19.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "creado_por_id": 3,
    "actualizado_por_id": 3
}
```

### HTTP Request
`GET api/equipos/{equipo}`

`HEAD api/equipos/{equipo}`


<!-- END_5cc36cea433da8f9466ffcca32c31510 -->

<!-- START_85382d6c3a5dbb81523f65393d2e353f -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/equipos/{equipo}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/equipos/{equipo}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/equipos/{equipo}/edit`

`HEAD api/equipos/{equipo}/edit`


<!-- END_85382d6c3a5dbb81523f65393d2e353f -->

<!-- START_d4232f9d29867a3ad915a9e9d90db58d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/equipos/{equipo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/equipos/{equipo}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/equipos/{equipo}`

`PATCH api/equipos/{equipo}`


<!-- END_d4232f9d29867a3ad915a9e9d90db58d -->

<!-- START_9914ff0edc402b63abff3bff0d988124 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/equipos/{equipo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/equipos/{equipo}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/equipos/{equipo}`


<!-- END_9914ff0edc402b63abff3bff0d988124 -->

<!-- START_18c94fddc52aa02d22cdc086b47caa03 -->
## api/equipos/{equipo}/personas

> Example request:

```bash
curl -X GET "http://localhost/api/equipos/{equipo}/personas" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/equipos/{equipo}/personas",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "nombre": "001",
    "modelo": "xt100",
    "tel": null,
    "email": null,
    "activo": 1,
    "fecha_creacion": {
        "date": "2016-10-31 11:01:14.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "fecha_actualizacion": {
        "date": "2016-11-25 22:06:19.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "creado_por_id": 3,
    "actualizado_por_id": 3,
    "personas": [
        {
            "id": 1,
            "compania_id": 1,
            "nombre": "Santiago",
            "apellido": "Semhan",
            "telefono_principal": "358904385903845",
            "telefono_secundario": null,
            "cargo": "adminer",
            "fecha_creacion": {
                "date": "2016-05-03 11:21:36.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-06-30 13:33:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "activo": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "sexo": "M",
            "usuario": {
                "id": 3,
                "username": "santiago.semhan",
                "username_canonical": "santiago.semhan",
                "email": "santiagosemhan@gmail.com",
                "email_canonical": "santiagosemhan@gmail.com",
                "enabled": 1,
                "salt": "3bq05rh0cxusw4w8og40cc0osko0wcg",
                "password": "$2y$13$3bq05rh0cxusw4w8og40cOkJX2KVSjpjtAyR9MWBK5NhOeAYKnK1u",
                "last_login": "2017-02-10 11:45:32",
                "locked": 0,
                "expires_at": null,
                "confirmation_token": null,
                "password_requested_at": null,
                "roles": "a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}",
                "credentials_expire_at": null
            }
        }
    ]
}
```

### HTTP Request
`GET api/equipos/{equipo}/personas`

`HEAD api/equipos/{equipo}/personas`


<!-- END_18c94fddc52aa02d22cdc086b47caa03 -->

<!-- START_9b36e70c796033f26105205ad40bda9a -->
## GET Historico

Obtiene el conjunto de puntos que representan las variables del equipo en un rango de fechas determinado

> Example request:

```bash
curl -X GET "http://localhost/api/equipos/{equipo}/historico" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/equipos/{equipo}/historico",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    "aca tengo que mandar el historico de puntos"
]
```

### HTTP Request
`GET api/equipos/{equipo}/historico`

`HEAD api/equipos/{equipo}/historico`


<!-- END_9b36e70c796033f26105205ad40bda9a -->

#Intervencion

Representa las intervenciones que se han realizado en los equipos registrados en el sistema.
<!-- START_a67f5f412bbf043149ea585d80e6afdf -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/intervenciones" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/intervenciones",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "total": 29,
    "per_page": 10,
    "current_page": 1,
    "last_page": 3,
    "next_page_url": "http:\/\/localhostapi\/intervenciones?page=2",
    "prev_page_url": null,
    "from": 1,
    "to": 10,
    "data": [
        {
            "id": 1,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-05-03 00:00:00",
            "accion": 0,
            "activo": 1,
            "fecha_creacion": "2016-06-08 01:11:11",
            "fecha_actualizacion": "2016-06-08 01:11:11",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        },
        {
            "id": 2,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-06-01 00:00:00",
            "accion": 1,
            "activo": 1,
            "fecha_creacion": "2016-06-08 01:12:03",
            "fecha_actualizacion": "2016-06-08 01:12:03",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        },
        {
            "id": 3,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-06-04 00:00:00",
            "accion": 0,
            "activo": 1,
            "fecha_creacion": "2016-06-08 01:12:44",
            "fecha_actualizacion": "2016-06-08 01:12:44",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        },
        {
            "id": 4,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-06-06 00:00:00",
            "accion": 1,
            "activo": 1,
            "fecha_creacion": "2016-06-08 01:21:28",
            "fecha_actualizacion": "2016-06-08 01:21:28",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        },
        {
            "id": 5,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-06-06 00:00:00",
            "accion": 0,
            "activo": 1,
            "fecha_creacion": "2016-06-08 01:21:33",
            "fecha_actualizacion": "2016-06-08 01:21:33",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        },
        {
            "id": 6,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-06-06 00:00:00",
            "accion": 1,
            "activo": 1,
            "fecha_creacion": "2016-06-08 01:21:59",
            "fecha_actualizacion": "2016-06-08 01:21:59",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        },
        {
            "id": 7,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-06-08 00:00:00",
            "accion": 0,
            "activo": 1,
            "fecha_creacion": "2016-06-08 23:52:15",
            "fecha_actualizacion": "2016-06-08 23:52:15",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        },
        {
            "id": 8,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-06-09 00:00:00",
            "accion": 1,
            "activo": 1,
            "fecha_creacion": "2016-06-09 01:07:14",
            "fecha_actualizacion": "2016-06-09 01:07:14",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        },
        {
            "id": 10,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-06-09 00:00:00",
            "accion": 0,
            "activo": 1,
            "fecha_creacion": "2016-06-09 01:10:18",
            "fecha_actualizacion": "2016-06-09 01:10:18",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        },
        {
            "id": 11,
            "equipo_id": 3,
            "pozo_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "fecha": "2016-06-09 00:00:00",
            "accion": 1,
            "activo": 1,
            "fecha_creacion": "2016-06-09 01:11:38",
            "fecha_actualizacion": "2016-06-09 01:11:38",
            "pozo": {
                "id": 1,
                "yacimiento_id": 1,
                "creado_por_id": 3,
                "actualizado_por_id": 3,
                "nombre": "pozo 1",
                "acronimo": "pz1",
                "profundidad": "2",
                "sistema_extraccion": "PcP",
                "latitud": "-46.5584094",
                "longitud": "-67.6271776",
                "activo": 1,
                "fecha_creacion": "2016-05-28 16:21:38",
                "fecha_actualizacion": "2016-08-26 13:48:57",
                "yacimiento": {
                    "id": 1,
                    "creado_por_id": 3,
                    "actualizado_por_id": 17,
                    "nombre": "Prueba",
                    "acronimo": "prb",
                    "activo": 1,
                    "fecha_creacion": "2016-05-28 16:14:43",
                    "fecha_actualizacion": "2016-05-30 21:06:58",
                    "localidad_id": 1,
                    "compania_id": 1
                }
            }
        }
    ]
}
```

### HTTP Request
`GET api/intervenciones`

`HEAD api/intervenciones`


<!-- END_a67f5f412bbf043149ea585d80e6afdf -->

<!-- START_fc4530cf36df8264336e0b9fe6f13d08 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/intervenciones/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/intervenciones/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/intervenciones/create`

`HEAD api/intervenciones/create`


<!-- END_fc4530cf36df8264336e0b9fe6f13d08 -->

<!-- START_e31671474615cd34aba01209ba7c329e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/intervenciones" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/intervenciones",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/intervenciones`


<!-- END_e31671474615cd34aba01209ba7c329e -->

<!-- START_03494188ff38a89de3a72ac47dbfec18 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/intervenciones/{intervencion}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/intervenciones/{intervencion}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "equipo_id": 3,
    "pozo_id": 1,
    "creado_por_id": 3,
    "actualizado_por_id": 3,
    "fecha": "2016-05-03 00:00:00",
    "accion": 0,
    "activo": 1,
    "fecha_creacion": "2016-06-08 01:11:11",
    "fecha_actualizacion": "2016-06-08 01:11:11"
}
```

### HTTP Request
`GET api/intervenciones/{intervencion}`

`HEAD api/intervenciones/{intervencion}`


<!-- END_03494188ff38a89de3a72ac47dbfec18 -->

<!-- START_3fc730843f64c9eee05f73ad4ac2fd30 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/intervenciones/{intervencion}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/intervenciones/{intervencion}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/intervenciones/{intervencion}/edit`

`HEAD api/intervenciones/{intervencion}/edit`


<!-- END_3fc730843f64c9eee05f73ad4ac2fd30 -->

<!-- START_42e6575c01a360d13d76a8c707ebc184 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/intervenciones/{intervencion}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/intervenciones/{intervencion}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/intervenciones/{intervencion}`

`PATCH api/intervenciones/{intervencion}`


<!-- END_42e6575c01a360d13d76a8c707ebc184 -->

<!-- START_7896b5a0d1d2104c0598f1d2d9586dfb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/intervenciones/{intervencion}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/intervenciones/{intervencion}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/intervenciones/{intervencion}`


<!-- END_7896b5a0d1d2104c0598f1d2d9586dfb -->

#Novedad

Representa las novedades que se han registrado para el equipo físico que se monitorea mediante el sistema.
<!-- START_7535c25baae6a72f70cc6b792195d23e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/novedades" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/novedades",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "total": 11,
    "per_page": 10,
    "current_page": 1,
    "last_page": 2,
    "next_page_url": "http:\/\/localhostapi\/novedades?page=2",
    "prev_page_url": null,
    "from": 1,
    "to": 10,
    "data": [
        {
            "id": 1,
            "intervencion_id": 18,
            "inicio": {
                "date": "2016-07-03 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": {
                "date": "2016-08-02 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "observaciones": "asdfad",
            "generado": 0,
            "cantidad_alertas": 2,
            "maniobra_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-07-28 20:55:39.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-08-01 20:27:56.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 0,
            "promedio_uh": 0
        },
        {
            "id": 2,
            "intervencion_id": 18,
            "inicio": {
                "date": "2016-07-03 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": {
                "date": "2016-08-03 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "observaciones": "asdfad",
            "generado": 0,
            "cantidad_alertas": 2,
            "maniobra_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-07-28 21:01:06.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-08-01 20:25:49.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 0,
            "promedio_uh": 0
        },
        {
            "id": 3,
            "intervencion_id": 18,
            "inicio": {
                "date": "2016-07-01 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": {
                "date": "2016-08-04 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "observaciones": null,
            "generado": 0,
            "cantidad_alertas": 1,
            "maniobra_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-07-28 21:38:20.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-08-01 20:35:38.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 0,
            "promedio_uh": 0
        },
        {
            "id": 4,
            "intervencion_id": 18,
            "inicio": {
                "date": "2016-07-01 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": {
                "date": "2016-08-01 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "observaciones": null,
            "generado": 0,
            "cantidad_alertas": 1,
            "maniobra_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-07-28 21:43:01.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-08-01 20:10:16.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 0,
            "promedio_uh": 0
        },
        {
            "id": 5,
            "intervencion_id": 18,
            "inicio": {
                "date": "2016-07-03 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": {
                "date": "2016-08-01 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "observaciones": "asdfad",
            "generado": 1,
            "cantidad_alertas": 2,
            "maniobra_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-07-28 21:59:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-08-01 20:09:15.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 0,
            "promedio_uh": 0
        },
        {
            "id": 6,
            "intervencion_id": 18,
            "inicio": {
                "date": "2016-07-01 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": {
                "date": "2016-08-01 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "observaciones": "puto el que lee",
            "generado": 0,
            "cantidad_alertas": null,
            "maniobra_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-07-30 17:18:30.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-08-01 20:33:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 1.2,
            "promedio_uh": 1.43
        },
        {
            "id": 7,
            "intervencion_id": 18,
            "inicio": {
                "date": "2016-08-01 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": null,
            "observaciones": null,
            "generado": 0,
            "cantidad_alertas": null,
            "maniobra_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-08-05 15:25:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-08-05 15:25:04.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 12,
            "promedio_uh": 21
        },
        {
            "id": 8,
            "intervencion_id": 23,
            "inicio": {
                "date": "2016-09-01 01:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": {
                "date": "2016-09-08 01:02:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "observaciones": null,
            "generado": 0,
            "cantidad_alertas": null,
            "maniobra_id": 1,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-09-14 11:31:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-09-14 11:31:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 12,
            "promedio_uh": 12
        },
        {
            "id": 9,
            "intervencion_id": 23,
            "inicio": {
                "date": "2016-09-01 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": {
                "date": "2016-10-04 01:04:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "observaciones": null,
            "generado": 0,
            "cantidad_alertas": null,
            "maniobra_id": 2,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-09-14 11:58:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-09-14 11:58:32.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 12,
            "promedio_uh": 23
        },
        {
            "id": 10,
            "intervencion_id": 23,
            "inicio": {
                "date": "2016-09-08 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fin": null,
            "observaciones": "hjj",
            "generado": 0,
            "cantidad_alertas": null,
            "maniobra_id": 2,
            "creado_por_id": 3,
            "actualizado_por_id": 3,
            "activo": 1,
            "fecha_creacion": {
                "date": "2016-09-14 11:58:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "fecha_actualizacion": {
                "date": "2016-09-14 11:58:51.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "parcial_maniobra": 12,
            "promedio_uh": 456
        }
    ]
}
```

### HTTP Request
`GET api/novedades`

`HEAD api/novedades`


<!-- END_7535c25baae6a72f70cc6b792195d23e -->

<!-- START_1504e34122979150cf0a953f788dd445 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/novedades/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/novedades/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/novedades/create`

`HEAD api/novedades/create`


<!-- END_1504e34122979150cf0a953f788dd445 -->

<!-- START_9086dd5a96c8e04bcfc37e86636302f1 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/novedades" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/novedades",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/novedades`


<!-- END_9086dd5a96c8e04bcfc37e86636302f1 -->

<!-- START_ccf8bf7f0d862107cc15e2c89527148e -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/novedades/{novedad}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/novedades/{novedad}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "intervencion_id": 18,
    "inicio": {
        "date": "2016-07-03 00:00:00.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "fin": {
        "date": "2016-08-02 00:00:00.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "observaciones": "asdfad",
    "generado": 0,
    "cantidad_alertas": 2,
    "maniobra_id": 1,
    "creado_por_id": 3,
    "actualizado_por_id": 3,
    "activo": 1,
    "fecha_creacion": {
        "date": "2016-07-28 20:55:39.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "fecha_actualizacion": {
        "date": "2016-08-01 20:27:56.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "parcial_maniobra": 0,
    "promedio_uh": 0
}
```

### HTTP Request
`GET api/novedades/{novedad}`

`HEAD api/novedades/{novedad}`


<!-- END_ccf8bf7f0d862107cc15e2c89527148e -->

<!-- START_bd4bba65ad88061623687c477bfeb77c -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/novedades/{novedad}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/novedades/{novedad}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/novedades/{novedad}/edit`

`HEAD api/novedades/{novedad}/edit`


<!-- END_bd4bba65ad88061623687c477bfeb77c -->

<!-- START_429f3be68de6fade55e83549cd7491de -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/novedades/{novedad}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/novedades/{novedad}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/novedades/{novedad}`

`PATCH api/novedades/{novedad}`


<!-- END_429f3be68de6fade55e83549cd7491de -->

<!-- START_1a4b84dacd2c49920ce65ac9d5a363bd -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/novedades/{novedad}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/novedades/{novedad}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/novedades/{novedad}`


<!-- END_1a4b84dacd2c49920ce65ac9d5a363bd -->

#_Default

Métodos que brindan información general de la api.
<!-- START_c045f5a7ad19e8f2101aadcf53933c98 -->
## api/ping

> Example request:

```bash
curl -X GET "http://localhost/api/ping" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/ping",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "ack": 1487819510
}
```

### HTTP Request
`GET api/ping`

`HEAD api/ping`


<!-- END_c045f5a7ad19e8f2101aadcf53933c98 -->

