package api

import (
	"github.com/Alex-Guima/rpg-story-tracker/internal/controller"
	"github.com/gin-gonic/gin"
)

// func WithDB(fn func(c *gin.Context, db *sql.DB) error, db *sql.DB) func(c *gin.Context) error {
// 	return func(c *gin.Context) error {
// 		return fn(c, db)
// 	}
// }

func httpServer() *gin.Engine {
	engine := gin.Default()
	api := engine.Group("/")

	api.GET("/users", controller.GetUsers)
	api.GET("/users/{id}", controller.GetUserById)
	api.POST("/users", controller.PostUsers)
	return engine
}
