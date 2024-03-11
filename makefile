
start:
	@docker compose up -d
	@read -p "Enter theme name: " NAME; \
	cd wordpress/wp-content/themes/$$NAME && npm run dev

build: .env
	@docker compose up --build --force-recreate -d

.env:
	@cp .env.dev .env

up:
	@docker compose up -d

stop:
	@docker compose stop

restart:
	@docker compose restart

clean:
	@docker compose down --rmi all --volumes --remove-orphans

theme:
	@read -p "Enter theme name: " NAME; \
	cp -r ./template/theme ./wordpress/wp-content/themes/$$NAME && \
	cd wordpress/wp-content/themes/$$NAME && \
	npm install && npm run dev
