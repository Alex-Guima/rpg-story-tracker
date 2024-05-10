FROM golang:1.22.3-bookworm as dev
WORKDIR /app
COPY /app/go.mod /app/go.sum ./app

COPY /app /app

CMD ["go", "run", "."]