# Pilot App

## Instalación
1. Clonar el repositorio
    ```bash
    git clone https://github.com/jonagoldman/laravel-api.git
    ```
2. Navegar dentro de la nueva carpeta
    ```bash
    cd laravel-api
    ```
3. Requerir dependencias
    ```bash
    composer update
    ```
4. Crear archivo .env local
    ```bash
    cp .env.example .env
    ```
5. Correr contenedor desprendido
    ```bash
    ./vendor/bin/sail up -d
    ```
6. Generar una clave
    ```bash
    ./vendor/bin/sail artisan key:generate
    ```
7. Migrar base de datos
    ```bash
    ./vendor/bin/sail artisan migrate:fresh
    ```

## Postman

[Colleccion POSTMAN](https://www.postman.com/orvital/workspace/playground/collection/252628-0c17d865-dc3d-41f3-ad3f-c464ad271389?action=share&creator=252628&active-environment=252628-f4f23439-0187-47bc-95cb-081499ce0337)

[<img src="https://run.pstmn.io/button.svg" alt="Run In Postman" style="width: 128px; height: 32px;">](https://app.getpostman.com/run-collection/252628-0c17d865-dc3d-41f3-ad3f-c464ad271389?action=collection%2Ffork&source=rip_markdown&collection-url=entityId%3D252628-0c17d865-dc3d-41f3-ad3f-c464ad271389%26entityType%3Dcollection%26workspaceId%3Da148ecd2-f327-4d92-ab3c-9d980895129c)
