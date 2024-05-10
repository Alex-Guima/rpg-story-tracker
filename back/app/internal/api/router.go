package api

import (
	"github.com/Alex-Guima/rpg-story-tracker/internal/controller"
	"github.com/gin-gonic/gin"
)

func httpServer() *gin.Engine {
	engine := gin.Default()
	api := engine.Group("/")

	api.GET("/users", controller.GetUsers)
	api.GET("/users/{id}", controller.GetUserById)
	api.POST("/users", controller.PostUsers)
	return engine
}
