init:
	docker-compose build
	docker-compose up -d
	docker exec ermak-db bash /tmp/import.sh

stop:
	docker-compose down