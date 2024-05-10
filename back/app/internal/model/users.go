package model

import (
	"database/sql"

	db "github.com/Alex-Guima/rpg-story-tracker/internal/db/queries"
	"golang.org/x/crypto/bcrypt"
)

type User struct {
	ID       string `json:"id"`
	Username string `json:"username"`
	Email    string `json:"email"`
	Password string `json:"password"`
}

func (user *User) HashPassword() error {
	bytes, err := bcrypt.GenerateFromPassword([]byte(user.Password), 10)
	if err != nil {
		return err
	}

	user.Password = string(bytes)
	return nil
}

func (user *User) UserExists(dbConn *sql.DB) bool {
	rows, err := dbConn.Query(db.GetUserByEmailQuery, user.Email)
	if err != nil || !rows.Next() {
		return false
	}

	return true

}
