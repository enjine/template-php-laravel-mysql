laravel_start:
	php artisan serve --host=0.0.0.0 --port=8000

mysql_start:
	docker compose up -d

mysql_stop:
	docker compose down

vite_start:
	npm run dev
