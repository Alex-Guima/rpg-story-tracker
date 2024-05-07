package controller

import (
	"database/sql"
	"fmt"
	"net/http"
	"os"

	"github.com/Alex-Guima/rpg-story-tracker/internal/model"
	"github.com/gin-gonic/gin"
	_ "github.com/jackc/pgx/v5/stdlib"
)

func openDbConnection() *sql.DB {
	Db, err := sql.Open("pgx", os.Getenv("DATABASE_URL"))
	if err != nil {
		fmt.Fprintf(os.Stderr, "Unable to open DB connection")
		os.Exit(1)
	}

	return Db
}

func GetUsers(c *gin.Context) {
	c.IndentedJSON(http.StatusOK, model.Users)
}

func PostUsers(c *gin.Context) {
	Db := openDbConnection()
	var newUser model.User
	if err := c.BindJSON(&newUser); err != nil {
		return
	}

	defer Db.Close()

	Db.Exec("INSERT INTO users (username, email, password) VALUES (?, ?, ?)", newUser.Username, newUser.Email, newUser.Password)

	c.IndentedJSON(http.StatusCreated, newUser)
}

func GetUserById(c *gin.Context) {
	id := c.Param("id")

	for _, u := range model.Users {
		if u.ID == id {
			c.IndentedJSON(http.StatusOK, u)
			return
		}
	}

	c.IndentedJSON(http.StatusNotFound, gin.H{"message": "user not found"})
}
