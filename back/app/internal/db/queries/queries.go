package db

const (
	CreateUserQuery     = `INSERT INTO users(id, name, password, email) VALUES ($1, $2 , $3, $4);`
	GetUserByIDQuery    = `SELECT * FROM users WHERE id = $1`
	GetUsersQuery       = `SELECT id, name, email FROM users`
	GetUserByEmailQuery = `SELECT * FROM users WHERE email = $1`
)
