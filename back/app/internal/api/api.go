package api

import (
	"database/sql"
	"os"

	"github.com/Alex-Guima/rpg-story-tracker/internal/config"
	"github.com/Alex-Guima/rpg-story-tracker/internal/db"
	"github.com/apex/log"
	"github.com/gin-gonic/gin"
	_ "github.com/jackc/pgx/v5/stdlib"
)

var server *gin.Engine

func StartServer() {
	conn, err := sql.Open("pgx", os.Getenv("DATABASE_URL"))
	if err != nil {
		log.WithField("reason", err.Error()).Fatal("Db connection error occurred")
	}
	defer conn.Close()

	runMigration := config.Config[config.RUN_MIGRATION]
	dbName := config.Config[config.POSTGRES_DB]
	port := config.Config[config.SERVER_PORT]

	if runMigration == "true" && conn != nil {
		if err := db.Migrate(conn, dbName); err != nil {
			log.WithField("reason", err.Error()).Fatal("db migratioon failed")
		}
	}

	server = httpServer()
	serverErr := server.Run("0.0.0.0:" + port)

	if serverErr != nil {
		log.WithField("reason", serverErr.Error()).Fatal("Server Error")
	}
}
