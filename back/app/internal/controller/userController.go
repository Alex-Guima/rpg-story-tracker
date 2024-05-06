package controller

import (
	"net/http"

	"github.com/Alex-Guima/rpg-story-tracker/internal/model"
	"github.com/gin-gonic/gin"
)

func GetUsers(c *gin.Context) {
	c.IndentedJSON(http.StatusOK, model.Users)
}

func PostUsers(c *gin.Context) {
	var newUser model.User

	if err := c.BindJSON(&newUser); err != nil {
		return
	}

	model.Users = append(model.Users, newUser)
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
