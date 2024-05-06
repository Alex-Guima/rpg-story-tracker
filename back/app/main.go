package main

import (
	"github.com/Alex-Guima/rpg-story-tracker/internal/controller"
	"github.com/gin-gonic/gin"
)

func main() {
	router := gin.Default()
	router.GET("/users", controller.GetUsers)
	router.GET("/users/:id", controller.GetUserById)
	router.POST("/users", controller.PostUsers)
	router.Run("localhost:8080")
}
