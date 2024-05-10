package controller

import (
	"database/sql"
	"net/http"

	db "github.com/Alex-Guima/rpg-story-tracker/internal/db/queries"
	"github.com/Alex-Guima/rpg-story-tracker/internal/model"
	"github.com/gin-gonic/gin"
	"github.com/google/uuid"
	_ "github.com/jackc/pgx/v5/stdlib"
)

var dbConn *sql.DB

func GetUsers(c *gin.Context) {
	users, err := dbConn.Query(db.GetUsersQuery)

	if err != nil {
		c.IndentedJSON(http.StatusNotFound, gin.H{"message": "User does not exist"})
	}

	c.IndentedJSON(http.StatusFound, users)
}
func PostUsers(c *gin.Context) {
	user := &model.User{}

	if err := c.BindJSON(user); err != nil {
		c.IndentedJSON(http.StatusInternalServerError, gin.H{"message": "User already exists"})
	}
	user_id, err := uuid.NewRandom()
	if err != nil {
		c.IndentedJSON(http.StatusInternalServerError, gin.H{"message": "Error while generating UUID"})
	}
	user.HashPassword()
	_, err = dbConn.Query(db.CreateUserQuery, user_id, user.Username, user.Password, user.Email)

	if err != nil {
		c.IndentedJSON(http.StatusInternalServerError, gin.H{"message": "User already exists"})
	}
	c.IndentedJSON(http.StatusCreated, user)
}

func GetUserById(c *gin.Context) {
	id := c.Param("id")

	user, err := dbConn.Query(db.GetUserByIDQuery, id)

	if err != nil {
		c.IndentedJSON(http.StatusNotFound, gin.H{"message": "user not found"})
	}

	c.IndentedJSON(http.StatusFound, user)
}
