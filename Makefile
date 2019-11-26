build:
	docker-compose build
up:
	docker-compose up -d
init:
    docker-compose build
    docker-compose up -d
rebuild:
	docker-compose build —no-cache
stop:
	docker-compose stop
down:
	docker-compose down